<?php 
    define('DB_HOST', 'localhost'); //Адрес
    define('DB_USER', 'root'); //Имя пользователя
    define('DB_PASSWORD', ''); //Пароль
    define('DB_NAME', 'webExam'); //Имя БД
    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    if (!$mysql) {
        echo 'Ошибка подключения: ' . mysqli_connect_error();
        exit;
    } 
?>
