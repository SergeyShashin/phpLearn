<?php
// $hi = "Привет";
// define('NUMBER', 777);
// echo $hi;
// echo NUMBER;
// $hi = ":)";
// $true=true;
// echo $hi;
// echo $true;
// var_dump($true);

// $precise1 = 1.5;
// $precise2 = 1.5e4;
// $precise3 = 6E-8;
// echo "$precise1 | $precise2 | $precise3";
// echo '$precise1 | $precise2 | $precise3';

// $a = 'Привет';
// $b = ' и привет = два привета.';
// echo $a . $b;

// $a = 4;
// $b = 5;
// echo $a + $b . '<br>'; // сложение
// echo $a * $b . '<br>'; // умножение
// echo $a - $b . '<br>'; // вычитание
// echo $a / $b . '<br>'; // деление
// echo $a % $b . '<br>'; // остаток от деления
// echo $a ** $b . '<br>'; // возведение в степень

// $a += $b;
// echo 'a = ' . $a;
// $a = 0;
// echo $a++; // Постинкремент
// echo ++$a; // Преинкремент
// echo $a--; // Постдекремент
// echo --$a; // Предекремент

// var_dump($a == $b); // Сравнение по значению
// var_dump($a === $b); // Сравнение по значению и типу
// var_dump($a > $b); // Больше
// var_dump($a < $b); // Меньше
// var_dump($a <> $b); // Не равно
// var_dump($a != $b); // Не равно
// var_dump($a !== $b); // Не равно без приведения типов
// var_dump($a <= $b); // Меньше или равно
// var_dump($a >= $b); // Больше или равно

// var_dump(4 <> 4); // false 
// var_dump(4 != '4'); // false
// var_dump(4 !== '4'); // true

// $a = 5;
// $b = '05';
// var_dump($a == $b); // Почему true? //Потому что одинаковые значения.
// var_dump((int)'012345'); // Почему 12345? // Потому что строку преобразуют в число.
// var_dump((float)123.0 === (int)123.0); // Почему false? // Потому что сравниваются значения и типы данных.
// var_dump((int)0 === (int)'hello, world'); // Почему true? // Потому что сраниваются одинаковые значения и типы данных.

// Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась
// через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и
// текущий год генерировались в блоке контента из созданных переменных.

$title='Заголовок Title';
$h1 = 'Заголовок h1';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title?></title>
</head>
<body>
  <h1><?php echo $h1?></h1>
  
</body>
</html>