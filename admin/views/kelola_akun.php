<?php 
include 'config/koneksi.php';
$semuadata=array();
$dataakun = mysqli_query($koneksi, "SELECT * FROM akun ");
while($d = mysqli_fetch_array($dataakun)) 
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
		<h1>Data Akun Pegawai</h1>
		<ol class="breadcrumb">
			<li><a href="?page=produk"><i class="icon-dashboard"></i> Data Akun Pegawai</a></li>
		</ol>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<br/>
		<div class="table-responsive animate__animated animate__slideInUp">
			<a href="index.php?page=tambah_akun" ><button class="btn btn-primary">Tambah Akun</button></a><hr>
			<table class="table table-bordered " id="dataTable"  width="100%" cellspacing="0">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Password</th>
						<th>level</th>
						<!-- <th>Foto</th> -->
						<th>Aksi</th>
					</tr>
				</thead>
				<?php
			
			$sql="SELECT * FROM akun order by id_akun ASC ";
			$hasil=mysqli_query($koneksi,$sql);
			while ($data = mysqli_fetch_array($hasil)) {
				?>
				
				<tr>
					<td width="8%" align="center"><?php echo $data["id_akun"]; ?></td>
					<td><?php echo $data["nama"];   ?></td>
					<td><?php echo $data["username"];   ?></td>
					<td><?php echo $data["password"];   ?></td>
					<td><?php echo $data["level"];   ?></td>
					<!-- <td><?php echo $data["foto_profil"];   ?></td>-->
					
					<td width="20%" align="center">

					<?php 
						if($data['username']==$_SESSION['username']){
							echo "<strong>ini Akun Anda</strong>";
						}else{ ?>
<a href="index.php?page=edit_akun&id=<?php echo $data['id_akun']; ?>"><button class="btn btn-warning">Edit</button></a>

<a href="index.php?page=hapus_akun&id=<?php echo $data['id_akun']; ?>"><button class="btn btn-danger"  onclick="return confirm('Yakin Hapus?')">Hapus</button></a>					
						<?php } ?>
					</td>
				</tr>
				
				<?php
				
			}
			?>
						</table>
					</div>
				</div>

			</div>
		</div>