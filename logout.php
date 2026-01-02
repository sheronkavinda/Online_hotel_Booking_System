<?php
    session_start();
    session_destroy();
    header('location:homepage.php');
    echo json_encode(['sucess' => true]);// converts php array into json string
?>