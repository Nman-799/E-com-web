<?php
require 'common.php';
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/fonts/css/all.min.css">
        <title> About Us </title>
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
       
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4 justify-content-center text-center">
                        
                        <p style="font-weight: bold" class="text-center">
                        About Us:
                        </p>
                    
                        <img class="img-responsive" src="images/logo.jpg" width="200px" height="200px" alt="alt"/>
                        <p> At E-Commerce Store, we help you decide "What to Buy" & "Best Price to Buy It".
                        Just pick a Best Buy offer for the mobile you're looking for, to get the best combination of price & service.
                        Latest prices, deals, and facilities from all leading online stores are listed for every product.
                        Never miss a deal, price drop or launch by subscribing to our Exclusive Deals, Mobile Price & Mobile Launch alerts. <br><br>
                        Visit us regularly to get latest mobile price in India, tablet price in India, and laptop price in India.
                        <br><br>
                        </p>
                        <p style="font-weight: bold;">
                        Thank you for making us one of the largest gadget discovery & shopping destinations in India!
                        </p>                    
                </div>
                <div class="col-md-4 text-left">
                    <p style="font-weight: bold" class="text-center">
                        Our History
                    </p>
                    <p>
                        1998- <br>
                        The company was founded in 1998. spurred by
                        what Velos called his "Initiating framework“, which
                        described his efforts as an Inmate to participate in
                        the Internet busmess boom during that time In
                        1990. Velos left his employment as president of
                        Ofcol & Co and moved to Seattle He began to
                        work on a Dusmess plan for what would eventually
                        become E-Store.
                     </p>
                     <p>
                         2002- <br>
                         In January 2002 E— store has received a funding
                         of $12 million from Venture Partners and Indo-US
                         Venture Partners
                         <br><br>
                         2008- <br>
                         ln Juty 2008 the company raised a further $45 million 
                         from Bessemer Venture Partners, along with exrsting 
                         Investors Venture Partners and Indo-US Venture Partners
                         <br><br>
                         2015- <br> 
                         E- Store received Its 3rd round of funding of $133 million
                         on Feb-2015 The 3rd round of funding was led by Fcom With 
                         all the current institutional investors including Kalaari Capital.
                     </p>
                </div>
                <div class="col-md-4 text-left">
                    <p style="font-weight: bold" class="text-center">
                        Opportunities
                    </p>
                    <p>
                        Available Roles: <br><br>

                   1. Jr/Sr Web Developer [Full Time Role, also
                   available as a 6 Months Internship] <br><br> 
                   2. Business Apprentice [6 Months Internship] <br><br> 
                   3. Manager at backend operations [Full Time Role + also 
                   available as a 6 Months Internship]
                    </p>
                </div>
                
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