<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from akun where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$row = mysqli_fetch_assoc($login);
	$_SESSION["username"]=$row["username"];
	$_SESSION["foto_profil"]=$row["foto_profil"];
	$_SESSION["nama"]=$row["nama"];
	$_SESSION["password"]=$row["password"];
	$_SESSION["level"]=$row["level"];
	

	// cek jika user login sebagai admin
	if($_SESSION['level']=$row['level']=='admin'){

		// buat session login dan username
		$_SESSION["level"]="admin";
		
		// alihkan ke halaman dashboard admin
		header("location:../index.php");

	// cek jika user login sebagai pegawai
	}
	else{

		// alihkan ke halaman login kembali
		header("location:../../login.php?pesan=gagal");
	}	
}

else{
	header("location:../../login.php?pesan=gagal");
}

?>