<?php

require '..\engine\core.php';

function routeIndex()
{
  routeLogin();
}

//страница с формой входа
function routeLogin()
{
  echo render('user/signIn');

  //редирект, если авторизован
  // if (isLoggedUser()) {
  //   header('Location: \user.php?action=home');
  // }

  // //проверка данных из формы
  // if (isset($_POST['signIn'])) {
  //   systemLog($_POST, 'debug');
  //   $login = $_POST['login'];
  //   $password = $_POST['password'];

  //   if (isset($_POST['remember'])) {
  //     loginUser($login, $password, true);
  //   } else {
  //     loginUser($login, $password);
  //   }
  //   header('Location: /user.php?action=home');
  // }

  echo "Выполнение routeLogin()";
  echo "Содержимое GET";
  print_r($_GET);

  echo "Содержимое $_POST";
  print_r($_POST);

  echo "Содержимое SESSION";
  print_r($_SESSION);

  echo "Содержимое COOKIE";
  print_r($_COOKIE);
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
  echo render('user/register');

  // //грузим из POST
  // if (isset($_POST['reg_user'])) {
  //   $login = $_POST['login'];
  //   $password = $_POST['password'];

  //   //хешируем пароль
  //   $password = password_hash($password, PASSWORD_DEFAULT);

  //   //готовим запрос
  //   $sql = "INSERT into users (login, password) values ('{$login}', '{$password}')";


  //   if (execute($sql)) {
  //     //авторизуем

  //     loginUser($login, $password, true);
  //     header('Location: /user.php?action=home');
  //   }
  // }
  echo "Выполнение routeRegister()";
  echo "Содержимое GET";
  print_r($_GET);

  echo "Содержимое $_POST";
  print_r($_POST);

  echo "Содержимое SESSION";
  print_r($_SESSION);

  echo "Содержимое COOKIE";
  print_r($_COOKIE);

  //Сделать
  //Добавить в БД логин и пароль
  if (isset($_POST['reg_user']) && isset($_POST['login']) && isset($_POST['password']) && strlen($_POST['login']) && strlen($_POST['password'])) {
    $login = $_POST['login'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = "INSERT into `users` (`login`, `password`) values ('{$login}', '{$password}')";

    if (execute($sql)) {
      //авторизовать пользователя (добавить в сессию, куки информацию, установить роль гость, авторизованный или админ)
      //Подгрузить страницу user/home
      // header('Location: /user.php?action=home');
    };

    $sql = "SELECT password from `users` WHERE(`login`= '{$login}')";

    $getPasswordFromBd = getItem($sql);

    $passwordFromBd = $getPasswordFromBd['password'];

    var_dump(password_verify('123', $passwordFromBd) );

  }

}

//Обрабатывает редактирование формы на странице user/home
function routeApprove()
{
}

route();
