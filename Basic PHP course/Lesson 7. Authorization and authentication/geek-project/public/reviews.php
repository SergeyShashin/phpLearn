<?php

require '..\config\main.php';
require '..\engine\core.php';

showReviews();
addReviews();

if (isset($_GET['delete'])) {
  deleteReview();
}

function showReviews()
{
  $reviews = getItemArray('SELECT * FROM `reviews`');

  echo render('reviews\list', $reviews);
}

function addReviews()
{
  $review = $_POST['content'];
  $sql = "'" . $review . "'";
  echo render('reviews\add', [], false);

  if (isset($review)) {
    execute("INSERT into `reviews` (`content`) values ($sql)");
    header('Location: \reviews.php');
  }
}

function deleteReview()
{
  $id = intval($_GET['id']);
  execute("DELETE from `reviews` WHERE (id=$id)");
  header('Location: \reviews.php');
}


