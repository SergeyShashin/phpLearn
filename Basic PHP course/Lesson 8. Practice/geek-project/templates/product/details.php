<h1>Название товара: <?= $props['name'] ?></h1>

<p>Описание: <?= $props['description'] ?></p>

<p>Цена: <?= $props['price'] ?></p>

<p>Количество: <?= $props['quantity'] ?> </p>

<p>
  <button class="btn btn-info" id="add-product" data-id="<?= $props['id'] ?>">Добавить в корзину</button>
</p>

<script src="/js/product.js" defer></script>