<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300&display=swap" rel="stylesheet" />
    <title>Информация</title>
</head>

<body>
    <form>
        <div class="form-group">
            <div class="container">
                <center>
                    <h1>Информация</h1>
                </center>
                <hr />
                <h3><b>Имя:</b></h3>
                <h4 id="name"></h4>
                <h3><b>Фамилия:</b></h3>
                <h4 id="lastname"></h4>
                <h3><b>Отчество:</b></h3>
                <h4 id="patronymic"></h4>
                <h3 for="phone"><b>Контактный телефон</b></h3>
                <h4 id="number"></h4>
                <h3 for="email"><b>Адрес электронной почты</b></h3>
                <h4 id="email"></h4>
                <h3 for="section"><b>Секция конференции</b></h3>
                <h4 id="section"></h4>
                <h3 for="birthdate"><b>Дата рождения</b></h3>
                <h4 id="date"></h4>
                <h3 for="doklad"><b>Доклад</b></h3>
                <h4 id="doklad"></h4>
                <hr />
                 <center>
                    <button class="registerbtn" formaction="../index.html" formnovalidate>
                        Назад
                    </button>
                </center>
            </div>
        </div>
    </form>
    <script src="../javascript/registration.js"></script>
</body>

</html>