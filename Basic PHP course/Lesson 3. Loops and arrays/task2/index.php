<?php

// 2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
//   0 – это ноль.
//   1 – нечетное число.
//   2 – четное число.
//   3 – нечетное число.
//   …
//   10 – четное число.

$i = 0;

do {
  if ($i === 0) {
    echo "$i - это ноль.";
  } else if ($i % 2 !== 0) {
    echo "$i - это нечётное число.";
  } else {
    echo "$i - это чётное число.";
  }
  echo "\n";
  $i++;
} while ($i <= 10);
