<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

 use App\Controllers\SiteController;

/**
 * Application route settings
 */
return [
  'routes' => [
    //settings
    '/'=>[SiteController::class, 'index'],
    // 'pages'=>[PageController::class, 'index'],
    // 'page/new'=>[PageController::class, 'add'],
  ],

];