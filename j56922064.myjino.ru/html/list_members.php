<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" />
    <title>Таблица участников</title>
</head>

<body>
    <div class="form-group-table">
        <div class="container">
            <?php
$hostname = "mysql.j46555212.myjino.ru";
$username = "j46555212";
$password = "WvsLR-JaDS3n";
$database = "j46555212";
$mysql = new mysqli($hostname, $username, $password, $database);
$sql = mysqli_query($mysql, "SELECT * from members");
$members = mysqli_fetch_assoc($sql);
?>

            <?php

$strSQL = "SELECT * FROM members";

$rs = mysqli_query($mysql, $strSQL);
?>
            <center>
                <h1>Таблица участников</h1>
            </center>
            <center>
                <table>
            </center>
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Отчество</th>
                    <th>Номер</th>
                    <th>Почта</th>
                    <th>Секция</th>
                    <th>Дата рождения</th>
                    <th>Доклад</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rs as $row): ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['patronymic']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['section']; ?></td>
                    <td><?php echo $row['birthdate']; ?></td>
                    <td><?php echo $row['report']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
            </table>
            <form action="../index.html">
                <center><button class="registerbtn">Назад</button></center>
            </form>
        </div>
    </div>
</body>

</html>