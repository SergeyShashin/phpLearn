<?php

require '..\engine\core.php';

function routeIndex()
{
  $sql = "SELECT * from category";
  $cats = getItemArray($sql);
  echo render('category\index', ['cats' => $cats]);
}

function routeView()
{
  // $sql = "SELECT * from product WHERE category_id={$_GET['id']}";
  // $prods = getItemArray($sql);

  // добавляет 25 товаров в таблицу product
  // for ($i = 0; $i < 25; $i++) {
  //   execute("INSERT INTO `product` (`name`, `description`, `price`, `quantity`, `category_id`) VALUES ('product{$i}', 'Описание товара', '10', '1', '1');");
  // }

  $connection = new PDO(
    'mysql:host=127.0.0.1;dbname=geek_project',
    'root',
    'rewq54321'
  );
  $stmt = $connection->prepare("SELECT * FROM product WHERE category_id={$_GET['id']}");
  // $name = 'FD2';
  // $stmt->bindParam(':name', $name);
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  // var_dump($stmt->fetchAll());
  $prods = $stmt->fetchAll();

  echo render('category\view', ['prods' => $prods]);
}

route();
