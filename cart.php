<?php
require 'common.php';
session_start();
if(!isset($_SESSION['userid']))
{
    include 'navbar.php';
    die('Log-in to view the cart page!');
}
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
        <div class="container">
            <div class="row mt-3 mb-3 justify-content-center">
                <div class="col-sm-6">
                    
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th> Delete </th>
                            </tr>
                                <?php
                                $sumtotal = 0;
                                $userid = $_SESSION['userid'];
                                $queryrun = "SELECT p.name AS NAME, p.price AS PRICE, p.id AS ID FROM products p INNER JOIN users_products up ON p.id=up.product_id INNER JOIN users u ON u.id=up.user_id WHERE u.id='".$userid."'";
                                $wow = mysqli_query($con, $queryrun);
                                $num = mysqli_num_rows($wow);
                                if($num!=0){
                                $results = mysqli_query($con, $queryrun);
                                while($rows = mysqli_fetch_array($results))
                                {
                                $sumtotal+=$rows['PRICE'];   
                                echo "<tr> <td>".$rows['NAME']." </td>";
                                echo "<td>".$rows['PRICE']." </td> ";
                                echo "<td><a href='cartdelete.php?id={$rows['ID']}'>Delete?</a> </td> </tr>";
                                }
                                }
                                else 
                                { ?>  
                                    <p class="text-center fw-bold" style="font-size: 20px;">
                                    Add items to cart first!
                                    </p>
                                <?php }
                                ?>        
                        </tbody>    
                    </table>
                    <p class="text-center fw-bold">
                     Sum Total: 
                    <?php echo "<tr> <td>".$sumtotal." </td> </tr>"; ?>   
                    </p>
                </div>
                     
                    <a href="success.php" name="add" value="add" class="btn btn-success">CHECKOUT</a>
                    
            </div>
        </div> 
        </div>
