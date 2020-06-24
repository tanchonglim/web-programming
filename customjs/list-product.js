

$(document).ready(function(){

  $.getJSON( `./function/getProduct.php`, function( data ) {

    appendProduct(data);

    var sortedData = data;
    //sort product
    $("#sortBy").on("change",() => {
          let val = $("#sortBy").val();
          $("#products").empty();
          if(val == '1'){
          sortedData = data.sort((a, b) => {
              if(parseInt(a.ProductPrice) < parseInt(b.ProductPrice)){
                return 1;
              } else {
                return -1;
              }
              return 0;
            });
          } else if(val =='2'){
          sortedData = data.sort((a, b) => {
              if(a.ProductCategory > b.ProductCategory){
                return 1;
              } else {
                return -1;
              }
              return 0;
            });
          }
          appendProduct(sortedData);
        });

        //filter product
        $('#all').css("cursor","pointer").click(() => {
          $("#products").empty();
          appendProduct(sortedData);
        });
        $('#sofa').css("cursor","pointer").click(() => {
          $("#products").empty();
            var newData = sortedData.filter((a) => {
            return a.ProductCategory == 'Sofa';
          });
          appendProduct(newData);
        });
        $('#tnd').css("cursor","pointer").click(() => {
          $("#products").empty();
            var newData = sortedData.filter((a) => {
            return a.ProductCategory == 'Table and Desk';
          });
          appendProduct(newData);
        });
        $('#chair').css("cursor","pointer").click(() => {
          $("#products").empty();
            var newData = sortedData.filter((a) => {
            return a.ProductCategory == 'Chair';
          });
          appendProduct(newData);
        });
        $('#bed').css("cursor","pointer").click(() => {
          $("#products").empty();
            var newData = sortedData.filter((a) => {
            return a.ProductCategory == 'Bed';
          });
          appendProduct(newData);
        });

        //search product
        $("#searchProduct").keyup(()=>{
          let search = $("#searchProduct").val().toLowerCase();
          $("#products").empty();
            var newData = sortedData.filter((a) => {
            return a.ProductName.toLowerCase().includes(search);
          });
          appendProduct(newData);
        });
  });

});

    //append product into table
function appendProduct(prod){
  for(product of prod) {
      $("#products").prepend(`
        <div class="col-lg-4 col-sm-6">
            <div class="single_product_item" ">
                <img src="./uploads/${product.ProductImg}" alt="">
                <div class="single_product_text">
                    <h4> <a href="./single-product.php?ProductID=${product.ProductID}" style="opacity:1; visibility:visible; color:black"> ${product.ProductName} </a></h4>
                    <h3>RM${product.ProductPrice}</h3>
                    <a style="cursor: pointer" onclick="addToCart(${product.ProductID})" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                </div>
            </div>
        </div>
        `);

  };
}

function addToCart(productID){
  //add product to local localStorage

  localStorage.setItem(productID,1);

  $(".supNum").html(localStorage.length);

  // Get the snackbar DIV
  var x = document.getElementById("snackbar");
  // Add the "show" class to DIV
  x.className = "show";
  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
