<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace core\base;

use core\Request;

/**
 * Управляющий класс Controller, соединяющий модель и представление
 * Обрабатывает действия по указанным маршрутам
 * @package core\base
 * 
 * @property string $name
 * @property Request $request
 */
abstract class Controller extends BaseObject
{
  public $name;
  public $request;

  /**
   * @var View $view
   */
  protected $view;

  /**
   * Создание контроллера по указанному маршруту и шаблону
   * @param Request $request
   * @param View $view
   */
  public function __construct($request, $view)
  {
    $className = explode('\\', static::class);
    $this->name = strtolower(str_replace('Controller', '', array_pop($className)));

    //кешируем $request для работы
    $this->request = $request;

    //кешируем $view для отображения страниц
    $this->view = $view;
  }

  /**
   * Генерация ответа с определением формата
   * @param string $view
   * @param array $data
   * 
   * @return string
   */
  public function render($view, $data = [])
  {
    return ($this->request->isAjax()) ? $this->json($data) : $this->view($view, $data);
  }

  /**
   * Формируем JSON массив для возврата из контроллера
   * 
   * @param array $data
   * 
   * @return string
   */
  private function json($data)
  {
    header('Content-type: application/json');

    return json_encode($data, JSON_PRETTY_PRINT);
  }
}