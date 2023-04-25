const productTemplate = document.querySelector("[data-product-template]");
const productContainer = document.querySelector("[data-product-container]");
const searchbox = document.querySelector("[data-search]");
const inputbox = document.getElementById("search");
let dat = [];
let result = [];
let products = [];

$.ajax({
    url : 'product_fetch.php', // your php file
    type : 'GET', // type of the HTTP request
    success : function(data){
       let obj = jQuery.parseJSON(data);
       products = obj.map(product => {
            const card = productTemplate.content.cloneNode(true).children[0];
            const body = card.querySelector("[data-body]");
            body.textContent = product[0].toString();
            productContainer.append(card);
            return {name: product.toString(), elem: card};
       });
       if(document.getElementById("search").value.length == 0){
         document.getElementById("product-container").style.display = "none";
       }
       else{
         document.getElementById("product-container").style.display = "block";
       }
    }
 })

 searchbox.addEventListener("input", e =>{
   const value  = e.target.value.toLowerCase();
   if(document.getElementById("search").value.length == 0){
      document.getElementById("product-container").style.display = "none";
    }
    else{
      document.getElementById("product-container").style.display = "block";
    }
   products.forEach(product =>{
      const isVisible = product.name.toLowerCase().includes(value);
      product.elem.classList.toggle("hide", !isVisible);
   })
 })
// inputbox.onkeyup = function(){
//    let input = inputbox.value;
//    if(input.length){
//       result = dat.filter((keyword) =>{return keyword.toLowerCase().includes(input.toLowerCase());});
//       console.log(result);
//       products = result.map(product =>{
//          const card = productTemplate.content.cloneNode(true).children[0];
//          console.log(card);
//          const body = card.querySelector("[data-body]");
//          body.textContent = product;
//          productContainer.append(card);
//          return {name: product, elem: card};
//       })
//    }
   // display(result)
//}
// function display(result){
//    const content = result.map((list) => {return "<li>" + list + "</li>";});
//    productTemplate.innerHTML = "<ul>" + content + "</ul>";
// }