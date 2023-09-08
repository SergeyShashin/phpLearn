<?php
//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
//   Обязательно использовать оператор return.

echo sum(3, 3) . "\n";

echo difference(3, 3) . "\n";

echo multiplication(3, 3) . "\n";

echo division(3, 3) . "\n";

function sum($a, $b)
{
  return $a + $b;
};

function difference($a, $b)
{
  return $a - $b;
};

function multiplication($a, $b)
{
  return $a * $b;
};

function division($a, $b)
{
  return $a / $b;
};
