<?php
    session_start();
    include_once './Classes/database.php';
    include_once './Classes/user.php';
    include_once './Classes/crud.php';

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $crud = new CRUD();

    if ($crud->check_email($user_email)) {
        echo 0;
    } else {
        $user = new User($user_name, $user_email, $user_password);

        if ($user->push()) {
            echo 1;
        } else {
            echo -1;
        }
    }
?>