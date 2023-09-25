<?php

//3. Добавить функционал отзывов в имеющийся у вас проект.

require '..\config\main.php';
require '..\engine\core.php';

$message = 'Hello from index.php';

// echo render('site/example', ['message' => $message], true, 'admin');
echo render('site/example', ['message' => $message]);

