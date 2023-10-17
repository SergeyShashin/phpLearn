<?php

// $user = 'root';
// $pass = 'rewq54321';
// $dbname = 'geek_project';
$connection = new PDO(
  'mysql:host=127.0.0.1;dbname=geek_project',
  'root',
  'rewq54321'
);

$stmt = $connection->prepare('SELECT * FROM departments WHERE shortName=:name');
$name = 'FD2';
$stmt->bindParam(':name', $name);

$stmt->execute();
var_dump($stmt->fetchObject());
