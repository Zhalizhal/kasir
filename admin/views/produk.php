<?php 
include 'config/koneksi.php';
$semuadata=array();
$dataproduk = mysqli_query($koneksi, "SELECT * FROM barang JOIN kategori ON barang.id_kategori=kategori.id_kategori ");
while($d = mysqli_fetch_array($dataproduk)) 
{

	$semuadata[]=$d;

}
?>
<style type="text/css">
	.td-kosong{
		background-color: #d66565;
		font-color: white;
	}
	.td-tipis{
		background-color: #f2c552;
	}
</style>

<div class="row">
	<div class="col-lg-12">
		<h1>Data Produk</h1>
		<ol class="breadcrumb">
			<li><a href="?page=produk"><i class="icon-dashboard"></i> Data Produk</a></li>
		</ol>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<br/>
		<div class="table-responsive animate__animated animate__slideInUp">
			<a href="index.php?page=tambahproduk" ><button class="btn btn-primary">Tambah Barang</button></a><hr>
			<table class="table table-bordered " id="dataTable"  width="100%" cellspacing="0">
				<thead class="thead-dark">
					<tr>
						<th>No.</th>
						<th>Kode Barang</th>
						<th>Nama Barang</th>
						<th>Harga</th>
						<th>Deskrpsi</th>
						<th>Kategori</th>
						<th>Stok</th>
						<!-- <th>Foto</th> -->
						<th>Aksi</th>
					</tr>
				</thead>
				<?php

				$no = 1;
				foreach ($semuadata as $key => $value) {
					?>
					<tr>

						<?php 
						if (empty($value['stok'])) { ?>
							<td class='td-kosong text-white'><?php echo $no++; ?>.</td>
							<td class='td-kosong text-white'><?php echo $value['kode_barang']; ?></td>
							<td class='td-kosong text-white'><?php echo $value['nama_barang']; ?></td>
							<td class='td-kosong text-white'>Rp. <?php echo number_format($value['harga_barang']); ?></td>
							<td class='td-kosong text-white'><?php echo $value['dekripsi_barang']; ?></td>
							<td class='td-kosong text-white'><?php echo $value['nama_kategori']; ?></td>
							<td class='td-kosong text-white'><?php echo $value['stok']; ?></td>
							<!-- <td class='td-kosong text-white'><img src="gambar/<?php echo $value['foto_barang']; ?>" width="50"></td> -->
							<td class='td-kosong text-white'><a href="index.php?page=editproduk&id=<?php echo $value['kode_barang']; ?>" ><button class="btn btn-warning">Edit</button></a>
								<a href="index.php?page=hapusproduk&id=<?php echo $value['kode_barang']; ?> " onclick="return confirm('Yakin Hapus?')"><button class="btn btn-danger">Hapus</button></a></td>
							<?php }elseif($value['stok']<10){ ?>
								<td class='td-tipis'><?php echo $no++; ?>.</td>
								<td class='td-tipis'><?php echo $value['kode_barang']; ?></td>
								<td class='td-tipis'><?php echo $value['nama_barang']; ?></td>
								<td class='td-tipis'>Rp. <?php echo number_format($value['harga_barang']); ?></td>
								<td class='td-tipis'><?php echo $value['dekripsi_barang']; ?></td>
								<td class='td-tipis'><?php echo $value['nama_kategori']; ?></td>
								<td class='td-tipis'><?php echo $value['stok']; ?></td>
								<!-- <td class='td-tipis'><img src="gambar/<?php echo $value['foto_barang']; ?>" width="50"></td> -->
								<td class='td-tipis'><a href="index.php?page=editproduk&id=<?php echo $value['kode_barang']; ?>" ><button class="btn btn-warning">Edit</button></a>
									<a href="index.php?page=hapusproduk&id=<?php echo $value['kode_barang']; ?>" onclick="return confirm('Yakin Hapus?')" ><button class="btn btn-danger">Hapus</button></a></td>
								<?php }else{ ?>
									<td><?php echo $no++; ?>.</td>
									<td><?php echo $value['kode_barang']; ?></td>
									<td><?php echo $value['nama_barang']; ?></td>
									<td>Rp. <?php echo number_format($value['harga_barang']); ?></td>
									<td><?php echo $value['dekripsi_barang']; ?></td>
									<td><?php echo $value['nama_kategori']; ?></td>
									<td><?php echo $value['stok']; ?></td>
									<!-- <td><img src="gambar/<?php echo $value['foto_barang']; ?>" width="50"></td> -->
									<td><a href="index.php?page=editproduk&id=<?php echo $value['kode_barang']; ?>" ><button class="btn btn-warning">Edit</button></a>
										<a href="index.php?page=hapusproduk&id=<?php echo $value['kode_barang']; ?> " onclick="return confirm('Yakin Hapus?')"><button class="btn btn-danger">Hapus</button></a></td>

									<?php } ?>

								</tr>
								<?php 
							}
							?>
						</table>
					</div>
				</div>

			</div>
		</div>