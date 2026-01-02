<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vibration Packages</title>
    <link rel="stylesheet" href="style/newheaderfooter.css">
    <link rel = "stylesheet" type = "text/css" href = "style/packages.css">

</head>

<body>
	
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
</body>

<br>
<div>
    <h1>Packages Details</h1>
</div>

<section class="packages">
    <!-- Weddings Packages -->
    <div class="package-category">
        <h2>Wedding Packages</h2>
        <div class="package-row">
            <div class="package-box">
                <h3>General Package</h3>
                <ul>
                    <li><strong>Guests:</strong> Up to 100 guests.</li>
                    <li><strong>Venue:</strong> Basic venue decoration included.</li>
                    <li><strong>Food:</strong> Standard catering with local dishes.</li>
                    <li><strong>Entertainment:</strong> DJ or live music for 3 hours.</li>
                    <li><strong>Price:</strong> Starting at Rs. 1 million.</li>
                </ul>
            </div>
            <div class="package-box">
                <h3>VIP Package</h3>
                <ul>
                    <li><strong>Guests:</strong> Up to 150 guests.</li>
                    <li><strong>Venue:</strong> Premium venue decoration with custom themes.</li>
                    <li><strong>Food:</strong> International cuisines and extended menu.</li>
                    <li><strong>Management:</strong> Dedicated event manager for coordination.</li>
                    <li><strong>Price:</strong> Rs. 1.5 million.</li>
                </ul>
            </div>
            <div class="package-box">
                <h3>Luxury Package</h3>
                <ul>
                    <li><strong>Guests:</strong> Up to 200 guests.</li>
                    <li><strong>Venue:</strong> Exclusive décor, floral arrangements, and lighting.</li>
                    <li><strong>Food:</strong> Gourmet catering with personalized options.</li>
                    <li><strong>Entertainment:</strong> Live band or entertainment for the entire event.</li>
                    <li><strong>Price:</strong> Rs. 2 million.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- DJ Nights Packages -->
    <div class="package-category">
        <h2>DJ Nights Packages</h2>
        <div class="package-row">
            <div class="package-box">
                <h3>General Package</h3>
                <ul>
                    <li><strong>Guests:</strong> Up to 100 guests.</li>
                    <li><strong>Venue:</strong> Standard venue with basic lighting.</li>
                    <li><strong>Entertainment:</strong> DJ for 3 hours.</li>
                    <li><strong>Price:</strong> Starting at Rs. 1 million.</li>
                </ul>
            </div>
            <div class="package-box">
                <h3>VIP Package</h3>
                <ul>
                    <li><strong>Guests:</strong> Up to 150 guests.</li>
                    <li><strong>Venue:</strong> Premium venue with upgraded lighting and effects.</li>
                    <li><strong>Entertainment:</strong> DJ and live performer for 5 hours.</li>
                    <li><strong>Price:</strong> Rs. 1.5 million.</li>
                </ul>
            </div>
            <div class="package-box">
                <h3>Luxury Package</h3>
                <ul>
                    <li><strong>Guests:</strong> Up to 200 guests.</li>
                    <li><strong>Venue:</strong> Exclusive venue with custom lighting and décor.</li>
                    <li><strong>Entertainment:</strong> DJ and live band for the entire night.</li>
                    <li><strong>Price:</strong> Rs. 2 million.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Corporate Event Packages -->
    <div class="package-category">
        <h2>Corporate Event Packages</h2>
        <div class="package-row">
            <div class="package-box">
                <h3>General Package</h3>
                <ul>
                    <li><strong>Guests:</strong> Up to 50 attendees.</li>
                    <li><strong>Venue:</strong> Basic setup with projectors and seating.</li>
                    <li><strong>Food:</strong> Refreshments and lunch included.</li>
                    <li><strong>Price:</strong> Starting at Rs. 1 million.</li>
                </ul>
            </div>
            <div class="package-box">
                <h3>VIP Package</h3>
                <ul>
                    <li><strong>Guests:</strong> Up to 100 attendees.</li>
                    <li><strong>Venue:</strong> Custom layout with enhanced audio/visual equipment.</li>
                    <li><strong>Food:</strong> Full-course meals with catering options.</li>
                    <li><strong>Price:</strong> Rs. 1.5 million.</li>
                </ul>
            </div>
            <div class="package-box">
                <h3>Luxury Package</h3>
                <ul>
                    <li><strong>Guests:</strong> Up to 200 attendees.</li>
                    <li><strong>Venue:</strong> Premium setup with interactive elements.</li>
                    <li><strong>Food:</strong> Gourmet meals with international cuisines.</li>
                    <li><strong>Price:</strong> Rs. 2 million.</li>
                </ul>
            </div>
        </div>
    </div>
</section>


    <div class="book-now">
        <button class="book-now-btn" onclick="bookNow()">Book Now</button>
    </div>

    <script src="js/packages.js"></script>


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

