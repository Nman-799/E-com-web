<?php
require 'common.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/fonts/css/all.min.css">
        <title> Contact Us </title>
        <style>
            .foot1{
                position: absolute;
                
                left: 0;
                right: 0;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <?php include 'navbar.php' ?>
        <div class="container ">
            <div class="row mt-3 mb-5">
                <div class="col-lg-7">
                    <p style="font-weight: bold; font-size: 25px;"> Live Support </p> 
                    <p class="fw-light">
                        24 hours | 7 days a week | 365 days a year | Live Technical Support <br> 
                    <p class="fw-bold"> E-Commerce Store strives to provide the best service possible with every contact! </p>  
                    <p>
                        We operate in an Industry built on trust. This can only be achieved through communication and experienced support — 
                        from the first contact past your ten-year anniversary.
                    </p>
                     
                    <p class="fw-bold">At our store you always talk to a human! </p> 
                    <p> 
                        Have questions about background screening? Our entire team receives specailized training regularly to ensure 
                        you're receiving the best information possible. From basic questions to complex compliance inquiries, we're here to help! 
                        Interested in learning more about our services? Our Account Executives take the time to dicusss your 
                        existing background screening program and help you make smart decisions that best meet your needs. 
                    </p>
                </div>
                <div class="col-lg-5 justify-content-center text-center d-md-none d-lg-block">
                    <img class="img-responsive" src="images/call-center.jpg" width="width" height="450px" alt="alt"/>
                </div>
            </div> 
            
            <div class="row mb-4">
                <div class="col-md-8">
                    <p style='font-size: 20;' class="fw-bold"> Fill in your details: </p>
                    <div class="form-control" style="padding-top: 15px;">
                        <form method='post' action='contact_store.php'>
                        <div class="row">
                        <div class="col">
                            First Name: <input type="text" class="form-control" name="firstname" required placeholder="First Name"><br>
                        </div>
                        <div class="col">
                        Last Name: <input type="text" class="form-control" name="lastname" required placeholder="Last Name"><br>
                        </div>
                        </div>
                        Email-Id: <input type="text" class="form-control" name="emailid" required placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                        Query:
                        <textarea class="form-control" id="query" rows="5" placeholder="Enter your query" name="query"></textarea> <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>                    
                </div>
                </div>
                <div class="col-md-4">
                    <p class="fw-bold" style="font-size: 20;"> <i class="fas fa-map-marked-alt"></i> Reach Out: </p>
                    <p style="font-size: 18;"> 
                        E-Commerce Headquarters, <br>
                        Gomti Nagar, <br>
                        Lucknow - 226010. <br>
                        Phone:(00) 222 666 444 <br>
                        Fax: (000) 000 00 CO 0 <br>
                        Email: ecommercestore@estore.com 
                    </p>
                </div>
            
            
            
        </div>
            
     <?php include 'footer.php' ?> 
   
<div class="modal fade" id="mymodal" tabindex="-1">
  <div class="modal-dialog shadow-sm">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        <button type="button" class="btn btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
                    
                    <form  method="post" action="login.php" >
                        Email: <input type="email" class="form-control" name="emailid" required placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
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
