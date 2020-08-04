<?php 
session_start();

$kode_barang = $_GET['id'];

if (isset($_SESSION['keranjangg'][$kode_barang])) 
{
	$_SESSION['keranjangg'][$kode_barang]-=1;
}
else
{
	$_SESSION['keranjangg'][$kode_barang]=1;
}

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
echo "<script>location='../index.php?page=kasir';</script>";

?>