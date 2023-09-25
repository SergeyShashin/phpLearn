<?php

require '..\config\main.php';
require '..\engine\core.php';



var_dump($_POST);
var_dump($_FILES);

//сохранение загруженного файла
// move_uploaded_file($_FILES['upload_file']['tmp_name'], 'test.jpg');

echo render('site\upload');
