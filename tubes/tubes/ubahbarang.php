<?php
require 'function.php';

$id = $_GET["id"];
$brg = query("SELECT * FROM barang WHERE id_barang = $id ")[0];
// cek ketika tombil udah di klick
if (isset($_POST['ubah'])) {
  // jika tambah lebih dari 0, maka menampilkan pemberitahuan, dan balik ke halaman kuliah_latihan1
  if (ubah($_POST) > 0) {
    echo "<script>
                  alert('data berhasil diubah!');
                  document.location.href= 'admin.php';
              </script>";
  }
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

  <title>Ubah Barang SHOPEW</title>
</head>

<body>
  <div class="container">
    <h1>Ubah Data Barang</h1>

    <a href="admin.php" class="btn btn-primary">Back to Homepage</a>

    <div class="row">
      <div class="col-7">
        <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $brg["id_barang"]; ?>">
          <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">

          <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required value="<?= $brg["nama_barang"] ?>">
          </div>

          <div class="mb-3">
            <label for="harga_barang" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga_barang" name="harga_barang" required value="<?= $brg["harga_barang"] ?>" style="width: 120px;">
          </div>

          <div class="mb-3">
            <label for="deskripsi_barang" class="form-label">Deskripsi</label>
            <input type="deskripsi_barang" class="form-control" id="deskripsi_barang" name="deskripsi_barang" value="<?= $brg["deskripsi_barang"] ?>">
          </div>

          <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <img src="" class="img-thumbnail" id="img-preview" width="120" style="display: none;">
            <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImage()">
          </div>

          <button type="submit" class="btn btn-primary" name="ubah">Ubah Data</button>
        </form>

      </div>
    </div>

  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>