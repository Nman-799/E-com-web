<?php
$con=mysqli_connect("localhost", "root", "", "webproj") or die(mysqli_error($con));
session_start();
$oldpassword = $_POST['password'];
$password = $_POST['newpassword'];
$password2 = $_POST['newpassword2'];
if(strcmp($password, $password2)==0)
{
    if(isset(($_SESSION['userid']))) 
    {
    $email2 = $_SESSION['email'];
    $email_check = "SELECT password FROM users WHERE email_id ='" . $email2 . "'";
    $result = mysqli_query($con, $email_check) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $pass = $row['password'];
        if(strcmp($oldpassword, $pass) == 0)
        {
        $update_pass_query="UPDATE `users` SET password='".$password."' WHERE `users`.`email_id` = '".$email2."'";
        $update_pass= mysqli_query($con, $update_pass_query);
        header('location: index.php?PasswordUpdated');
        }
        else 
        {
            include 'navbar.php';
            echo 'Old password does not match the one entered.';
        }
    }
}
else 
{
    include 'navbar.php';
    echo 'New passwords do not match. Retry';
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>