<?php

session_start();
$F_name = $L_name = $P_no = $U_address = $Email = "";

include_once 'config.php';

if (isset($_SESSION['User_id'])) 
{
	$User_id = $_SESSION['User_id'];


	$sql = "SELECT * FROM user WHERE User_id = '$User_id'";
	$result = $con->query($sql);


	//Fecthes details from database
	if ($result && $result->num_rows > 0) 
	{
		$user=$result->fetch_assoc();
		$F_name = $user['F_name'];
		$L_name = $user['L_name'];
    	$P_no = $user['P_no'];
    	$U_address = $user['U_address'];
    	$Email = $user['Email'];
		$U_password = $user['U_password'];
	
	} 
	else 
	{
	    echo "<script>alert('Error fetching user data. Please try again later.');</script>";
	}

	//checks wheter the usr details are updated and submitted
	if(isset($_POST['update']))
	{
		$new_F_name = $_POST['f_name'];
		$new_L_name = $_POST['l_name'];
		$new_P_no = $_POST['p_no'];
		$new_U_address = $_POST['u_address'];
		$new_Email = $_POST['mail'];

		//Update user details in database

		$update_user_sql = "UPDATE user SET 
		f_name='$new_F_name',
		l_name='$new_L_name',
		p_no='$new_P_no',
		u_address='$new_U_address',
		email='$new_Email'
		WHERE User_id ='$User_id'";

			if($con->query($update_user_sql) === TRUE)
			{
				echo"<script>alert('Account Details Updated Successfully!')</script>";

				$F_name= $new_F_name;
				$L_name = $new_L_name;
				$P_no = $new_P_no;
				$U_address = $new_U_address;
				$Email = $new_Email;
			}
			else
			{
				echo"<script>alert('Error updating account details, Please try again.')</script>";
			}
		
	}
	
	//password update
	if (isset($_POST['save']))
	{
		$old_pwd = $_POST['o_pwd'];
		$new_pwd = $_POST['n_pwd'];
		
		$sql_check_pwd = "SELECT U_password FROM user WHERE User_id ='$User_id'";
		$result = $con->query($sql_check_pwd);

		if($result && $result->num_rows > 0)
		{
			$user = $result->fetch_assoc();
			$stored_pwd = $user['U_password'];

			//check old password matches the one in the db
			if ($old_pwd === $stored_pwd)
			{

				$update_pwd_sql = "UPDATE user SET U_password='$new_pwd' WHERE User_id='$User_id'";

				if ($con->query($update_pwd_sql) === TRUE)
				{
					echo "<script>alert('Password Updated Successfully!')</script>";
				}
				else
				{
					echo "<script>alert('Error Updating Password. Please try again. ')</script>";
				}
		}
		else
		{
			echo "<script>alert('Old password is incorrect.')</script>";		
		}
		}
	}
}
	
else
{
	header("Location:login.php");
	exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel Vibration-User profile</title>
    <link rel="stylesheet" href="style\userprofile.css">
</head>

<body>

    <?php
    include_once'header.php';
    ?>

    <main>
        <section class="user-profile">            
		
			<div class="user_center">
				<h1>User Profile</h1>
				<form method="POST" action="#">
					<div class="user-image">
                    <img src="images/u2.jpeg" alt="User Image">
					</div>
					<button href="#" class = "user_btn">Edit Profile Picture</button><br>
					<button class = "user_btn"><a href="mybooking.php" class="link">My Booking<a></button><br>
					<input type="hidden" name="user_id" value="<?php echo $User_id; ?>">
					<?php
            			echo "<button onclick=\"return confirm('Are you sure do you want to Delete Your account?')\" class=\"user_btn2\" id=\"user_delete\">
						<a class=\"link\" href=\"deleteaccount.php?delete_ac={$_SESSION['User_id']}\">Delete Account</a></button>";
            		?>
				</form>
			</div>
		</div>	
		
			<div class="acc_center">
				<h1>Account Details</h1>
				<form method="POST" action="">
				<div class="txt_field">
					<label>User ID</label>
						<input type="text" name="id" value="<?php echo $User_id; ?>" readonly required>
					</div>
					<div class="txt_field">
					<label>First Name</label>
						<input type="text" name="f_name" value="<?php echo $F_name; ?>"  required>
					</div>
					<div class="txt_field">
						<label>Last Name</label>
						<input type="text" name="l_name" value="<?php echo $L_name; ?>" required>						
					</div>
					<div class="txt_field">
						<label>Conatct Number</label>
						<input type="tel" name="p_no" pattern = "[0-9]{10}" value="<?php echo $P_no; ?>" required>						
					</div>
					<div class="txt_field">
						<label>Address</label>
						<input type="text" name="u_address" value="<?php echo $U_address; ?>" required>						
					</div>
					<div class="txt_field">
						<label>Email</label>
						<input type="email" name="mail"value="<?php echo $Email; ?>" required>						
					</div>
					<button name="update" type="Submit" class = "update_btn">Update</button>
				</form>
			</div>
		</div>
		
			<div class="pw_center">
				<h1>Update Password</h1>
				<form method="POST" action="">
					<div class="txt_field">
						<label>Old Password</label>
						<input type="password" name="o_pwd" placeholder="old password" required>						
					</div>
					<div class="txt_field">
						<label>New Password</label>
						<input type="password" name="n_pwd" placeholder="new password" required>						
					</div>
								
					<button name="save" type="Submit" class = "save_btn">Save</button>
				</form>
			</div>
		</div>
        </section>
    </main>

	<?php
		include_once'footer.php';
	?>
	

    <script src="js/userprofile.js"></script>
</body>
</html>