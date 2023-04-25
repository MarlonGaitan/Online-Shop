<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
<?php
include('banner.php');
session_start();
$user = $_SESSION['sid'];
$name = $_POST['name'];
$products = $_POST['numItems'];
include "db_connection.php";
$sql = "INSERT INTO `cart_tab` (`product_name`, `user_name`, `num_of_products`) VALUES
($name, $user, $products)";
$result=$conn->query($sql);
?>
    <h1>SUCCESFULLY ADDED TO CART!</h1>
</body>
</html>
