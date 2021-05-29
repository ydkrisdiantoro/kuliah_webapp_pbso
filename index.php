<!DOCTYPE html>
<html>
<head>
	<title>pendaftaran siswa baru | SMK CODINg</title>
</head>
<body>
	<header>
		<h3>pendaftaran siswa baru</h3>
		<h1> SMK CODING</h1>
	</header>
	<h4>Menu </h4>
	<nav>
		<ul>
			<li><a href="form-daftar.php">daftar baru</a></li>
			<li><a href="list-siswa.php">pendaftaran</a></li>
		</ul>
		<?php if(isset($_GET['status'])): ?>
			<p>
				<?php
				if($_GET['status'] == 'sukses'){
					echo "pendaftaran siswa baru berhasil!";
				} else {
					echo "pendaftaran gagal!";
				}
				?>

			</p>
					<?php endif; ?>
	</nav>
</body>
</html> 