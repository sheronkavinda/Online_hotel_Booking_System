<?php

require "backend/db.php";

if (isset($_GET["status"])) {
    echo '<script>
    setTimeout(function() {
        alert("' . $_GET["status"] . '");
    }, 1000); </script>';
}

$q1 = "SELECT * FROM `contactus`";
$rs1 = $conn->query($q1);
$n1 = $rs1->num_rows;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="images/logo.png">

    <title>Contact Us</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Hotel Logo">
        </div>

        <div id="profile-info">
            <a href="userprofile.php"><img src="images/u.jpeg"> </a>
            Hello! Username
            <form action="logout.php" method="post">
                <button type="submit" id="logoutBtn">Logout</button>
            </form>
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
        <div class="container">
            <div>
                <h1>Contact Us</h1>
                <p style="text-align: justify;">
                    If you have any questions, concerns, or inquiries regarding our services, bookings, or policies, feel free to reach out to us. Our team is here to assist you and ensure your experience with us is smooth and enjoyable. You can contact us via phone , email at hotel or by filling out the contact form on our website. We look forward to hearing from you !
                </p><br>

                <h3>Call Us</h3>
                <p>+94 70 999999</p><br>

                <h3>Email</h3>
                <p>hotelvibration@gmail.com</p><br>

                <h3>Address</h3>
                <p>No 7,</p>
                <p>Temple rode,</p>
                <p>Malabe.</p>
            </div>

            <div id="contact">

                <div class="conta">

                    <form action="backend/contactProcess.php" method="post">

                        <p>Enter Name: <input name="name" type="text" required placeholder="Enter a your name"></p>
                        <p>Enter Email: <input name="email" type="email" required placeholder="Enter your email"></p>
                        <p>Enter Number: <input name="mobile" type="text" required placeholder="Enter your number"></p>
                        <p>Enter Message: &nbsp;<textarea name="message" required></textarea></p>

                        <div class="contbttn">
                            <button class="btn" name="create" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Message</th>
                    <th>Manage</th>
                </tr>

                <?php foreach ($rs1 as $data) { ?>
        <tr>
            <form action="backend/contactProcess.php" method="post">
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['mobile']; ?></td>
                <td><?php echo $data['message']; ?></td>
                <td>
                    
                    <button><a href="updateContact.php?contactId=<?php echo $data['contactId']; ?>">Update</a></button>
                    
                    <form action="backend/contactProcess.php" method="post">
                        <input type="hidden" name="contactId" value="<?php echo $data['contactId']; ?>">
                        <button name="delete" type="submit">Delete</button>
                    </form>
                </td>
            </form>
        </tr>
    <?php } ?>

            </table>
        </div>
        <!-- Feedback Button -->
        <div id="btn">
            <button onclick="openFeedbackForm()">Give Feedback</button>
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
    <script src="js/adminprofile.js"></script>
</body>

</html>