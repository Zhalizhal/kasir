<?php 
include 'config/koneksi.php';

$ambil = $koneksi->query("SELECT * FROM kategori WHERE id_kategori='$_GET[id]'");
$data = $ambil->fetch_assoc();


mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$_GET[id]'");

echo "<div class='alert alert-info'>Data Terhapus</div>";
echo "<script>location='index.php?page=kategori';</script>";
?>