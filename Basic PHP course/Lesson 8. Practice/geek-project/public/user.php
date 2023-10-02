<?php

require '..\engine\core.php';

function routeIndex()
{
  routeLogin();
}

//страница с формой входа
function routeLogin()
{
  //редирект, если авторизован
  if (isLoggedUser()) {
    header('Location: \user.php?action=home');
  }

  //проверка данных из формы
  
}

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
    welcomeUser($_SESSION['auth']['login']);
    header('Location: user/personalAccount.php');
  } else {
    echo render('site/error');
  }
}
