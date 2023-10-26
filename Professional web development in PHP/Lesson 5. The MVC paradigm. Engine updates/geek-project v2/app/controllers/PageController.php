<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace app\controllers;

use app\models\Page;
use core\base\Controller;

/**
 * 
 * 
 * @package app\controllers
 */
class PageController extends Controller
{
  public function index()
  {
    $pages = Page::all();

    return $this->render('index', ['pages' => $pages]);
  }

  public function view($id)
  {
    $page = Page::findById($id);

    return $this->render('view', ['page' => $page]);
  }

  public function add()
  {
    $page = new Page();

    if ($this->request->isPost()) {
      if ($page->load($this->request->post())) {
        $page->save();

        $this->request->redirect('view/' . $page->id);
      } else {
        $page->addError('title', 'Что-то пошло не так');
      }
    }
  }
}
