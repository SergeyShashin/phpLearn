<?php
/**
 * @var int $id  Номер пользователя. Передаётся из users.php
 */
?>

<?php if ($id <= 0) : ?>
  <h1>Пользователя в базе нет</h1>
<?php else : ?>
  <div class="text-center">
    <h1>User <?= $id ?></h1>
    <p>user info</p>
    <a href="/users.php">Назад</a>
  </div>
<?php endif; ?>