<?php
include('config/koneksi.php');

if (isset($_POST['simpan']))
{
	
		$koneksi->query("INSERT INTO kategori VALUES ('','$_POST[nama_kategori]')");
	
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<script>location='index.php?page=kategori';</script>";
}
?>
<div class="row">
	<div class="col-lg-12">
		<h1>Tambah Data Kategori</h1>
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="?page=kategori">Data Kategori</a></li>
			<li class="breadcrumb-item active">Tambah Data Kategori</li>
		</ol>
	</nav>
	</div>
</div>
<form method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label>ID Kategori</label>
		<input type="hidden" name="id_kategori" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama kategori</label>
		<input type="text" name="nama_kategori" class="form-control">
	</div>
	<input type="submit" class="btn btn-primary" name="simpan" value="Simpan"></input>
</form>