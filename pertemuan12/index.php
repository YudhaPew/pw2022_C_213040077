<?php
require 'fungsii.php';
$product = query("SELECT * FROM product");

// query sesuai dengan keyword pencarian, ketika tombol cari di klik
if (isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM product
  WHERE 
    name_product LIKE '%$keyword%'
    ";
  $product_name = query($query);
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">

  <title>BOOTSTRAP</title>
</head>

<body>

  <!-- Awal Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand">
        <img src="img/logo.png" alt="" width="35" height="35" class="d-inline-block">
        BOOT<strong>STRAP</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <form class="d-flex ms-auto my-2 my-lg-0" method="get">
          <div class="input-group mb-3">
        <input type="text" class="form-control" name="keyword" placeholder="Masukan Keyword Pencarian.." autocomplete="off">
        <button class="btn btn-primary" type="submit" name="cari">Cari!</button>
      </div>
    </form>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.html">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.html">Keranjang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact.html">Hubungi Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Masuk</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar-->


  <!-- awal produk -->
  <div class="container mt-5" id="section">
    <div class="category-title" style="background-color: #fff; padding: 5px 10px;">
      <h5 class="text-center" style="margin-top: 5px;">Produk</h5>
    </div>
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-3">
        <div class="card text-center">
          <?php foreach ($product as $pro) : ?>
            <img src="img/<?= $pro['product_image']; ?>" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title text-center"><?= $pro['product_name']; ?></h5>
              <p class="card-text"><?= $pro['product_price']; ?></p>
              <a href="singleproduct.html" class="btn btn-primary d-grid">Beli</a>
            <?php endforeach; ?>
            </div>
        </div>
      </div>
      <!-- akhir produk -->
      <!-- Footer -->
      <footer class="bg-light p-5 mt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-md-start text-center pt-2 pb-2">
              <a href="#">
                <img src="img/logo.png" style="width: 30px;">
              </a>
            </div>
            <div class="col-md-6 text-md-end text-center pt-2 pb-2">
              <a href="#">
                <img src="img/icon/whatsapp.png" class="ms-2" style="width: 30px;">
              </a>

              <a href="#">
                <img src="img/icon/instagram.png" class="ms-2" style="width: 30px;">
              </a>
            </div>
          </div>
        </div>
      </footer>
      <!-- akhir footer -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>