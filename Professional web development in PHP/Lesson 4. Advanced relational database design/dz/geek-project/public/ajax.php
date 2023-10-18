<?php

require '..\engine\core.php';


function routeIndex()
{
  echo render('ajax/main');
}

function routeJsonItem()
{
  $item = [
    'login' => 'Artur',
    'email' => 'test@example.ru',
    'password' => 123123,
    'roles' => [
      'user', 'manager', 'admin'
    ]
  ];
  renderJson($item);
}

function routeInput(){
  renderJson($_POST);
}

function routeObject(){
  renderJson($_POST['user']);
}

route();
