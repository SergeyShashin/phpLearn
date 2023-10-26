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
      $user->load($this->request->post());
    }

    if ($user->login == 'admin') {
      //ок
    } else {
      $user->addError('login', 'Неверный логин');
    }


    return $this->render('index', ['user' => $user]);
  }
}
