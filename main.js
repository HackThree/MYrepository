let name = document.getElementById("name");
let email = document.getElementById("email");
let password = document.getElementById("password");

let checking_name = /^\w{0,15}$/ig;
let checking_email = /^\w+\@\.(com|net|org)$/ig;
let checking_password = /^\w?[0-9]?$/ig;

document.forms[0].onsubmit = (e) => {
  if(!checking_name.test(name.value) || checking_email.test(email) || checking_password.test(password)){
    alert("not working");
    return false;
  }
  else{
    return true;
  }
}
