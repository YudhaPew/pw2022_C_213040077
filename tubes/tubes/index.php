<?php
require 'function.php';
$barang = query("SELECT * FROM barang");

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
  <link rel="stylesheet" href="css/carousel.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">SHO<strong>PEW</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
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

  <body>
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


    <table class="table" border="1">


      <tr>
        <th scope="col">Nomer</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga Barang</th>
        <th scope="col">Deskripsi Produk</th>
        <th scope="col">Gambar</t>
        <th scope="col">Aksi</th>
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
            <a href="login.php" class="btn btn-warning">Cart</a>
            <a href="login.php" class="btn btn-success">Beli</a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>

    </table>
    </div>




    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


  </body>

</html>