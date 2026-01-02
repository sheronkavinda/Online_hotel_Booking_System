<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; /* Light background for contrast */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Center content vertically */
        }

        .container {
            max-width: 400px; /* Slightly wider for better usability */
            margin: 20px; /* Add some margin for spacing */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px; /* Slightly larger radius for softer corners */
            background-color: #fff; /* White background for the form */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        h2 {
            text-align: center; /* Center the heading */
            margin-bottom: 20px; /* Space below heading */
            font-size: 24px; /* Increased font size for emphasis */
            color: #333; /* Darker color for better readability */
        }

        label {
            font-weight: bold;
            margin-bottom: 8px; /* Space below labels */
            display: block; /* Make labels block elements */
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px; /* Slightly more padding for inputs */
            margin: 5px 0 15px; /* More space below inputs */
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px; /* Increased font size for better readability */
        }

        textarea {
            resize: vertical; /* Allow vertical resizing only */
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px; /* Consistent padding */
            margin-top: 10px; /* Space above the button */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px; /* Larger font for buttons */
            transition: background-color 0.3s ease; /* Smooth transition for hover */
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .message {
            margin-top: 20px; /* Space for messages */
            text-align: center; /* Center message text */
            color: #4CAF50; /* Green color for success messages */
        }

        .error {
            color: red; /* Red color for error messages */
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    // Database connection details
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "iwt";

    // Establish a connection to the MySQL database
    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the user ID is provided
    if (isset($_GET["id"])) {
        $userID = $_GET["id"];

        // Fetch user details from the database
        $sql = "SELECT * FROM user WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $userID);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            // Handle form submission to update user information
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["Name"];
                $email = $_POST["Email"];
                $msg = $_POST["Message"];

                // Update user information in the database
                $updateSql = "UPDATE user SET Name = ?, Email = ?, Message = ? WHERE id = ?";
                $stmt = mysqli_prepare($conn, $updateSql);
                mysqli_stmt_bind_param($stmt, "sssi", $name, $email, $msg, $userID);
                if (mysqli_stmt_execute($stmt)) {
                    echo "<div class='message'>User with ID $userID has been updated successfully!</div>";
                    // Redirect back to the read view
                    header("Refresh: 2; URL=Aread.php"); // Delay for 2 seconds before redirecting
                    exit();
                } else {
                    echo "<div class='error'>Error updating user: " . mysqli_error($conn) . "</div>";
                }
            }
        } else {
            echo "<div class='error'>User not found.</div>";
        }
    } else {
        echo "<div class='error'>Invalid request.</div>";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>

    <h2>Edit User</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=$userID"); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="Name" value="<?php echo htmlspecialchars($row["Name"]); ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="Email" value="<?php echo htmlspecialchars($row["Email"]); ?>" required>

        <label for="message">Message:</label>
        <textarea id="message" name="Message" rows="5" required><?php echo htmlspecialchars($row["Message"]); ?></textarea>

        <input type="submit" value="Update User">
    </form>
</div>

</body>
</html>
