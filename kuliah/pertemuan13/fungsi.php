<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw2022_c_213040077');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data){
  $conn = koneksi();

  // fungsi updload gambar
  if($_FILES["gambar"]["error"]=== 4) {
    $gambar = 'hihiha.png';
  } else {
    // jalankan fungsi gambar
    $gambar = upload();
    // jika upload gagal
    if(!$gambar){
      return false;
    }
  }

  $nama = htmlspecialchars($data['nama']);
  $npm = htmlspecialchars($data['npm']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  // $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO mahasiswa VALUES (null, '$nama', '$npm', '$email','$jurusan','$gambar' )";
  mysqli_query($conn, "$query") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function hapus($id){
  $conn=koneksi();
  // query mahasiswa berdasarkan id
  $mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];
  // hapus file gambar kecuali gambar default
  if($mhs["gambar"]!== 'hihiha.png') {
    unlink('img/' . $mhs["gambar"]);
  }
  

  mysqli_query ($conn, "DELETE FROM mahasiswa WHERE id=$id") or die (mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data){
  $conn = koneksi();

  $id=$data['id'];
  $nama = htmlspecialchars($data['nama']);
  $npm = htmlspecialchars($data['npm']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE mahasiswa SET
                  nama ='$nama',
                  npm = '$npm',
                  email = '$email',
                  jurusan= '$jurusan',
                  gambar= '$gambar'
                  WHERE id=$id
                  ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function upload() {
  // siapkan data gambar

  $namaberkas = $_FILES["gambar"]["name"];
  $namaberkastmp = $_FILES["gambar"]["tmp_name"];
  $ukuranberkas = $_FILES["gambar"]["size"];
  $tipeberkas = pathinfo($namaberkas, PATHINFO_EXTENSION);
  $allowedtype = ["jpg", "jpeg", "png"];

  // cara mengecek file yang di upload bukan gambar
  if(!in_array($tipeberkas, $allowedtype)) {
    echo "<script>
      alert('upload file yang sesuai!');
    </script>";
    return false;
  }

  // cara mengecek apakah gambar terlalu besar?
if($ukuranberkas > 1000000) {
  echo "<script>
      alert('ulah ngawur blokkk!');
    </script>";
    return false;
}


// cara upload
 $namafilebaru = uniqid(). $namaberkas;

move_uploaded_file($namaberkastmp, 'img/' . $namafilebaru);
return $namafilebaru;

}






