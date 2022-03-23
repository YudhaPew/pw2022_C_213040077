<?php
// Array associative atau array yang indexnya berasosiasi/berpasangan dengan string
// Array numerik, hanya menampilkan nilainya saja

$mahasiswa =[
        ["Yudha Prasetya", "213040077", "yudha.213040077@mail.unpas.ac.id", "Teknik Informatika"],
        ["Jiong Keong", "213040081", "jiongkeong@mail.unpas.ac.id", "Teknik Informatika"]
    ];

?>


<?php foreach($mahasiswa as $mhs) { ?>
<ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>E-mail : <?= $mhs[2]; ?></li>
        <li>Jurusan : <?= $mhs[3]; ?></li>
</ul>
<?php } ?>