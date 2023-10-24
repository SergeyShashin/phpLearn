<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace app\controllers;

use core\base\Controller;

/**
 * 
 * 
 * @package app\controllers
 */
class SiteController extends Controller
{
  public function index()
  {
    echo 'TEST';
    return $this->render('index');
  }
}
