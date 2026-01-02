<?php
    session_start(); 
    if(!isset($_SESSION["email"]))
    {
        header("location:login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hotel Vibration-Admin Profile</title>
    <link rel="stylesheet" href="style/adminprofile.css">
</head>

<body>
	
    <?php
        include_once("headerAdmin.php")
    ?>

   <main>
    <div class="admin-panel">
        <section class="reservation-request">
            <h2>Reservation Request</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Event Type</th>
                        <th>Package</th>
                        <th>Event Date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th> 
                        <th>Mobile</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once("read_reservation.php");
                    ?>
                </tbody>
            </table>
        </section>

        <section class="Account-Details">
            <h2>Account Details</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>User Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once("account_read.php");
                    ?>
                </tbody>
            </table>
        </section>

        <section class="manage-user">
            <div class="account-activation">
                <h3>Account Activation</h3>
                <form action="account_activation.php" method="post" onsubmit="return activateAccount();">
                    
                    <label for="useremail">Enter email</label>
                    <input type="text" id="useremail" name="useremail" placeholder="Enter Email" requred>

                    <label for="password">Enter password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" requred>

                    <label for="user_type">Select User Type</label>

                    <select id="user_type" name="user_type" required>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                        
                    </select>
                    <br>

                    <button id="activateBtn">Activate</button>
                </form> <br>

                <h3>Upadate Account</h3>
                <form action="account_update.php" method="post" onsubmit="return updateAccount();">

                    <label for="useremail">Enter email</label>
                    <input type="text" id="updateUserEmail" name="useremail" placeholder="Enter Email" requred>

                    <label for="password">Enter password</label>
                    <input type="password" id="updatePassword" name="password" placeholder="Enter password" requred>

                    <label for="updateUserEmail">Select User Type</label>

                    <select id="updateUserType" name="updateUserType" required>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>

                    <br>


                    <button id="updateBtn">Update</button>
                </form> <br>

                <h3>Delete Account</h3>
                <form action="account_delete.php" method="post" onsubmit="return deleteAccount();">
                    <label for="deleteUserEmail">Enter Account Email</label>
                    <input type="text" id="deleteUserEmail" name="deleteUserEmail" placeholder="Account Email" requred>

                    <button id="deleteBtn">Delete</button>
                </form>

                
            </div>
        
            
            <div class="booking-confirmation">
            <form action="update_status.php" method="post" onsubmit="return updateBookingStatus();">
                <h3>Booking Confirmation</h3>

                <label for="bookingID">Enter Booking ID</label>
                <input type="text" id="bookingID" name="bookingID" placeholder="Enter Booking ID" requred>

                <label for="status">Update Booking Status</label>

                    <select id="status" name="status" required>
                        <option value="successful">Successful</option>
                        <option value="reject">Reject</option>
                        
                    </select>
                    <br>

                

                <button id="bookingUpdateBtn">Update</button>
            </form>

            </div>


            <div class="contact-user">
            <form action="contact_user.php" method="post" onsubmit="return contactUser();">
                <h3>Contact User</h3>
                <label for="userEmail">User Email</label>
                <input type="email" id="userEmail" name="userEmail" placeholder="Enter User Email" required>
                <textarea id="userMessage" name="userMessage" placeholder="Message" required></textarea>
                <button id="sendMessageBtn">Send</button>
            </form>
            </div> 
        
        </section>

        
       
   

    </div>
   </main>
	
   <?php
            include_once("footer.php")
    ?>


	<script src = "js/adminprofile.js"></script>
</body>
</html>