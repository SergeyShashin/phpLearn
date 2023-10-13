<h1>Корзина</h1>


<?php if (count($orderItems) > 0) : ?>
  <h2>В корзине есть:</h2>
  <ul>
    <?php foreach ($orderItems as $item) : ?>
      <li><?="id=" .$item['id']." количество=".$item['quantity'] ?></li>
    <?php endforeach; ?>
  </ul>
  <a href="/cart.php?action=order">Оформить заказ</a>
  <?php else: ?>
    <em>Пока корзина пуста.</em>
  <?php endif; ?>