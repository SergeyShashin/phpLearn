<?php

require '..\engine\core.php';

function routeIndex()
{
  echo render('product\details');
}

route();
