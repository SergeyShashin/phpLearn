<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace app\controllers;

use app\models\User;
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

    $user = new User(['login' => 'admin']);

    if ($this->request->isPost()) {
      if ($user->load($this->request->post())) {
        $user->save();
      } else {
        echo 'NOT LOADED';
      }
    }


    return $this->render('index', ['user' => $user]);
  }
}
