<?php

// 7. *Написать функцию, которая вычисляет текущее время и возвращает
//  его в формате с правильными склонениями, например:
// 22 часа 15 минут
// 21 час 43 минуты


$curTime = localtime(time(), true);
$hours = $curTime["tm_hour"] + 3;
$minutes = $curTime["tm_min"];

switch ($hours) {
  case 1:
  case 21:
    echo $hours . ' час ';
    break;
  case 2:
  case 22:
  case 3:
  case 23:
  case 4:
  case 24:
    echo $hours . ' часа ';
    break;

  default:
    echo $hours . ' часов ';
    break;
}

switch ($minutes) {
  case 1:
  case 21:
    echo $minutes . ' минута ';
    break;
  case 2:
  case 3:
  case 4:
  case 22:
  case 23:
  case 24:
  case 32:
  case 33:
  case 34:
  case 42:
  case 43:
  case 44:
  case 52:
  case 53:
  case 54:
    echo $minutes . ' минуты ';
    break;

  default:
    echo $minutes . ' минут ';
    break;
}