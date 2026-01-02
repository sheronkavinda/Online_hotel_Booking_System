<!DOCTYPE html>
<html>
<head>
    <title>Hotel Vibration-Login</title>
    <link rel="stylesheet" href="style/login.css">
</head>

<body>

    <?php
        include_once("headerLOGIN&SIGNUP.php")
    ?>

   <main>
        <div class="login_section">
            <h1>Log In</h1>

            <form method="POST" action="login_credential.php" onsubmit="return loginUser()">
                <div class="txt_field">
                    <label>Email</label>
					<input type="email" id="email" name="email" placeholder="example@email.com" required>
                </div>
                    
                <div class="txt_field">
                    <label>Password</label>
					<input type="password" id="password" name="password" placeholder="Password" required>
                </div>

                <button name="login" type="Submit" id ="login_btn">Log in</button>
				<div id="signup_link">
					Don't have an account? <a href="signup.php">Sign up here</a>
				</div>
            </form>
        </div>
   </main>
	
    <?php
            include_once("footer.php")
    ?>

    <script src = "js/login.js"></script>
</body>
</html>