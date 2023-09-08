<?php
//4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
//   где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
//   В зависимости от переданного значения операции выполнить одну из арифметических операций
//   (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

echo mathOperation(3, 3, '+') . "\n";
echo mathOperation(3, 3, '-') . "\n";
echo mathOperation(3, 3, '/') . "\n";
echo mathOperation(3, 3, '*') . "\n";

function mathOperation($arg1, $arg2, $operation)
{
  switch ($operation) {
    case '+':
      return sum($arg1, $arg2);
    case '-':
      return difference($arg1, $arg2);
    case '/':
      return division($arg1, $arg2);
    case '*':
      return multiplication($arg1, $arg2);
  };

  return 'Data entry error';
}

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
