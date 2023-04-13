<!DOCTYPE html>
<html>
	<head>
		<!-- ===== Link Swiper's CSS ===== -->
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
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
		<div class="swiper mySwiper slideshow-container">
			<div class="swiper-wrapper slideshow-content">
		  <!-- Full-width images with number and caption text -->
		  		<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<img src="img/cart.png">
						</div>				
						<div class="text">
							<span>Electronics</span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<img src="img/cart.png">
						</div>				
						<div class="text">
							<span>Literature</span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<img src="img/cart.png">
						</div>				
						<div class="text">
							<span>Clothing</span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<img src="img/cart.png">
						</div>				
						<div class="text">
							<span>Outdoors</span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<img src="img/cart.png">
						</div>				
						<div class="text">
							<span>Sports</span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<img src="img/cart.png">
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
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-pagination"></div>
		<!-- Swiper JS -->
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

		
		
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