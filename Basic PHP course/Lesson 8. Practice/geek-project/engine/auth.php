<?php

/**
 * Файл для работы с аутентификацией в сессии
 */

/**
 * Проверка авторизован ли пользователь?
 * @return bool
 */
function isLoggedUser()
{
  return isset($_SESSION['auth']['login']);
}

/**
 * Проверка прав пользователя для показа блоков.
 * @param string $role
 * @return bool
 */
function userHasRole($role)
{
  if ($role == '?') {
    return !isLoggedUser(); //гость
  }

  if ($role == '@') {
    return isLoggedUser(); //авторизован
  }

  return false;
}

/**
 * Авторизация пользователя.
 * @param string $login
 * @param bool $remember
 */
function loginUser($login, $password, $remember = false)
{
  $sql = "SELECT password from `users` WHERE(`login`= '{$login}')";
  $getPasswordFromBd = getItem($sql);
  $passwordFromBd = $getPasswordFromBd['password'];

  var_dump(password_verify($password, $passwordFromBd));

  //проверка на соответсвие введенного пароля паролю в БД
  if (password_verify($password, $passwordFromBd)) {

    //запоминаем логин в сессии
    $_SESSION['auth']['login'] = $login;

    //если логин админ
    // if ($login == 'admin') {
    //   $_SESSION['auth']['admin'] = true;
    // }

    //если поставил "запомнить"
    if ($remember) {
      $auth = [['login'] => $_SESSION['auth']['login']];

      setCook('auth', json_encode($auth));
    }
  } else {
    return;
  }
}

/**
 * Выход из системы.
 */
function logoutUser()
{
  session_destroy();
  header("Location: /");
}

/**
 * проверка на администратора
 * @return bool
 */
// function isAdmin()
// {
//   return isset($_SESSION['auth']['admin']) && $_SESSION['auth']['admin'];
// }

/**
 * Попытка загрузки авторизации через COOKIES.
 */
function autoLogin()
{
  if (isset($_COOKIE['auth'])) {
    $auth = json_decode($_COOKIE['auth'], true);
    $login = $auth['login'];

    $sql = "SELECT password from `users` WHERE(`login`= '{$login}')";
    $getPasswordFromBd = getItem($sql);

    loginUser($login, $getPasswordFromBd, true);

    // welcomeUser($auth['login']);
  }
}

/**
 * Функция для упрощения записи COOKIES.
 * @param string $key
 * @param $value
 */
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

/**
 * Функция для сброса значения COOKIES.
 * @param string $key
 */
function resetCook($key)
{
  setcookie(
    $key,
    '',
    0,
    '/',
    'localhost',
    true,
    true
  );
}


function welcomeUser($login)
{
  echo render('user/personalAccount', $login);
  header('Location: user/personalAccount.php');
}
