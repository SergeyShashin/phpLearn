<?php

namespace App\View;

use Twig\Loader\FilesystemLoader;
use Twig_Loader_Filesystem;
use Twig\Environment;

class Page
{
  private $twig;
  private $template;

  public function __construct($template)
  {
    // $loader = new Twig_Loader_Filesystem('views');
    $loader = new FilesystemLoader('views');    

    $this->twig = new Environment($loader);

    $this->template = $template . '.twig';
  }

  /**
   * @param array $data
   * 
   * @return string
   */
  public function render($data)
  {
    return $this->twig->render($this->template, $data);
  }
}
