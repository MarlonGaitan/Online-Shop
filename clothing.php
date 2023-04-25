<!DOCTYPE html>
<?php
	include("db_connection.php");

	//if(($_SESSION['user_ID'] !="F"))
	//{
	//echo "You are trying to access a BAD Page. <a href='login.php' >Login Again</a> ";
	//session_destroy();
?>
<html>
<head>
		<!-- ===== Link Swiper's CSS ===== -->
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
		<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon.ico">
		<link rel="manifest" href="favicon_io/site.webmanifest">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
<body bgcolor="#262626">
	<?php
	include('banner.php');
		$sql="SELECT * FROM product_tab where department='3'";
		$result = $conn->query($sql);
		echo "<div class = 'list'>";
		echo"<center>";
		echo"<table align = 'center'>";
		while($row = $result -> fetch_assoc()){
			echo "<tr>";
			echo "<td>";
			echo "<img src = $row[pic]>";
			echo "</td><td>";
			echo "<span>$row[product_name]</span>";
			echo "<br>";
			echo "<span>$"."$row[price]</span>";
			echo "</td></tr>";			
		}
		echo "</table>";
		echo "</center>";			
	?>
	</div>
</body>
</html>
