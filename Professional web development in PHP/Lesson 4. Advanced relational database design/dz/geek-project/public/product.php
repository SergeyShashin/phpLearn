<?php

require '..\engine\core.php';

function routeIndex()
{
  $sql = "SELECT * from product WHERE id={$_GET['id']}";
  $props = getItem($sql);
  echo render('product\details', ['props' => $props]);
}

route();
