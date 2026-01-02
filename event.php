<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vibration Events</title>
    <link rel="stylesheet" href="style/newheaderfooter.css">
    <link rel="stylesheet" href="style/event.css">
</head>

<body style="background-image: url('images/eventbackground.jpg'); background-size: cover; background-position: center;">
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Hotel Logo">
        </div>

        <div id="profile-info">
            <a href="userprofile.php"><img src="images/u.jpeg"> </a> 
            Hello! Savindu
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

    <div class="events">
        <h1>Events</h1>
        <div class="event-container">
            <div class="event-box">
                <a href="package.php" style="text-decoration: none;">
                    <img src="images/wedding.jpg" alt="Wedding">
                    <h2>Weddings</h2>
                    <p class="event-details">Celebrate your special day with elegance and style at Hotel Vibration. Our wedding packages offer customized décor, catering, and venues to make your day perfect.</p>
                </a>
            </div>
            <div class="event-box">
                <a href="package.php" style="text-decoration: none;">
                    <img src="images/dj.jpg" alt="Friday DJ Night">
                    <h2>Friday DJ Night</h2>
                    <p class="event-details">Unwind and dance the night away with our renowned Friday DJ Night. Featuring top DJs, vibrant lighting, and a lively atmosphere for an unforgettable experience.</p>
                </a>
            </div>
            <div class="event-box">
                <a href="package.php" style="text-decoration: none;">
                    <img src="images/cooperate.jpg" alt="Corporate Events">
                    <h2>Corporate Events</h2>
                    <p class="event-details">Host your corporate events in our state-of-the-art facilities. Our packages include modern AV systems, catering services, and tailored setups for professional success.</p>
                </a>
            </div>
        </div><br><br>
        <a href="booking.php" class="book-btn">Book Now</a>
    </div>

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
                    <p>No 7, Temple Road, Malabe.</p>
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
                <h4>Get the latest news</h4>
                <p>
                    <form id="subscribeForm">
                        <input type="email" id="subscribeEmail" placeholder="Enter your email">
                        <button type="submit" class="subscribe-btn">Subscribe</button>
                    </form>
                </p>
            </div>
        </div>

        <div class="footer-links">
            <ul>
                <li><a href="terms.php">Terms and Conditions</a> |</li>
                <li><a href="terms.php">Privacy Policy</a> |</li>
                <li><a href="terms.php">Cookies Policy</a></li>
            </ul>
        </div>

        <hr>

        <div class="rights">
            Copyright © 2024 Hotel Vibration. All rights reserved
        </div>
    </footer>
    <script src="js/newheaderfooter.js"></script>
</body>
</html>
