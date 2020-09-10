<?php
include('koneksi.php');
$dataproduk = $koneksi->query("SELECT * from barang, kategori WHERE barang.id_kategori=kategori.id_kategori AND kode_barang='$_GET[id]' ");
$detail = $dataproduk->fetch_assoc();

if (isset($_POST['simpan']))
{
	// $namafoto = $_FILES['foto']['name'];
	// $lokasifoto = $_FILES['foto']['tmp_name'];
	// if(!empty($lokasifoto))
	// {
	// 	move_uploaded_file($lokasifoto, "C:/xampp/htdocs/testing/admin/gambar/".$namafoto);

	// 	$koneksi->query("UPDATE barang 
	// 		SET id_kategori='$_POST[id_kategori]', nama_barang='$_POST[nama_barang]', harga_barang='$_POST[harga_barang]', dekripsi_barang='$_POST[dekripsi_barang]', stok='$_POST[stok]', foto_barang='$namafoto' WHERE kode_barang='$_GET[id]'");

	// }else
	// {
		$koneksi->query("UPDATE barang SET id_kategori='$_POST[id_kategori]', nama_barang='$_POST[nama_barang]', harga_barang='$_POST[harga_barang]', dekripsi_barang='$_POST[dekripsi_barang]', stok='$_POST[stok]' WHERE kode_barang='$_GET[id]'");
	// }
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<script>location='index.php?page=produk';</script>";
	
}

?>

<div class="row">
	<div class="col-lg-12">
		<h1>Edit Data Produk</h1>
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="?page=produk">Data Produk</a></li>
			<li class="breadcrumb-item active">Edit Data Produk</li>
		</ol>
	</nav>
	</div>
</div>

<form method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label>Kode Barang</label>
		<input type="" disabled="" name="kode_barang" class="form-control" value="<?php echo $detail['kode_barang']; ?>">
	</div>
	<div class="form-group">
		<label>Kategori</label>
		<?php 
		$datakategori = array();

		$ambil = mysqli_query($koneksi, "SELECT * FROM kategori");
		while ($d = mysqli_fetch_array($ambil)) {
		 	$datakategori[] = $d;
		 } ?>
		 
		<select name="id_kategori" class="form-control">
		
			<?php foreach ($datakategori as $key => $value) { ?>
			<option  value="<?php echo $value['id_kategori']; ?>"><?php echo $value['nama_kategori']; ?></option>
			<?php
		 }?>
		</select>
	</div>
	<div class="form-group">
		<label>Nama Barang</label>
		<input type="text" name="nama_barang" class="form-control" value="<?php echo $detail['nama_barang']; ?>">
	</div>
	<div class="form-group">
		<label>Harga barang</label>
		<input type="number" name="harga_barang" class="form-control" value="<?php echo $detail['harga_barang']; ?>">
	</div>
	<div class="form-group">
		<label>Deskripsi barang</label>
		<input type="text" name="dekripsi_barang" class="form-control" value="<?php echo $detail['dekripsi_barang']; ?>">
	</div>
	<div class="form-group">
		<label>Stok</label>
		<input type="number" name="stok" class="form-control" value="<?php echo $detail['stok']; ?>">
	</div>
	<!-- <div class="form-group">
		<label>Foto barang</label><br>
		<img src="gambar/<?php echo $detail['foto_barang']; ?>" width="100">
	</div> -->
	<!-- <div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div> -->

	<input type="submit" class="btn btn-primary" name="simpan" value="Simpan"></input>
</form>