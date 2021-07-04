<?php
require 'common.php';
session_start();
echo 'Welcome ' .$_SESSION['email'];
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/fonts/css/all.min.css">
        <title> Home </title>
        <style>
            .stylejumbo{
                background-color: rgba(27,27,27,0.9);
                padding: 20px 0px 20px 0px;
                color: white;
                background-image: url("https://www.androidpolice.com/wp-content/uploads/2019/12/Pile-of-2019-flagship-phones-scaled.jpg");
                background-size: cover;
                text-align: center;
                margin-bottom: 10px;
            }
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
        
            <div class="jumbotron stylejumbo">
                <div class="container">
                <h1 class="display-4">Welcome to E-Commerce Store</h1>
                <p class="lead">A one-stop-shop for all your smartphone needs.</p> <hr class="my-4">
                </div>
            </div>
            
        <div class="container">
           <div class="row mb-2 mt-3" style=" height: 500px">
                <div class="col-md-4">
                    <div class="card text-center">
                    <h5 class="card-header">Apple iPhone-12</h5>
                    <img src="images/iphone.jpg" class="card-img-top img-responsive" style="object-fit: contain; height:250px;">
                    <div class="card-body">
                    <h5 class="card-title">Price: ₹124,700</h5>
                    <p class="card-text">128GB, 12 GB RAM, 6.7-inch (17 cm diagonal) Super Retina XDR display, Colour:Pacific Blue</p>
                    <a href="cartadd.php?id=1" name="add" value="add" class="btn btn-block w-100 btn-primary">Add to cart</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                    <h5 class="card-header">Samsung Note 20 Ultra</h5>
                    <img src="images/note.jpg" class="card-img-top" style="object-fit: contain; height:250px;">
                    <div class="card-body">
                    <h5 class="card-title">Price: ₹91,999</h5>
                    <p class="card-text">128 GB, 12 GB RAM, 6.9-inch WQHD+ dynamic Amoled display, Colour: Mystic Bronze</p>
                    <a href="cartadd.php?id=2" name="add" value="add" class="btn btn-block w-100 btn-primary">Add to cart</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                    <h5 class="card-header">Samsung S21 Ultra</h5>
                    <img src="images/s21pro.jpg" class="card-img-top" style="object-fit: contain; height:250px;">
                    <div class="card-body">
                    <h5 class="card-title">Price: ₹98,750</h5>
                    <p class="card-text">256 GB, 12 GB RAM, 6.8-inch Dynamic AMOLED 2X Display, WQHD+ resolution, Colour: Phantom Black</p>
                    <a href="cartadd.php?id=3" name="add" value="add" class="btn btn-block w-100 btn-primary">Add to cart</a>
                    </div>
                    </div>                
                </div>
            </div>
            <div class="row mb-3" style="height:500px">
                <div class="col-md-4">
                    <div class="card text-center">
                    <h5 class="card-header">One Plus 9 Pro</h5>
                    <img src="images/op9.jpg" class="card-img-top" style="object-fit: contain; height:250px;">
                    <div class="card-body">
                    <h5 class="card-title">Price: ₹64,999</h5>
                    <p class="card-text">128GB Storage, 8GB RAM, 6.7 Inches Fluid AMOLED Display with 120Hz refresh rate, Colour: Stellar Black</p>
                    <a href="cartadd.php?id=4" name="add" value="add" class="btn btn-block w-100 btn-primary">Add to cart</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                    <h5 class="card-header">Google Pixel 4</h5>
                    <img src="images/gpixel.jpg" class="card-img-top" style="object-fit: contain; height:250px;">
                    <div class="card-body">
                    <h5 class="card-title">Price: ₹62,900</h5>
                    <p class="card-text">64GB, 6GB RAM, 5.7 Inches P-OLED, 90Hz, HDR Display, Colour: Oh, So Orange</p>
                    <a href="cartadd.php?id=5" name="add" value="add" class="btn btn-block w-100 btn-primary">Add to cart</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                    <h5 class="card-header">Samsung Galaxy Fold 2</h5>
                    <img src="images/fold.jpg" class="card-img-top" style="object-fit: contain; height:250px;">
                    <div class="card-body">
                    <h5 class="card-title">Price: ₹1,34,999</h5>
                    <p class="card-text">256GB Storage, 12GB RAM, 7.6-inch dynamic AMOLED 2X-Infinity-O, QXGA+ Colour: Mystic Black</p>
                    <a href="cartadd.php?id=6" name="add" value="add" class="btn btn-block w-100 btn-primary">Add to cart</a>
                    </div>
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
          Forgot password? <a href="settings.php">Reset Password</a>
      </div>
    </div>
  </div>
</div>
    </body>
</html>

