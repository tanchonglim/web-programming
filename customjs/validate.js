function checkName(elem){
  if(elem.value.length == 0){
    document.getElementById("info").style.visibility="visible";
    document.getElementById("name").style.visibility ="visible";
  }else{
    document.getElementById("info").style.visibility="hidden";
    document.getElementById("name").style.visibility ="hidden";
  }
}

function checkColor(elem){
  if(elem.value.length == 0){
    document.getElementById("info").style.visibility="visible";
    document.getElementById("color").style.visibility ="visible";
  }else {
    document.getElementById("info").style.visibility="hidden";
    document.getElementById("color").style.visibility ="hidden";
  }
}

function checkPrice(elem){
  if(elem.value.length == 0){
    document.getElementById("info").style.visibility="visible";
    document.getElementById("price").style.visibility ="visible";
  }else {
    document.getElementById("info").style.visibility="hidden";
    document.getElementById("price").style.visibility ="hidden";
  }
}

function checkQuantity(elem){
  if(elem.value.length == 0){
    document.getElementById("info").style.visibility="visible";
    document.getElementById("quantity").style.visibility ="visible";
  }else {
    document.getElementById("info").style.visibility="hidden";
    document.getElementById("quantity").style.visibility ="hidden";
  }
}

function checkImage(){
  var file = document.getElementById("productimg");
  var filepath = file.value;
  var filetype = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
  if(file.value.length == 0){
    document.getElementById("info").style.visibility="visible";
    document.getElementById("image").style.visibility ="visible";
  }
  if(!filetype.exec(filepath)){
    alert("Invalid file type");
    document.getElementById("productimg").value = '';
    document.getElementById("info").style.visibility="visible";
    document.getElementById("image").style.visibility ="visible";
  }else{
    if(file.files && file.files[0]){
      var reader = new FileReader();
      reader.onload = function(e){
        document.getElementById('showimg').innerHTML = '<img src="'+e.target.result+'" width="400" height="350">';
      };
      reader.readAsDataURL(file.files[0]);
    }
  }
}

function checkImage2(){
  var file = document.getElementById("productimg");
  var filepath = file.value;
  var filetype = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

  if(!filetype.exec(filepath)){
    alert("Invalid file type");
    document.getElementById("productimg").value = '';
    document.getElementById("info").style.visibility="visible";
    document.getElementById("image").style.visibility ="visible";
  }else{
    if(file.files && file.files[0]){
      var reader = new FileReader();
      reader.onload = function(e){
        document.getElementById('img').innerHTML = '<img src="'+e.target.result+'" width="400" height="350">';
      };
      reader.readAsDataURL(file.files[0]);
    }
  }
}
