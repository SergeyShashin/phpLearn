<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

use core\Request;

/**
 * Main file - entry point
 * - чтение всех конфигураций
 * - создание контейнера зависимостей
 * - инициализация приложения 
 */

 $route = $_SERVER['REQUEST_URI'];
 $routeParts = explode('/', $route);
 unset($routeParts[0]);
 var_dump($routeParts);
