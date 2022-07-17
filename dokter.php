<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="fontawesome/css/all.css" />
    <title>Menampilkan data dari database</title>
	<style>
	.hero {
			background-color: 	#66CDAA;
			border-radius: 5px;
			padding: 10px 23px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container shadow p-3">
	<header>
	<h2 align="center" class="hero">Data Dokter</h2>
	</header>
	<hr>
		<div class="btn-toolbar mb-2 mb-2 md-10">
		<a class="btn btn-primary me-3 " href="index.php" role="button"> Kembali</a>
		<a class="btn btn-primary md-10" href="dokter_tambah.php" role="button"> Tambah</a>
		</div>
	<div class="table-responsive">
		<table class="table">
			<thead>
			<tr>
                <td>No</td>
				<td>Id Dokter</td>
                <td>Nama Dokter</td>       
				<td>Aksi</td>
            </tr>
			</thead>
			<?php
			include "koneksi.php";
			$no = 1;
			$query = mysqli_query($con, 'SELECT * FROM dokter');
			while ($data = mysqli_fetch_array($query)) {
			?>
			<tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_dokter'] ?></td>
                <td><?php echo $data['nama_dokter'] ?></td>
				<td>					 
				<a href="dokter_ubah.php?id=<?= $data['id_dokter'];?>" role="button" class="btn btn-success"> <i class="fa-solid fa-pen-to-square"></i> Ubah</a>
				<a href="dokter_hapus.php?id=<?= $data['id_dokter'];?>" role="button" class="btn btn-danger" onclick="return confirm('Apakah yakin akan menghapus data?');"> <i class="fa-solid fa-trash-can"></i> Hapus</a>				
				</td>
            </tr>
			<?php } ?>
		</table>
	
	</div>
	<?php require "footer.php";?>
</div>
</body>
</html>