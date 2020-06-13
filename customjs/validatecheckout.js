
// ================= checkout.php start ================//
const checkoutForm = document.getElementById('checkout_form');

checkoutForm.fname.addEventListener('keyup', checkfname);
checkoutForm.lname.addEventListener('keyup', checklname);
checkoutForm.email.addEventListener('keyup', checkEmail);
checkoutForm.phone.addEventListener('keyup', checkPhone);
checkoutForm.address.addEventListener('keyup', checkAddress);
checkoutForm.city.addEventListener('keyup', checkCity);
checkoutForm.zip.addEventListener('keyup', checkZip);

var alphaExp = /^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/;
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
var phoneExp = /^[+]*[0-9]{10,12}$/ ;

function checkfname(){
  if(checkoutForm.fname.value.match(alphaExp)){
    checkoutForm.fname.style.borderColor = 'green';
  } else {
    checkoutForm.fname.style.borderColor = 'red';
  }
}

function checklname(){
  if(checkoutForm.lname.value.match(alphaExp)){
    checkoutForm.lname.style.borderColor = 'green';
  } else {
    checkoutForm.lname.style.borderColor = 'red';
  }
}

function checkPhone(){
  if(checkoutForm.phone.value.match(phoneExp)){
    checkoutForm.phone.style.borderColor = 'green';
  } else {
    checkoutForm.phone.style.borderColor = 'red';
  }
}

function checkEmail(){
  if(checkoutForm.email.value.match(emailExp)){
    checkoutForm.email.style.borderColor = 'green';
  } else {
    checkoutForm.email.style.borderColor = 'red';
  }
}

function checkAddress(){
  if(checkoutForm.address.value!=''){
    checkoutForm.address.style.borderColor = 'green';
  } else {
    checkoutForm.address.style.borderColor = 'red';
  }
}

function checkCity(){
  if(checkoutForm.city.value.match(alphaExp)){
    checkoutForm.city.style.borderColor = 'green';
  } else {
    checkoutForm.city.style.borderColor = 'red';
  }
}

function checkZip(){
  if((checkoutForm.zip.value>=1000 && checkoutForm.zip.value<=99999)){
    checkoutForm.zip.style.borderColor = 'green';
  } else {
    checkoutForm.zip.style.borderColor = 'red';
  }
}





// ================= checkout.php end ================//
