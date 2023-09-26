<?php

/**
 * @param string $template Название шаблона
 * @param array $data Массив данных для передачи
 * @param bool $withLayout Использовать ли основной макет
 * @param string $layout Название основного макета
 * 
 * @return string HTML-код готового шаблона
 */
function render($template, $data = [], $withLayout = true, $layout = 'main')
{
  global $config;

  $templates = [
    // 'layuot' => "{$config['app']['templatesPath']}\{$layout}.php",
    // 'page' => "{$config['app']['templatesPath']}\{$template}.php"
    'layout' => $config['app']['templatesPath']."/"."layouts/".$layout.".php",
    'page' => $config['app']['templatesPath']."/".$template.".php"
  ];

  $data['config'] = $config['app'];

  $pageView = getTemplateContent($templates['page'], $data);

  if ($withLayout) {
    $data['content'] = $pageView;
    return getTemplateContent($templates['layout'], $data);
  } else {
    return $pageView;
  }
}

/**
 * @param string $filePath Путь к шаблону
 * @param array $data Массив данных для обработки
 * 
 * @return string HTML-код готового шаблона
 * */
function getTemplateContent($filepath, $data)
{

  ob_start();

  extract($data);

  include $filepath;

  return ob_get_clean();
}
