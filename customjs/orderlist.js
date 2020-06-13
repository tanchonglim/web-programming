$(document).ready(function(){

  $.getJSON( `./function/getOrder.php?user=user`, function( data ) {

    //add event listener to buttons
    $("#all").css("color","ff3368");

    $("#all").click(chgTabColor).click(noFilter);
    $("#new").click(chgTabColor).click(filterNew);
    $("#ready").click(chgTabColor).click(filterReady);
    $("#shipped").click(chgTabColor).click(filterShipped);
    $("#completed").click(chgTabColor).click(filterCompleted);
    //functions
    function chgTabColor(){
      $("#all").css("color","black");
      $("#new").css("color","black");
      $("#ready").css("color","black");
      $("#shipped").css("color","black");
      $("#completed").css("color","black");
      $(this).css("color","#ff3368");
    }

    function noFilter(){
      $("#productsList").empty();
      appendProduct(data);
    }
    function filterNew(){
      var filteredProduct = data.filter((prod) => {
          return prod.status=='new order';
      });
      $("#productsList").empty();
      appendProduct(filteredProduct);
    }
    function filterReady(){
      var filteredProduct = data.filter((prod) => {
          return prod.status=='ready to ship';
      });
      $("#productsList").empty();
      appendProduct(filteredProduct);
    }
    function filterShipped(){
      var filteredProduct = data.filter((prod) => {
          return prod.status=='shipped';
      });
      $("#productsList").empty();
      appendProduct(filteredProduct);
    }
    function filterCompleted(){
      var filteredProduct = data.filter((prod) => {
          return prod.status=='completed';
      });
      $("#productsList").empty();
      appendProduct(filteredProduct);
    }
    //sort array according to orderID
    data.sort((a, b) => {
      if(a.OID > b.OID){
        return 1;
      } else {
        return -1;
      }
      return 0;
    });

    appendProduct(data);



  });

});

    //append product into table
function appendProduct(prod){
  for(product of prod) {
    if(product.status == 'new order'){
      $("#productsList").append(`
        <div class="table-row">
          <div class="serial">${product.OrderID}</div>
          <div class="country">
            <ul>
              <li>table</li>
              <li>chair</li>
            </ul>
          </div>
          <div class="visit">RM${product.total}</div>
          <div class="visit">${product.status}</div>
          <div class="percentage">
                <a href="./function/deleteOrder.php?OrderID=${product.OrderID}" class="genric-btn danger radius">Cancel Order</a>
          </div>
        </div>
        `);
    } else {
      $("#productsList").append(`
        <div class="table-row">
          <div class="serial">${product.OrderID}</div>
          <div class="country">
            <ul>
              <li>table</li>
              <li>chair</li>
            </ul>
          </div>
          <div class="visit">RM${product.total}</div>
          <div class="visit">${product.status}</div>
          <div class="percentage">
          </div>
        </div>
        `);
    }

  };
}
