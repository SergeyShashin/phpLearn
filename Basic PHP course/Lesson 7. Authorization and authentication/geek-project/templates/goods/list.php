<h1>Products</h1>
<?php if (count($goods) > 0) : ?>
  <?php foreach ($goods as $good) : ?>
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $good['name'] ?></h5>
        <p class="card-text"><?= $good['description'] ?></p>
        <a href="#" class="btn btn-primary" name='add_basket'>Add Basket</a>
        <a href="goods.php?action=delete&id=<?= $good['id'] ?>" class="card-link">Удалить</a>
      </div>
    </div>
  <?php endforeach; ?>
<?php else : ?>
  <em>Товаров нет..</em>
<?php endif; ?>