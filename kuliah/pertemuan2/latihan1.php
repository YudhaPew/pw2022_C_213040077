<?php 
// Latihan Pertemuan 2 - PHP Dasar

// Variabel
// Nilai: Angka(integer), Tulisan (string), Boolean (true/false)

// Penulisan box/dolar : Nama bebas, tidak boleh spasi
// Boleh angka, tapi tidak di awal

$nama = "Yudha Prasetya";
echo $nama;
echo "<hr>";

// OPERATOR : Aritmatika : + ,- ,* ,/ (kabataku) dan % modulus
echo (1 + 2) * 3 - 4;
echo "<br>";

echo 10 % 5;

echo "<hr>";

$x = 10;
$y = 20;
echo $x * $y;

echo "<hr>";

// perbandingan : <, >, <=, >=, ==, !=
// Operator perbandingan tidak meng-cek tipe datanya 
echo 2 < 4;

echo "<br>";
// var_dump untuk mencari tahu

var_dump(1>5);

echo "<hr>";

// Identitas untuk meng-cek sebuah nilai tipe data
// ===, !==
echo 10 === 10;

echo "<br>";

var_dump(1=== "1");
echo "<hr>";

// increment / decrement 1 : ++, --
$x = 10;
$x++;
echo $x;
echo "<hr>";

// Concat, penggabungan string ; ( . ) 
//  . " " . agar ada spasi
$nama_depan = "Yudha" ;
$nama_belakang = "Prasetya" ;
echo $nama_depan . " " . $nama_belakang ;

echo "<hr>";
// Assignment : =, +=, -= ,/=, %=, .=
$x = 1;
$x -= 5;
echo $x;

echo "<hr>";

//  Operator Logika : &&, | | ,  !
// Pengkondisian
$x = 30;
var_dump($x < 20 && $x % 2 ==0);
?>

<!-- PHP di dalam HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    <h1>Hello <?php echo $nama ?></h1>
</body>
</html>