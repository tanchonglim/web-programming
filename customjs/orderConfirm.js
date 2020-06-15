$(document).ready(function(){

  const OrderID = $('#OrderID').html();

  $.getJSON( `./function/getOrder.php?OrderID=${OrderID}`, function( data ) {

    $("#date").text(data[0].time);
    $("#price").text(data[0].total);
    $(".price").text(data[0].total);
    $("#address").text(data[0].address);
    $("#state").text(data[0].state);
    $("#city").text(data[0].city);
    $("#postcode").text(data[0].zip);
    $("#name").text(data[0].lname+" "+data[0].fname);

    for (var product of data[0].products) {
      appendProduct(product);
    }

  });

});

function appendProduct(product){

  $("#productList").after(`<tr>
    <th colspan="2"><span>${product.productName}</span></th>
    <th>x${product.quantity}</th>
    <th> <span>RM${product.price}</span></th></tr>
    `);


}
