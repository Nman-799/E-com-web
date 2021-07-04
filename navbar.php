<?php ?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/fonts/css/all.min.css">
        <title> Home </title>
        <style>
            
        </style>
    </head>

<header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark static-top"> 
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand"> E-Commerce Store </a>
                </div>   
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#NavbarNav"> 
                    <span class="navbar-toggler-icon"></span> 
                </button>
            <div class="collapse navbar-collapse" id="NavbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active"><a href="index.php" class="nav-link"><i class="fas fa-home"></i> Home</a></li>
                        <li class="nav-item active"><a href="AboutUs.php" class="nav-link"><i class="fas fa-info"></i>  About-Us</a></li>
                        <li class="nav-item active"><a href="cart.php" class="nav-link"><i class="fas fa-shopping-cart"></i>  Cart</a></li>
                        <li class="nav-item active"><a href="SignUp.php" class="nav-link"><i class="fas fa-user"></i> Sign-up</a></li>
                        <li class="nav-item active"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#mymodal">
                                <i class="fas fa-sign-in-alt"></i> Log-in </a> </li>
                        <li class="nav-item active"><a href="Logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i>  Logout</a></li>
                    </ul>   
            </div>
            </div>
        </nav>
        </header>
    
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
