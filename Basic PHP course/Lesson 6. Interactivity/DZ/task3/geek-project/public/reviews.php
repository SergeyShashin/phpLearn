<?php

require '..\config\main.php';
require '..\engine\core.php';

$itemReviews = getItemArray('SELECT* FROM `reviews`');

echo render('reviews\listReviews', $itemReviews);

if ($_POST['review']) {
  $author = $_POST['author_review'];
  $review = $_POST['review']; 
  
  execute("INSERT into `reviews` (`author`, `text`) values ($author, $review)");

  // header('Location: \reviews.php');
  // execute("DELETE from `images` where (id>4)");
// execute("UPDATE `images`set number_clicks=4 where id=1");
}
