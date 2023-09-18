<?php

require '../config/main.php';

$connection = mysqli_connect(
  $config['db']['host'],
  $config['db']['user'],
  $config['db']['password'],
  $config['db']['database'],
);

function getItem($sql)
{
  global $connection;

  $result = mysqli_query(
    $connection,
    $sql
  );

  $row = mysqli_fetch_row($result);

  return $row;
}


function getItemArray($sql)
{
  global $connection;

  $result = mysqli_query(
    $connection,
    $sql
  );

  $rows = [];

  while ($row = mysqli_fetch_row($result)) {
    $rows[] = $row;
  }

  return $rows;
}
