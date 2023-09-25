<?php
// 1. Создать форму-калькулятор с операциями: сложение, вычитание, умножение, деление.
//  Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега <select>.
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Калькулятор</title>
</head>
<body>
<form action="" method="get">
  <div>
    <label for="number1">Введите число1</label>
    <input type="text" name="number1" id="number1" required />
  </div>
  <div>
    <label for="operation">Выберите операцию</label>
    <input type="text" name="operation" id="operation" required />
  </div>
  <div>
    <label for="number2">Введите число2</label>
    <input type="text" name="number2" id="number2" required />
  </div>
  
    <input type="submit" value="=" />
  </div>
</form>
</body>
</html>