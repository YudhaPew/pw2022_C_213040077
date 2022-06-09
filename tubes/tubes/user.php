<?php
require 'function.php';
session_start();
$barang = query("SELECT * FROM barang");

$id_pelanggan = $_SESSION['id_pelanggan'];
$select = mysqli_query($conn, "SELECT * FROM `user` WHERE id = '$id_pelanggan'") or die('query failed');
if (mysqli_num_rows($select) > 0) {
  $user = mysqli_fetch_assoc($select);
}
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['role'] == "") {
  header("location:login.php");
}

if (isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM barang
  WHERE 
    nama_barang LIKE '%$keyword%'
    ";
  $barang = query($query);
}

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.98.0">
  <title>SHOPEW</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/carousel.css">

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="user.php">SHO<strong>PEW</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="user.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Log Out</a>
            </li>
          </ul>
          <form action="" class="d-flex" role="search" method="get">
            <input class="form-control me-2" type="text" name="keyword" placeholder="Search" aria-label="search" autocomplete="off">
            <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/uniqloheadline.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/scarlett-hl.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
      </div>
    </div>


    <table class="table">
      <tr>
        <th>Nomer</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th>Deskripsi Produk</th>
        <th>Gambar</th>
        <th>Aksi</th>
      </tr>

      <?php $i = 1; ?>
      <?php foreach ($barang as $brg) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $brg["nama_barang"]; ?></td>
          <td><?= $brg["harga_barang"]; ?></td>
          <td><?= $brg["deskripsi_barang"]; ?></td>
          <td><img src="img/<?= $brg["gambar"]; ?>" class="img-review" width="auto" height="100px"></td>
          <td>
            <a class="btn btn-warning" href="cart.php?id=<?= $brg["id_barang"]; ?>">Keranjang</a>
            <a class="btn btn-success" href="checkout.php?id=<?= $brg["id_barang"]; ?>">Beli</a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>

    </table>
    </div>

  </main>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>