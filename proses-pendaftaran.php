<?php

include("config.php");
//cek apakah tombol daftar sudah diklik
if (isset($_POST['daftar'])){
	//ambil data dari formulir
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah_asal'];
	//buat query
	$sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) value ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
	$query = mysqli_query($db, $sql);
	//
	if($query) {
		//
		header('Location: index.php?status=sukses');
	} else {
		//
		header('Location: index.php?status=gagal');
	}
}else {
	die("Akses dilarang....");
}
?>