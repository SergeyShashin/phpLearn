<?php

//подключаем конфигурации приложения
require '..\engine\core.php';

//выводим список БД
function routeIndex()
{
  $items = getItemArray('SELECT * FROM `reviews`');

  echo render('reviews\list', ['items' => $items]);
}

//добавить новый (Post form)
function routeAdd()
{
  if (!isLoggedUser()) {
    header('Location: \reviews.php');
  }

  $error = false;

  if (isset($_POST['add_comment'])) {

    $content = htmlspecialchars($_POST['content']);
    $sql = "INSERT into `reviews` (`content`) values ('{$content}')";

    if (!empty($content) && execute($sql)) {
      header('Location: \reviews.php');
    } else {
      $error = 'Что-то пошло не так!';
    }
  }

  echo render('reviews\add', ['error' => $error]);
}

//удалить
function routeDelete()
{
  if (!isLoggedUser()) {
    header('Location: \reviews.php');
  } else {
    $id = 0;

    if (isset($_GET['id'])) {
      $id = intval($_GET['id']);
    }

    if ($id) {
      $sql = "DELETE from `reviews` WHERE (id={$id})";
      execute($sql);
    }
    header('Location: \reviews.php');
  }
}


//запуск маршрутизации
route();
