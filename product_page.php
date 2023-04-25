<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/product_style.css">
    <title>Document</title>
</head>
<body bgcolor="#262626">
    <?php include('banner.php') ?>
    <div class = "product-contain" id = "product-container" product-container></div>
	<template product-template>
		<div class = "info">
        <div class = "picture">
            <span product-picture></span>
            </div>
			<div class = "name">
            <span id="productName" product-name></span>
            </div>
            <div class = "price">
            <span product-price></span>
            </div>
            <div class = "rating">
            <span product-rating></span>
            </div>
            <div class = "buy">
             <button type="button" onclick="retreiveValue()" product-buy>Buy Now</button>
            </div>
            <div>Response from server: <span id="response"></span></div>
		</div>
	</template>
    <script type="text/javascript">
        const productTemp = document.querySelector("[product-template]");
        const productCont = document.querySelector("[product-container]");
        let products_ = [];
        $.ajax({
        url : 'product_fetch.php', // your php file
        type : 'GET', // type of the HTTP request
        success : function(data){
        let obj = jQuery.parseJSON(data);
        products_ = obj.map(product => {
            if(product[0] == localStorage.getItem('productName')){
                alert(product);
                const cards = productTemp.content.cloneNode(true).children[0];
                console.log(cards);
                const name = cards.querySelector("[product-name]");
                name.textContent = product[0].toString();
                console.log(name);
                const price = cards.querySelector("[product-price]");
                price.textContent = product[1].toString();
                console.log(price);
                const picture = cards.querySelector("[product-picture]");
                picture.innerHTML = "<img src = '"+product[3].toString()+"'></img>";
                console.log(picture);
                const rating = cards.querySelector("[product-rating]");
                rating.textContent = product[2].toString();
                console.log(rating);

                productCont.append(cards);
            }
                
        });
        }
    })
    function retreiveValue(){
            let value = document.getElementById('productName').textContent;
            $.post('product_page.php',{'data': "value"}, function (data) {
        $('#response').text(data);
    }); 
        }
    </script>
    <?php 
    if (isset($_POST['data'])) { 
        $data = $_POST['data']; 
        echo( "data is: $data" ); 
        return; 
    } 
?> 
</body>
</html>