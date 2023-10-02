<?php

/**
 * Функция для автоматического запуска нужно действия
 * через GET параметр action
 */

function route()
{
  // берём название функции из GET
  $action = (isset($_GET['action'])) ? $_GET['action'] : 'index';

  //добавляем префикс route к action => routeIndex
  $action = 'route' . ucfirst(strtolower($action));

  if (function_exists($action)) {
    call_user_func($action);
  } else {
    echo render('site\error');
  }
}
