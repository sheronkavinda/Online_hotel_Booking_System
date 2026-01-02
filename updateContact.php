<?php
require "backend/db.php";

if (isset($_GET['contactId'])) {
    $contactId = $_GET['contactId'];

    
    $q1 = "SELECT * FROM `contactus` WHERE contactId = ?";
    $stmt = $conn->prepare($q1);
    $stmt->bind_param('i', $contactId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
    } else {
        echo "Contact not found!";
        exit();
    }
} else {
    header("location: contactus.php?status=No Contact ID Provided");
    exit();
}


if (isset($_POST['update'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $message = $_POST["message"];

    if (empty($name) || empty($email) || empty($mobile) || empty($message)) {
        echo "All fields are required!";
    } else {
        
        if (strlen($name) < 3 || strlen($name) > 50) {
            echo "Invalid Name!";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid Email!";
        } elseif (!preg_match("/07[0,1,2,4,5,6,7,8][0-9]{7}/", $mobile) || strlen($mobile) !== 10) {
            echo "Invalid Mobile No!";
        } elseif (strlen($message) < 8 || strlen($message) > 200) {
            echo "Invalid Message Length!";
        } else {
            
            $q2 = "UPDATE `contactus` SET name = ?, email = ?, mobile = ?, message = ? WHERE contactId = ?";
            $stmt = $conn->prepare($q2);
            $stmt->bind_param('ssssi', $name, $email, $mobile, $message, $contactId);
            if ($stmt->execute()) {
                header("location: contactus.php?status=Contact Updated Successfully!");
                exit();
            } else {
                echo "Error updating contact!";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/updateContact.css">
    <title>Update Contact</title>
</head>
<body>

<header>
        <div class="logo">
            <img src="images/logo.png" alt="Hotel Logo">
        </div>

        <div id="profile-info">
            <a href="userprofile.php"><img src="images/u.jpeg"> </a>
            Hello! Username
            <button id="logoutBtn">Logout</button>
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

    <main>

    <h1>Update Contact Information</h1>
    <form action="updateContact.php?contactId=<?php echo $contactId; ?>" method="post">
        <p>Enter Name: <input name="name" type="text" value="<?php echo $data['name']; ?>" required></p>
        <p>Enter Email: <input name="email" type="email" value="<?php echo $data['email']; ?>" required></p>
        <p>Enter Number: <input name="mobile" type="text" value="<?php echo $data['mobile']; ?>" required></p>
        <p>Enter Message: <textarea name="message" required><?php echo $data['message']; ?></textarea></p>
        <button type="submit" name="update">Update Contact</button>
    </form>

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
                    <p>No 7,</p>
                    <p>Temple rode,</p>
                    <p>Malabe.</p>
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
                    <a href="https://www.facebook.com/"><img src="images/fb.png"></a>
                    <a href="https://web.whatsapp.com/"><img src="images/wp.png"></a>
                    <a href="https://www.instagram.com/"><img src="images/ins.png"></a>
                    <a href="https://x.com/"><img src="images/tx.png"></a>
                    <a href="https://www.youtube.com/"><img src="images/yt.png"></a>
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

        <div class="rights">
            Copyright © 2024 Hotel Vibration. All rights reserved
        </div>

    </footer>
</body>
</html>
