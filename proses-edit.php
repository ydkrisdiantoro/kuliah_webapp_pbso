<?php
include("config.php");
//cek apakah tombol simpan sudah di klik atau belum
if (isset($_POSt['simpan'])) {
	// ambil data dari formulir
	$id = $_POSt['id'];
	$nama = $_POSt['nama'];
	$alamat = $_POSt['alamat'];
	$jk = $_POSt['jenis_kelamin'];
	$agama = $_POSt['agama'];
	$sekolah = $_POSt['sekolah_asal'];
	//buat  query update
	$sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	//apakah query update berhasil
	if($query){
		// kalau berjhasil alihkan kehalaman list-siswa.php
		header('Location: list-siswa.php');
	} else {
		// kalau gagal tampilan pesan
		die("Gagal menyimpan perubahan");
	} 
	
}
else {
		die("akses dilarang");

	} 
?>