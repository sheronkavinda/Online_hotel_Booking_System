<?php

require "db.php";

if (isset($_POST["create"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $msg = $_POST["message"];

    if (
        empty($_POST["name"])
        || empty($_POST["email"])
        || empty($_POST["mobile"])
        || empty($_POST["message"])
    ) {
        header("location: ../contactus.php?status=Fill All Fields !");
        exit();
    } else {

        if (strlen($name) < 3 || strlen($name) > 50) {
            header("location: ../contactus.php?status=Invalid Name !");
            exit();
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("location: ../contactus.php?status=Invalid Email !");
            exit();
        } elseif (!preg_match("/07[0,1,2,4,5,6,7,8][0-9]{7}/", $mobile) || strlen($mobile) !== 10) {
            header("location: ../contactus.php?status=Invalid Mobile No !");
            exit();
        } elseif (strlen($msg) < 8 || strlen($msg) > 200) {
            header("location: ../contactus.php?status=Invalid Message Length !");
            exit();
        } else {

            $q1 = "INSERT INTO `contactus` (`name`,`email`,`mobile`,`message`) 
            VALUES ('" . $name . "','" . $email . "','" . $mobile . "','" . $msg . "')";
            $rs1 = $conn->query($q1);
            $conn->close();

            header("location: ../contactus.php?status=Message Successfully Sent !");
            exit();
        }
    }
} else if (isset($_POST["edit"])) {

    $id = $_POST['contactId'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $msg = $_POST["message"];

    if (
        empty($_POST["contactId"])
        || empty($_POST["name"])
        || empty($_POST["email"])
        || empty($_POST["mobile"])
        || empty($_POST["message"])
    ) {
        header("location: ../contactus.php?status=Fill All Fields !");
        exit();
    } else {

        if (strlen($name) < 3 || strlen($name) > 50) {
            header("location: ../contactus.php?status=Invalid Full Name !");
            exit();
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("location: ../contactus.php?status=Invalid Email !");
            exit();
        } elseif (!preg_match("/07[0,1,2,4,5,6,7,8][0-9]{7}/", $mobile) || strlen($mobile) !== 10) {
            header("location: ../contactus.php?status=Invalid Mobile No !");
            exit();
        } elseif (strlen($msg) < 8 || strlen($msg) > 200) {
            header("location: ../contactus.php?status=Invalid Message Length !");
            exit();
        } else {

            $q1 = "UPDATE `contactus` SET name = '" . $name . "', email = '" . $email . "', mobile = '" . $mobile . "', message = '" . $msg . "' WHERE contactId = '" . $id . "'";
            $rs1 = $conn->query($q1);

            header("location: ../contactus.php?status=Message Successfully Updated !");
            exit();
        }
    }
} else if (isset($_POST["delete"])) {

    if (empty($_POST["contactId"])) {
        header("location: ../contactus.php?status=Delete Unsuccessfull !");
        exit();
    }

    $id = $_POST["contactId"];

    $q5 = "DELETE FROM `contactus` WHERE contactId='" . $id . "'";
    $rs5 = $conn->query($q5);
    $conn->close();

    header("location: ../contactus.php?status=Message Successfully Deleted !");
    exit();

} else {
    header("location: ../contactus.php");
    exit();
}
