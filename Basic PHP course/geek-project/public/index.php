<?php

require '../engine/database.php';

// $image = getItem("SELECT * FROM `images`");
$names = getItemArray("SELECT name FROM `images`");
// execute("INSERT into `images` (`name`, `number_clicks`, `width`, `height`) values ('5.jpg', 0, 0, 0)");
execute("delete from `images` where (id>4)");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <style>
    body {
      margin: 0;
    }

    #gallery {
      text-align: center;
      margin-top: 1%;
    }

    #wrapForBigImg {
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      position: absolute;
      top: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .imgMax {
      height: 500px;
    }

    #imgClose {
      position: absolute;
      top: 0;
      right: 0;
      width: 50px;
      height: 50px;
    }

    #arrowLeft {
      position: absolute;
      top: 50%;
      left: 5%;
      width: 50px;
      height: 50px;
      border-top: 3px solid white;
      border-left: 3px solid white;
      transform: rotate(-45deg);
    }

    #arrowLeft:hover,
    #arrowRight:hover {
      border-top: 3px solid darkkhaki;
      border-left: 3px solid darkkhaki;
    }

    #arrowRight {
      position: absolute;
      top: 50%;
      right: 5%;
      width: 50px;
      height: 50px;
      border-top: 2px solid white;
      border-left: 2px solid white;
      transform: rotate(135deg);
    }
  </style>
  <title>Gallery</title>
</head>

<body>
  <div id="gallery">
    <?php for ($i = 0; $i < count($names); $i++) :    ?>
      <img id="img1" src="img/min/<?php echo $names[$i]['name'] ?>" data-full-img-url="img/max/<?php echo $names[$i]['name'] ?>" alt="img1">
    <?php endfor; ?>
  </div>
  <script src="js/gallery.js"></script>

</body>

</html>