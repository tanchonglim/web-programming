

$(document).ready(function(){

  $.getJSON( `./function/getProduct.php`, function( data ) {


    appendProduct(data);

  });

});

    //append product into table
function appendProduct(prod){
  for(product of prod) {
      $("#products").after(`
        <div class="col-lg-4 col-sm-6">
            <div class="single_product_item">
                <img src="./uploads/${product.ProductImg}" alt="">
                <div class="single_product_text">
                    <h4>${product.ProductName}</h4>
                    <h3>RM${product.ProductPrice}</h3>
                    <a style="cursor: pointer" onclick="addToCart(${product.ProductID})" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                </div>
            </div>
        </div>
        `);
  };
}

function addToCart(productID){
  if(localStorage.getItem("productQty")==null){
    localStorage.setItem("productQty",'1');
  } else {
    let totalItem = parseInt(localStorage.getItem("productQty")) + 1;
    localStorage.setItem("productQty",totalItem);
  }
  $(".supNum").html(localStorage.getItem("productQty"));

  // Get the snackbar DIV
  var x = document.getElementById("snackbar");

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);


}
