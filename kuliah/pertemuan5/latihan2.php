<?php
// ARRAY Multidimensi atau Array di dalam Array
// 
// $mahasiswa =[
//     ["Yudha Prasetya", "213040077", "yudha.213040077@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Jiong Keong", "213040081", "jiongkeong@mail.unpas.ac.id", "Teknik Informatika"]
// ];
//     echo $mahasiswa[0][1][1][0];
// elemen, index, dalam index, 

$angka = [3,2,15,23,12,43,12];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {clear: both;}
    </style>
</head>
<body>  
<?php for( $i = 0; $i < count($angka); $i++) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach($angka as $number) {?>
    <div class="kotak"><?php echo $number; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach($angka as $number ) : ?>
    <div class="kotak"><?= $number; ?></div>
<?php endforeach; ?>

</body>


</html>