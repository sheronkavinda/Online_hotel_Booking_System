<?php
    require 'config.php';

    $UEmail = $_POST["userEmail"];
    $Message = $_POST["userMessage"];
    
    $sql = "INSERT INTO contact_user (u_email, message) VALUES ('$UEmail', '$Message')";

    if($con->query($sql))
    {
        echo "succesful";
    }
    else{
        echo "Error".$con->error;
    }
    $con->close();
?>