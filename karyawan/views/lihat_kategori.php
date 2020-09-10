<?php 
include 'config/koneksi.php';
$datapembelian = $koneksi->query("select * from kategori WHERE kategori.id_kategori='$_GET[id]' ");
$detail = $datapembelian->fetch_assoc();
?>
<div class="row">
	<div class="col-lg-12">
		<h2 class="h2">Detail Produk Berdasarkan Kategori <?php echo $detail['nama_kategori']; ?></h2>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="?page=kategori">Data Kategori</a></li>
			</ol>
		</nav>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<br/>
			<table class="table table-bordered">
				<tr>
					<th>No.</th>
					<th>Nama Barang</th>
					<th>Harga</th>
					<th>Kategori</th>
				</tr>
				<?php
				$no = 1;
				$data = mysqli_query($koneksi,"select * from kategori JOIN barang 
					ON barang.id_kategori=kategori.id_kategori 
					WHERE kategori.id_kategori='$_GET[id]' ");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?>.</td>
						<td><?php echo $d['nama_barang']; ?></td>
						<td><?php echo $d['harga_barang']; ?></td>
						<td><?php echo $d['nama_kategori']; ?></td>
					</tr>
					<?php 
				}
				?>
			</table>
			<a href="?page=kategori"><button class="btn btn-primary">Kembali</button></a>




		</div>
	</div>