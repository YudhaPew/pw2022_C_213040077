  <?php
  require 'function.php';
  session_start();
  $barang = query("SELECT * FROM barang");

  $id_admin = $_SESSION['id_admin'];
  $select = mysqli_query($conn, "SELECT * FROM `user` WHERE id= '$id_admin'") or die('query failed');
  if (mysqli_num_rows($select) > 0) {
    $id_user = mysqli_fetch_assoc($select);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/carousel.css">


    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="admin.php">SHO<strong>PEW</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
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
      <div class="container">
        <a href="tambahbarang.php" class="btn btn-dark" style="margin-top:10px;">Tambah Barang</a>
        <br></br>
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
              <a class="btn btn-success" href="ubahbarang.php?id=<?= $brg["id_barang"]; ?>">Ubah</a>
              <a class="btn btn-warning" href="hapusbarang.php?id=<?= $brg["id_barang"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>

      </table>
      </div>

    </main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>


  </body>

  </html>