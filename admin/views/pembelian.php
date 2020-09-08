<?php 
include 'config/koneksi.php';
?>
<div class="row">
	<div class="col-lg-12">
		<h1>Data Pembelian</h1>
		<ol class="breadcrumb">
			<li><i class="icon-dashboard"></i> Data Penjualann</li>
		</ol>
	</div>
</div>
<style type="text/css">
	.table .thead-dark th {
		color: #fff;
		background-color: #343a40;
		border-color: #454d55;
	}
</style>
<!-- /.row -->
<div class="row">
	<?php  
	$semuadata=array();
	$datatransaksi = mysqli_query($koneksi, "select * from pembelian ORDER BY tanggal_pembelian desc");
	while($d = mysqli_fetch_array($datatransaksi)) 
	{

		$semuadata[]=$d;

	}
	?>
	<div class="col-lg-12">
		<br/>
		<table class="table table-bordered animate__animated animate__slideInUp" id="dataTable"  width="100%" cellspacing="0">
			<thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>Tanggal (Tahun-Bulan-Tanggal)</th>
					<th>Total Penjualan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<?php
			$no =1;
			foreach ($semuadata as $key => $data) {
				?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $data["tanggal_pembelian"]; ?></td>
						<td><?php echo $data["total_pembelian"];   ?></td>
						<td><a href="index.php?page=detail&id=<?php echo $data['id_pembelian'];  ?>"><button class="btn btn-success">Detail</button></td>
						</tr>
					<?php
				}
				?>
			</table>
			<hr>
		</div>
	</div>
</div>