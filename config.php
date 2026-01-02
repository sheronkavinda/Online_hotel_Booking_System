<?php
    $con=new mysqli("localhost","root","","hotel vibration db");

    if($con->connect_error)
    {
        die("connection Faild".$con->connect_error);
    }
?>