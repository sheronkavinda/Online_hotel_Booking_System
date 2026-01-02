<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "iwt";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user ID is provided
if (isset($_GET["id"])) {
    // Sanitize the input
    $userId = intval($_GET["id"]); // Make sure the ID is an integer

    // Prepare the SQL statement
    $sql = "DELETE FROM user WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $userId);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Redirect back to the user list after successful deletion
        header("Location: Aread.php?deleted=true");
        exit();
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
mysqli_close($conn);
?>
