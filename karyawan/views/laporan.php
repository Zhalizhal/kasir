<?php 
include 'config/koneksi.php';

$semuadata=array();
$tgl_mulai="";
$tgl_selesai="";
if (isset($_POST["kirim"])) {
	
	$tgl_mulai = $_POST['tglm'];
	$tgl_selesai = $_POST['tgls'];

	$bytanggal = mysqli_query($koneksi, "SELECT * FROM pembelian WHERE tanggal_pembelian BETWEEN '$tgl_mulai' AND '$tgl_selesai' ");
	while($d = mysqli_fetch_array($bytanggal)) 
	{
		
		$semuadata[]=$d;

	}
	// echo "<pre>";
	// print_r($semuadata);
	// echo "</pre>";
}elseif (isset($_POST['cetak'])) { 
	$tgl_mulai = $_POST['tglm'];
	$tgl_selesai = $_POST['tgls'];

	$bytanggal = mysqli_query($koneksi, "SELECT * FROM pembelian WHERE tanggal_pembelian BETWEEN '$tgl_mulai' AND '$tgl_selesai' ");
	while($d = mysqli_fetch_array($bytanggal)) 
	{
		
		$semuadata[]=$d;

	} ?>
			<script>
				window.print();
			</script>
			<?php
		} ?>
<style type="text/css">
	@media print { 
		.noprint { 
			visibility: hidden; 
		} 
	} 
</style>
<div class="row">
	<div class="col-lg-12 ">
		<h1>Laporan Penjualan NOURA FAMILY</h1>
		<ol class="breadcrumb noprint">
			<li>Laporan</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">

		<h3>Laporan dari Tanggal <?php echo $tgl_mulai;  ?> sampai <?php echo $tgl_selesai;  ?></h3>

		<form method="post">
			<div class="row">
				<div class="col-md-5">
					<div class="form-group">
						<label>Tanggal Mulai</label>
						<input type="date" class="form-control" name="tglm" value="<?php echo $tgl_mulai; ?>">
					</div>
				</div>

				<div class="col-md-5">
					<div class="form-group">
						<label>Tanggal Akhir</label>
						<input type="date" class="form-control" name="tgls" value="<?php echo $tgl_selesai; ?>">
					</div>
				</div>

				<div class="col-md-2">
					<label>&nbsp;</label></br>
					<button class="btn btn-primary noprint" name="kirim">Lihat</button>
					<button class="btn btn-info noprint" name="cetak"><i class="fas fa-print"></i> Cetak</button>
					
				</div>

			</div>
		</form>

		<table class="table table-bordered">
			<thead class="thead-dark">
				<tbody>
				<tr>
					<th>No.</th>
					<th>ID Penjualan</th>
					<th>Tanggal  (Tahun-Bulan-Tanggal)</th>
					<th>Total </th>
				</tr>
				</tbody>
			</thead>
			<?php
			$no = 1;
			$total=0;
			foreach ($semuadata as $key => $value) {
				$total+=$value['total_pembelian'];
				?>
				<tr>
					<td><?php echo $no++; ?>.</td>
					<td><?php echo $value['id_pembelian']; ?></td>
					<td><?php echo $value['tanggal_pembelian']; ?></td>
					<td><?php echo number_format($value['total_pembelian']); ?></td>
				</tr>

				<?php 
			}
			?>
				<tr>
					<th colspan="3">
						Total Pendapatan Pada Priode tersebut
					</th>
					<th>
						Rp. <?php echo number_format($total); ?>
					</th>
				</tr>
		</table>




	</div><!--<div class="row">-->

	</div><!--<div class="col-lg-12">-->

		<!-- <?php 
		if (isset($_POST['kirim'])) { ?>
			<script>
				window.print();
			</script>
			<?php
		} ?> -->