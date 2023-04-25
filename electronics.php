<!DOCTYPE html>
<?php
	session_start();
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
		<script src="js/ShopProjectjs.js"></script>
		<link rel="stylesheet" href="css/ShopProjectCSS.css">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon.ico">
		<link rel="manifest" href="favicon_io/site.webmanifest">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
<body bgcolor="#262626">
	<div class="mainContainer">
		<div class="headContainer">
				<img name="logo" src = "img\logo.png" align = "left">
				<input type="text" placeholder="Search" id="search" name="search" align = "center">
				<div class = "account">
					<a name = "hello" href="#">Hello Again</a>
					<div class = "accountSettings">
						<a name = "settings" href="#" style = "margin-right:5px">Account & Settings</a>
						<img src="img/arrowhead.png" alt="arrowhead">
					</div>
					
				</div>
				<div class="cartBtn" id="cartBtn">
					<div class="numItems">
						<a href="#" id="numIt">0</a>
					</div>
					<img src="favicon_io/android-chrome-192x192.png" alt="cartBtn">
				</div>
		</div>
	</div>
	<?php
		$sql="SELECT * FROM product_tab where department='1'";
		$result = $conn->query($sql);
		
		echo"<center>";
		echo"<table align = 'center'>";
		while($row = $result -> fetch_assoc()){
			echo "<tr>";
			echo "<td>";
			echo "<img src = $row[pic]>";
			echo "</td><td>";
			echo "$row[product_name]";
			echo "<br>";
			echo "$"."$row[price]";
			echo "</td></tr>";			
		}
		echo "</table>";
		echo "</center>";			
	?>
</body>
</html>