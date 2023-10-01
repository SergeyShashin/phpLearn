<?php

function isLoggedUser()
{
  return isset($_SESSION['auth']['login']);
}

function loginUser($login, $remember = false)
{
  $_SESSION['auth']['login'] = $login;

  $passwordAdmin = intval(execute("SELECT `password` FROM `users` WHERE login='admin';"));

  if ($login == 'admin' && $passwordAdmin == 123123) {
    $_SESSION['auth']['admin'] = true;
  }

  if ($remember) {
    $auth = [['login'] => $_SESSION['auth']['login']];

    setCook('auth', json_encode($auth));
  }
}

function logoutUser()
{
  session_destroy();
}

function isAdmin()
{
  return isset($_SESSION['auth']['admin']) && $_SESSION['auth']['admin'] == true;
}

function autoLogin()
{
  if (isset($_COOKIE['auth'])) {
    $auth = json_decode($_COOKIE['auth'], true);

    loginUser($auth['login'], true);
    welcomeUser($auth['login']);
  }
}

function welcomeUser($login)
{
  echo render('user/personalAccount', $login);
  header('Location: user/personalAccount.php');
}


function setCook($key, $value)
{
  setcookie(
    $key,
    $value,
    time() + 3600 * 2,
    '/',
    'localhost',
    true,
    true
  );
}
