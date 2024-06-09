<?php
$host = 'localhost'; // хост базы данных
$user = 'root'; // пользователь базы данных
$password = ''; // пароль пользователя базы данных
$db_name = 'proekt'; // название базы данных

// подключение к базе данных
$mysqli = new mysqli($host, $user, $password, $db_name);

// проверка соединения
if ($mysqli->connect_error) {
    die("Ошибка подключения: " . $mysqli->connect_error);
} 
?>
