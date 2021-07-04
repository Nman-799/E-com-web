if (isset($_SESSION['userid'])) {
  echo "Hello ".$_SESSION['email'];
} else {
  echo "Hello Guest";
}

<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>



$user_id = $_SESSION['userid'];
$query = "SELECT name AS Name FROM users_products JOIN products ON users_products.product_id = products_id WHERE users_products.user_id='$user_id';
$result = mysqli_query($con, $query)or die($mysqli_error($con));



SELECT p.name FROM products p INNER JOIN users_products up ON p.id=up.product_id INNER JOIN users u ON u.id=up.user_id WHERE u.id=3
