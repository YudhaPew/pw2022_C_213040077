<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'tubes');
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

function tambah($data){
  $conn = koneksi();

  $product_name = htmlspecialchars($data['product_name']);
  $product_price = htmlspecialchars($data['product_price']);
  $product_description = htmlspecialchars($data['product_description']);
  $product_status = htmlspecialchars($data['product_status']);
  $product_image = htmlspecialchars($data['product_image']);

  $query = "INSERT INTO product VALUES (null, '$product_name', '$product_price', '$product_description','$product_status','$product_image' )";
  mysqli_query($conn, "$query") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function hapus($id){
  $conn=koneksi();
  mysqli_query ($conn, "DELETE FROM product WHERE id=$id") or die (mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function beli($data){
  $conn = koneksi();

  $id=$data['id'];





}