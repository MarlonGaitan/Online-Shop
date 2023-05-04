<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/receiptStyle.css">
    <title>Check Out</title>
</head>
<body bgcolor="#262626">
    <div class = 'receiptContainer'>
<?php
include('banner.php');
include('db_connection.php');
$totalPrice = 0;
$sql="SELECT product_name, num_of_products FROM cart_tab where user_name=$_SESSION[sid]";
$result = mysqli_query($conn, $sql);
while($row = $result -> fetch_assoc())
		{
			$sql2="SELECT product_name, price FROM product_tab where sid = $row[product_name]";   
			$result2 = mysqli_query($conn, $sql2);
			$row2 = $result2->fetch_assoc();
            echo "<table style = ' width:500px; border-bottom: 2px solid white;margin-bottom:50px'>";
            echo "<tr>";
            echo "<td>";
            echo "<span>Product: ".$row2['product_name']."</span>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<span>Price: $".$row2['price']."</span>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<span>Number of Items: ".$row['num_of_products']."</span>";
			$totalPrice = ($totalPrice + $row2['price']) * $row['num_of_products'];
            echo "</td>";
            echo "</tr>";
            echo "</table>";
		}
        echo "<div style = 'display:flex; flex-direction:column;'>";
        if($totalPrice > 0){
        if($_SESSION['role'] == 3){
            echo "<span>Delivery: $20</span>";
            echo "<span>Total Price: $".($totalPrice+20)."</span>";
        }
        else{
        echo "<span>Delivery: FREE</span>";
        echo "<span>Total Price: $".$totalPrice."</span>";
        }
        echo "</div>";
        echo "<h1>SUCCESSFULLY CHECKED OUT</h1>";
        
        $sql3="DELETE FROM cart_tab where user_name=$_SESSION[sid]";
        $result3 = mysqli_query($conn, $sql3);
        
    }
?>
</div>
</body>
</html>
