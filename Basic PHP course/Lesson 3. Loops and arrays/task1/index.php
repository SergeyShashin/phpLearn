<?php

// 1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.

$i = 1;

while ($i < 101) {
  if ($i % 3 === 0) {
    echo $i . "\n";
  }
  $i++;
}