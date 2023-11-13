<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace Core\Base;

use Core\Request;
use Exception;

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

  /**
   * Вывод запрошенного метода в маршруте
   * 
   * @param string $method
   * @param array $params
   * 
   * @return mixed
   * @throws \Exeption  
   */
  public function runAction($method, $params)
  {
    if (!method_exists($this, $method)) {
      //распаковываем аргументы метода из массива
      return $this->{$method}(...$params);
    } else {
      throw new \Exception('Invalid action');
    }
  }


  /**
   * Генерация шаблона Twig по заданному пути и данным
   * @param string $view
   * @param array $data
   * 
   * @return string
   * 
   */
  private function view($view, $data = [])
  {
    try {
      $view = "/pages/{$this->name}/{$view}.twig";
    } catch (Exception $exception) {
      echo $exception->getMessage();
    }
  }
}
