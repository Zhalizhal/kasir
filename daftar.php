<?php 
include 'admin/config/koneksi.php';

if(isset($_POST['simpan'])){
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	mysqli_query($koneksi, "INSERT INTO akun (id_akun, nama, username, password, level)
		VALUES (NULL, '$nama', '$username', '$password', '$level') ");

	echo "<div class='alert alert-info'>Akun Terdaftar Silahkan Login</div>";
	header("location:login.php");
}
?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>NOURA FAMILY</title>
	<link href="admin/css/styles.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-info">
	<br><br><br><br><br><br>
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<div class="card shadow-lg border-0 rounded-lg mt-5">
								<div class="card-header"><h3 class="text-center font-weight-light my-4">Daftar : NOURA FAMILY</h3></div>
								<div class="card-body">

									<form method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label class="small mb-1" >Nama</label>
											<input class="form-control py-4"  name="nama" type="text"/>
										</div>

										<div class="form-group">
											<label class="small mb-1" >Username</label>
											<input class="form-control py-4"  name="username" type="text"/>
										</div>

										<div class="form-group">
											<label class="small mb-1" >Password</label>
											<input class="form-control py-4"  name="password" type="password"/>
										</div>

										<div class="form-group">
											<input class="form-control py-4" hidden=""  name="level" value="admin" type="text"/>
										</div>

										<div class="form-group d-flex align-items-center mt-4 mb-0">
											<button name="simpan" class="btn btn-primary">Daftar</button>
											<div class="mr-3"></div>
									</form>
											<a href="login.php" class="btn btn-primary">Login</a>

													</div>
												</div>
											</div>
										</div>
									</div>
								</main>
							</div>

						</div>
						<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
						<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
						<script src="js/scripts.js"></script>
					</body>
					</html>
