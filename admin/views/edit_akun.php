<?php
include('config/koneksi.php');
$dataakun = $koneksi->query("SELECT *from akun WHERE id_akun='$_GET[id]' ");
$detail = $dataakun->fetch_assoc();

if (isset($_POST['simpan']))
{
		$password = md5($_POST['password']);
		$koneksi->query("UPDATE akun SET nama='$_POST[nama]',username='$_POST[username]', password='$password', level='$_POST[level]' WHERE id_akun='$_GET[id]'");
	
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<script>location='index.php?page=kelola_akun';</script>";
}
?>
<div class="row">
	<div class="col-lg-12">
		<h1>Edit Data Akun</h1>
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="?page=kelola_akun">Data Akun Pegawai</a></li>
			<li class="breadcrumb-item active">Edit Data Akun</li>
		</ol>
	</nav>
	</div>
</div>
<form method="post" enctype="multipart/form-data">

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
	<input type="password" id="pass" name="password" class="form-control" value="<?php echo $detail['password']; ?>">			
</div>
<div class="form-group">
	<label>level</label>
	<select class="form-control" id="exampleFormControlSelect1" name="level">
	  <option value="admin"><?php echo $detail['level']; ?></option>
      <option value="admin">admin</option>
      <option value="karyawan">karyawan</option>
    </select>			
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