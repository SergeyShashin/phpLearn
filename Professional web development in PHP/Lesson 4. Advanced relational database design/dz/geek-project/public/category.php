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
  $sql = "SELECT * from product WHERE category_id={$_GET['id']}";
  $prods = getItemArray($sql);  
  echo render('category\view', ['prods' => $prods]);
}

route();
