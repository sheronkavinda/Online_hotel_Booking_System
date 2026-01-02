<?php

    session_start();
    require 'config.php';

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $Email=$_POST["email"];
        $Password=$_POST["password"];

        $sql1="SELECT * FROM account_details WHERE email='$Email' AND password='$Password'";
        $sql2="SELECT * FROM user WHERE Email='$Email' AND U_password='$Password'";

        $result1=mysqli_query($con,$sql1);
        $result2=mysqli_query($con,$sql2);

        if ($result1 && mysqli_num_rows($result1) > 0) 
        {
            $row = mysqli_fetch_assoc($result1);

            $_SESSION['email'] = $Email; 
            $_SESSION['user_type'] = $row['user_type'];
            
            if ($row["user_type"] == "user") 
            {
                header("Location: homepage.php");
            } 
            elseif ($row["user_type"] == "admin") 
            {
                header("Location: adminprofile.php");
            }
        } 
        else if ($result2 && mysqli_num_rows($result2) > 0)
        {
            $row = mysqli_fetch_assoc($result2);

            $_SESSION['Email'] = $Email;
            $_SESSION['F_name'] = $row['F_name'];
            $_SESSION['User_id'] = $row['User_id'];

            header('Location: homepage.php');
        }
        else 
        {
            echo "Username or password incorrect.";
        }
    } 
    
    else 
    {
        echo "Please enter both email and password.";
    }
       
?>