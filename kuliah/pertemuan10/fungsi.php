<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw2022_c_213040077');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

