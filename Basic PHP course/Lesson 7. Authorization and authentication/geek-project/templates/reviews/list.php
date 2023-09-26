<h1>Комментарии</h1>


<?php if (isset($data)) : ?>
  <?php foreach ($data as $value) : ?>
    <?php if ($value['id'] > 0) : ?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?= $value['id'] ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?= $value['date'] ?></h6>
          <p class="card-text"><?= $value['content'] ?></p>
          <a href="?delete&id=<?= $value['id'] ?>}" class="card-link">Удалить</a>
        </div>
      </div>
    <?php endif; ?>
  <?php endforeach; ?>
<?php else : ?>
  <h2>Комментарии отсутствуют...</h2>
<?php endif; ?>