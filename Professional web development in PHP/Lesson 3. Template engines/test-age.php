<?php

require "vendor/autoload.php";

use App\Exception\InvalidAgeException;

$age = 16;

function chekAge($age)
{
  if ($age < 16) {
    throw new Exception('Invalid age.');
  } else {
    echo 'Ok' . PHP_EOL;
  }
}

try{
  chekAge($age);
}catch(Exception $exception){
  echo "Ooops. ". $exception->getMessage();
}
