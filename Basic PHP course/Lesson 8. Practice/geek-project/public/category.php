<?php

require '..\engine\core.php';

function routeIndex()
{
  echo render('category\index');
}

route();
