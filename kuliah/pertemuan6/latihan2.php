<?php 
// $mahasiswa =[
    //     ["Yudha Prasetya", "213040077", "yudha.213040077@mail.unpas.ac.id", "Teknik Informatika"],
    //     ["Jiong Keong", "213040081", "jiongkeong@mail.unpas.ac.id", "Teknik Informatika"]
    // ];

// Array associative
// definisinya sama seperti array numerik, kecuali 
// key-nya adalah string yang kita buat sendiri
$mahasiswa =[
    ["nama" => "Yudha Prasetya",
    "npm" => "213040077",
    "email" => "yudha.213040077@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" =>"jerangkong.jpg" ],
    ["nama" => "Jiong Keong", 
    "npm" => "213040081", 
    "email" => "jiongkeong@mail.unpas.ac.id", 
    "jurusan" => "Teknik Informatika",
    "gambar" => "hihiha.png"]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul><?php  ?>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NPM : <?=$mhs["npm"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
<?php endforeach; ?>

</body>
</html>