<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vibration-Home Page</title>
    <link rel="stylesheet" href="style/home.css">
    <?php
        include_once('config.php');
    ?>
	
</head>

<body>
	
    <?php
    include_once'header.php';
    ?>

	<div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1/3</div>
            <img src="images/img1.jpg">
            <!--<div class="text">1st image</div>-->
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2/3</div>
            <img src="images/img2.jpg">
            <!--<div class="text">2nd image</div>-->
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3/3</div>
            <img src="images/img3.jpg">
           <!-- <div class="text">3rd image</div>-->
        </div>
		<!--Next and Previous buttons-->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
	<!--Dots/circles under the picture slide-->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
	<hr>
	<br>
	<div class="package-section">
		<div class="section-topic">
			<h2>Mostly Popular Event Packages</h2>
		</div>
		<div class = "packages">
		
		<div class="package-grid">
            <div class="pack" id="p1">
                <div class="pic-polygon">
                </div>
                <div class="price">5 Main Packages</div>
                <div class="trip-det">
                    <p class="l1">Weddings</p>
                    <p class="l2">Hall No.302</p>
                    <p class="l3">Hotel Vibration Malabe</p>
                </div>
            </div>

            <div class="pack" id="p2">
                <div class="pic-polygon">
                </div>
                <div class="price">5 Main Packages</div>
                <div class="trip-det">
                    <p class="l1">Friday DJ Night</p>
                    <p class="l2">Hall No.201</p>
                    <p class="l3">Hotel Vibration Malabe</p>
                </div>
            </div>

            <div class="pack" id="p3">
                <div class="pic-polygon">
                </div>
                <div class="price">2 Main Packages</div>
                <div class="trip-det">
                    <p class="l1">Business Consferences</p>
                    <p class="l2">Hall No.103</p>
                    <p class="l3">Hotel Vibration Malabe</p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once'footer.php';
    ?>
	
	<script src = "js\homepage.js"></script>
</body>
</html>