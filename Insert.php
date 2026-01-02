<?php
    require 'config.php';

    
    $U_Event_Type = $_POST["event_type"];
    $U_Event_Package = $_POST["package"];
    $U_Event_Data = $_POST["event_date"];
    $U_Name = $_POST["name"];
    $U_Email = $_POST["email"];
    $U_Address = $_POST["address"];
    $U_Mobile = $_POST["mobile"];
   
    

    $sql = "INSERT INTO reservation (event_type, package, event_date, name, email, address, mobile) 
            VALUES ('$U_Event_Type','$U_Event_Package','$U_Event_Data','$U_Name','$U_Email', '$U_Address','$U_Mobile')";

    if($con->query($sql))
    {
        header("Location: payment.php");
        exit();
    }
    else{
        echo "Error".$con->error;
    }
    $con->close();
?>