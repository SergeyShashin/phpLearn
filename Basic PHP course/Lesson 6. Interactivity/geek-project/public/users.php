<?php

require '..\config\main.php';
require '..\engine\core.php';

if (isset($_GET['user_id'])) {

  echo render('users\view');
} else {

  echo render('users\list');
}
