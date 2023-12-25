$(document).ready(function() {
    function loadNotesTable() {
        $.ajax({
            url: "./load_notes.php",
            type: "POST",
            success: function(data) {
                $('#notes-table').html(data);
            }
        });
    }

    loadNotesTable();

    $('#add-note').click(function(e) {
        e.preventDefault();
        if ($('#note-title').val() == "" || $('#note-description').val() == "") {
            alert('All Fields are Required');
        } else {
            let title = $('#note-title').val();
            let description = $('#note-description').val();
            $.ajax({
                url: "./_note.php",
                type: "POST", 
                data: {note_title: title, note_description: description},
                success: function(data) {
                    $('#add-note-form').trigger('reset');
                    if (data == 1) {
                        alert("Note added");
                        loadNotesTable();
                    } else {
                        alert("Failed");
                    }
                }
            });
        }
    });

    // Edit Note
    $(document).on('click', '.edit-note-btn', function() {
        let id = $(this).data("edit-id");
        $.ajax({
            url: "./edit_note.php",
            type: "POST",
            data: {note_id: id},
            success: function(data) {
                $('#update-modal').html(data);
            }
        });
    });

    // Update Note
    $(document).on('click', '#update-note', function() {
        let id = $('#update-note-id').val();
        let title = $('#update-note-title').val();
        let description = $('#update-note-description').val();
        $.ajax({
            url: "./update_note.php",
            type: "POST",
            data: {note_id: id, note_title: title, note_description: description},
            success: function(data) {
                if (data == 1) {
                    $('#close-modal').click();
                    loadNotesTable();
                } else {
                    $('#close-modal').click();
                    alert("Failed!");
                }
            }
        });
    });

    // Delete Note 
    $(document).on('click', '.delete-note-btn', function() {
        if (confirm("Are you sure u want to delete this Note ?")) {
            let id = $(this).data('delete-id');
            let element = this;
            $.ajax({
                url: "./delete_note.php",
                type: "POST",
                data: {note_id: id},
                success: function(data) {
                    if (data == 1) {
                        $(element).closest("tr").fadeOut();
                    } else {
                        alert("Some Error Occured. Please try again later!");
                    }
                }
            });
        }
    });
});