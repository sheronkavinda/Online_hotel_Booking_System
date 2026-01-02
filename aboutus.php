<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vibration-Admin Profile</title>
    <link rel="stylesheet" href="style\aboutus.css">
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
    <div class="about">
         <div>
            <h1>About Us</h1>
            <p style="text-align: justify;">
                <p>AT Hotel Vibration, we specialize in creating unforgettable event experiences tailored to your needs.Our dedicated staff make sure that every aspect of events, from business meetings to weddings, is carefully planned and executed to quality.We take great satisfaction in providing luxurious event rooms that are both attractive and flexible together with modern amenities to ensure you event is perfect and amazing</p><br>
                <p> With more than ten years of experience in the hospitality sector, Hotel Vibration is known for its excellent event management.Our experienced cordinators collaborate with clients to  execute their ideas, providing customised</p>solutions to fit any taste or budget.Whether your hosting an intimate celebration or party, we have got the perfect venue to match.</p><br>
                <p> We understand that each event is unique, Which is why we focus on personalized service from start to finish.Our staff will be present to make sure everything goes according to plan from the moment you enquire about our venues until the day of the event.Choose Hotel Vibration for an experience that blends luxury,elegance and flawless service.</p><br>
            </p>
        </div>
            <div class="about-image">
                <img src="images/aboutus.png"alt="About image">
            </div>
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
	<script src = "js/adminprofile.js"></script>
</body>
</html>