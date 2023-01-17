var lastname = document.getElementById("lastname");
var patronymic = document.getElementById("patronymic");
var number = document.getElementById("number");
var email = document.getElementById("email");
var section = document.getElementById("section");
var date = document.getElementById("date");
var doklad = document.getElementById("doklad");

document.getElementById("name").textContent = localStorage["name"];
lastname.textContent = localStorage["lastname"];
patronymic.textContent = localStorage["patronymic"];
number.textContent = localStorage["number"];
email.textContent = localStorage["email"];
section.textContent = localStorage["section"];
date.textContent = localStorage["date"];
doklad.textContent = localStorage["doklad"];
