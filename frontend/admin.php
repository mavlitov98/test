<html>
<head>
    <title>Админ-панель</title>
</head>
<body>
<h1>Список клиентов:</h1>
<?php
// данные для авторизации:
$host = 'localhost';
$username = 'root';
$password = 'root';
$db_name = 'shop';

//подключение к БД
$connection = mysqli_connect($host, $username, $password, $db_name);

if($connection == false){
    print('Не удалось подключиться к базе данных библиотеки.');
    print (mysqli_connect_error);
    exit();
}

//чтение с БД
$read = "SELECT * FROM `client`";
$result = mysqli_query($connection, $read);

while (($record = mysqli_fetch_assoc($result))){
    print('<li>' .
        'ID клиента: '.    $record['id'] . ' <br> ' .
        'Имя: ' .        $record['name'] . ' <br> ' .
        'Email: '.      $record['email'] . ' <br> ' .
        'Телефон: ' .   $record['phone'] . ' <br> ' .
        'Адрес: ' .   $record['address'] . ' <br> ' .
        'День доставки: ' . $record['day'] . '<br>' .
        'Тариф: ' . $record['rate']  .  '</li><hr>');
}


?>


</body>
</html>

