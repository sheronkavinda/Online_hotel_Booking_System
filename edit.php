<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vibration - MyBooking</title>
    <link rel="stylesheet" href="style/newheaderfooter.css">
    <link rel="stylesheet" type="text/css" href="style/mybooking.css">
    <script src="js/mybooking.js"></script>
</head>

<body>
<header>
    <div class="logo">
        <img src="images/logo.png" alt="Hotel Logo">
    </div>

    <div id="profile-info">
        <a href="userprofile.php"><img src="images/u.jpeg" alt="Profile Image"></a> 
        <span>Hello! Username</span>
        <form action="logout.php" method="post">
                <button type="submit" id="logoutBtn">Logout</button>
        </form>
    </div>

    <nav>
        <ul>
            <li><a href="homepage.php" class="active">Home</a></li>
            <li><a href="event.php">Events</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
    </nav>
</header>

    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: #000;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #D4AF37;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 15px;
        }
        header ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
        .form-container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #D4AF37;
            border-radius: 5px;
            outline: none;
        }
        input[type="text"]:focus, input[type="date"]:focus {
            border-color: #B38600;
        }
        .submit-btn {
            background-color: #D4AF37;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .submit-btn:hover {
            background-color: white;
            color: #D4AF37;
            border: 2px solid #D4AF37;
        }
    </style>
</head>
    <main>
        <div class="form-container">
            <h1>Edit Booking</h1>
            <form action="update.php" method="POST">

                <label for="id">Booking Id</label>
                <input type="text" id="id" name="id" required >

                <label for="event_date">Event Date</label>
                <input type="date" id="event_date" name="event_date"  required>

                <label for="name">Name</label>
                <input type="text" id="name" name="name"  required>

                <label for="mobile">Mobile</label>
                <input type="text" id="mobile" name="mobile"  required>

                <button type="submit" class="submit-btn">Update Booking</button>
            </form>
        </div>
    </main>
    <footer>
    <div class="section1">
    <div class='details'>    
        <section>
            <h4>Contact</h4>
            <p>Tel: +94 70 999999</p>
            <p>E-mail: hotelvibration@gmail.com</p>
        </section>

        <section>
            <h4>Address</h4>
            <p>No 7,</p><p>Temple rode,</p><p>Malabe.</p>
        </section>

        <section>
            <h4>Schedule</h4>
            <p>Monday - Sunday</p>
            <p>Bar: 9am - 11pm</p>
            <p>Kitchen: 8am - 10pm</p>
        </section>
    </div>
    
    <div class="social-media">
        <h4>Follow Us</h4>
        <p>
            <a href = "https://www.facebook.com/"><img src = "images/fb.png"></a>
            <a href = "https://web.whatsapp.com/"><img src = "images/wp.png"></a>
            <a href = "https://www.instagram.com/"><img src = "images/ins.png"></a>
            <a href = "https://x.com/"><img src = "images/tx.png"></a>
            <a href = "https://www.youtube.com/"><img src = "images/yt.png"></a>
        </p>
    </div>

    <div class="subscribe-section">
        <h4>Get the latest news </h4>
         <p>
             <form id="subscribeForm">
                <input type="email" id="subscribeEmail" placeholder="Enter your email">
                <button type="submit" class="subscribe-btn">Subscribe</button>
             </form>
      </p>
        
    </div>
    </div>

    <br>  
    
    <div class="footer-links">
        <ul>
            <li><a href="terms.php">Terms and Conditions</a> |</li>
            <li><a href="terms.php">Privacy Policy</a> |</li>
            <li><a href="terms.php">Cookies Policy</a></li>
        </ul>
        <br>
        <br>
    </div>

    <hr>

    <div class="rights" >
        Copyright © 2024 Hotel Vibration. All rights reserved
    </div>   
        
</footer>
</body>
</html>

<?php
    require 'config.php';

    if (isset($_GET['id'])) {
        $U_ID = $_GET['id'];
    
        // Fetch existing reservation details from the database
        $sql = "SELECT id, event_date, name, mobile FROM reservation WHERE id='$U_ID'";
        $result = $con->query($sql);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "No booking found!";
            exit();
        }
    } else {
        echo "No booking ID provided!";
        exit();
    }

    // Close the database connection
    $con->close();
?>
