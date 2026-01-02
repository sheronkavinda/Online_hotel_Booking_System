<?php
session_start();

$response = array(
    'loggedin' => isset($_SESSION['F_name']), // True if user logged in
    'username' => isset( $_SESSION['F_name']) ? $_SESSION['F_name'] :'' // Returns username
);

//json_encoder is useful to send php script data to the website 
echo json_encode($response);
?>
