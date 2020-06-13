
// =================  register.php================//
function errMessage(field){
  if(field == 'fname')
    document.getElementById('message').innerHTML='invalid first name';
  else if(field == 'lname')
     document.getElementById('message').innerHTML='invalid last name';
  else if(field == 'email')
    document.getElementById('message').innerHTML='invalid email';
  else if(field == 'pass')
    document.getElementById('message').innerHTML='password less than 5 character';
}
// ================= register.php================//
