<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="fontawesome/css/all.css" />
    <title>Menampilkan data dari database</title>
	<style>
		.hero {
			background-color: #98FB98;
			border-radius: 5px;
			padding: 10px 23px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container shadow p-3">
	<header>
	<h2 align="left" class="hero text-white">Data Obat</h2>
	</header>
	<hr>
		<div class="btn-toolbar mb-2 mb-2 md-10">
		<a class="btn btn-primary me-3 " href="index.php" role="button"> Kembali</a>
		<a class="btn btn-primary md-10" href="obat_tambah.php" role="button"> Tambah</a>
		</div>
	<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>No</td>
				<td>Id Obat</td>
                <td>Nama Obat</td>
				<td>Aksi</td>				
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($con, 'SELECT * FROM obat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_obat'] ?></td>
                <td><?php echo $data['nama_obat'] ?></td>
				<td>					 
				<a href="obat_ubah.php?id=<?= $data['id_obat'];?>" role="button" class="btn btn-success"> <i class="fa-solid fa-pen-to-square"></i> Ubah</a>
				<a href="obat_hapus.php?id=<?= $data['id_obat'];?>" role="button" class="btn btn-danger" onclick="return confirm('Apakah yakin akan menghapus data?');"> <i class="fa-solid fa-trash-can"></i> Hapus</a>				
				</td>
            </tr>
        <?php } ?>
    </table>
	</div>
	<div class="card mt-5">
	<div class="card-header">
        <h4>Triger</h4>
    </div>
	<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="card-header text-white bg-secondary">
            <tr>
                <td>No</td>
				<td>Id Log</td>
				<td>Id Obat</td>
                <td>Obat Lama</td>
				<td>Obat Baru</td>
				<td>Waktu</td>
				<td>Aksi</td>
            </tr>
        </thead>
        <?php
        $no = 1;
        $sql = mysqli_query($con, 'SELECT * FROM log_obat');
        while ($data = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_log'] ?></td>
				<td><?php echo $data['id_obat'] ?></td>
                <td><?php echo $data['obat_lama'] ?></td>
				<td><?php echo $data['obat_baru'] ?></td>
				<td><?php echo $data['waktu'] ?></td>
				<td><a class="btn btn-danger" href="hapus_triger.php?id=<?= $data['id_log'];?>" role="button"><i class="fa-solid fa-trash-can"></i>Hapus</a></td>
            </tr>
        <?php } ?>
    </table>
	</div>
	</div>
	<?php require "footer.php";?>
</div>
</body>
</html>