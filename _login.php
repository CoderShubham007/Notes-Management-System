<?php
    session_start();
    include './Classes/database.php';
    include './Classes/crud.php';

    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $crud = new CRUD();

    if ($crud->check_email($user_email)) {
        $result = $crud->verify_user($user_email, $user_password);
        if ($result == false) {
            echo -1;
        } else {
            $user_details = $result->fetch(PDO::FETCH_ASSOC);
            $user_id = $user_details['user_id'];
            $user_name = $user_details['user_name'];
            $user_email = $user_details['user_email'];
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = [
                'id' => $user_id,
                'name' => $user_name,
                'email' => $user_email
            ];
            echo 1;
        }
    } else {
        echo 0;
    }
?>