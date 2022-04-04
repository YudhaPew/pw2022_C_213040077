<?php 
$mahasiswa =[
  ["nama" => "Yudha Prasetya",
  "npm" => "213040077",
  "email" => "yudha.213040077@mail.unpas.ac.id",
  "jurusan" => "Teknik Informatika",
"gambar" => "jerangkong.jpg "],
  ["nama" => "Jiong Keong", 
  "npm" => "213040081", 
  "email" => "jiongkeong@mail.unpas.ac.id", 
  "jurusan" => "Teknik Informatika",
"gambar" => "hihiha.png"],
  ["nama" => "syahidun", 
  "npm" => "213040089", 
  "email" => "syahidun@mail.unpas.ac.id", 
  "jurusan" => "Teknik Informatika",
  "gambar" => "nikola-gasic-my-past.jpg"]
];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
<div class="container">
    <h1>Daftar Mahasiswa</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1 ; foreach($mahasiswa as $mhs) : ?>
    <tr>
      <th scope="row"><?= $no++;  ?></th>
      <td>
          <img src="" height="50" class="rounded-circle">
      </td>
      <td><?= $mhs["nama"] ?></td>
      
      <td>
          <a href="" class="btn badge bg-warning">Edit</a>
          <a href="" class="btn badge bg-danger">Delete</a>
          <a href="kuliah_latihan3.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>" class="btn badge bg-info">Details</a>
      </td>
    </tr>
    <?php endforeach;  ?>
      
    </tr>
  </tbody>
</table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>