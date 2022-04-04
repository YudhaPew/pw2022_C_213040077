<!-- data yang di kirim melalui reqquest get hany dpt di tangkap oleh _get -->
<!-- array numerik isinya angka dan array string isinya huruf  -->
<?php 
// SUPERGLOBALS
// variabel milik php yang bisa kita gunakan
// bentuknya array associative
// $_GET 
// $_POST
// $_SERVER
// var_dump($_GET);
// var_dump($_POST);
// if(isset($_GET["nama"])) {
// $nama = $_GET["tidak di ketahui"]
// } else {
// $nama = $_GET["nama"];
// }
$nama=$_GET["nama"];
?>

<h1>halo, <?= $nama; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php?nama=Yudha">Yudha</a>
    </li>
    <li>
        <a href="?nama=Keong">Keong</a>
    </li>
</ul>