<?php

// require '../config/main.php';

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

  return mysqli_fetch_assoc($result);
}


function getItemArray($sql)
{
  global $connection;

  $result = mysqli_query(
    $connection,
    $sql
  );

  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function execute($sql)
{
  global $connection;

  print_r($sql);

  return mysqli_query($connection, $sql);
}
