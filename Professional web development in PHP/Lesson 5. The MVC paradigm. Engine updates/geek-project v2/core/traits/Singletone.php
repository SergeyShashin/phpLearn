<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace Core\Traits;

/**
 * Для повторного использования в других прлиожениях
 * @package core\traits
 */
trait Singletone
{

  private static $_instance;

  private function __clone()
  {
  }

  private function __wakeup()
  {
  }

  private function __constructor()
  {
  }

  /**
   * Возвращает всегда активный объект массива
   */
  public static function getInstance()
  {
    if (!isset(self::$_instance)) {
      self::$_instance = new self();
    }

    return self::$_instance;
  }
  
}
