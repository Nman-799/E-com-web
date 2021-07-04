<?php
$con=mysqli_connect("localhost", "root", "", "webproj") or die(mysqli_error($con));
session_start();
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
                Reset your password
            </p>
            <form method='post' action='upass.php'>
                        <input type="text" class="form-control" name="emailid" required placeholder="Enter your email-id" pattern=".{6,}"><br>
                        <input type="text" class="form-control" name="newpassword" required placeholder="New Password" pattern=".{6,}"><br> 
                        <input type="text" class="form-control" name="newpassword1" required placeholder="Re-type new password" pattern=".{6,}"><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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


    


