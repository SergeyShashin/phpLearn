<?php

// 4. Объявить массив, индексами которого являются буквы русского языка,
// а значениями – соответствующие латинские 
// буквосочетания ('а'=> 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', …, 'э' => 'e', 'ю' => 'yu', 'я' => 'ya').
// Написать функцию транслитерации строк.




function a($str)
{
  $translit = [
    'а' => 'a',
    'A' => 'a',
    'б' => 'b',
    'Б' => 'b',
    'в' => 'v',
    'В' => 'v',
    'г' => 'g',
    'Г' => 'g',
    'д' => 'd',
    'Д' => 'd',
    'е' => 'e',
    'Е' => 'e',
    'ё' => 'yo',
    'Ё' => 'yo',
    'ж' => 'zh',
    'Ж' => 'zh',
    'з' => 'z',
    'З' => 'z',
    'и' => 'i',
    'И' => 'i',
    'к' => 'k',
    'К' => 'k',
    'л' => 'l',
    'Л' => 'l',
    'м' => 'm',
    'М' => 'm',
    'н' => 'n',
    'Н' => 'n',
    'о' => 'o',
    'О' => 'o',
    'п' => 'p',
    'П' => 'p',
    'р' => 'r',
    'Р' => 'r',
    'с' => 's',
    'С' => 's',
    'т' => 't',
    'Т' => 't',
    'у' => 'u',
    'У' => 'u',
    'ф' => 'f',
    'Ф' => 'f',
    'х' => 'h',
    'Х' => 'h',
    'ц' => 'c',
    'Ц' => 'c',
    'ч' => 'ch',
    'Ч' => 'ch',
    'ш' => 'sh',
    'Ш' => 'sh',
    'щ' => 'shch',
    'Щ' => 'shch',
    'э' => 'e',
    'Э' => 'e',
    'ю' => 'yu',
    'Ю' => 'yu',
    'Я' => 'ya',
    'я' => 'ya'
  ];
  $strLow = strtolower($str);
  $res = strtr($strLow, $translit);
  return $res;
}

echo a("ПриВет");
