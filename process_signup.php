<?php
    include'config.php';

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $pno = $_POST['p_no'];
    $address = $_POST['address'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];

    if(empty($fname) || empty($lname) || empty($pno) || empty($address) || empty($email) || empty($password))
    {
        die("Please fill in all the fields.");
    }
    
    $sql="INSERT INTO user (User_id,F_name,L_name,P_no,U_address,Email,U_password) 
    VALUES ('','$fname','$lname','$pno','$address','$email','$password')";

    if (mysqli_query($con, $sql)) 
    {
        header("location:homepage.php");
        echo "<script>alert('SignUp Was Successful')</script>";
} else {
    echo "<script>alert('There was a problem. Please Try Again');</script>";
}
    mysqli_close($con);
?>