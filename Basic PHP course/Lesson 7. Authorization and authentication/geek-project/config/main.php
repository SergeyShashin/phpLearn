<?php

define('ROOT', dirname(__DIR__));

session_start();

$config = array_merge(include 'app.php', include 'db.php');

