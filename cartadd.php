<?php
$con=mysqli_connect("localhost", "root", "", "webproj") or die(mysqli_error($con));
session_start();
if (isset($_GET['id']) && is_numeric($_GET['id'])) 
{
    $item_id = $_GET['id'];
    $user_id = $_SESSION['userid'];
    $query = "INSERT INTO users_products(user_id, product_id) VALUES('$user_id', '$item_id')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
 /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>