<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
    <title>Login</title>
	<style>
	/* Login Wrapper */
#login-wrapper {
    align-items: center;
    width: 500px;
    margin: 10px;
    margin-left: 30%;
    margin-top: 50px;
    padding: 20px;
    box-shadow: 0 0 1em #009966;
}

/* Isi */
h1{
    margin-bottom: 20px;
}

.form-control{
    width: 100%;
    padding: 10px;
    border: 2px solid #009966;
    box-sizing: border-box;
    font-size: 15px;
    margin-bottom: 15px;
}

button[type=submit]{
    padding: 7px;
    color: white;
    background-color: #009966;
    box-sizing: border-box;
    font-size: 15px;
    border-radius: 4px;
}

button[type=submit]:active,
button[type=submit]:hover{
    opacity: 75%;
}
</style>
</head>
<body>
	<div id="login-wrapper">
				<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
					<div>
						<h2 align="center">Login User</h2>
					</div>
					<hr>
					<div>
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username">
					</div>
					<div>
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password">
					</div>
					<div>
						<button class="btn btn-success form-control mt-3" type="submit" name="loginbtn">Login</button>
					</div>
					<br>
					<p class="login-register-text">Anda belum punya akun? <a href="registrasi.php">Register</a></p>
				</form>
			</div>
			<div class="mt-6" style="width: 500px">
					<?php
					require('koneksi.php');
					session_start();
					// If form submitted, insert values into the database.
					if (isset($_POST['username'])){
					
					$username = stripslashes($_REQUEST['username']); // removes backslashes
					$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
					$password = stripslashes($_REQUEST['password']);
					$password = mysqli_real_escape_string($con,$password);
					
				//Checking is user existing in the database or not
					$query = "SELECT * FROM `user` WHERE username='$username' and password='".md5($password)."'";
					$result = mysqli_query($con,$query) or die(mysql_error());
					$rows = mysqli_num_rows($result);
					if($rows==1){
						$_SESSION['username'] = $username;
						header("Location: index.php"); // Redirect user to index.php
						}else{
							echo "
								<div class='alert alert-warning' align='center'>
									Username atau password salah!
								</div>";
							}
				}else{
			?>
			</div>
			<?php } ?>
		</div>
</body>
</html>