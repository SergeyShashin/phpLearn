<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace core;

/**
 * Предназначен для обработки запросов к приложению
 * GET, POST, AJAX, Session, Cookie
 * 
 * @package core
 */
class Request
{

  /**
   * Проверка соответствия Get запросу
   * @return bool
   */
  public function isGet()
  {
    return ($_SERVER['REQUEST_METHOD'] == 'GET');
  }

  /**
   * Работа с $_POST массивом
   * 
   * @param string|null $key
   * @param null $value
   * 
   * @return bool
   */
  public function post($key = null, $value = null)
  {
    return ($this->workWithGlobals($key, $value, $_POST));
  }

  /**
   * Проверка соответствия Post запросу
   * @return bool
   */
  public function isPost()
  {
    return ($_SERVER['REQUEST_METHOD'] == 'POST');
  }
}
