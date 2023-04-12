
const ad_username = "admin";
const ad_password = "6969"; 

var username;
var password;

function login(){
     
    username = document.getElementById("username").value;
    password = document.getElementById("password").value;

    if( username === ad_username && password === ad_password){
        window.location.href = "./Home.html";
        alert("login successful");
    }

    else
        alert("login failed");

    
}

function setname(){
   
}