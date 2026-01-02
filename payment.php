<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vibration Payment</title>
    <link rel="stylesheet" href="style/newheaderfooter.css">
    <link rel="stylesheet" href="style/payment.css">
   
</head>

<body style="background-image: url('images/payment.jpg'); background-size: cover ; background-position: center;">
	
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
                <li><a href="homepage.php">Home</a></li>
                <li><a href="event.php">Events</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact Us</a></li>|
            </ul>
        </nav>
        
    </header>
 
    <!-- Payment Section -->
   <! <div class="payment-form">
        <center><h1>Payment</h1></center>
        <div class="payment-container">
            <div class="left-payment">
                <center><h3><text-align=Center>Credit/Debit Card</h3></center>
                <div class="card-logos">
                    <img src="images/visa.png" alt="Visa">
                    <img src="images/master.png" alt="MasterCard">
                </div>

                <label for="first-name">Name</label>
                <input type="text" id="first-name" placeholder="Enter your first name">

                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" placeholder="Enter your last name">

                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" placeholder="Enter your card number">

                <div class="expiry-cvv">
                    <div>
                        <label for="expiry-date">Expire Date</label>
                        <input type="text" id="expiry-date" placeholder="MM/YY">
                    </div>
                    <div>
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" placeholder="123">
                    </div>
                </div>
            </div>

            <div class="right-payment">
                <p>Total Amount</p>
                <h2>Rs. 10500.00</h2>
                <button type="submit" a href ="mybooking.php" class="pay-btn">Pay Now</a></button>
            </div>
        </div>
        <button type="button" class="back-btn" > <a href="booking.php">Back</a></button>
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
    <script src="js/payment.js"></script>
</body>
</html>