<?php
    require 'config.php';

    if (isset($_POST["id"]) && isset($_POST["event_date"]) && isset($_POST["name"]) && isset($_POST["mobile"])) {
        $U_ID = $_POST["id"];
        $U_Event_Data = $_POST["event_date"];
        $U_Name = $_POST["name"];
        $U_Mobile = $_POST["mobile"];

        // Validate input fields
        if (empty($U_Event_Data) || empty($U_Name) || empty($U_Mobile)) {
            echo "All fields are required";
        } else {
            
            $sql = "UPDATE reservation SET event_date='$U_Event_Data', name='$U_Name', mobile='$U_Mobile' WHERE id='$U_ID'";

            // Execute the query
            if ($con->query($sql)) {
                header("Location: mybooking.php");
                exit();
            } else {
                echo "Error: " . $con->error;
            }

            $con->close();
        }
    } else {
        echo "No booking ID provided!";
        exit();
    }
?>


