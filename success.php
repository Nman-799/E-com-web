<?php
require 'common.php';
session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/fonts/css/all.min.css">
        <title> Change Password </title>
        <style>
            .foot1{
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <?php include 'navbar.php' ?>
      
        <div class="container mt-4">
           <div class="row mt-4 justify-content-center">
            <div class="col-sm-5">
            <p class="fw-bold text-center">
                You have successfully ordered your products from E-Commerce Store. Thank you for shopping with us. <br> <br>
            </p>
            <p class="fw-light text-center">
            You can buy more phones <a href="products.php" class="text-reset">here</a>.
            </p>
        
        <?php
        include 'footer.php';
        $user_id = $_SESSION['userid'];
        $deletequery = "DELETE FROM `users_products` WHERE `users_products`.`user_id`=".$user_id."";
        $deletion = mysqli_query($con, $deletequery); 
        ?>
   </body>
   </html>