<?php
    session_start();
    include './Classes/database.php';
    include './Classes/note.php';

    $note_title = $_POST['note_title'];
    $note_description = $_POST['note_description'];
    $user_id = $_SESSION['user']['id'];

    $note = new Note($note_title, $note_description);

    if ($note->add_note($user_id)) {
        echo 1;
    } else {
        echo -1;
    }
?>