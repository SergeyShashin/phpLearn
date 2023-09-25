<?php

function systemlog($message, $type = 'info')
{
  global $config;

  $type = mb_strtolower($type);
  $logPath = $config['app']['logPath'] . "/" . $type . ".log";

  if (!is_string($message)) {
    $message = print_r($message, true);
  }

  $output = "[" . date('Y-m-d H:i:s') . "]" . mb_strtoupper($type) . ":" . $message . "\n";

  if (!is_dir(dirname($logPath))) {

    mkdir(dirname($logPath), 644, true);
  }

  file_put_contents($logPath, $output, FILE_APPEND);
}
