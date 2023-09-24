<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $config['name'] ?></title>
  <?php foreach ($config['assets']['css'] as $file) : ?>
    <link rel="stylesheet" href="<?= $file ?>">
  <?php endforeach; ?>
</head>

<body>
  <?= $content  ?>


  <?php foreach ($config['assets']['js'] as $file) : ?>
    <script src="<?= $file ?>"></script>
  <?php endforeach; ?>
</body>

</html>