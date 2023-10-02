<?php

$items = [
  ['url' => '/', 'label' => 'Home'],
]

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <!-- <img src="/img/logo.png" alt="<?= $config['name'] ?>" height="30" class="mr-2"> -->
      <?= $config['name'] ?>
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
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