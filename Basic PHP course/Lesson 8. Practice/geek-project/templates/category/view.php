<h2>Товары</h2>

<ul>
  <?php foreach ($prods as $product) : ?>
    <li>
      <a href="/product.php?id=<?= $product['id'] ?>">
        <?= $product['name'] ?>
      </a>
    <?php endforeach; ?>
    </li>
</ul>
