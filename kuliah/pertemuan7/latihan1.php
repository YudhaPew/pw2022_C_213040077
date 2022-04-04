<?php 
// $_GET
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>