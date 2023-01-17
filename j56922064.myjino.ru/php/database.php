<?php
$name = trim($_POST['name']);
$lastname = trim($_POST['lastname']);
$patronymic = trim($_POST['patronymic']);
$number = trim($_POST['number']);
$email = trim($_POST['email']);
$section = trim($_POST['section']);
$date = trim($_POST['date']);
$doklad = trim($_POST['doklad']);

$hostname = "mysql.j46555212.myjino.ru";
$username = "j46555212";
$password = "WvsLR-JaDS3n";
$database = "j46555212";

if ($date == "0000-00-00") {
    $date = null;
}
if ($doklad == "") {
    $date = null;
}
$mysql = new mysqli($hostname, $username, $password, $database);
$mysql->query("INSERT INTO members (name, lastname, patronymic, phone, email, section, birthdate, report) VALUES('$name', '$lastname', '$patronymic', '$number', '$email', '$section', '$date', '$doklad')");

$mysql->close();

header('Location: /html/info.php');