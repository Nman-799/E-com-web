<?php
require 'common.php';
session_start();
if(isset($_SESSION['userid'])) {
echo $_SESSION['email'];
} 
else {
  include 'navbar.php';
  die("Sign up or log-in first to access this page <a href='index.php'>Home</a>");
}
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
            <p class="fw-bold text-left">
                Change Password
            </p>
            <form method="post", action="changepass.php">
                        <input type="text" class="form-control" name="password" required placeholder="Old Password" pattern=".{6,}"><br>
                        <input type="text" class="form-control" name="newpassword" required placeholder="New Password" pattern=".{6,}"><br> 
                        <input type="text" class="form-control" name="newpassword2" required placeholder="Re-type new password" pattern=".{6,}"><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
      

<footer class="container-fluid text-center bg-dark text-light text-muted foot1">
                
       <div class="container-fluid text-center text-md-start mt-10">
      
       <div class="row mt-3">
       <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>E-Commerce Store
          </h6>
          <p>
              A one-stop-shop for all your smartphone needs.<br>
             © 2021 Copyright.<br>
             <a href="index.php" class="text-reset link-active">Home</a> <br>
             <a href="Contact.php" class="text-reset link-active">Contact Us</a>
          </p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            My Account
          </h6>
          <p>
            <a href="#" class="text-reset" data-bs-toggle="modal" data-bs-target="#mymodal">Log-in</a>
          </p>
          <p>
              <a href="SignUp.php" class="text-reset">Sign-up</a>
          </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Contact Us
          </h6>
          <p><i class="fas fa-home me-3"></i> Gomti Nagar, Lucknow, India</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            namansrivastava1999@gmail.com
          </p>
          <p><i class="fas fa-mobile me-3"></i> +91 78971 46046</p>
          </div>
      </div>
      </div>
     </footer>
   
<div class="modal fade" id="mymodal" tabindex="-1">
  <div class="modal-dialog shadow-sm">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        <button type="button" class="btn btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
                    
                    <form method="post" action="login.php" >
                        Email: <input type="text" class="form-control" name="emailid" required placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                        Password: <input type="text" class="form-control" name="password" required placeholder="Password" pattern=".{6,}"><br>
                        <button type="submit" name="submit" class="btn btn-success">Login</button> 
                    </form>        
      </div>
      <div class="modal-footer" style="display: block;">
          Forgot password? <a href="settings.php">Reset Password</a>
      </div>
      
    </div>
  </div>
</div>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
