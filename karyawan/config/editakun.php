<?php
include('koneksi.php');
$dataakun = $koneksi->query("SELECT * from akun WHERE id_akun='$_GET[id]' ");
$detail = $dataakun->fetch_assoc();

if (isset($_POST['simpan'])) {
	$koneksi->query("UPDATE akun SET username='$_POST[username]', password='$_POST[password]' WHERE id_akun='$_GET[id]'");

	session_destroy();

// mengalihkan halaman ke halaman login
	echo "<script>location='../login.php';</script>";
}
?>
<div class="row">
	<div class="col-lg-12">
		<h1>Edit Profile</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="?page=profile">Profile</a></li>
				<li class="breadcrumb-item active">Edit Akun</li>
			</ol>
		</nav>
	</div>

<form method="post" enctype="multipart/form-data">

	<div class="form-group">
		<input type="hidden" disabled="" name="id_akun" class="form-control">
	</div>
</div>
<div class="form-group">
	<label>Username</label>
	<input type="text" name="username" class="form-control" value="<?php echo $detail['username']; ?>" >
</div>
<div class="form-group">
	<label>Password Lama</label>
	<input type="text" readonly="" class="form-control" value="<?php echo $detail['password']; ?>">			
</div>
<div class="form-group">
	<label>Password Baru</label>
	<input type="text" id="pass" name="password" class="form-control" value="<?php echo $detail['password']; ?>">			
</div>
<input type="submit" class="btn btn-primary" name="simpan" value="Simpan"></input>
</form>
</div>