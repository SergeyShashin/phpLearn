<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace core;

use core\base\Controller;
use core\base\View;
use core\traits\Singletone;
use core\base\ActiveRecord;
use Doctrine\DBALL\Configuration;
use Doctrine\DBALL\Connection;
use Doctrine\DBALL\DriverManager;
use LDAP\Result;
use Twig_Environment;
use Twig_Loader_Filesystem;

/**
 * Класс приложения, который содержит всю логику
 * инициализация подключения компонентов, сервисов и базы данных
 * 
 * @package core
 * @property Request $request
 * @property Controller $controller
 * @property Connection $connection
 * @property string $action
 */
class Application
{
  use Singletone;

  public $request;
  public $controller;
  public $connection;

  private $_config;

  /**
   * Инициализация приложения с указанными  настройками
   * 
   * @param array $configuration
   * 
   * @throws \Exeption 
   */
  public function init($configuration)
  {
    //загружаем конфигурации
    $this->_config = $configuration;

    //инициализируем и регистрируем объекты компонентов приложения
    $this->request = $this->getRequest();
    $this->connection = $this->getConnection();

    $this->router = $this->getRouter();
    $this->renderer = $this->getRenderer();

    //если контроллер найден
    if ($router->controller) {
      //создаём новый экземпляр и вызываем action
      $controllerName = $router->controller;
      $this->controller = new $controllerName($this->request, $renderer);

      //сохраняем, полученный результат от контроллера
      $response = $this->controller->runAction(
        $router->action,
        $router->params
      );


      //возвращаем на страницу
      echo $response;
    } else {
      throw new \Exception('invalid controller');
    }
  }

  private function getRequest()
  {
    return new Request();
  }

  /**
   * Формирование объекта Doctrine
   * @return Connection
   * @throws \Doctrine\DBAL\DBALException
   */
  private function getConnection()
  {
    $doctrineConfig = new Configuration();
    $connection = DriverManager::getConnection($this->_config['database'], $doctrineConfig);
    return $connection;
  }

  /**
   * Формирование объекта Router
   * @return Router
   */
  private function getRouter(){
    return new Router($this->request->path, $this->_config['routes']);
  }

}
