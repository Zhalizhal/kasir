<?php 
session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']=="user" || $_SESSION['level']==""){
	header("location:../login.php");
	exit();
}

$username = $_SESSION["username"];
$nama = $_SESSION["nama"];
$foto = $_SESSION["foto_profil"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>NOURA FAMILY</title>
	<link href="css/styles.css" rel="stylesheet" />
	<link href="assets/DataTables/datatables.min.css" rel="stylesheet" crossorigin="anonymous" />
	<script src="assets/fontawesome-free-5.13.0-web/js/all.min.js"></script>
	<script type="text/javascript" src="chart/dist/Chart.min.js"></script>

	<style type="text/css">

		.avatar {
			width: auto;
			height: auto;
			border-radius: 50%;
		}
		</style>
	</head>
	<body class="sb-nav-fixed">
		<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
			<a class="navbar-brand" href="index.php">NOURA FAMILY</a>
			<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
				<i class="fas fa-bars"></i>
			</button>
			<!-- Navbar-->
			<ul class="navbar-nav ml-auto text-white">

				<li class="nav-item dropdown">

					<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user fa-fw"></i><?php echo $nama; ?> <b class="caret"></b></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
							<a class="dropdown-item" href="?page=profile">Profile</a>
							<a class="dropdown-item" href="config/logout.php">Logout</a>
						</div>
					</li>
				</ul>
			</nav>

			<div id="layoutSidenav">
				<div id="layoutSidenav_nav">
					<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
						<div class="sb-sidenav-menu">
							<div class="nav">
								<br/>
								<center><!-- <img src="gambar/profil/<?php echo $foto; ?>" class="avatar fadeIn" style="width:50%;"> -->
									<br>
									<div class="sb-sidenav-menu mt-3"></i><?php echo $nama; ?></div></center><br>

									<a class="nav-link" href="?page=dashboard">
										<div class="sb-nav-link-icon">
											<i class="fas fa-tachometer-alt "></i></div>Dashboard</a>

											<!-- <a class="nav-link" href="?page=kasir">
												<div class="sb-nav-link-icon">
													<i class="fas fa-cash-register"></i></div>Kasir</a>-->
															<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
																<div class="sb-nav-link-icon">
																	<i class="fas fa-table"></i></div>Data
																	<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
																	<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
																		<nav class="sb-sidenav-menu-nested nav">
																			<a class="nav-link" href="?page=produk"><i class="fas fa-box"></i>&ensp;Produk</a>
																			<a class="nav-link" href="?page=kategori"><i class="fas fa-list-alt"></i>&ensp;Kategori</a>
																			<a class="nav-link" href="?page=pembelian"><i class="fas fa-shopping-cart"></i>&ensp;Penjualan</a>
																		</nav>
																	</div>

																	

																	<a class="nav-link" href="?page=kelola_akun">
																		<div class="sb-nav-link-icon">
																			<i class="fas fa-user"></i></div>Kelola akun</a>
																			
																	<a class="nav-link" href="?page=laporan">
																		<div class="sb-nav-link-icon">
																			<i class="fas fa-file"></i></div>Laporan</a>
																		</div>
																	</div>
																	<div class="sb-sidenav-footer">
																		<div class="small">Logged in as:</div>
																		<?php echo $_SESSION['level']; ?>
																	</div>
																</nav>
															</div>
															<div id="layoutSidenav_content">
																<main>
																	<div class="container-fluid">
																		<div id="page-wrapper">

																			<?php
																			if(@$_GET['page'] == 'dashboard' || @$_GET['page'] == ''){
																				include "views/dashboard.php";
																			} 
																			else if (@$_GET['page'] == 'produk') {
																				include "views/produk.php";
																			} 
																			else if (@$_GET['page'] == 'kategori') {
																				include "views/kategori.php";
																			} 
																			else if (@$_GET['page'] == 'pembelian') {
																				include "views/pembelian.php";
																			}
																			else if (@$_GET['page'] == 'detail') {
																				include "views/detail.php";
																			}
																			else if (@$_GET['page'] == 'tambahproduk') {
																				include "views/tambahproduk.php";
																			}
																			else if (@$_GET['page'] == 'hapusproduk') {
																				include "config/hapusproduk.php";
																			}
																			else if (@$_GET['page'] == 'editproduk') {
																				include "config/editproduk.php";
																			}
																			else if (@$_GET['page'] == 'editprofile') {
																				include "config/editprofile.php";
																			}
																			else if (@$_GET['page'] == 'editakun') {
																				include "config/editakun.php";
																			}
																			else if (@$_GET['page'] == 'profile') {
																				include "views/profile.php";
																			}
																			else if (@$_GET['page'] == 'laporan') {
																				include "views/laporan.php";
																			}
																			else if (@$_GET['page'] == 'kasir') {
																				include "views/kasir.php";
																			}
																			else if (@$_GET['page'] == 'checkout') {
																				include "views/checkout.php";
																			}
																			else if (@$_GET['page'] == 'kalkulator') {
																				include "views/kalkulator.php";
																			}
																			else if (@$_GET['page'] == 'editkategori') {
																				include "views/edit_kategori.php";
																			}
																			else if (@$_GET['page'] == 'hapuskategori') {
																				include "views/hapus_kategori.php";
																			}
																			else if (@$_GET['page'] == 'tambahkategori') {
																				include "views/tambah_kategori.php";
																			}
																			else if (@$_GET['page'] == 'lihatkategori') {
																				include "views/lihat_kategori.php";
																			}
																			else if (@$_GET['page'] == 'kelola_akun') {
																				include "views/kelola_akun.php";
																			}
																			else if (@$_GET['page'] == 'edit_akun') {
																				include "views/edit_akun.php";
																			}
																			else if (@$_GET['page'] == 'hapus_akun') {
																				include "views/hapus_akun.php";
																			}
																			else if (@$_GET['page'] == 'tambah_akun') {
																				include "views/tambah_akun.php";
																			}
																			?>   

																		</div><!-- /#page-wrapper -->

																	</div><!-- /#wrapper -->
																</div>
															</main>

														</div>
													</div>
	<script src="assets/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
	<script src="assets/bootsrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

	<script src="js/scripts.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
	<script src="assets/demo/chart-area-demo.js"></script>
	<script src="assets/demo/chart-bar-demo.js"></script>

	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
	<script src="assets/demo/datatables-demo.js"></script>
</body>
</html>
