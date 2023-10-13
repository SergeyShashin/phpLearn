<?php

/** начальная страница сайта... */

//подключаем конфигурации приложения
require '..\engine\core.php';

//вывод шаблона
echo render('site/home');
