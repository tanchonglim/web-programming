$(document).ready(function(){

  const OrderID = $('#OrderID').html();

  $.getJSON( `./function/getOrder.php?OrderID=${OrderID}`, function( data ) {

    $("#date").text(data[0].time);
    $("#price").text(data[0].total);
    $("#address").text(data[0].address);
    $("#state").text(data[0].state);
    $("#city").text(data[0].city);
    $("#postcode").text(data[0].zip);
    $("#name").text(data[0].lname+" "+data[0].fname);

  });

});
