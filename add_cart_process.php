<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="css/receiptStyle.css">
</head>
<body bgcolor="#262626">
<?php
include('banner.php');
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
<script type="text/javascript">

</script>
</html>
