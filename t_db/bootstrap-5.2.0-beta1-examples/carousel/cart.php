<?php
require 'function.php';

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/208aa639b3.js" crossorigin="anonymous"></script>


  <title>SHOPEW</title>
</head>
<style>
  body {
    background-color: #dbdbdb;
    background-size: cover;
    font-family: sans-serif;
    background-repeat: no-repeat;
    font-size: 14px;
  }

  /*Navbar*/
  .form-control {
    font-size: 14px;
  }

  /*Akhir Navbar*/

  .row-produk {
    background-color: white;
    margin: 0;
    padding: 5px;
    padding-top: 16px;
  }

  .img-cart {
    width: 50px;
  }

  .th-header {
    padding-top: 20px !important;
    padding-bottom: 20px !important;
  }

  @media screen and (max-width: 1210px) {
    .carousel-control-prev {
      position: absolute;
      height: 10%;
      margin-top: 80px;
    }

    .carousel-control-next {
      position: absolute;
      height: 10%;
      margin-top: 80px;
    }
  }
</style>


<body>

  <!-- Awal Navbar-->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">SHO<strong>PEW</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
        </div>
      </div>
    </nav>
  </header>
  <!-- Akhir Navbar-->

  <!-- Breadcrumb -->
  <div class="container">
    <nav aria-label="breadcrumb" style="background-color: #fff;" class="mt-3">
      <ol class="breadcrumb p-3">
        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
      </ol>
    </nav>
  </div>
  <!-- Akhir Breadcumb -->

  <!-- Awal keranjang -->
  <div class="container">
    <div class="row row-produk">
      <div class="col table-responsive mt-4 mx-3">
        <table class="table">
          <thead class="table-secondary">
            <tr>
              <th scope="col" class="th-header">Hapus</th>
              <th scope="col" class="th-header">Gambar</th>
              <th scope="col" class="th-header">Produk</th>
              <th scope="col" class="th-header">Harga</th>
              <th scope="col" class="th-header">Jumlah</th>
              <th scope="col" class="th-header">Total Produk</th>
            </tr>
          </thead>
          <tbody class="align-middle">
            <tr>
              <th><a href=""><i class="fas fa-times-circle text-dark fs-4"></i></a></th>
              <td><img src="img/product/produk1.jpg" class="img-cart"></td>
              <td>Fineta T-Shirt 001</td>
              <td>Rp 119.999.-</td>
              <td>
                <button type="button" class="btn btn-sm">-</button>
                <span class="mx-2">1</span>
                <button type="button" class="btn btn-sm">+</button>
              </td>
              <td>Rp 119.999.-</td>
            </tr>
            <tr>
          </tbody>
        </table>

      </div>
    </div>

    <div class="row row-produk">
      <div class="col table-responsive">
        <table class="table">
          <thead class="table-secondary">
            <tr>
              <th scope="col" colspan="2" class="th-header">Total Keranjang Belanja</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="fw-bold">Total Harga</td>
              <td>Rp. 469.996.-</td>
            </tr>
            <td colspan="2">
              <div class="btn-checkout">
                <button class="btn btn-dark btn-sm">checkout</button>
              </div>
            </td>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Akhir keranjang -->

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