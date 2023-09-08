<?php
// 6. *С помощью рекурсии организовать функцию возведения числа в степень.
//  Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

echo power(2, 3);

function power($val, $pow)
{
  if ($pow == 1) {
    return $val*1;
  } else {
    $res = $val * $val;
    $pow = $pow - 1;
    // echo $pow . "\n";
    // echo $val;
    return power($res, $pow);
  }
}
