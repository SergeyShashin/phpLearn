<?php
// 3. Объявить массив, в котором в качестве ключей будут использоваться названия областей,
// а в качестве значений – массивы с названиями городов из соответствующей области.
// Вывести в цикле значения массива, чтобы результат был таким:
// Московская область:
// Москва, Зеленоград, Клин
// Ленинградская область:
// Санкт-Петербург, Всеволожск, Павловск, Кронштадт
// Рязанская область … (названия городов можно найти на maps.yandex.ru)
// вывести на экран только города, начинающиеся с буквы «К»

$order = [
  'Московская область' => [
    'Москва', 'Зеленоград', 'Клин', 'Коломна'
  ],
  'Ленинградская область' => [
    'Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'
  ],
  'Рязанская область' => [
    'Рязань', 'Шилово', 'Скопин', 'Новомичуринск', 'Сасово', 'Кадом', 'Ермишь', 'Касимов'
  ]
];

foreach ($order as $l1 => $l2) {
  echo $l1 . ":\n";
  $counter = 0;
  foreach ($l2 as $town) {
    $counter++;
    if (str_starts_with($town, 'К')) {
      if ($counter === count($l2)) {
        echo $town . ". ";
      } else {
        echo $town . ", ";
      }
    };
  }
  echo "\n\n";
}
