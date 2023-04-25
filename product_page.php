<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <link rel="stylesheet" href="css/product_style.css">
    <title>Document</title>
</head>
<body bgcolor="#262626">
    <?php include('banner.php') ?>
    <form action="add_cart_process.php" method="POST">
    <div class = "product-contain" id = "product-container" product-container></div>
    </form>
	<template product-template>
		<div class = "info">
        <div class = "picture">
            <span product-picture></span>
            </div>
			<div class = "name">
            <span id="productName" product-name></span>
            <input style = "display:none"type="text" name="name" id="name" inputname/>
            </div>
            <div class = "price">
            <span product-price></span>
            </div>
            <div>
            <input list="numItems" placeholder="Number of Items" name = 'numItems'>
            <datalist id="numItems">
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
                <option value="4"></option>
                <option value="5"></option>
            </datalist>
            </div>
            <div class = "rating">
            <span product-rating></span>
            </div>
            <div class = "buy">
             <button id="addCart" type="submit" onclick = "cartNumberChange()" product-buy>Add to Cart</button>
            </div>
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
                const cards = productTemp.content.cloneNode(true).children[0];
                const name = cards.querySelector("[product-name]");
                name.textContent = "Product Name: " + product[0].toString();
                const price = cards.querySelector("[product-price]");
                price.textContent = "Price: $" + product[1].toString();
                const picture = cards.querySelector("[product-picture]");
                picture.innerHTML = "<img src = '"+product[3].toString()+"'></img>";
                const rating = cards.querySelector("[product-rating]");
                rating.textContent = "Rating: " + product[2].toString();
                const sid = cards.querySelector("[inputname]");
                sid.value = product[4].toString();
                productCont.append(cards);
            }
                
        });
        }
    })
const cartNumber = document.querySelector("[numCart]");
  function cartNumberChange(){
    $('#numIt').text('1');
}
    function retreiveValue(){
            var value = $('#productName').val();
            $.post('product_page.php',{'data': value}, function (data) {
        console.log(JSON.parse(data));
    }); 
        }
    </script>
</body>
</html>