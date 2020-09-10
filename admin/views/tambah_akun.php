<?php 
include 'config/koneksi.php';

if(isset($_POST['simpan'])){
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$level = $_POST['level'];

	mysqli_query($koneksi, "INSERT INTO akun (id_akun, nama, username, password, level)
		VALUES (NULL, '$nama', '$username', '$password', '$level') ");

	echo "<div class='alert alert-info'>Akun Terdaftar</div>";
	echo "<script>location='index.php?page=kelola_akun';</script>";
}
?>
<div class="row">
	<div class="col-lg-12">
		<h1>Data Akun Pegawai</h1>
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="?page=kelola_akun">Data Akun Pegawai</a></li>
			<li class="breadcrumb-item active">Pendaftaran Pegawai</li>
		</ol>
	</nav>
	</div>
</div>
				<div class="container">
					

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
                                        <label>level</label>
	<select class="form-control" id="exampleFormControlSelect1" name="level">
      <option value="admin">admin</option>
      <option value="karyawan">karyawan</option>
    </select>	
										</div>

										<div class="form-group d-flex align-items-center mt-4 mb-0">
											<button name="simpan" class="btn btn-primary">Daftar</button>
											<div class="mr-3"></div>
									</form>
											

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
