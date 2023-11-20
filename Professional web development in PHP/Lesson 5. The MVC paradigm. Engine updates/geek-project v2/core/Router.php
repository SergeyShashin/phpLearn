<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace Core;

use Core\Base\BaseObject;

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

  /**
   * Запуск обработки валидации правил и подготовки аргументов
   * @param string $path
   */
  public function handle($path)
  {
    if (!$path) {
      $path = "/";
    }

    //перебираем все правила валидации до нахождения совпадения
    foreach ($this->_rules as $rule => $route) {

      //меняем в правиле placeholder'ы на патерны правила
      $pattern = preg_replace("/{[\w]+}/", "([\w]+)", $rule);
      $pattern = "~^" . $pattern . "$~";

      //если найдено точное совпадение
      if (preg_match($pattern, $path)) {
        //получаем из маршрута название аргументов
        $params = $this->getParamsFromRule($rule);
        //также извлекаем значение аргументов
        $values = $this->getValuesFromPath($path, $pattern);

        //сохраняем найденный маршрут к контроллеру
        $this->route = $route;
        //сохраняем найденные аргументы
        $this->params = $values;

        //записываем в Get массив аргументы в виде ключ-значение
        $_GET = array_merge(array_combine($params, $values), $_GET);

        //останавливаем цикл, чтобы не перезаписывать правила
        break;
      }
    }
  }

  /**
   * Извлекает название параметров из переданного маршрута
   * @param string $path
   * 
   * @return array
   */
  private function getParamsFromRule($path)
  {
    $matches = [];
    $params = [];

    preg_match_all("/{[\w]+}/", $path, $matches, PREG_SET_ORDER);

    foreach ($matches as $match) {
      $params[] = preg_replace("/[\w]+/", '', $match[0]);
    }

    return $params;
  }

  /**
   * Извлекает значение аргументов по указанному регулярному выражению
   * 
   * @param string $path
   * @param string $pattern
   * 
   * @return array
   */
  private function getValuesFromPath($path, $pattern)
  {
    $matches = [];
    $values = [];

    preg_match_all($pattern, $path, $matches, PREG_SET_ORDER);

    unset($matches[0][0]);

    foreach ($matches[0] as $match) {
      $values[] = $match;
    }

    return $values;
  }

  /**
   * Найденный контроллер по маршруту
   * @return bool|mixed
   */
  public function getController()
  {
    return ($this->route[0]) ? $this->route[0] : false;
  }
}
