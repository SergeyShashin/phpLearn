<?php

// 6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP.
//    Необходимо представить пункты меню как элементы массива и вывести их циклом.
//    Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.
$menu = ['Home', 'Page', 'Contacts'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <ul>
    <?php foreach ($menu as $item) :
      echo "<li>$item</li>";
    endforeach;
    ?>
  </ul>

</body>

</html>