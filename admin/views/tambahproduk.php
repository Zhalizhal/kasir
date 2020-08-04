<?php 
include 'config/koneksi.php';

if (isset($_POST['save'])){
	// $nama = $_FILES['foto']['name'];
	// $lokasi = $_FILES['foto']['tmp_name'];
	// move_uploaded_file($lokasi, "/public_html/kasir/admin/gambar/".$nama);
	$tambah = mysqli_query($koneksi, " INSERT INTO barang 
		(kode_barang, id_kategori, nama_barang, harga_barang, dekripsi_barang, stok)
		VALUES ('$_POST[kode_barang]', '$_POST[id_kategori]', '$_POST[nama_barang]', '$_POST[harga_barang]', '$_POST[dekripsi_barang]', '$_POST[stok]') " );

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<script>location='index.php?page=produk';</script>";
}


?>
<div class="row">
	<div class="col-lg-12">
		<h1>Data Produk</h1>
		<ol class="breadcrumb">
			<li><a href="?page=produk"><i class="icon-dashboard"></i> Data Produk</a></li>
		</ol>
	</div>
</div>

<form method="post" enctype="multipart/form-data">
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
		<input type="text" name="nama_barang" class="form-control">
	</div>
	<div class="form-group">
		<label>harga barang</label>
		<input type="number" name="harga_barang" class="form-control">
	</div>
	<div class="form-group">
		<label>deskripsi barang</label>
		<input type="text" name="dekripsi_barang" class="form-control">
	</div>
	<!-- <div class="form-group">
		<label>foto barang</label>
		<input type="file" name="foto" class="form-control">
	</div> -->
	<div class="form-group">
		<label>Stok</label>
		<input type="number" name="stok" class="form-control">
	</div>
	<div class="form-group">
		<label>Kode Barang</label>
		<input type="text" name="kode_barang" class="form-control" placeholder="Scan Barcode/Kode Barang..">
	</div>
	<input type="submit" class="btn btn-primary" name="save"></input>
	
</form>
