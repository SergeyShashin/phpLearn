<?php
// 2. 2. Создать калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку.

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
        <input type="number" name="number1" id="number1" class="border border-success p-2 border-opacity-10" required />
      </div>
      <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
      <input type="button"  class="btn btn-primary" value="+" name="sum"/>
      <input type="button"  class="btn btn-primary" value="-" name="-"/>
      <input type="button"  class="btn btn-primary" value="*" name="*"/>
      <input type="button"  class="btn btn-primary" value="/" name="/"/>
      </div>
      <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
        <label for="number2" class="form-label">Введите число2</label>
        <input type="number" name="number2" id="number2" class="border border-success p-2 border-opacity-10" required />
      </div>

      <input type="submit" class="btn btn-primary" value="Посмотреть результат" />
  </div>
  </form>

  <?php if ($_POST) : ?>
    <?php
    var_dump($_POST);
    $result = mathOperation(intval($_POST['number1']), intval($_POST['number2']), $_POST['operation']);
    ?>
    <h3 class="shadow p-3 mb-5 bg-body-tertiary rounded">Результат <?= $result ?></h3>
  <?php endif; ?>
  </div>
</body>

</html>