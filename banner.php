<html>
<?php
session_start();
	include("db_connection.php");
?>
<head>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="css/ShopProjectCSS.css">
</head>
<body>
<div class="mainContainer">
			<div class="headContainer">
					<img onclick="window.location.href='main.php'" name="logo" src = "img\logo.png" align = "left">
					<input type="search" autocomplete="off" placeholder="Search" id="search" name="search" data-search>
					<div class = "product-container" id = "product-container" data-product-container></div>
					<template data-product-template>
						<div class = "card">
							<div onclick = 'select(this)'class = "body" data-body></div>
						</div>
					</template>
					<div class = "account">
						<a name = "hello" href="#">Hello Again</a>
						<div class = "accountSettings">
							<a name = "settings" href="#" style = "margin-right:5px">Account & Settings</a>
							<img src="img/arrowhead.png" alt="arrowhead">
							<div class="account-pop-up">
								<div class = "account-pop-up-content">
									<a href="account.php">Account</a>
									<a onclick="window.location.href='finish_Session.php'">Log Out</a>
									<button type="button" onclick = "goPremium()">Become Premium</button>
								</div>
							</div>
						</div>
					</div>
					<div class="cartBtn" id="cartBtn" onclick="window.location.href='cart.php'">
						<div class="numItems">
							<a href="#" id="numIt" numCart>0</a>
						</div>
						<img id="cart" src="favicon_io/android-chrome-192x192.png" alt="cartBtn">
					</div>
			</div>
		</div>
		<script src="search_bar.js" defer></script>
		<script>
			function select(element){
				let selectProductData = element.textContent;
				$data =selectProductData;
				alert($data);
				var obj = {
					name: selectProductData
				};
				let product_name = localStorage.setItem('productName', selectProductData);
				window.location.href='product_page.php';
			}
			var php_var = <?php echo $_SESSION['sid'];?>;
			
			function goPremium(){
				<?php
				$sql="UPDATE users_tab SET role_id = '2' WHERE sid = $_SESSION[sid]";
				$result = $conn->query($sql);
				?>
				window.location.href = "premium.php";
			}
		</script>
</body>
</html>
