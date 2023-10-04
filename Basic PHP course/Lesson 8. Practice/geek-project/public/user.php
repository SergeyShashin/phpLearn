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
  if (isset($_POST['signIn'])) {
    systemLog($_POST, 'debug');
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login == 'admin' && $password = 123123) {
      if (isset($_POST['remember'])) {
        loginUser('admin', true);
      } else {
        loginUser('admin');
      }
      header('Location: /user.php?action=home');
    }
  }
  echo render('user/signIn');
}

function routeLogout()
{
  logoutUser();
}

function routeHome()
{
  echo render('user/home');
}

function routeRegister()
{
  //грузим из POST
  if (isset($_POST['reg_user'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    //хешируем пароль
    $password = password_hash($password, PASSWORD_DEFAULT);

    //готовим запрос
    $sql = "INSERT into users (login, password) values ('{$login}', '{$password}')";


    if (execute($sql)) {
      //авторизуем

      loginUser($login);
      header('Location: /user.php?action=home');
    }
  }

  echo render('user/register');
}


route();
