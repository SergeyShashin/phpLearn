<?php
// 1 Создать галерею фотографий. Она должна состоять из одной страницы,
// на которой пользователь видит все картинки в уменьшенном виде.
// При клике на фотографию она должна открыться в браузере в новой вкладке.
// Размер картинок можно ограничивать с помощью свойства width.
// 2 *Строить фотогалерею, не указывая статичные ссылки к файлам,
//  а просто передавая в функцию построения адрес папки с изображениями.
//  Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.
// 3 *[ для тех, кто изучал JS-1 ] При клике по миниатюре нужно показывать полноразмерное изображение в модальном окне.


$pathDirMinImg = './img/min';
$pathDirMaxImg = './img/max';
$imgMin = scandir($pathDirMinImg);
$imgMax = scandir($pathDirMaxImg);
if ($imgMin && $imgMax) {
  for ($i = 0; $i < 2; $i++, array_shift($imgMin), array_shift($imgMax)) {
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
</head>

<body>
  <div id="gallery">
    <?php for ($i = 0; $i < count($imgMin); $i++) :    ?>
      <img id="img1" src="img/min/<?php echo $imgMin[$i] ?>" data-full-img-url="img/max/<?php echo $imgMax[$i] ?>" alt="img1">
    <?php endfor; ?>
  </div>
  <script src="js/gallery.js"></script>
</body>

</html>