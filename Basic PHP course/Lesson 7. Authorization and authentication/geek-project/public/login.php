<?php

require '..\config\main.php';
require '..\engine\core.php';

echo render('users/signIn');

if(isset($_POST['signIn'])){
  addUser();
}

function addUser(){
  if(isset($_POST['login']) && isset($_POST['password'])){
    $userLogin = "'" .$_POST['login']."'" ;
    $userPassword = "'" .$_POST['password']."'";

    execute("INSERT into `users` (`login`, `password` ) values ($userLogin, $userPassword);");

    header('Location: index.php');
  }
}
