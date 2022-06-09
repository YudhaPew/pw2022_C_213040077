<?php
require 'function.php';

session_start();
$id_user = $_SESSION['id'];

if (isset($_POST['update_update_btn'])) {
  $update_value = $_POST['update_quantity'];
  $update_id = $_POST['update_quantity_id'];
  $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id_cart = '$update_id'");
  if ($update_quantity_query) {
    echo "
         <script>
            alert('data berhasil diubah!!');
            document.location.href = 'cart.php'
         </script>
        ";
  };
};

if (isset($_GET['remove'])) {
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `cart` WHERE id_cart = '$remove_id'");
  echo "
         <script>
            alert('data berhasil dihapus!!');
            document.location.href = 'cart.php'
         </script>
        ";
};

if (isset($_GET['delete_all'])) {
  mysqli_query($conn, "DELETE FROM `cart` WHERE id_user = '$id_user'");
  echo "
         <script>
            alert('semua data berhasil diubah!!');
            document.location.href = 'cart.php'
         </script>
        ";
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
        <a class="navbar-brand" href="user.php">SHO<strong>PEW</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="user.php">Home</a>
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
            <?php

            $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE id_user= '$id_user'");
            $grand_total = 0;
            if (mysqli_num_rows($select_cart) > 0) {
              while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
            ?>

                <tr>
                  <td><img src="<?php echo $fetch_cart['gambar_sabun_cart']; ?>" height="100" alt=""></td>
                  <td><?php echo $fetch_cart['nama_sabun_cart']; ?></td>
                  <td>Rp.<?php echo number_format($fetch_cart['harga_sabun_cart']); ?>/-</td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id_cart']; ?>">
                      <input type="number" name="update_quantity" min="1" value="<?php echo $fetch_cart['quantity']; ?>">
                      <input type="submit" value="update" name="update_update_btn">
                    </form>
                  </td>
                  <?php $sub_total = $fetch_cart['harga_sabun_cart'] * $fetch_cart['quantity']; ?>
                  <td>Rp.<?php echo number_format($sub_total); ?>/-</td>
                  <td><a href="cart.php?remove=<?php echo $fetch_cart['id_cart']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
                </tr>
            <?php
                $grand_total += $sub_total;
              };
            };
            ?>
            <tr class="table-bottom">
              <td><a href="user.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
              <td colspan="3">grand total</td>
              <td>$<?php echo $grand_total; ?>/-</td>
              <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
            </tr>
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
                <a class="btn btn-dark" href="checkout.php">Checkout</a>
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