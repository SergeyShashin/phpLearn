<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace Core\Base;

/**
 *Класс базового объекта для наследования, содержащий магические методы
 * 
 * @package core\base
 */
abstract class BaseObject
{

  /**
   * Геттер
   * 
   * @param $name
   * 
   * @return mixed
   */
  public function __get($name)
  {
    $method = 'get' . ucfirst($name);

    if (method_exists($this, $method)) {
      return $this->{$method}();
    }
  }

  /**
   * Сеттер
   *  
   * @param $name
   * 
   * @param $value
   * 
   * @return mixed
   */
  public function __set($name, $value){

    $method = 'set' . ucfirst($name);

    if (method_exists($this, $method)) {
      return $this->{$method}($value);
    }else{
      $this->{$name} = $value;
    }
  }
}
