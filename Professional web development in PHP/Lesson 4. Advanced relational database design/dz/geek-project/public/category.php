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
  $connection = new PDO(
    'mysql:host=127.0.0.1;dbname=geek_project',
    'root',
    'rewq54321'
  );

  $stmt = $connection->prepare("SELECT * FROM product WHERE category_id={$_GET['id']}");
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $prods = $stmt->fetchAll();

  $limit = 25;
  $currentChunkArrayProds = 0;
  $chunksProds = array_chunk($prods, $limit);

  echo render('category\view', ['prods' => $chunksProds[$currentChunkArrayProds]]);
}

route();
