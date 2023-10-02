<h1>Комментарии</h1>

<?php if (count($items) > 0) : ?>
  <?php foreach ($items as $review) : ?>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $review['id'] ?></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary"><?= $review['date'] ?></h6>
        <p class="card-text"><?= $review['content'] ?></p>
        <?php if (isLoggedUser()) : ?>
          <a href="reviews.php?action=delete&id=<?= $review['id'] ?>}" class="card-link">Удалить</a>
        <?php endif; ?>
      </div>
    </div>
  <?php endforeach; ?>
<?php else : ?>
  <em>Комментарии отсутствуют...</em>
<?php endif; ?>

<?php if (isLoggedUser()) : ?>
  <a class="btn btn-primary mt-5" href="reviews.php?action=add">Добавить комментарий</a>
<?php endif; ?>