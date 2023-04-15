<!DOCTYPE html>
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
		<!-- Slideshow container -->
		<div class="swiper mySwiper slideshow-container">
			<div class="swiper-wrapper slideshow-content">
		  <!-- Full-width images with number and caption text -->
		  		<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<img src="img/electronics.jpg">
						</div>				
						<div class="text">
							<span>Electronics</span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<img src="img/books.jpg">
						</div>				
						<div class="text">
							<span>Books</span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<img src="img/clothing.jpg">
						</div>				
						<div class="text">
							<span>Clothing</span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<img src="img/outdoors.jpg">
						</div>				
						<div class="text">
							<span>Outdoors</span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<img src="img/sports.jpg">
						</div>				
						<div class="text">
							<span>Sports</span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<img src="img/pets.jpg">
						</div>				
						<div class="text">
							<span>Pet Supplies</span>	
						</div>
					</div>
				</div>

				<!-- The dots/circles -->
				<!-- <div class = "three-dots" style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
				</div> -->
				
		  </div>
		  	<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-pagination"></div>
		</div>
		
		<!-- Swiper JS -->
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

		
		
		<?php
			// include ("db_connection.php");

            // $sql = "SELECT * FROM product_tab";
            // $result = $conn->query($sql);
            // while($row = $result->fetch_assoc())
            // {
            //     echo "<div class = 'content'>";
            //     echo "<a href = '#'>".$row['product_name']."</a><br>";
            //     echo "<img src = '".$row['pic']."'/><br>";
            //     echo "<div class = 'info-contain'>";
            //     echo "<a href = '#'>Price: ".$row['price']."</a><br>";
            //     echo "<button>Buy</button>";
            //     echo "</div>";
            //     echo "</div>";
            // }
		?>
		<div style = "display:flex;flex-direction:column; align-items:center; width:100%; margin-top:45px">
		<h1 class = "deals" style="color:white;">Amazing Deals!</h1>
		<div class="slideshow-container" style = "justify-content: center;">
		
		<div class="slideshow-content" style = "display:flex; height:auto">
		<div class="row">
			<div class="column" name = "big" >
				<img name = "big" src="img/testItem.png" style="width:100%">
			</div>
			<div class="column" name = "small">
				<div class = "trend">
					<img name = "small" src="img/testItem.png" style="width:100%">
				</div>
				<div class = "trend">
					<img name = "small" src="img/testItem.png" style="width:100%">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column" name = "big" >
				<img name = "big" src="img/testItem.png" style="width:100%">
			</div>
			<div class="column" name = "small">
				<div class = "trend">
					<img name = "small" src="img/testItem.png" style="width:100%">
				</div>
				<div class = "trend">
					<img name = "small" src="img/testItem.png" style="width:100%">
				</div>
			</div>		  
		</div>
		</div>
		</div>
		</div>
		
		<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 0,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
		
	</body>
</html>