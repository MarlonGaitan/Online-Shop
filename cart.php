<!DOCTYPE html>
<?php
	include("db_connection.php");

?>
<html>
<head>
		<!-- ===== Link Swiper's CSS ===== -->
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
		<link rel="stylesheet" href="css/ShopProjectCSS.css">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon.ico">
		<link rel="manifest" href="favicon_io/site.webmanifest">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
<body bgcolor="#262626">
	<?php
		include("banner.php");
		$sql="SELECT * FROM cart_tab where user_name=$_SESSION[sid]";
		$result = mysqli_query($conn, $sql);
		
		echo"<center>";
		echo"<div class = 'info'>";
		while($row = $result -> fetch_assoc())
		{
			$sql2="SELECT * FROM product_tab where sid= $row[product_name]";
			$result2 = mysqli_query($conn, $sql2);
			$row2 = $result2->fetch_assoc();
			echo "<div>";
			echo "<img src = $row2[pic]>";
			echo "</div><div>";
			echo "$row2[product_name]";
			echo "</div><div>";
			echo "$"."$row2[price]";
			echo "</div>";
		}
		echo "</div>";
		echo "</center>";
	?>
	<button type="button" onclick="window.location.href='buy_process.php'">Check Out</button>
</body>
</html>
