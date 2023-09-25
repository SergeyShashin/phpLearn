<?php

require '..\config\main.php';
require '..\engine\core.php';

$itemReviews = getItemArray('SELECT* FROM `reviews`');

echo render('reviews\listReviews', $itemReviews);

if ($_POST['review'] && $_POST['author_review']) {
  $author = "'" . $_POST['author_review'] . "'";
  $review = "'" . $_POST['review'] . "'";

  execute("INSERT into `reviews` (`author`, `text`) values ($author, $review)");

  header('Location: \reviews.php');

  // execute("DELETE from `images` where (id>4)");
  // execute("UPDATE `images`set number_clicks=4 where id=1");
}

// var_dump($_POST);

$needUpdateReview = array_filter($_POST, function ($k) {
  return str_contains($k, 'update');
}, ARRAY_FILTER_USE_KEY);

$needDeleteReview = array_filter($_POST, function ($k) {
  return str_contains($k, 'delete');
}, ARRAY_FILTER_USE_KEY);

if ($needUpdateReview) {
  $needUpdateReview = substr(array_key_first($needUpdateReview), 6);
  print_r($needUpdateReview);
  $reviewForUpdate=getItem("SELECT* FROM `reviews` WHERE idreviews=$needUpdateReview");
  print_r($reviewForUpdate);
}

if ($needDeleteReview) {
  $needDeleteReview = substr(array_key_first($needDeleteReview), 6);
  execute("DELETE from `reviews` WHERE (idreviews=$needDeleteReview)");
  header('Location: \reviews.php');
}
