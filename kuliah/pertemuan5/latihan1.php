<!-- Array : kumpulan nilai -->
<!-- tempat penyimpanan yang dapat menyimpan suatu nilai, sebaiknya memiliki karakteristik yg sama -->
<!-- perumpamaan nya adalah tempat crayon dan berisi krayon -->
<!-- Index dibaca dari 0 -->

<?php 
// Pertemuan 5 - Array

//  Membuat ARRAY
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];
$bulan = array("Januari", "Februari", "Maret", "April");
$myArr = [8, "Yudha", true];

// Mencetak ARRAY
// Mencetak 1 elemen di dalam array, menggunakan index, dimulai dari 0
echo $hari[6];
echo "<br>";
echo $bulan[1];
echo "<br>";
echo $myArr[1];
echo "<hr>";

// mencetak menggunakan var_dump() atau print_r() tetapi khusus debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";
// Mencetak semua isi array menggunakan looping FOR 
for ($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}

//  for ($i = 0; $i < count($bulan); $i++) {
//      echo $bulan[$i];
//      echo "<br>";
// }
echo "<hr>";
// Menggunakan FOREACH
foreach($bulan as $moon ) {
    echo $moon;
    echo "<br>";
}
echo "<hr>";

foreach ($bulan as $key => $value) {
    echo "Key:$key - Value:$value";
    echo "<br>";

}
echo "<hr>";
// Memanipulasi ARRAY / Menambah elemen baru di akhir array
$bulan[]= "Mei";
print_r($bulan)


?>
<!-- $i = index keberapa? -->
