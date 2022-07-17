<?php
error_reporting(E_ALL);
include 'koneksi.php';

if (isset($_POST['submit']))
{
	$nama = $_POST['nama_dokter'];
	$sql = 'INSERT INTO dokter (nama_dokter)';
	$sql .= "VALUE ('{$nama}')";
	$result = mysqli_query($con, $sql);
	header('location: dokter.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
    <script src="../js/bootstrap.min.js"></script>
	<title>Tambah Dokter</title>
</head>
<body>
	<div>
		<div class="p-5 shadow">
		<header>
		<h2 align="center">Tambah Dokter</h2>
		</header>
		<hr>
			<div class="main">
				<form method="post" action="dokter_tambah.php" enctype="multipart/form-data">
					<div class="input mb-3">
						<label for="nama_dokter" class="col-sm-2 col-form-label">Nama Dokter</label>
						<input type="text" class="form-control" name="nama_dokter" placeholder="Masukan Nama Dokter" required/>
					</div>
					<div class="submit">
						<input type="submit" name="submit" value="Simpan" />
						<a href="dokter.php" role="button">Batal</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>