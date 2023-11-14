<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace App\Controllers;

use App\Models\Page;
use Core\Base\Controller;

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
