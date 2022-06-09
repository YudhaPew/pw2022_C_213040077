<?php
$conn = mysqli_connect("localhost", "root", "", "tubes1") or die('Connections_failed');

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data)
{
	global $conn;
	//ambil data dari tiap elemen dalam form
	$nama_barang = htmlspecialchars($data["nama_barang"]);
	$harga_barang = htmlspecialchars($data["harga_barang"]);
	$deskripsi_barang = htmlspecialchars($data["deskripsi_barang"]);

	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	//query insert data
	$query = "INSERT INTO barang
				VALUES
				 ('', '$nama_barang', '$harga_barang', '$deskripsi_barang', '$gambar' )";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id)
{
	global $conn;
	// query mahasiswa berdasarkan id
	$brg = query("SELECT * FROM barang WHERE id_barang=$id")[0];
	// hapus file gambar kecuali gambar default
	if ($brg["gambar"] !== 'hihiha.png') {
		unlink('img/' . $brg["gambar"]);
	}


	mysqli_query($conn, "DELETE FROM barang WHERE id_barang=$id") or die(mysqli_error($conn));

	return mysqli_affected_rows($conn);
}

function upload()
{
	// siapkan data gambar

	$namaberkas = $_FILES["gambar"]["name"];
	$namaberkastmp = $_FILES["gambar"]["tmp_name"];
	$ukuranberkas = $_FILES["gambar"]["size"];
	$tipeberkas = pathinfo($namaberkas, PATHINFO_EXTENSION);
	$allowedtype = ["jpg", "jpeg", "png"];

	// cara mengecek file yang di upload bukan gambar
	if (!in_array($tipeberkas, $allowedtype)) {
		echo "<script>
      alert('upload file yang sesuai!');
    </script>";
		return false;
	}

	// cara mengecek apakah gambar terlalu besar?
	if ($ukuranberkas > 9000000) {
		echo "<script>
      alert('Jangan Gede-Gede!');
    </script>";
		return false;
	}


	// cara upload
	$namafilebaru = uniqid() . $namaberkas;

	move_uploaded_file($namaberkastmp, 'img/' . $namafilebaru);
	return $namafilebaru;
}

function ubah($data)
{
	global $conn;

	$id_barang = $data["id"];
	$nama_barang = htmlspecialchars($data["nama_barang"]);
	$harga_barang = htmlspecialchars($data["harga_barang"]);
	$deskripsi_barang = htmlspecialchars($data["deskripsi_barang"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	// cek apakah user pilih gambar baru atau tidak
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}


	$query = "UPDATE barang SET
				nama_barang = '$nama_barang',
				harga_barang = '$harga_barang',
				deskripsi_barang = '$deskripsi_barang',
				gambar = '$gambar'
			  WHERE id_barang = $id_barang 
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function registrasi($data)
{
	global $conn;

	$nama_user = htmlspecialchars(ucwords($data["nama_user"]));
	$username = htmlspecialchars(strtolower(stripslashes($data["username"])));
	$password = htmlspecialchars(mysqli_real_escape_string($conn, $data['password']));
	$password2 = htmlspecialchars(mysqli_real_escape_string($conn, $data['password2']));

	//agar username dan email tidak kosong dan tanpa spasi
	if (preg_match_all('/\s/', $username)) {
		echo "<script>
				alert('username cannot contain any spaces');
			  </script>";
		return false;
	}

	//cek username udah ada atau belum
	$result = mysqli_query($conn, "SELECT user_admin FROM user WHERE user_admin = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar!!');
			  </script>";
		return false;
	}

	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert('Password Tidak Sesuai!!');
			  </script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahlan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$nama_user','$username', '$password', 'pelanggan')");

	return mysqli_affected_rows($conn);
}

function cart($data)
{
	global $conn;
	$id_barang = $data["id"];
	$nama_barang = htmlspecialchars($data["nama_barang"]);
	$harga_barang = htmlspecialchars($data["harga_barang"]);
}
