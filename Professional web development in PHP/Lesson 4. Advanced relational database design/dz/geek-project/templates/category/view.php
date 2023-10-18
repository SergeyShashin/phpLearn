<?php
  $countProducts = count($prods);
  echo "Мы выводим товары из категории." . $_GET['id'];
?>

<h2>Товары</h2>

<ul>
  <em><?= "Всего товаров " . $countProducts ?></em>
  <?php foreach ($prods as $product) : ?>
    <li>
      <a href="/product.php?id=<?= $product['id'] ?>">
        <?= $i . ' ' . $product['name'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>

<button id='btn-get-more' class="btn btn-primary">Ещё</button>

<script src="/js/category.js" defer></script>