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

    if ($this->request->isPost()) {
      $user = $this->request->post('User');
      var_dump($user);
    }

    return $this->render('index');
  }
}
