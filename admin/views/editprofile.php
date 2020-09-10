<?php
include('koneksi.php');
$dataakun = $koneksi->query("SELECT * from akun WHERE id_akun='$_GET[id]' ");
$detail = $dataakun->fetch_assoc();
if (isset($_POST['simpan']))
{
	$namafoto = $_FILES['foto']['name'];
	$lokasifoto = $_FILES['foto']['tmp_name'];
	if(!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto, "C:/xampp/htdocs/testing/admin/gambar/profil/".$namafoto);
		$koneksi->query("UPDATE akun 
			SET nama='$_POST[nama]', foto_profil='$namafoto' WHERE id_akun='$_GET[id]'");
	}else
	{
		$koneksi->query("UPDATE akun SET  username='$_POST[username]', password='$_POST[password]' WHERE id_akun='$_GET[id]'");

		session_destroy();

// mengalihkan halaman ke halaman login
	echo "<script>location='../login.php';</script>";

	}
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<script>location='index.php?page=profile';</script>";
	ob_flush();
}?>
<div class="row">
	<div class="col-lg-12">
		<h1>Edit Profile</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="?page=profile">Profile</a></li>
				<li class="breadcrumb-item active">Edit Profile</li>
			</ol>
		</nav>
	</div>
</div>

<form method="post" enctype="multipart/form-data">

	<div class="form-group">
		<input type="hidden" disabled="" name="id_akun" class="form-control">
	</div>
</div>
<div class="form-group">
	<label>Nama</label>
	<input type="text" name="nama" class="form-control" value="<?php echo $detail['nama']; ?>">
</div>
<div class="form-group">
	<label>Username</label>
	<input  type="text" name="username" class="form-control" value="<?php echo $detail['username']; ?>">
</div>
<div class="form-group">
	<label>Password Lama</label>
	<input type="text" readonly="" class="form-control" value="<?php echo $detail['password']; ?>">			
</div>
<div class="form-group">
	<label>Password Baru</label>
	<input type="password" id="pass" name="password" class="form-control" value="">			
</div>
<div class="form-group">
	<label>Foto</label><br>
	<img src="gambar/profil/<?php echo $detail['foto_profil']; ?>" width="100">
</div>
<div class="form-group">
	<label>Ganti Foto</label>
	<input type="file" name="foto" class="form-control">
</div>

<input type="submit" class="btn btn-primary" name="simpan" value="Simpan"></input>
</form>