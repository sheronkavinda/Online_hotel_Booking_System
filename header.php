<?php
    //Checks if a has session already started
   if (session_status() === PHP_SESSION_NONE) 
   {
    session_start();
   }
    include_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style/header.css">
</head>

<body>
	
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Hotel Logo">
        </div>

        <div id="profile-info">
            
            <?php
                if (isset($_SESSION['F_name'])) {
                    echo '<a id="usernameLink" href="userprofile.php"><img src="images/u.jpeg" alt="User Image">Hello! ' . $_SESSION['F_name'] . '</a>';
                    echo '<button id="loginBtn" onclick="logout()">Logout</button>';
            } else {
                echo '<a id="usernameLink" href="signup.php"><img src="images/u.jpeg" alt="User Image">Hello! Guest</a>';
                echo '<button id="loginBtn" onclick="goto_signup()">Login</button>';
            }
            ?>
        </div>

        <nav>
            <ul>
                |<li><a href="homepage.php">Home</a></li>
                <li><a href="event.php">Events</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact Us</a></li>|
            </ul>
        </nav>
        
    </header>

   
	<script src = "js/header.js"></script>
</body>
</html>