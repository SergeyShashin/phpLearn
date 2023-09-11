<?php

// 5. Написать функцию, которая заменяет в строке пробелы
//  на подчеркивания и возвращает видоизмененную строчку.

function changingSpacesOnunderlining($str)
{
  return str_replace(' ', '_', $str);
}

echo changingSpacesOnunderlining(' Строки с пробелами ');