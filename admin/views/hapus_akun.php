<?php 
include 'config/koneksi.php';

$ambil = $koneksi->query("SELECT * FROM akun WHERE id_akun='$_GET[id]'");
$data = $ambil->fetch_assoc();


mysqli_query($koneksi, "DELETE FROM akun WHERE id_akun='$_GET[id]'");

echo "<div class='alert alert-info'>Data Terhapus</div>";
echo "<script>location='index.php?page=kelola_akun';</script>";
?>