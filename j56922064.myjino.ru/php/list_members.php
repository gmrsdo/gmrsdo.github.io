<?php
$hostname = "mysql.j46555212.myjino.ru";
$username = "j46555212";
$password = "WvsLR-JaDS3n";
$database = "j46555212";
$mysql = new mysqli($hostname, $username, $password, $database);

if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}
$sql = "SELECT 'name', 'lastname', 'patronymic',
    'phone', 'email', 'section', 'birthdate', 'report'
    FROM 'members'";

$result = $mysql->query($sql);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        echo $row['name'];
    }

}
$conn->close();