<?php

use Exception;

class InvalidAgeException extends Exception
{
  private $age;
  public function __construct()
  {
    parent::__construct();
  }
}
