<?php

require '..\engine\core.php';


function routeIndex()
{
  $orderItems = [];

  if (isset($_SESSION['cart'])) {
    $orderItems[] = $_SESSION['cart'];
  }

  echo render('cart\index', ['orderItems' => $orderItems]);
}

function routeAddItem()
{
  if (isset($_POST['id'])) {
    // $orderItems[] = $_POST['id'];
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];

    if ($_SESSION['cart']['id']) {
      $_SESSION['cart']['quantity'] += $quantity;
    } else {
      $_SESSION['cart']['id'] = $id;
      $_SESSION['cart']['quantity'] = $quantity;
    }

    renderJson([
      'result' => 'OK',
      'error' => null
    ]);
  }
}

function routeOrder()
{
  if (isset($_SESSION['cart'])) {
    $uid = 124; //захардкожено. Порядковый номер заказа. Наверное $uid и $order_id одно и тоже
    $order_id = 2; // захардкожено. нужно получать как-то последний id в таблице order
    execute("INSERT into `order` (`uid`) values ('{$uid}')");

    foreach ($_SESSION['cart'] as $itemId => $quantity) {
      $order_id++;
      $itemId = 1;
      execute("INSERT into `order_items` (`poduct_id`, `order_id`, `quantity`) values ({$itemId}, {$order_id}, {$quantity}");
    }
  }
  header('Location: /');
}

route();
