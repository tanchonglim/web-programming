$(document).ready(() => {
  let productID = $("#ProductID").val();
    $.getJSON( `./function/getProduct.php?ProductID=${productID}`, function( data ) {


      $("#productname").html(data[0].ProductName);
      $("#productprice").html(data[0].ProductPrice);
      $("#productcategory").html(data[0].ProductCategory);
      $("#productquantity").html(data[0].ProductQuantity);
      $("#productname").html(data[0].ProductName);
      $("#productcolor").html(data[0].ProductColor);
      $("#productdescription").html(data[0].ProductDescription);
      $("#productimg").attr("src", `./uploads/${data[0].ProductImg}`)
      $("#addtocart").click(()=>{
        let qty = $("#buyQty").val();
        addToCart(productID,qty);
      });

    });
});

function addToCart(productID,qty){
  //add product to local localStorage

  localStorage.setItem(productID,qty);

  $(".supNum").html(localStorage.length);

  // Get the snackbar DIV
  var x = document.getElementById("snackbar");
  // Add the "show" class to DIV
  x.className = "show";
  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
