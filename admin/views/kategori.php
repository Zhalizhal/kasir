<?php 
include 'config/koneksi.php';
?>
<div class="row">
	<div class="col-lg-12">
		<h1>Data Kategori</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Data Kategori</li>
			</ol>
		</nav>
	</div>
</div>
<style type="text/css">
	.table .thead-dark th {
		color: #fff;
		background-color: #343a40;
		border-color: #454d55;
	}
	.f {

		float: right;

	}
</style>
<!-- /.row -->
<div class="row">
	<div class="col">
		<a href="index.php?page=tambahkategori"><button class="btn btn-primary f">Tambah Data Kategori</button></a>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<br/>

		<table class="table table-bordered animate__animated animate__slideInUp" id="dataTable"  width="100%" cellspacing="0">
			<thead class="thead-dark">
				<tr>
					<th>ID kategori</th>
					<th>Nama Kategori</th>
					<th align="right">Aksi</th>
				</tr>
			</thead>
			<?php
			
			$sql="select * from kategori order by id_kategori ASC ";
			$hasil=mysqli_query($koneksi,$sql);
			while ($data = mysqli_fetch_array($hasil)) {
				?>
				
				<tr>
					<td width="8%" align="center"><?php echo $data["id_kategori"]; ?></td>
					<td><?php echo $data["nama_kategori"];   ?></td>
					<td width="20%" align="center">
						<a href="index.php?page=lihatkategori&id=<?php echo $data['id_kategori']; ?>"><button class="btn btn-info">Lihat Produk</button></a>
						<a href="index.php?page=editkategori&id=<?php echo $data['id_kategori']; ?>"><button class="btn btn-warning">Edit</button></a>
						<a href="index.php?page=hapuskategori&id=<?php echo $data['id_kategori']; ?>"><button class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">Hapus</button></a>
					</td>
				</tr>
				
				<?php
				
			}
			?>
		</table>
		<hr>
		
	</div>
</div>
</div>