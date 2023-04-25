<!DOCTYPE html>
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
		session_start();
		if (!isset($_SESSION['sid']) ||(trim ($_SESSION['sid']) == '')){
			header('location:log_in.php');
			exit();
			}else{ ?>
		<?php include 'banner.php';?>
		<!-- Slideshow container -->
		<div class="swiper mySwiper slideshow-container">
			<div class="swiper-wrapper slideshow-content">
		  <!-- Full-width images with number and caption text -->
		  		<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<a href = "electronics.php"><img src="img/electronics.jpg"></a>
						</div>				
						<div class="text">
							<span><a href = "electronics.php">Electronics</a></span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<a href = "books.php"><img src="img/books.jpg"></a>
						</div>				
						<div class="text">
							<span><a href = "books.php">Books</a></span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<a href = "clothing.php"><img src="img/clothing.jpg"></a>
						</div>				
						<div class="text">
							<span><a href = "clothing.php">Clothing</a></span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<a href = "outdoors.php"><img src="img/outdoors.jpg"></a>
						</div>				
						<div class="text">
							<span><a href = "outdoors.php">Outdoors</a></span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<a href = "sports.php"><img src="img/sports.jpg"></a>
						</div>				
						<div class="text">
							<span><a href = "sports.php">Sports</a></span>	
						</div>
					</div>
				</div>
				<div class="swiper-slide mySlides fade">
					<div class="mySlides-content">
						<div class="image">
							<a href = "petsupplies.php"><img src="img/pets.jpg"></a>
						</div>				
						<div class="text">
							<span><a href = "petsupplies.php">Pet Supplies</a></span>	
						</div>
					</div>
				</div>

				
				
		  </div>
		  	<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-pagination"></div>
		</div>
		
		<!-- Swiper JS -->
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

		
		
		
		<div style = "display:flex;flex-direction:column; align-items:center; width:100%; margin-top:45px">
		<h1 class = "deals" style="color:white;">Amazing Deals!</h1>
		<div class="slideshow-container" style = "justify-content: center;">
		
		<div class="slideshow-content" style = "display:flex; height:auto">
		<div class="row">
			<div class="column" name = "big" >
				<img name = "big" src="img/windbreaker.jpg" style="width:100%">
				<div class = "deal-text"><p>35% off</p></div>
			</div>
			<div class="column" name = "small">
				<div class = "trend">
					<img name = "small" src="img/hammock.webp" style="width:100%">
					<div class = "deal-text"><p>10% off</p></div>
				</div>
				<div class = "trend">
					<img name = "small" src="img/hoop.webp" style="width:100%">
					<div class = "deal-text">5% off</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column" name = "big" >
				<img name = "big" src="img/cathut.jfif" style="width:100%">
				<div class = "deal-text">40% off</div>
			</div>
			<div class="column" name = "small">
				<div class = "trend">
					<img name = "small" src="img/catbed.jfif" style="width:100%">
					<div class = "deal-text">5% off</div>
				</div>
				<div class = "trend">
					<img name = "small" src="img/chair.webp" style="width:100%">
					<div class = "deal-text">10% off</div>
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
		<?php } ?>
	</body>
</html>
