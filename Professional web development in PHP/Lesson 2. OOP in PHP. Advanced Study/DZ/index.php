<?php

require_once 'Product.php';
require_once 'ProductWeight.php';
require_once 'ProductPiece.php';
require_once 'ProductDigit.php';

require_once 'MyClass.php';

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
$priceForDigitProduct =  $newWeightProduct->getPriseProduct() / 2;
$newPieceDigit = new ProductDigit('цифровой', 1, $priceForDigitProduct);

echo $newPieceDigit->getSumProduct(), PHP_EOL;

MyClass::getInstance()->say();
MyClass::getInstance()->setData([
  'title' => 'Не очень простое название для страницы',
  'content' => 'Текст страницы'
]);

echo "<pre>";
print_r(MyClass::getInstance()->getPreparedData());
echo "<pre>";
