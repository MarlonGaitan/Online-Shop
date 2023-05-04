<!DOCTYPE html>
<?php
	include("db_connection.php");

?>
<html>
<head>
		<!-- ===== Link Swiper's CSS ===== -->
		<link rel="stylesheet" href="css/product_style.css">
	</head>
<body bgcolor="#262626">
<div class = 'info'>
	<?php
		include("banner.php");
		$sql="SELECT * FROM cart_tab where user_name=$_SESSION[sid]";
		$result = mysqli_query($conn, $sql);
		
		echo"<center>";
		while($row = $result -> fetch_assoc())
		{
			$sql2="SELECT * FROM product_tab where sid= $row[product_name]";
			$result2 = mysqli_query($conn, $sql2);
			$row2 = $result2->fetch_assoc();
			echo "<div class = 'cart_image'>";
			echo "<img src = $row2[pic]>";
			echo "</div><div>";
			echo "Product: $row2[product_name]";
			echo "</div><div style = 'width:500px;margin-bottom: 10px; border-bottom: 2px solid white'>";
			echo "Price: $"."$row2[price]";
			echo "</div>";
		}
		echo "</center>";
	?>
	<button type="button" onclick="window.location.href='buy_process.php'">Check Out</button>
	</div>
</body>
</html>
