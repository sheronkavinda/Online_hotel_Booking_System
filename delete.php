<?php
    require 'config.php';

    // Check if 'id' is set in POST data
    if (isset($_POST["id"])) {
        
        $U_ID = $con->real_escape_string($_POST["id"]);
        
        // Prepare the SQL statement to delete the reservation
        $sql = "DELETE FROM reservation WHERE id='$U_ID'";
    
        // Execute the query
        if ($con->query($sql)) {
            // Redirect to the 'mybooking.php' page after successful deletion
            header("Location: mybooking.php");
            exit();
        } else {
            // If deletion failed, show the error
            echo "Delete failed: " . $con->error;
        }
    } else {
       
        echo "No ID received.";
    }
    
    // Close the database connection
    $con->close();
?>



