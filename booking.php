<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vibration Reservation</title>
    <link rel="stylesheet" href="style/newheaderfooter.css">
    <link rel = "stylesheet" type = "text/css" href = "style/booking.css">
    

</head>

<body style="background-image: url('images/booking.jpg'); background-size: cover ; background-position: center;">
	
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
                <li><a href="homepage.php">Home</a></li>
                <li><a href="event.php">Events</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact Us</a></li>|
            </ul>
        </nav>
        
    </header>

    

    <div class="booking-form">
    <h1>Book Your Event</h1>
    
    <form action="insert.php" method="post">
        <div class="booking-container">
            <div class="left-form">
                <label for="event-type">Event Type</label>
                <select id="event-type" name="event_type">
                    <option value="wedding">Wedding</option>
                    <option value="dj-night">DJ Night</option>
                    <option value="corporate">Corporate Events</option>
                </select><br><br><br>

                <label for="package">Select Package</label>
                <select id="package" name="package">
                    <option value="General Package">General Package</option>
                    <option value="VIP Package">VIP Package</option>
                    <option value="Luxury Package">Luxury Package</option>
                </select><br><br><br>

                <label for="date">Event Date</label>
                <input type="date" id="date" name="event_date" value="2024-09-10">
            </div>

            <div class="right-form">

                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>

                <label for="address">Address</label>
                <textarea id="address" name="address" placeholder="Enter your address" required></textarea>

                <label for="mobile">Mobile No.</label>
                <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
        </div><br><br>
        
        <button type="submit" class="submit-btn">Submit</button>
    </form>
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
    <!--<script src="js/booking.js"></script>-->
</body>
</html>
