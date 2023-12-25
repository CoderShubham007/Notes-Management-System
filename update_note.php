<?php
    include './Classes/database.php';
    include './Classes/crud.php';

    $note_id = $_POST['note_id'];
    $note_title = $_POST['note_title'];
    $note_description = $_POST['note_description'];

    $crud = new CRUD();

    if ($crud->update_note($note_id, $note_title, $note_description)) {
        echo 1;
    } else {
        echo -1;
    }
?>