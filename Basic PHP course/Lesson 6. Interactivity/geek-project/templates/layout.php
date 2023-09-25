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
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><?= $config['name'] ?></a>      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/users.php">Users</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="/users.php?add">New User</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="/upload.php">Upload</a>
          </li>          
        </ul>
      </div>
    </div>
  </nav>
 
  <?= $content  ?>


  <?php foreach ($config['assets']['js'] as $file) : ?>
    <script src="<?= $file ?>"></script>
  <?php endforeach; ?>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</body>

</html>