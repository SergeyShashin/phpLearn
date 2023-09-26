<?php

require '..\config\main.php';
require '..\engine\core.php';

if (isset($_GET['action'])) {
  $action = $_GET['action'];
} else {
  $action = 'list';
}

switch ($action) {
  case 'list':
    getComments();
    break;
  case 'add':
    addComment();
    break;
  case 'delete';
    deleteComment();
  default:
    render('site\error');
}

// addComment();

function getComments()
{
  $reviews = getItemArray('SELECT * FROM `reviews`');

  echo render('reviews\list', ['reviews' => $reviews]);
}

function addComment()
{
  echo render('reviews\add');

  if (isset($_POST['add_comment'])) {

    $sql = "'" . htmlspecialchars($_POST['content']) . "'";
    execute("INSERT into `reviews` (`content`) values ($sql)");
    header('Location: \reviews.php');
  }
}

function deleteComment()
{
  $id = intval($_GET['id']);
  execute("DELETE from `reviews` WHERE (id=$id)");
  header('Location: \reviews.php');
}
