<?php
include '../config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Dashboard - SB Admin</title>
	<link href="../css/styles.css" rel="stylesheet" />
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
	<style type="text/css">
		@media print { 
			.noprint { 
				visibility: hidden; 
			} 
		} 
	</style>
</head>
<body>
	<section>
		<font face="Merchant Copy">
			<div class="container">
				<?php

				$datapembelian = $koneksi->query("select * from pembelian WHERE pembelian.id_pembelian='$_GET[id]' ");
				$detail = $datapembelian->fetch_assoc();
				?>

				<!--  <pre>
					<?php 
					print_r($detail);
					?>
				</pre>  -->
				<br/>
				<div class="row">
					<div class="col-md-4">
						<h2><strong>Nota Pembelian</strong></h2>
						<!-- <strong>No. Pembelian <?php echo $detail['id_pembelian']; ?></strong></br> -->
						Tanggal pembelian : <?php echo $detail['tanggal_pembelian']; ?></br>
						Total Pembelian : Rp. <?php echo number_format($detail['total_pembelian']); ?>
					</div>
				</div>
				<table cellpadding="3">
					<tr>
						<th>No.</th>
						<th>Nama Barang</th>
						<th>Harga</th>
						<th>Qty</th>
						<th>Total Harga</th>
					</tr>
					<?php
					$tpem = $detail['total_pembelian'];
					
					$no = 1;
					$data = mysqli_query($koneksi,"SELECT * from pembelian_barang WHERE id_pembelian='$_GET[id]' ");
					while($d = mysqli_fetch_array($data)){
						?>
						<tr>
							<td><?php echo $no++; ?>.</td>
							<td><?php echo $d['nama_barang']; ?></td>
							<td>Rp. <?php echo number_format($d['harga_barang']); ?></td>
							<td align="center"><?php echo $d['jumlah']; ?></td>
							<td>Rp. <?php echo number_format($d['subharga']); ?></td>
						</tr>
						<?php 
					}
					?>
					<tfoot>
						<tr>
							<th colspan="5"><hr></th>
						</tr>
						<tr>
							<th colspan="4">Total Pembelian</th>
							<td>Rp. <?php echo number_format($detail['total_pembelian']); ?></td>
						</tr>
						<tr>
							<th colspan="4">Uang</th>
							<td> Rp. <?php echo number_format($detail['uang']); ?>
						</td>
					</tr>
							<!-- <?php 
							$hasil =$detail['uang']-$detail['total_pembelian']  ?> -->

							<tr><th colspan="4">Kembalian</th>
								<td> Rp. <?php echo number_format($detail['kembalian']); ?>
							</td>
						</tr>
						<tr>
							<th colspan="5"><hr></th>
						</tr>
						<tr>
							<td colspan="5" align="center"><strong>NOURA FAMYLI</strong></td>
						</tr>
						<tr>
							<td colspan="5" align="center"><small>Jembatan, jln.raya, Parean Girang, Gempol, Kabupaten Indramayu,</small></td>
						</tr>
						<tr>
							<td colspan="5" align="center"><small> Jawa Barat 45254</small></td>
						</tr>
						<tr>
							<td colspan="5" align="center"><small>No tlp. 0812-2238-478</small></td>
						</tr>
					</tfoot>
				</table><br>
				<a href="../index.php?page=kasir" class="btn btn-primary noprint">Kembali</a>
			</div>

			<script>
				window.print();
			</script>



		</section>


	</font>
</body>
</html>