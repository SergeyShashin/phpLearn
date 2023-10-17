<?php
// 1. Подгрузка контента с помощью AJAX.
// а) На базе движка из курса «PHP. Уровень 1» взять модуль каталога.
// б) Выводить не все товары разом, а подгружать по 25 по нажатию кнопки «Еще».
// 2. Создать очень много товаров и попробовать дойти до конца списка. Что происходит? Почему?

// $connection = new PDO(
//   'mysql:host=127.0.0.1;dbname=geek_project',
//   'root',
//   'rewq54321'
// );

// $stmt = $connection->prepare('SELECT * FROM departments WHERE shortName=:name');
// $name = 'FD2';
// $stmt->bindParam(':name', $name);
// $stmt->execute();
// $stmt->setFetchMode(PDO::FETCH_ASSOC);
// var_dump($stmt->fetchAll());


/** начальная страница сайта... */

//подключаем конфигурации приложения
require '..\engine\core.php';

//вывод шаблона
echo render('site/home');
