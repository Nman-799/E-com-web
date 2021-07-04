<?php
$con=mysqli_connect("localhost", "root", "", "webproj") or die(mysqli_error($con));
$name = $_POST['name'];
$email = $_POST['emailid'];
$password = $_POST['password'];
$phone = $_POST['phonenumber'];
$city = $_POST['city'];
$address =  $_POST['address'];

$query = "SELECT email_id FROM users WHERE email_id ='" . $email . "'" ;
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$num = mysqli_num_rows($result);
    
if($num == 0) 
{
$user_reg_query = "INSERT INTO users(name, email_id, password, phone, city, address) values('$name', '$email', '$password', '$phone', '$city', '$address')";
$user_reg_submit = mysqli_query($con, $user_reg_query) or die(mysqli_error($con));
header('location: index.php'); 
}
else 
{
include 'navbar.php';
echo('Email already exists, log-in instead <a href="index.php">Home</a>');
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

