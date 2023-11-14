<?php

require "vendor/autoload.php";

use App\View\Page;

$page = new Page('home');
$currentDate = date('d/m/y');
$error = false;
$users = [
  ['login'=>'some', 'pas'=>'123'], 
  ['login'=>'another', 'pas'=>'321'], 
];
echo $page->render(['currentDate' => $currentDate, 'error' => $error, 'users'=>$users]);
