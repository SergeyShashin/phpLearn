<?php

$items = [
  ['url' => '/', 'label' => 'Home'],
  ['url' => '/reviews.php', 'label' => 'Reviews'],
  ['url' => '/category.php', 'label' => 'Каталог'],
  ['url' => '/cart.php', 'label' => 'Корзина'],
  ['url' => '/ajax.php', 'label' => 'Ajax'],
  ['url' => '/user.php', 'label' => 'Sign In'],
  ['url' => '/user.php?action=logout', 'label' => 'Sign Out'],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $config['name'] ?></title>
  <link rel="shortcut icon" href="img/logo.png">

  <?php foreach ($config['assets']['css'] as $file) : ?>
    <link rel="stylesheet" href="<?= $file ?>">
  <?php endforeach; ?>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="/img/logo.png" alt="<?= $config['name'] ?>" height="30" class="mr-2">
        <?= $config['name'] ?>
      </a>
      <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
        <ul class="navbar-nav">
          <?php foreach ($items as $item) : ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?= $item['url'] ?>"><?= $item['label'] ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>

  <?php //render('widgets\navbar'), [], false 
  ?>


  <div class="container">
    <div class="py-3">
      <?= $content  ?>
    </div>
  </div>

  <?php

  echo "Содержимое GET\n" . "\n";
  print_r($_GET);

  echo "Содержимое $_POST" . "\n";
  print_r($_POST);

  echo "\n Содержимое SESSION" . "\n";
  print_r($_SESSION);

  echo "\n Содержимое COOKIE" . "\n";
  print_r($_COOKIE);

  ?>

  <?php foreach ($config['assets']['js'] as $file) : ?>
    <script src="<?= $file ?>"></script>
  <?php endforeach; ?>

</body>

</html>