<?php

require 'Product.php';
require 'ProductWeight.php';
require 'ProductPiece.php';
require 'ProductDigit.php';

// 1. Создать структуру классов ведения товарной номенклатуры.
// а) Есть абстрактный товар.
// б) Есть цифровой товар, штучный физический товар и товар на вес.
// в) У каждого есть метод подсчета финальной стоимости.
// г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза.
//    У штучного товара обычная стоимость, у весового – в зависимости от продаваемого количества в килограммах.
//    У всех формируется в конечном итоге доход с продаж.
// д) Что можно вынести в абстрактный класс, наследование?
// 2. *Реализовать паттерн Singleton при помощи traits.

$newWeightProduct = new ProductWeight('весовой', 10, 20);
$newPieceProduct = new ProductPiece('штучный', 1, 100);
$newPieceProduct = new ProductPiece('цифровой', 1, $newWeightProduct->$priceProduct/2);

echo $newWeightProduct->getSumProduct();