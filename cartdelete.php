<?php
require 'common.php';
session_start();
$item_id = $_GET['id'];
$user_id = $_SESSION['userid'];
$deletequery = "DELETE FROM `users_products` WHERE `users_products`.`product_id` = ".$item_id." AND `users_products`.`user_id`=".$user_id."";
$deletion = mysqli_query($con, $deletequery);
header('location: cart.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
