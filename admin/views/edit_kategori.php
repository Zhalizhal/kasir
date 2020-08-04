<?php
include('config/koneksi.php');
$datakategori = $koneksi->query("SELECT *from kategori WHERE id_kategori='$_GET[id]' ");
$detail = $datakategori->fetch_assoc();

if (isset($_POST['simpan']))
{
	
		$koneksi->query("UPDATE kategori SET nama_kategori='$_POST[nama_kategori]' WHERE id_kategori='$_GET[id]'");
	
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<script>location='index.php?page=kategori';</script>";
}
?>
<div class="row">
	<div class="col-lg-12">
		<h1>Edit Data Kategori</h1>
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="?page=kategori">Data Kategori</a></li>
			<li class="breadcrumb-item active">Edit Data Kategori</li>
		</ol>
	</nav>
	</div>
</div>
<form method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label>ID Kategori</label>
		<input readonly="" name="id_kategori" class="form-control" value="<?php echo $detail['id_kategori']; ?>">
	</div>
	<div class="form-group">
		<label>Nama kategori</label>
		<input type="text" name="nama_kategori" class="form-control" value="<?php echo $detail['nama_kategori']; ?>">
	</div>
	<input type="submit" class="btn btn-primary" name="simpan" value="Simpan"></input>
</form>