
// ================ register.php start ===============//
const regForm = document.getElementById('reg_form');
regForm.email.addEventListener('change', validateEmail);
regForm.first.addEventListener('change', isAlphabet);
regForm.last.addEventListener('change', isAlphabet);
regForm.password.addEventListener('change', lengthRestriction);

function validateEmail(){
  let emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
  if(!this.value.match(emailExp)){
    this.style.borderColor = "red";
  } else {
    this.style.borderColor = "green";
  }
}

function isAlphabet(){
  	let alphaExp = /^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/;
    if(!this.value.match(alphaExp)){
      this.style.borderColor = "red";
    } else {
      this.style.borderColor = "green";
    }
}

function lengthRestriction(){
	let uInput = this.value;
	if(uInput.length >= 5){
    this.style.borderColor = "green";
  } else {
    this.style.borderColor = "red";
  }
}

// ================ register.php end ===============//
