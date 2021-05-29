
<!DOCTYPE html>
<html>
<head>
	<title>Formulir pendaftaran siswa Baru | SMK coding</title>
</head>
<body>
<header> 
	<h3> Formulir pendaftaran siswa baru</h3>	
</header>
<form action="proses-pendaftaran.php" method="POST">
	<fieldset>
		<p>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" placeholder="nama lengkap"/>
		</p>
		<p>
			<label for="alamat">Alamat:</label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis kelamin</label>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan">perempuan</label>
		</p>
		<p>
			<label for="agama">Agama: </label>
			<select name="agama">
				<option>islam</option>
				<option>kristen</option>
				<option>hindu</option>
				<option>budha</option>
				<option>atheis</option>
			</select>
		</p>
		<p>
			<label for="sekolah_asal">sekolah asal: </label>
			<input type="text" name="sekolah_asal" placeholder="nama sekolah" />
		</p>
		<p>
			<input type="submit" value="daftar" name="daftar" />
		</p>
	</fieldset>
</form>
</body>
</html>