<?php 
include 'koneksi.php';

	$daftar = mysqli_query($koneksi, "INSERT INTO akun (id_akun, nama)
		VALUES (NULL, '$_POST[nama]'");

	echo "<div class='alert alert-info'>Akun Terdaftar Silahkan Login</div>";
	header("location:../../login.php?pesan=gagal");


?>