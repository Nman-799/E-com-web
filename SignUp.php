<?php require 'common.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/fonts/css/all.min.css">
        <title> Sign Up </title>
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
        <div class="container mt-4">
        <div class="row mb-4 justify-content-center">
                <div class="col-md-8">
                <p style='font-size: 20;' class="fw-bold text-center"> Sign-up as a user </p>
                    <div class="form-control" style="padding-top: 15px;">
                        <form method="post" action="signupform.php">
                        Name: <input type="text" class="form-control" name="name" required placeholder="Name"><br>
                        Email: <input type="email" class="form-control" name="emailid" required placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                        Password: <input type="text" class="form-control" name="password" required placeholder="Password"><br>
                        Phone Number: <input type="tel" class="form-control" name="phonenumber" required placeholder="Phone" pattern="[0-9]{10}"><br>
                        City: <input type="text" class="form-control" name="city" required placeholder="City"><br>
                        Full Address:
                        <textarea class="form-control" id="Query" rows="5" placeholder="Enter Full Address" name="address"></textarea>
                        <button type="submit" class="btn btn-success w-100">Sign Up Now</button>
                    </form>                        
                
                
            <p class="text-center fw-light"><br> Already a member? <a href="#" class="text-reset" data-bs-toggle="modal" data-bs-target="#mymodal">Log-in </a>
        </div>
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
          Forgot password?<a href="settings.php">Reset Password</a>
      </div>
    </div>
  </div>
</div>
<?php 


?>

 */

