<?php
	require "koneksi.php";
	require "session.php";
	
	$querypasien = mysqli_query($con, "SELECT * FROM pasien");
	
	$queryobat = mysqli_query($con, "SELECT * FROM obat");
	
	$querydokter = mysqli_query($con, "SELECT * FROM dokter");
	
	$queryberobat = mysqli_query($con, "SELECT * FROM berobat");
	
	$queryresep = mysqli_query($con, "SELECT * FROM resep_obat");
	
	$queryuser = mysqli_query($con, "SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="fontawesome/css/all.css" />
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
		<hr>
		<div class="container-data mt-4">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-user p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa fa-solid fa-hospital-user fa-5x"></i>
							</div>
							<div class="col-6 text-white">
								<p>
								<h5> <a href="user.php" class="text-white no-decoration"> Data User</a></h5>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-dokter p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa fa-solid fa-user-nurse fa-5x"></i>
							</div>
							<div class="col-6 text-white">
								<p>
								<h5> <a href="dokter.php" class="text-white no-decoration"> Data Dokter</a></h5>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-pasien p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa fa-solid fa-bed fa-5x"></i>
							</div>
							<div class="col-6 text-white">
								<p>
								<h5> <a href="pasien.php" class="text-white no-decoration"> Data Pasien</a></h5>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-berobat p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa fa-solid fa-stethoscope fa-5x"></i>
							</div>
							<div class="col-6 text-white">
								<p>          
								<h5> <a href="berobat.php" class="text-white no-decoration"> Data Berobat</a></h5>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-obat p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa fa-solid fa-pills fa-5x"></i>
							</div>
							<div class="col-6 text-white">
								<p>
								<h5> <a href="obat.php" class="text-white no-decoration"> Data Obat</a></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require "footer.php";?>
</div>
</body>
</html>