<?php
    session_start();
    
    include './Classes/database.php';
    include './Classes/crud.php';

    $crud = new CRUD();

    $output = "";

    $user_id = $_SESSION['user']['id'];

    $result = $crud->get_user_notes($user_id);

    if ($result == false) {
        $output .= "<tr>
            <th scope='row' colspan='4' class='text-center'>No Notes Found</th>
        </tr>";
        echo $output;
    } else {
        $no = 1;
        while ($note = $result->fetch(PDO::FETCH_ASSOC)) {
            $output .= "<tr>
            <th scope='row'>". $no ."</th>
            <td>". $note['title'] ."</td>
            <td>". $note['description'] ."</td>
            <td>
            <div class='container'>
                <button class='btn btn-success me-3 edit-note-btn' data-bs-toggle='modal' data-bs-target='#update-note-modal' data-edit-id=". $note['note_id'] .">Edit</button>
                <button class='btn btn-danger delete-note-btn' data-delete-id=". $note['note_id'] .">Delete</button>
            </div>
            </td>
            </tr>";
            $no++;
        }
        echo $output;
    }
?>