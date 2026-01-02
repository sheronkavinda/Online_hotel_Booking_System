<?php

    require 'config.php';

    $Useremail = $_POST["deleteUserEmail"];

    $sql="DELETE FROM account_details WHERE email='$Useremail'";

    if($con->query($sql))
    {
        echo "Deleted";
    }

    else{
        echo "Not success";
    }

?>