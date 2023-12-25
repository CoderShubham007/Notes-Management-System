<?php
    include './Classes/database.php';
    include './Classes/crud.php';

    $note_id = $_POST['note_id'];

    $crud = new CRUD();

    $note_details = $crud->get_note_details($note_id);

    $output = "";

    if ($note_details == false) {
        $output = '<h1 class="text-center">Some Error Occured. Please try again later!</h1>';
        echo $output;
    } else {
        $note = $note_details->fetch(PDO::FETCH_ASSOC);
        $output .= '<form>
            <div class="mb-3">
            <input type="number" class="form-control" id="update-note-id" value="'. $note['note_id'] .'" hidden>
            <label for="update-note-title" class="form-label">Note Title</label>
            <input type="text" class="form-control" id="update-note-title" value="'. $note['title'] .'">
            </div>
            <div class="mb-3">
            <label for="update-note-description" class="form-label">Note Description</label>
            <textarea class="form-control" id="update-note-description" rows="5">'. $note['description'] .'</textarea>
            </div>
        </form>';
        echo $output;
    }
?>