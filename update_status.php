<?php
    require 'config.php';

    $Id=$_POST["bookingID"];
    $Status=$_POST["status"];

    if(empty($Id)||empty($Status))
    {
        echo"All Required";
    }

    else{

        $sql="UPDATE reservation set status='$Status' WHERE id='$Id'";

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