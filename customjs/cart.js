$(document).ready(function(){

  if(localStorage.length!=0){
      var addedProduct = {};
      $.getJSON( `./function/getProduct.php`, function( data ) {

        for (var addedProductID in localStorage) {
          for (var product of data) {
            if(addedProductID==product.ProductID){
              appendProduct(product);
            }
          }
        }
    updateTotal();
      });
  }


});

function appendProduct(product){

  $("#addedProduct").after(`
    <tr>
      <td>
        <div class="media">
          <div class="d-flex">
            <img width="150px" src="./uploads/${product.ProductImg}" alt="" />
          </div>
          <div class="media-body">
            <p>${product.ProductName}</p>
          </div>
        </div>
      </td>
      <td>
        <h5>RM${product.ProductPrice}</h5>
      </td>
      <td>
        <select id="qty${product.ProductID}" onchange="updatePrice(${product.ProductID},${product.ProductPrice})" >
        <option value="1"> 1 </option>
        <option value="2"> 2 </option>
        <option value="3"> 3 </option>
        <option value="4"> 4 </option>
        <option value="5"> 5 </option>
        </select>
      </td>
      <td>
        <h5 >RM<span id="total${product.ProductID}" class="allPrice">${product.ProductPrice}</span></h5>
      </td>
      <td>
        <a href="" onclick="removeProduct(${product.ProductID})" class="genric-btn danger-border circle">Delete</a>
      </td>
    </tr>

    `);
    updateQty(product.ProductID, localStorage.getItem(product.ProductID));
    updatePrice(product.ProductID, product.ProductPrice);
}

function removeProduct(productID){
  localStorage.removeItem(productID);
}

function updatePrice(productID, price){
  let qtty = $(`#qty${productID}`).val();
  let total = price * qtty;
  $("#total"+productID).html(total);
  updateTotal();
  localStorage.setItem(productID,qtty);
}

function updateQty(QtyID,qty){
  QtyID = "#qty"+QtyID;
  $(QtyID).val(qty);
}

function updateTotal(){
  let total = 0;
  $('.allPRice').each(function(index, obj){
      total += parseInt(obj.innerHTML);
  });
  $("#subTotal").html(total);
  $("#total").html(total);
}
