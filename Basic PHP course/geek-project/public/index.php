<?php

$connection = mysqli_connect(
  'localhost',
  'root',
  'rewq54321',
  'geek_project'
);

// $connectionPDO = new PDO('mysql:host=localhost; dbname=geek_project', 'root', 'rewq54321');

$print_r($connection);
// $print_r($connectionPDO);
phpinfo();