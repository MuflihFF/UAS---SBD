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
			background-color: 	#F08080;
			border-radius: 5px;
			padding: 10px 23px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container shadow p-3">
	<header>
	<h2 align="center" class="hero">Data User</h2>
	</header>
	<hr>
	<div class="btn-toolbar mb-2 mb-md-10">
		<a class="btn btn-primary" href="data.php" role="button">Kembali</a>
	</div> 
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<td>No</td>
					<td>Id</td>
					<td>Username</td>
					<td>Password</td>   
					<td>Nama Lengkap</td>
				</tr>
			</thead>
			<?php
			include "koneksi.php";
			$no = 1;
			$query = mysqli_query($con, 'SELECT * FROM user');
			while ($data = mysqli_fetch_array($query)) {
			?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data['id'] ?></td>
					<td><?php echo $data['username'] ?></td>
					<td><?php echo $data['password'] ?></td>
					<td><?php echo $data['nama_lengkap'] ?></td>
				</tr>
			<?php } ?>
		</table>
		
	</div>
	<?php require "footer.php";?>
</div>
</body>
</html>