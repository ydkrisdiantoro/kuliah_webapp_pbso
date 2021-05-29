<?php
include("config.php");
if ( isset($_GET['id']) ){
	//ambil id dari qquery string
	$id = $_GET['id'];
	//buat query hapus
	$sql = "DELETE FROM calon_siswa WHERE id=$id";
	$query = mysqli_query($db, $sql);
	// apakah query hapus berhasil?
	if ($query) {
		header ('Location: list-siswa.php');
		<a href=”LinkHapusnya” onclick=”return confirm(‘Yakin Hapus?’)”>Hapus</a>



	} else {
		die("gagal menghapus...");
	}
} else {
	die("akses dilarang....");
}
?>