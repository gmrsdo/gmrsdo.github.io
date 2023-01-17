function info() {
  var name = document.getElementById("name").value;
  var lastname = document.getElementById("lastname").value;
  var patronymic = document.getElementById("patronymic").value;
  var number = document.getElementById("number").value;
  var email = document.getElementById("email").value;
  var section = document.getElementById("section").value;
  var date = document.getElementById("date").value;
  var doklad = document.getElementById("doklad").value;

  localStorage["name"] = name;
  localStorage["lastname"] = lastname;
  localStorage["patronymic"] = patronymic;
  localStorage["number"] = number;
  localStorage["email"] = email;
  localStorage["section"] = section;
  localStorage["date"] = date;
  localStorage["doklad"] = doklad;
}
