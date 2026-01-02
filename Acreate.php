<?php
//include "config.php";

$host = "localhost";
$username = "root";
$password = "";
$database = "iwt";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());    
}

//Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $msg = $_POST["Message"];
    
     
    // Save user information into the database
    $sql = "INSERT INTO user (Name, Email, Message) VALUES ('$name', '$email', '$msg')";
    if (mysqli_query($conn, $sql)) 
    {
        echo "<div style='color: green; font-weight: bold;'>Thank you for your feedback!</div>";

    } 
    else 
    {
        echo "<div style='color: red; font-weight: bold;'>Error: " . mysqli_error($conn) . "</div>";
        echo "<div>SQL Query: " . htmlspecialchars($sql) . "</div>"; // Displaying the SQL query safely
    
    }
  
    // Close the database connection
    mysqli_close($conn);
}
?>