<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--To display the content the same way even if the screen sizes are different-->
    <title>Hotel Vibration-Sign Up</title>
    <link rel="stylesheet" href="style/signup.css">
	<?php
		include_once('config.php');
	?>
</head>

<body>
    
    <?php
        include_once('headerLOGIN&SIGNUP.php');
    ?>

    <main>
         <div class="container">
			<div class="center">

				<h1>Sign Up</h1>

				<form method="POST" action="process_signup.php">
					<div class="txt_field">
					<label>First Name</label>
						<input type="text" id="f_name" name="f_name" placeholder="Your First Name" required>
						
					</div>
					<div class="txt_field">
						<label>Last Name</label>
						<input type="text" id="l_name" name="l_name" placeholder="Your Last Name" required>
						
					</div>
					<div class="txt_field">
						<label>Conatct Number</label>
						<input type="tel" id="p_no" name="p_no" pattern = "[0-9]{10}" placeholder="077XXXXXXX" required>
						
					</div>
					<div class="txt_field">
						<label>Address</label>
						<input type="text" id="address" name="address" placeholder="471/1,Exam..." required>
						
					</div>
					<div class="txt_field">
						<label>Email</label>
						<input type="email" id="mail" name="mail" placeholder="example@gmail.com" required>
						
					</div>
					<div class="txt_field">
						<label>Password</label>
						<input type="password" id="pwd" name="pwd" placeholder="password" required>
						
					</div>

					<button name="submit" type="submit" id = "signup_btn">Sign Up</button>

					<div id="login_btn">
						Have an Account ? <a href="login.php">Login Here</a>
					</div>

				</form>
			</div>
		</div>
  </main>
	
    <?php
        include_once('footer.php');
    ?>

	<script src = "js/signup1.js"></script>
</body>
</html>