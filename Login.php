<?php
$con=mysqli_connect("localhost", "root", "", "webproj") or die(mysqli_error($con));
session_start();
$email = mysqli_real_escape_string($con, $_POST['emailid']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$query = "SELECT id, email_id FROM users WHERE email_id ='" . $email . "' AND password='" . $password . "'" ;
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num == 0) 
{
  echo('Entered E-mail and Password Combination does not exist: <a href=index.php>Retry</a>');
} 
else 
{
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email_id'];
  $_SESSION['userid'] = $row['id'];
  header('location: products.php');
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
