<?php 
// Array Associative atau array yang indexnya string 

$mahasiswa =[
    ["nama" => "Yudha Prasetya",
    "npm" => "213040077",
    "email" => "yudha.213040077@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika"],
    ["nama" => "Jiong Keong", 
    "npm" => "213040081", 
    "email" => "jiongkeong@mail.unpas.ac.id", 
    "jurusan" => "Teknik Informatika"]
];

// var_dump($mahasiswa [0]["nama"])

?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["npm"]; ?></li>
            <li>E-mail : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php } ?>

    <hr>

    <?php foreach($mahasiswa as $mhs) { ?>
        <ul>
            <?php foreach($mhs as $key => $value) { ?>
                <li><?php echo $key; ?>: <?php echo $value; ?></li>
            <?php } ?>
        </ul>
    <?php } ?>