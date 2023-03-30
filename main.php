<!DOCTYPE html>
<html>
	<head>
		<script src="js/ShopProjectjs.js"></script>
		<link rel="stylesheet" href="css/ShopProjectCSS.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body bgcolor="#262626">
		<div class="mainContainer">
		<div class="headContainer">
				<div>
					<img src = "img\logo.png" align = "left">
					<input type="text" value = "Search" id="search" name="search" align = "center">
					<img src = "img\userIcon.png" width = "50px" height = "50px" align = "right">
					<img src = "img\cart.png" width = "50px" height = "50px" align = "right">
				</div>
		</div>
		<!-- Slideshow container -->
		<div class="slideshow-container">

		  <!-- Full-width images with number and caption text -->
		  <div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
				<img src="img/cart.png">
			<div class="text">Caption Text</div>
		  </div>

		  <div class="mySlides fade">
			<div class="numbertext">2 / 3</div>
				<img src="img/logo.png">
			<div class="text">Caption Two</div>
		  </div>

		  <div class="mySlides fade">
			<div class="numbertext">3 / 3</div>
				<img src="img/userIcon.png">
			<div class="text">Caption Three</div>
		  </div>
		  <div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
				<img src="img/cart.png">
			<div class="text">Caption Text</div>
		  </div>

		  <div class="mySlides fade">
			<div class="numbertext">2 / 3</div>
				<img src="img/logo.png">
			<div class="text">Caption Two</div>
		  </div>

		  <div class="mySlides fade">
			<div class="numbertext">3 / 3</div>
				<img src="img/userIcon.png">
			<div class="text">Caption Three</div>
		  </div>

		  <!-- Next and previous buttons -->
		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<!-- The dots/circles -->
			<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
		</div>
		
		<?php
			include ("db_connection.php");

            $sql = "SELECT * FROM product_tab";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc())
            {
                echo "<div class = 'content'>";
                echo "<a href = '#'>".$row['product_name']."</a><br>";
                echo "<img src = '".$row['pic']."'/><br>";
                echo "<div class = 'info-contain'>";
                echo "<a href = '#'>Price: ".$row['price']."</a><br>";
                echo "<button>Buy</button>";
                echo "</div>";
                echo "</div>";
            }
		?>
		<div class="row">
			<div class="column" >
				<img src="img/testItem.png" style="width:100%">
			</div>
			<div class="column">
				<img src="img/testItem.png" style="width:50%">
				<img src="img/testItem.png" style="width:50%">
			</div>
			<div class="column">
				<img src="img/testItem.png" style="width:100%">
			</div>
			<div class="column">
				<img src="img/testItem.png" style="width:50%">
				<img src="img/testItem.png" style="width:50%">
			</div>		  
		</div>
		</div>
		
		
	</body>
</html>