<?php
	require "koneksi.php";
	
	$querypasien = mysqli_query($con, "SELECT * FROM pasien");
	$jumlahpasien = mysqli_num_rows($querypasien);
	
	$queryobat = mysqli_query($con, "SELECT * FROM obat");
	$jumlahobat = mysqli_num_rows($queryobat);
	
	$querydokter = mysqli_query($con, "SELECT * FROM dokter");
	$jumlahdokter = mysqli_num_rows($querydokter);
	
	$queryberobat = mysqli_query($con, "SELECT * FROM berobat");
	$jumlahberobat = mysqli_num_rows($queryberobat);
	
	$queryresep = mysqli_query($con, "SELECT * FROM resep_obat");
	$jumlahresep = mysqli_num_rows($queryresep);
	
	$queryuser = mysqli_query($con, "SELECT * FROM user");
	$jumlahuser = mysqli_num_rows($queryuser);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.css"></script>
	<link rel="stylesheet" href="fontawesome/css/all.css" />
    <title>Home</title>
	<style>
		.navbar{
			background-color: #87CEEB;
		}
		.hero {
			background-color: #F08080;
			padding: 50px 23px;
			margin-bottom: 20px;
		}
		.super {
			background-color: #00FFFF;
			padding: 50px 23px;
			margin-bottom: 20px;
		}
		
		.kotak {
			border: solid;
		}
		.summary-pasien{
			background-color: #0000FF;
			border-radius: 15px;
		}
		.summary-obat{
			background-color: #98FB98;
			border-radius: 15px;
		}
		.summary-dokter{
			background-color: #66CDAA;
			border-radius: 15px;
		}
		.summary-berobat{
			background-color: #FF00FF;
			border-radius: 15px;
		}
		.summary-resep{
			background-color: #FFD700;
			border-radius: 15px;
		}
		.summary-user{
			background-color: #F08080;
			border-radius: 15px;
		}
		.no-decoration{
			text-decoration: none;
		}
		.container-data {
			background-color: #87CEEB;
			padding: 50px 23px;
			margin-bottom: 20px;
		}
	</style>
	
</head>
<body>
<div class="container shadow">
        <header>
			<h1 align="center" class="mb-3">Sistem Informasi Klinik</h1>
        </header>
		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="index.php"><i class="fa fa-hospital fa-2x"></i> Home </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="data.php"><i class="fa fa-book-medical fa-2x"></i> Data</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="logout.php"> Logout</a>
						</li>
					</ul>
				</div>
			 </div>
		</nav>
	<div class="container mt-4">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
			<li class="breadcrumb-item active" aria-current="page">
				<i class="fa fa-solid fa-user"></i>
				Selamat Datang Di Sistem Informasi Klinik
			</li>
		  </ol>
		</nav>
		<hr>
		<div class="container-data mt-4">
			<div class="row">				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-dokter p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa fa-solid fa-user-nurse fa-8x"></i>
							</div>
							<div class="col-6 text-white">
								<p>
								<h3 class="fs-3"><?php echo $jumlahdokter; ?> Dokter</h3>
								<p> <a href="dokter.php" class="text-white no-decoration"> Data Dokter</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-pasien p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa fa-solid fa-bed fa-8x"></i>
							</div>
							<div class="col-6 text-white">
								<p>
								<h3 class="fs-3"><?php echo $jumlahpasien; ?> Pasien</h3>
								<p> <a href="pasien.php" class="text-white no-decoration"> Data Pasien</a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-obat p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa fa-solid fa-pills fa-8x"></i>
							</div>
							<div class="col-6 text-white">
								<p>
								<h3 class="fs-3"><?php echo $jumlahobat; ?> Obat</h3>
								<p> <a href="obat.php" class="text-white no-decoration"> Data Obat</a></p>
							</div>
						</div>
					</div>
					</div>
					<!-- IMPLEMENTASI VIEW -->
					<h4>Data Pasien Perempuan</h4>
					<div class="container mt-1">
						<table class="table" style="margin-top:1rem;">
							<thead>
								<tr>
									<td>No.</td>
									<td>Nama Pasien</td>
									<td>Jenis Kelamin</td>
									<td>Umur</td>
								</tr>
							</thead>
							<?php
								$no = 1;
								$query = mysqli_query($con, 'SELECT * FROM pasien_perempuan');
								while ($data = mysqli_fetch_array($query)) {
							?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $data['nama_pasien'] ?></td>
								<td><?= $data['jenis_kelamin'] ?></td>
								<td><?= $data['umur'] ?></td>
							</tr>
							<?php } ?>
						</table>
					<h4>Data Pasien Laki-Laki</h4>
					
						<table class="table" style="margin-top:1rem;">
							<thead>
								<tr>
									<td>No.</td>
									<td>Nama Pasien</td>
									<td>Jenis Kelamin</td>
									<td>Umur</td>
								</tr>
							</thead>
							<?php
								$no = 1;
								$query = mysqli_query($con, 'SELECT * FROM pasien_lakilaki');
								while ($data = mysqli_fetch_array($query)) {
							?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $data['nama_pasien'] ?></td>
								<td><?= $data['jenis_kelamin'] ?></td>
								<td><?= $data['umur'] ?></td>
							</tr>
							<?php } ?>
						</table>
				
			</div>
				</div>
			</div>
		</div>
		
	</div>
	<?php require "footer.php";?>
</div>
</body>
</html>