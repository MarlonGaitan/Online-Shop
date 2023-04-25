<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = 'receiptContainer'>
<?php
include('banner.php');
session_start();
include('db_connection.php');
$totalPrice = 0;
$sql="SELECT product_name, num_of_products FROM cart_tab where user_name=$_SESSION[sid]";
$result = mysqli_query($conn, $sql);
while($row = $result -> fetch_assoc())
		{
			$sql2="SELECT product_name, price FROM product_tab where sid = $row[product_name]";   
			$result2 = mysqli_query($conn, $sql2);
			$row2 = $result2->fetch_assoc();
            echo "<div class = 'product_container' style = 'display:flex; flex-direction:column;'>";
            echo "<span>Product: ".$row2['product_name']."</span>";
            echo "<span>Price: ".$row2['price']."</span>";
            echo "<span>Number of Items: ".$row['num_of_products']."</span>";
            echo "</div>";
			$totalPrice = ($totalPrice + $row2['price']) * $row['num_of_products'];
		}
        echo "<div style = 'display:flex; flex-direction:column;'>";
        if($_SESSION['role'] == 2){
            echo "<span>Delivery: $20</span>";
            echo "<span>Total Price: $".($totalPrice+20)."</span>";
        }
        else{
        echo "<span>Delivery: FREE</span>";
        echo "<span>Total Price: $".$totalPrice."</span>";
        }
        echo "</div>";
?>
</div>
</body>
</html>
