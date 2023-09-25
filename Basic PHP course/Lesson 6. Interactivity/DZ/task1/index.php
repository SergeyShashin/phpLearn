<?php
// 1. Создать форму-калькулятор с операциями: сложение, вычитание, умножение, деление.
//  Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега <select>.

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
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Калькулятор</title>
</head>

<body>
  <div class="container">
    <h3 class="mb-3">Калькулятор</h3>
    <form action="№" method="post" id="Calculator">
      <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
        <label for="number1" class="form-label">Введите число1</label>
        <input type="text" name="number1" id="number1" class="border border-success p-2 border-opacity-10" required />
      </div>
      <select name="operation" class="shadow p-3 mb-5 bg-body-tertiary rounded border border-success p-2 border-opacity-10">
        <!--Supplement an id here instead of using 'name'-->
        <option value="+">сложение</option>
        <option value="-">вычитание</option>
        <option value="*">умножение</option>
        <option value="/">деление</option>
      </select>
      <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
        <label for="number2" class="form-label">Введите число2</label>
        <input type="text" name="number2" id="number2" class="border border-success p-2 border-opacity-10" required />
      </div>

      <input type="submit" class="btn btn-primary" value="Посмотреть результат" />
  </div>
  </form>

  <?php if ($_POST) : ?>
    <?php
    $result = mathOperation(intval($_POST['number1']), intval($_POST['number2']), $_POST['operation']);
    ?>
    <h3 class="shadow p-3 mb-5 bg-body-tertiary rounded">Результат <?= $result ?></h3>
  <?php endif; ?>
  </div>
</body>

</html>