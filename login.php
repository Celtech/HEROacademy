<?php
    require_once "core/api/config.php";
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    if($action == "login") {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        $query = $db->query("SELECT * FROM users where username='$username' AND password='$password'");
        if($query->num_rows > 0) {
            session_start();
            $_SESSION['user'] = $username;
            header("location: index.php");
        }
    }else{
        session_start();
        session_destroy();   // function that Destroys Session
        header("Location: index.php");
    }
