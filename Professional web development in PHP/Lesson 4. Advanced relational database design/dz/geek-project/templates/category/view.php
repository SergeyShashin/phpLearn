<?php
$countProducts = count($prods);
$i = 0;
$limitOutputProducts = 25;
if (isset($_GET['more'])) {
  $limitOutputProducts += 25;
  $i += 25;
}

?>
<h2>Товары</h2>

<ul>
  <em><?= $countProducts ?></em>
  <?php for (; $i < $limitOutputProducts; $i++) : ?>
    <li>
      <a href="/product.php?id=<?= $prods[$i]['id'] ?>">
        <?= $i . ' ' . $prods[$i]['name'] ?>
      </a>
    </li>
  <?php endfor; ?>
</ul>

<button name="more" class="btn btn-primary">Ещё</button>