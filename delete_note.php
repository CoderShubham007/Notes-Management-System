<?php
    include './Classes/database.php';
    include './Classes/crud.php';

    $note_id = $_POST['note_id'];

    $crud = new CRUD();

    if ($crud->delete_note($note_id)) {
        echo 1;
    } else {
        echo -1;
    }
?>