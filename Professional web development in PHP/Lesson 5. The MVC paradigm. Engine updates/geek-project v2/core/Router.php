<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace core;

use core\base\BaseObject;

/**
 * Предназначен для автоматизации маршрутизации приложения
 * по указанным правилам
 * 
 * @package core
 * 
 * @property-read string $controller
 * @property-read string $action
 */
class Router extends BaseObject
{
  public $route = [];
  public $params = [];
  private $_rules;

  /**
   * Инициализация роутера по текущему маршруту
   * 
   * @param string $path
   * @param array $rules
   */
  public function __construct($path, $rules)
  {
    $this->_rules = $rules;
    $this->handle($path);
  }

  
}
