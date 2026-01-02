<?php
    require 'config.php';

    $Email=$_POST["useremail"];
    $Password=$_POST["password"];
    $Type=$_POST["updateUserType"];

    if(empty($Email)||empty($Password)||empty($Type))
    {
        echo"All Required";
    }

    else{

        $sql="UPDATE account_details set email='$Email',password='$Password',user_type='$Type' WHERE email='$Email'";

        if($con->query($sql))
        {
            echo "Updated";
        }

        else{
            echo "Not updated";
        }
    }

    $con->close();

?>