<?php 
include 'koneksi.php';

// $ambil = $koneksi->query("SELECT * FROM barang WHERE kode_barang='$_GET[id]'");
// $data = $ambil->fetch_assoc();
// $fotobarang = $data['foto_barang'];
// if (file_exists("gambar/$fotobarang")){
// 	unlink("gambar/$fotobarang");
// }

mysqli_query($koneksi, "DELETE FROM barang WHERE kode_barang='$_GET[id]'");

echo "<div class='alert alert-info'>Data Terhapus</div>";
echo "<script>location='index.php?page=produk';</script>";
?>