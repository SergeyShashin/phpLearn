<?php

function isLoggedUser()
{
  return isset($_SESSION['auth']['login']);
}

function loginUser($login, $remember = false)
{
  $_SESSION['auth']['login'] = $login;

  if ($login == 'admin') {
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
  }
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
