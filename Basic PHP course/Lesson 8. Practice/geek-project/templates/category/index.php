<h2>Каталог</h2>

<ul>
  <?php foreach ($cats as $category) : ?>
    <li>
      <a href="/category.php?action=view&id=<?= $category['id'] ?>">
        <?= $category['name'] ?>
      </a>
    <?php endforeach; ?>
    </li>
</ul>