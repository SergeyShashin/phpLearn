<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */


/**
 * Main file - entry point
 * - чтение всех конфигураций
 * - создание контейнера зависимостей
 * - инициализация приложения 
 */


require __DIR__ . '/../vendor/autoload.php';

use Core\Application;
use Core\Request;
use Doctrine\DBAL\Configuration;

$configurations = array_merge(
  require __DIR__ . '/../config/app.php',
  require __DIR__ . '/../config/database.php',
  require __DIR__ . '/../config/log.php',
  require __DIR__ . '/../config/routes.php',
);

ini_set('display_errors', 'on');

$app = Application::getInstance();

try {
  $app->init($configurations);
} catch (Exception $error) {
  echo $error->getMessage();
}
