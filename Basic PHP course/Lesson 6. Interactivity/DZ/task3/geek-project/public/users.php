<?php

require '..\config\main.php';
require '..\engine\core.php';

if (isset($_GET['add'])) {
  var_dump($_POST);
  echo render('users\add');
  if(isset($_POST['user_login'])){
    //добавляем в базу данных

    header('Location: \users.php');
    
  }
} else {
  if (isset($_GET['user_id'])) {
    $id = $_GET['user_id'];
    $id = strip_tags($id);
    $id = htmlspecialchars($id);
    $id = intval($id);
    echo render('users\view', ['id' => $id]);
  } else {
    echo render('users\list');
  }
}
