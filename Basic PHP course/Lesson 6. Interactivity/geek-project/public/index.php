<?php

require '..\config\main.php';
require '..\engine\core.php';

$message = 'Hello from index.php';

echo render('site/example', ['message' => $message]);
