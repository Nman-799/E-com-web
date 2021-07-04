<?php
include 'common.php';
$fname = mysqli_real_escape_string($con, $_POST['firstname']);
$lname = mysqli_real_escape_string($con, $_POST['lastname']);
$email2 = mysqli_real_escape_string($con, $_POST['emailid']);
$user_query = mysqli_real_escape_string($con, $_POST['query']);

$run = "INSERT INTO `contactus` (`First`, `Second`, `email_id`, `query`) VALUES ('$fname', '$lname', '$email2', '$user_query')";
$addtodb = mysqli_query($con, $run);
header('location: Contact.php?success');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>