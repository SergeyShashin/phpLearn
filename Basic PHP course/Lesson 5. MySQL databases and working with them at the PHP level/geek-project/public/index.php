<?php

// 1. Создать галерею изображений, состоящую из двух страниц:
// просмотр всех фотографий (уменьшенных копий);
// просмотр конкретной фотографии (изображение оригинального размера) по ее ID в базе данных.
// 2. В базе данных создать таблицу, в которой будет храниться информация о картинках (адрес на сервере, размер, имя).
// 3. *На странице просмотра фотографии полного размера под картинкой должно быть указано число ее просмотров.
// 4. *На странице просмотра галереи список фотографий должен быть отсортирован по популярности.
//  Популярность = число кликов по фотографии.

require '../config/main.php';
require '../engine/core.php';

$images = getItemArray("SELECT * from images ORDER BY number_clicks DESC;");

// execute("INSERT into `images` (`name`, `number_clicks`, `width`, `height`) values ('1.jpg', 0, 0, 0)");
// execute("INSERT into `images` (`name`, `number_clicks`, `width`, `height`) values ('2.jpg', 0, 0, 0)");
// execute("INSERT into `images` (`name`, `number_clicks`, `width`, `height`) values ('3.jpg', 0, 0, 0)");
// execute("INSERT into `images` (`name`, `number_clicks`, `width`, `height`) values ('4.jpg', 0, 0, 0)");
// execute("DELETE from `images` where (id>4)");
// execute("UPDATE `images`set number_clicks=4 where id=1");

$message = 'Hello from index.php';

echo render('site/example', ['message' => $message]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
    }

    #gallery {
      display: flex;
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
    <?php for ($i = 0; $i < count($images); $i++) :    ?>
      <ul>
        <img id="<?= $images[$i]['id'] ?>" src="img/min/<?php echo $images[$i]['name'] ?>" data-full-img-url="img/max/<?php echo $images[$i]['name'] ?>" data-views="<?= $images[$i]['number_clicks'] ?>" alt="img<?= $i ?>">
        <p id="veiws<?= $images[$i]['id'] ?>">Просмотров <?php echo $images[$i]['number_clicks'] ?></p>
      </ul>
    <?php endfor; ?>
  </div>
  <script src="js/gallery.js"></script>

</body>

</html>