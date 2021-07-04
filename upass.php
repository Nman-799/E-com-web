<?php
$con=mysqli_connect("localhost", "root", "", "webproj") or die(mysqli_error($con));
$email = $_POST['emailid'];
$password = $_POST['newpassword'];
$password1 = $_POST['newpassword1'];

$query = "SELECT email_id FROM users WHERE email_id ='" . $email . "'" ;
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$num = mysqli_num_rows($result);
    
if($num == 0) 
{
    
    include 'navbar.php';
    echo('This email does not exist, <a href="updatepass.php">Retry</a>');
}
else 
{
    if(strcmp($password, $password1) == 0)
    {
        $update_pass_query="UPDATE `users` SET password='".$password."' WHERE `users`.`email_id` = '".$email."'";
        $update_pass= mysqli_query($con, $update_pass_query);
        include 'navbar.php';
        echo("Password has been updated");
    }
    else 
    {
        include 'navbar.php';
        echo("Passwords don't match <a href='updatepass.php'>Retry</a>");
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

