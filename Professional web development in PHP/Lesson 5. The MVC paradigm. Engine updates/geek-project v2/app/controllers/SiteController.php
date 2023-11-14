<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace App\Controllers;

use App\Models\User;
use Core\Base\Controller;

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

    $regUser = User::all(

      User::find()
      ->where('id = :id')
      ->setParametr(':id', 2);
    ) 
    
    return $this->render('index', ['user' => $user]);
  }
}
