<?php
    require_once "core/api/config.php";
    session_start();

    if(isset($_SESSION['user'])) {
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';

        $preparedQuery = $db->prepare("INSERT INTO `posts` (`title`, `content`, `author`) VALUES (?, ?, ?)");
        $preparedQuery->bind_param("sss", $title, $content, $_SESSION['user']);
        $preparedQuery->execute();
        $preparedQuery->close();
    }

    header("location: index.php");
