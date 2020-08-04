<?php 
include 'config/koneksi.php';
$semuadata=array();



$pencarian = mysqli_query($koneksi, "SELECT * FROM barang JOIN kategori ON barang.id_kategori=kategori.id_kategori ");
while($d = mysqli_fetch_array($pencarian)) 
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
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="?page=kasir"><i class="icon-dashboard "></i> Kasir</a></li>
			</ol>
		</nav>
	</div>
</div>

<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-md-7">
				<div class="card shadow">

					<div class="card-header">
						<h1>Data Barang</h1>
					</div>

					<div class="card-body shadow">
						<p>Keterangan Stok : </p>
						<label class="bg-warning">&ensp;Menipis&ensp;</label>
						<label class="bg-danger">&ensp;Habis&ensp;</label>
						<form method="get" action="config/beli.php" class="form-group">
							<input autofocus="" onkeyup="this.value = this.value.toUpperCase()" required type="" class="form-control" name="id" placeholder="Masukan Kode Barang.." autocomplete="ON">
						</form>
						<div class="table-responsive">
							<table class="table table-striped " width="100%" cellspacing="0" id="dataTable">
								<thead >
									<tr>
										<th>Kode Barang</th>
										<th>Nama Barang</th>
										<th>Harga</th>
										<th>Kategori</th>
										<th>Stok</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<?php
								foreach ($semuadata as $key => $value) {
									?>
									<tr>

										<?php 
										if (empty($value['stok'])) { ?>
											<td class='td-kosong text-white'><?php echo $value['kode_barang']; ?></td>
											<td class='td-kosong text-white'><?php echo $value['nama_barang']; ?></td>
											<td class='td-kosong text-white'>Rp. <?php echo number_format($value['harga_barang']); ?></td>
											<td class='td-kosong text-white'><?php echo $value['nama_kategori']; ?></td>
											<td class='td-kosong text-white'>Stok Kosong</td>
											<td class='td-kosong text-white'>Stok Kosong</a></td>
										<?php }elseif($value['stok']<10){ ?>
											<td class='td-tipis'><?php echo $value['kode_barang']; ?></td>
											<td class='td-tipis'><?php echo $value['nama_barang']; ?></td>
											<td class='td-tipis'>Rp. <?php echo number_format($value['harga_barang']); ?></td>
											<td class='td-tipis'><?php echo $value['nama_kategori']; ?></td>
											<td class='td-tipis'><?php echo $value['stok']; ?></td>
											<td class='td-tipis'><a href="config/beli.php?id=<?php echo $value['kode_barang']; ?>"><button class="btn btn-warning">Beli</button></a></td>
										<?php }else{ ?>
											<td><?php echo $value['kode_barang']; ?></td>		
											<td><?php echo $value['nama_barang']; ?></td>
											<td>Rp. <?php echo number_format($value['harga_barang']); ?></td>
											<td><?php echo $value['nama_kategori']; ?></td>
											<td><?php echo $value['stok']; ?></td>
											<td><a href="config/beli.php?id=<?php echo $value['kode_barang']; ?>"><button class="btn btn-warning">Beli</button></a></td>

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

			<div class="col-md-5">
				<section>
					<div class="card shadow">
						<div class="card-header">
							<h1><i class="fas fa-shopping-cart"></i> Keranjang Belanja</h1></div>


							<div class="card-body shadow">
								<?php

								if (empty($_SESSION['keranjangg'])) {

								}elseif (isset($_POST['reset'])) {
									unset($_SESSION['keranjangg']); 
								}
								else { ?>
									<div class="table-responsive">
										<form method="post">
											<button name="reset" class="btn btn-danger mt-2 mb-3 mr-3" style="float: right;"><i class="fas fa-trash"></i> Hapus Data Keranjang</button>
										</form>

										<table class="table table-bordered" id="dataTable">
											<thead>
												<tr>
													<th>No. </th>
													<th>Barang</th>
													<!-- <th>Harga</th> -->
													<th>Jumlah</th>
													<!-- <th>Subharga</th> -->
													<th>Aksi</th>
												</tr>
											</thead>
											<?php
											$no = 1; 
											foreach ($_SESSION['keranjangg'] as $kode_barang => $jumlah) {
												$ambil = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode_barang='$kode_barang' ");
												$pecah = $ambil->fetch_assoc();
												$subharga = $pecah['harga_barang']*$jumlah;
												?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo $pecah['nama_barang']; ?></td>
													<!-- <td>Rp. <?php echo number_format($pecah['harga_barang']); ?></td> -->
													<td><?php echo $jumlah; ?></td>
													<!-- <td>Rp. <?php echo number_format($subharga); ?></td> -->
													<td><a href="config/beli.php?id=<?php echo $pecah['kode_barang']; ?>" class="btn btn-primary"><i class="fas fa-plus"></i></a>

														<?php if ($jumlah==1) { ?>
															<a href="config/hapusdatakeranjang.php?id=<?php echo $pecah['kode_barang']; ?>" class="btn btn-danger"><i class="fas fa-minus"></i></a>
														<?php }else{ ?> 
															<a href="config/kurangi.php?id=<?php echo $pecah['kode_barang']; ?>" class="btn btn-danger"><i class="fas fa-minus"></i></a> <?php }?>
															<!-- <a href="config/hapusdatakeranjang.php?id=<?php echo $pecah['kode_barang']; ?>" class="btn btn-danger"><i class="fas fa-user fa-trash"></i></a> -->
														</td>
													</tr>
													<?php
												}
												include 'checkout.php';

												?>
												
											</table>
										</div>
										<!-- <a href="index.php?page=checkout" class="btn btn-primary">Checkout</a> -->
										<?php }  ?>
									</div>
									</div>


								</section>

							</div>

						</div>






					</div>
				</div>
			</br>