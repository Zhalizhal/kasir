<?php 
session_start();
$kode_barang = $_GET['id'];
unset($_SESSION['keranjangg'][$kode_barang]);

echo "<script>location='../index.php?page=kasir';</script>";

 ?>