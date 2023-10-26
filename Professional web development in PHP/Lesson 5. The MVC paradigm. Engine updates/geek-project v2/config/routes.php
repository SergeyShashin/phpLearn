<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

 use app\controllers\SiteController;

/**
 * Application route settings
 */
return [
  'routes' => [
    //settings
    '/'=>[SiteController::class, 'index'],
    'pages'=>[PageController::class, 'index'],
    'page/new'=>[PageController::class, 'add'],
  ],

];