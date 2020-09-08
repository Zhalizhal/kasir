<?php 
include 'config/koneksi.php';


// echo "<pre>";
// print_r($_SESSION['keranjangg']);
// echo "</pre>";
if (empty($_SESSION['keranjangg'])) {

	// echo "<script>alert('Keranjang Kosong');</script>";
	echo "<script>location='index.php?page=kasir';</script>";
}
?>

<section>
	<div class="container">
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>No. </th>
					<th>Barang</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Subharga</th>
				</tr>
			</thead>
			<?php
			$no = 1; 
			$totalharga = 0;
			foreach ($_SESSION["keranjangg"] as $kode_barang => $jumlah) {
				$ambil = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode_barang='$kode_barang' ");
				$pecah = $ambil->fetch_assoc();
				$subharga = $pecah['harga_barang']*$jumlah;
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $pecah['nama_barang']; ?></td>
					<td>Rp. <?php echo number_format($pecah['harga_barang']); ?></td>
					<td><?php echo $jumlah; ?></td>
					<td>Rp. <?php echo number_format($subharga); ?></td>
				</tr>
				<?php
				$totalharga+=$subharga;
			} 
			?>
			<tfoot>
				<tr>
					<th colspan="4">Total Belanja</th>
					<td>Rp. <?php echo number_format($totalharga); ?></td>
				</tr>
				<tr>
					<th colspan="4">Uang</th>
					<td><form method="post">
						<input type="number" class="form-control" name="uang">
					</td>
				</tr>
			</tfoot>
		</table>
		

			<button class="btn btn-primary" name="checkout" style="float: right;">Checkout</button></form>

			<?php 

			if (isset($_POST["checkout"]))
			{
				if (empty($_POST['uang'])) {
					echo "<script>alert('Masukkan Uang dulu');</script>";
				}else{
					//Menyimpan Ke Tabel Pembelian
				$tanggal_pembelian = date("Y-m-d");
				$uang = $_POST['uang'];
				$kembalian = $uang - $totalharga;
				mysqli_query($koneksi, "INSERT INTO pembelian VALUES ('', '$tanggal_pembelian', '$totalharga', '$uang', '$kembalian')");

				//Menyimpan Ke Tabel Pembelian Barang (detail dari Pembelian)
				$id_pembeli_baru = mysqli_insert_id($koneksi);
				// $id_pembeli_baru = $koneksi->insert_id;

				foreach ($_SESSION['keranjangg'] as $kode_barang => $jumlah) 
				{
					//mendapatkan data produk
					$ambil= mysqli_query($koneksi, "SELECT * FROM barang WHERE kode_barang='$kode_barang' ");
					$perbarang = $ambil->fetch_assoc();

					$nama = $perbarang['nama_barang'];
					$harga = $perbarang['harga_barang'];
					$subhargaa = $perbarang['harga_barang']*$jumlah;
					$koneksi->query("INSERT INTO pembelian_barang 
						VALUES ('', '$id_pembeli_baru', '$kode_barang', '$jumlah', '$nama', '$harga', '$subhargaa')");

					mysqli_query($koneksi, "UPDATE barang SET stok = stok-'$jumlah' WHERE kode_barang = '$kode_barang'");
				}

				unset($_SESSION['keranjangg']);
				//alihkan ke nota

				echo "<script>alert('Suksess');</script>";
				echo "<script>location='views/nota.php?id=$id_pembeli_baru';</script>";
				}
			}

			?>

		</div>
	</section>