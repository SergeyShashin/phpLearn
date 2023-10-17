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

  // редирект, если авторизован
  if (isLoggedUser()) {
    header('Location: \user.php?action=home');
  }

  // //проверка данных из формы
  if (isset($_POST['signIn'])) {
    systemLog($_POST, 'debug');
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (isset($_POST['remember'])) {
      loginUser($login, $password, true);
    } else {
      loginUser($login, $password);
    }

    if (isLoggedUser()) {
      header('Location: \user.php?action=home');
    } else {
      echo 'Логин или пароль введены с ошибкой.';
    }
    
    // header('Location: /user.php?action=home');
  }

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
  $loginForHome = $_SESSION['auth']['login'];
  var_dump($loginForHome);
  $sql = "SELECT * from `users` WHERE(`login`= '{$loginForHome}')";
  $dataUser = getItem($sql);

  // echo render('user/home');
  echo render('user/home', ['dataUser' => $dataUser]);
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
    $password = $_POST['password'];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT into `users` (`login`, `password`) values ('{$login}', '{$passwordHash}')";

    if (execute($sql)) {
      //авторизовать пользователя (добавить в сессию, куки информацию, установить роль гость, авторизованный или админ)
      loginUser($login, $password, true);
      // Подгрузить страницу user/home
      header('Location: /user.php?action=home');
    } else {
      header('Location: site\error');
    }
  }
}

//Обрабатывает редактирование формы на странице user/home
function routeApprove()
{
}

route();
