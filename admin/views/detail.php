<?php 
include 'config/koneksi.php';
?>
<div class="row">
	<div class="col-lg-12">
		<h2 class="h2">Detail Pembelian</h2>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="?page=pembelian">Data Pembelian</a></li>
				<li class="breadcrumb-item active" aria-current="page">Detail Pembelian</li>
			</ol>
		</nav>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<br/>

		<?php
		$datapembelian = $koneksi->query("select * from pembelian WHERE pembelian.id_pembelian='$_GET[id]' ");
		$detail = $datapembelian->fetch_assoc();
		?>
		
		<!-- <pre>
			<?php 
			print_r($detail);
			?>
		</pre> -->

		<!-- <p>Nama : <?php echo $detail['id_akun']; ?></p>
		<p>email : <?php echo $detail['email']; ?></p> -->
		<div class="row">
			<div class="col-md-4">
				<h2><strong>Keterangan</strong></br></h2>
				tanggal Pembelian : <?php echo $detail['tanggal_pembelian']; ?></br>
				Total Pembelian : Rp. <?php echo number_format($detail['total_pembelian']); ?></br>
				<strong>Prodak Yang Dibeli :</strong>
			</div>
		</div>
		
		<table class="table table-bordered">
			<tr>
				<th>No.</th>
				<th>Nama Barang</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>subTotal</th>
			</tr>
			<?php
			$no = 1;
			$data = mysqli_query($koneksi,"select * from pembelian_barang JOIN barang 
				ON barang.kode_barang=pembelian_barang.kode_barang 
				WHERE pembelian_barang.id_pembelian='$_GET[id]' ");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?>.</td>
					<td><?php echo $d['nama_barang']; ?></td>
					<td><?php echo $d['harga_barang']; ?></td>
					<td><?php echo $d['jumlah']; ?></td>
					<td><?php echo $d['harga_barang']*$d['jumlah']; ?></td>
				</tr>
				<?php 
			}
			?>
		</table>
		<a href="?page=pembelian"><button class="btn btn-primary">Kembali</button></a>




	</div>
</div>