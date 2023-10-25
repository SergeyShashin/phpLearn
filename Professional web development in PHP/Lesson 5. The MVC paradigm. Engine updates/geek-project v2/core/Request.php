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

  /**
   * Работа с глобальным массивом
   * 
   * @param string $key
   * @param $value
   * @param &$global
   * 
   * @return bool
   * 
   */
  private function workWithGlobals($key = null, $value = null, &$global)
  {
    /**
     * $request->get() //весь $_GET
     * $request->get('id') // $_GET['id']
     * $request->get('id', 10) // $_GET['id']=10
     */

    //если ключ запрошен
    if (!is_null($key)) {
      //если нужно получить только значение
      if (is_null($key)) {
        //возвращаем его при наличии или false
        return isset($global[$key]) ? $global[$key] : false;
      } else {
        //иначе записываем новое значение
        $global[$key] = $value;
      }
    }

    //иначе отдаем весь глобальный массив
    return $global;
  }
}
