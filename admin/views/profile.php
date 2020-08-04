<div class="row">
	<div class="col-lg-12">
		<h1>Profil</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="icon-dashboard"></i> Profile</a></li>
		</ol>
	</div>
</div>
		<?php
		include 'config/koneksi.php';

		$profile = $koneksi->query("select * from akun where username='$_SESSION[username]' ");
		$detail = $profile->fetch_assoc();
		?>

		<form method="post" enctype="multipart/form-data">

			<div class="form-group">
				<input type="hidden" disabled="" name="kode_barang" class="form-control">
			</div>
			<div class="form-group">
				<center><img src="gambar/profil/<?php echo $detail['foto_profil']; ?>" width="200"></center>
			</div>
			<div class="form-group">
				<label>Nama</label>
				<p type="text" readonly class="text" value="" ><?php echo $detail['nama']; ?></p>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" disabled="" class="form-control" value="<?php echo $detail['username']; ?>">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" disabled="" class="form-control" value="<?php echo $detail['password']; ?>">
			</div>
		</form>
		<a href="index.php?page=editprofile&id=<?php echo $detail['id_akun']; ?>" ><button class="btn btn-warning">Edit</button></a>
		<a href="index.php?page=editakun&id=<?php echo $detail['id_akun']; ?>" ><button class="btn btn-warning">Edit Akun</button></a>
	</div>
</div>