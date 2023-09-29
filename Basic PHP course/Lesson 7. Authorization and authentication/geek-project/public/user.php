<?php

require '..\config\main.php';
require '..\engine\core.php';

echo render('user/signIn');

if (isset($_POST['signIn']) && isset($_POST['login']) && isset($_POST['password'])) {
  addUser();
}

function addUser()
{
  $userLogin = "'" . $_POST['login'] . "'";
  $userPassword = "'" . $_POST['password'] . "'";

  $answer = execute("INSERT into `users` (`login`, `password` ) values ($userLogin, $userPassword);");

  if ($answer) {
    loginUser($_POST['login']);
    header('Location: index.php');
  } else {
    echo render('site/error');
  }
}
