<?php
    session_start();

    include('config.php');

    if (!isset($_SESSION['User_id']))
    {
        header('Locatioin:login.php');
        exit();
    }

    $User_id = $_SESSION['User_id'];
    $sql = "SELECT * FROM user where User_id = $User_id";
?>