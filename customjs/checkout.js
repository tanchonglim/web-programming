$(document).ready(function(){

  if(localStorage.length!=0){
      var addedProduct = {};
      var total =0;
      var counter = 1;
      $.getJSON( `./function/getProduct.php`, function( data ) {
        for (var addedProductID in localStorage) {
          for (var product of data) {
            if(addedProductID==product.ProductID){
              var id = "#product"+counter;
              var idQty = id +"-qty";
              $(id).val(product.ProductID);
              $(idQty).val(localStorage.getItem(product.ProductID));
              counter++;
             total +=  appendProduct(product);

            }
          }
        }
            updateTotal(total);
      });

  }


});

function appendProduct(product){
  let totalPrice = product.ProductPrice * parseInt(localStorage.getItem(product.ProductID));
  $("#addedProduct").after(`
    <li>
      <a href="#">
        <span class="first"> ${product.ProductName} </span>
        <span class="middle" id="qty${product.ProductID}"></span>
        <span class="last">RM${totalPrice}</span>
      </a>
    </li>
    `);

    updateQty(product.ProductID, localStorage.getItem(product.ProductID));

   return totalPrice;
}


function updatePrice(ProductID, price, qty){
  let total = price * qty;
  $("#total"+ProductID).html(total);
  updateTotal();
  localStorage.setItem(ProductID,qty);
}

function updateQty(QtyID,qty){
  QtyID = "#qty"+QtyID;
  $(QtyID).html("x "+qty);
}

function updateTotal(total){
  totalPrice = "RM" + total;
  $("#subTotal").html(totalPrice);
  $("#total").html(totalPrice);
  $("#fsubtotal").val(totalPrice.substring(2));
  $("#ftotal").val(totalPrice.substring(2));
}
