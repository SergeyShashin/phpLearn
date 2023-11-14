<?php

namespace App\View;

use Twig\Loader\FilesystemLoader;
use Twig_Loader_Filesystem;
use Twig\Environment;
use Twig\Extension\DebugExtension;

class Page
{
  private $twig;
  private $template;

  public function __construct($template)
  {
    $loader = new FilesystemLoader('views');    

    $this->twig = new Environment($loader, ['debug'=> true]);
    $this->twig->addExtension(new DebugExtension);

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
