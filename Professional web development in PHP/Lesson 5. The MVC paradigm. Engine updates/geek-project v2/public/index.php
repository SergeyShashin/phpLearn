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

use core\Application;
use core\Request;

$configurations = array_merge(
  require '/../config/app.php',
  require '/../config/database.php',
  require '/../config/log.php',
  require '/../config/routes.php',
);

ini_set('display_errors', 'on');

$app = Application::getInstance();

try {
  $app->init($configurations);
} catch (Exception $error) {
  echo $error->getMessage();
}
