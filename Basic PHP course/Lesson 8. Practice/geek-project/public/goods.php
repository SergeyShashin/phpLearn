<?php

require '..\config\main.php';
require '..\engine\core.php';


if (isset($_GET['action'])) {
  $action = $_GET['action'];
} else {
  $action = 'list';
}

switch ($action) {
  case 'list':
    getGoods();
    break;
    // case 'add':
    //   addGoods();
    //   break;
  case 'delete';
    deleteGoods();
  default:
    render('site\error');
}


function getGoods()
{
  $goods = getItemArray('SELECT * FROM `goods`');

  echo render('goods\list', ['goods' => $goods]);
}

function deleteGoods()
{
  $id = intval($_GET['id']);
  execute("DELETE from `goods` WHERE (id=$id)");
  header('Location: goods.php');
}
