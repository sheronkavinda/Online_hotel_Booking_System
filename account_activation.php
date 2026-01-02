<?php
    require 'config.php';

    $Useremail = $_POST["useremail"];
    $Password = $_POST["password"];
    $U_Type = $_POST["user_type"];

    
    $sql = "INSERT INTO account_details (email, password, user_type) VALUES ('$Useremail', '$Password','$U_Type')";

    if($con->query($sql))
    {
        echo "succesful";
    }
    else{
        echo "Error".$con->error;
    }
    $con->close();
?>