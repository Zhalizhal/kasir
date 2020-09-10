<?php 


if (isset($_POST['hitung'])) {
	$bil1 = $_POST['bil1'];
	$bil2 = $_POST['bil2'];
	$operasi = $_POST['operasi'];

	if (empty($bil1 || $bil2)) {
	}else{

		switch ($operasi) {
			case 'tambah':
			$hasil = $bil1 + $bil2;
			break;

			case 'kurang':
			$hasil = $bil1 - $bil2;
			break;

			case 'kali':
			$hasil = $bil1 * $bil2;
			break;

			case 'bagi':
			$hasil = $bil1 / $bil2;
			break;

			default:
			# code...
			break;
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
</head>
<body>
	<div class="row">
		<div class="col-lg-12">
			<h2 class="h2">Kalkulator</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">Kalkulator</li>
				</ol>
			</nav>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="container">
				<div class="card">
					<div class="card-header"><h1>Kalkulator</h1></div>
					<div class="card-body">
						<form method="post">

							<div class="form-group">
								<input type="number" name="bil1" class="form-control" value="<?php echo $bil1; ?>" placeholder="Masukkan angka pertama..">
							</div>

							<div class="form-group">
								<input type="number" name="bil2" class="form-control" value="<?php echo $bil2; ?>" placeholder="Masukkan angka kedua..">
							</div>

							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<select name="operasi" class="form-control">
											<option value="tambah">+</option>
											<option value="kurang">-</option>
											<option value="kali">X</option>
											<option value="bagi">/</option>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<button type="submit" name="hitung" class="btn btn-primary" style="width: 100%;">Hitung</button>
								</div>
							</div>

							<div class="form-group">
								<input type="number" class="form-control" name="hasil" value="<?php echo $hasil ?>" placeholder="Hasil..">
							</div>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>