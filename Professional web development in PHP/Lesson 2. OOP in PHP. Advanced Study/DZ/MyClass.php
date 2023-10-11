<?php

require_once 'MyTransliterator.php';

class MyClass
{
  use MyTransliterator;

  private static $instance;
  public $data;

  private function __construct()
  {
  }

  private function __clone()
  {
  }

  private function __wakeup()
  {
  }

  public static function getInstance()
  {
    if (empty(self::$instance)) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function say()
  {
    echo 'Привет.';
  }

  public function setData($data){
    $this->data=$data;
  }

  public function getPreparedData() {
    // Допустим, мы хотим сделать адрес страницы по названию
    // Тогда нам нужно перевести название с кириллическими символами
    // на латиницу
    $this->data['url'] =
    strtolower($this->translate($this->data['title']));
    return $this->data;
    }   
    
}
