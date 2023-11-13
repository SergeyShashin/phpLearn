<?php

require "vendor/autoload.php";

use App\View\Page;

$page = new Page('home');
var_dump($page->render([]));