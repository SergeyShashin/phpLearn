<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace core;

use core\base\BaseObject;

/**
 * Предназначен для обработки запросов к приложению
 * GET, POST, AJAX, Session, Cookie
 * 
 * @package core
 * 
 * @property-read string $path
 */
class Request extends BaseObject
{
  private $_redirectedFrom;

  public function __construct()
  {
    //запускаем сессию
    session_start();

    //кешируем страницу, откуда пришёл пользователь (для редиректа)
    $this->_redirectedFrom = isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : false;
  }


  /**
   * Работа с $_POST массивом
   * 
   * @param string|null $key
   * @param null $value
   * 
   * @return bool|array
   */
  public function post($key = null, $value = null)
  {
    return ($this->workWithGlobals($key, $value, $_POST));
  }

  /**
   * Работа с $_SESSION массивом
   * 
   * @param string|null $key
   * @param null $value
   * 
   * @return bool
   */
  public function session($key = null, $value = null)
  {
    return ($this->workWithGlobals($key, $value, $_SESSION));
  }

  /**
   * Работа с $_COOKIE массивом
   * 
   * @param string|null $key
   * @param null $value
   * 
   * @return bool
   */
  public function cookie($key = null, $value = null)
  {
    if (!is_null($key)) {
      if (!is_null($value)) {

        return (isset($_COOKIE[$key]) ? $_COOKIE[$key] : false);
      } else {
        setcookie(
          $key,
          $value,
          strtotime('+30 days'),
          '/',
          $_SERVER['HTTP_HOST'],
          true,
          true
        );
      }
    }

    return  $_COOKIE;
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

  /**
   * Работа с $_GET массивом
   * 
   * @param string|null $key
   * @param null $value
   * 
   * @return mixed
   */
  public function get($key = null, $value = null)
  {

    return $this->workWithGlobals($key, $value, $_GET);
  }

  /**
   * Проверка соответствия Get запросу
   * @return bool
   */
  public function isGet()
  {
    return ($_SERVER['REQUEST_METHOD'] == 'GET');
  }

  /**
   * Проверка соответсвия AJAX запросу
   * @return bool
   */
  public function isAjax()
  {

    $flag = (!empty($_SERVER['HTTP_X_REQUEST_WITH'])) ? strtolower($_SERVER['HTTP_X_REQUEST_WITH']) : 'normal';

    return ($flag == 'xmlhttprequest');
  }

  /**
   * Редирект на переданную страницу или в корень сайта
   * @param string $url
   * @param bool $absolute
   */
  public function redirect($url, $isAbsolute = false)
  {
    //если был передан аргумент адреса
    if (!is_null($url)) {
      if (!$isAbsolute) {

        $redirect = ($url[0] == '/') ? $url : "/{$url}";
      } else {

        $redirect = $url;
      }
    } else {
      $redirect = "//" . $_SERVER['HTTP_HOST'];
    }

    return header('Location:', $redirect);
  }

  /**
   * Редирект на предыдущую страницу
   */
  public function goBack()
  {
    return header('Location:', $this->_redirectedFrom);
  }

  /**
   * Получение текущего пути (без GET параметров)
   * @return string
   */
  public function getPath()
  {
    $path = preg_replace('/\?(.*)$/', '', $_SERVER['REQUEST_URI']);
    return trim($path, '/');
  }
}
