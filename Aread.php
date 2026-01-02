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

// Fetch all users from the database
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error executing query: " . mysqli_error($conn));
}

// Check if there are any users in the database
if (mysqli_num_rows($result) > 0) {
    echo "<h2>User List</h2>";
    echo "<table border='1' cellspacing='0' cellpadding='10'>";
    echo "<tr><th>Id</th><th>Name</th><th>Message</th><th>Action</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["Name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["Message"]) . "</td>";
        echo "<td>";
        // Use htmlspecialchars to prevent XSS and make sure the links are properly formatted
        echo "<a href='Aedit.php?id=" . urlencode($row["id"]) . "'>EDIT</a> | ";
        echo "<a href='Adelete.php?id=" . urlencode($row["id"]) . "' onclick='return confirm(\"Are you sure you want to delete?\")'>DELETE</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No users found!";
}

// Close the database connection
mysqli_close($conn);
?>
