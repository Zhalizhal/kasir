<?php 
include 'config/koneksi.php';
$totalbarang = mysqli_query($koneksi, "select * from barang");
$countbarang = mysqli_num_rows($totalbarang);

$totalpembelian = mysqli_query($koneksi, "select * from pembelian");
$countpembelian = mysqli_num_rows($totalpembelian);

?>

<style type="text/css">
  .gradasi1 {
    background: linear-gradient(to right, #428bca, #317bbd);
  }

  .gradasi2 {
    background: linear-gradient(to right, #97db63, #70b53c);
  }

  .gradasi3 {
    background: linear-gradient(to right, #ed5858, #c92a2a);
  }
</style>
<div class="row">
  <div class="col-lg-12">
    <h1>Dashboard <small>Admin</small></h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="icon-dashboard"></i> Dashboard</a></li>
    </ol>
  </div>
</div>

</div>

<div class="row">
  <div class="col-lg-12">

   <div class="row"> <!-- <div class="row"> -->

    <div class="col-4 col-md-6">
      
      <div class="card bg-dark text-white animate__animated animate__bounceInLeft">
        <div class="card-body animate__animated animate__bounceInLeft">Data Barang
         <h1 class="announcement-heading"><i class="fas fa-box"></i>
          <?php echo $countbarang; ?></h1></div>
          <div class="card-footer ">
            <a class="btn btn-bg-transparent text-white" data-toggle="modal" data-target="#exampleModal"> Lihat Data</a>
          </div>
        </div>
      </div>
      

      <div class="col-4 col-md-6">
        <div class="card bg-dark text-white  animate__animated animate__bounceInRight">
          <div class="card-body animate__animated animate__bounceInRight">Data Pembelian
           <h1 class="announcement-heading"><i class="fas fa-shopping-cart"></i>
            <?php echo $countpembelian; ?></h1></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="btn btn-bg-transparent text-white" data-toggle="modal" data-target="#pembelian"> Lihat Data</a>
            </div>
          </div>
        </div>


      </div><!-- tutup <div class="row"> -->
      </br>

      <div class="row">
        <div class="col-lg-12">
         <div class="row"> <!-- <div class="row"> -->

          <?php 
$tgl_mulai="";
$tgl_selesai="";
if (isset($_POST["kirim"])) {

  $tgl_mulai = $_POST['tglm'];
  $tgl_selesai = $_POST['tgls'];

  $bytanggal = mysqli_query($koneksi, "SELECT * FROM pembelian WHERE tanggal_pembelian BETWEEN '$tgl_mulai' AND '$tgl_selesai' ORDER BY tanggal_pembelian ");
  // echo "<pre>";
  // print_r($semuadata);
  // echo "</pre>";
}else{
  $bytanggal = mysqli_query($koneksi, "SELECT * FROM pembelian WHERE tanggal_pembelian = tanggal_pembelian ORDER BY tanggal_pembelian DESC LIMIT 10");
}
$pendapatan = mysqli_query($koneksi, "SELECT total_pembelian FROM pembelian ORDER BY tanggal_pembelian DESC");
  ?>
 <div class="col">
            <div class="card border-dark animate__animated animate__bounceInUp">
              <div class="card-header bg-dark">
               <center><strong class="text-white">Chart Total Pembelian</strong></center>
             </div>
             <div class="card-body">
              <form method="post">
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label>Tanggal Mulai</label>
                      <input type="date" class="form-control" name="tglm" value="<?php echo $tgl_mulai; ?>">
                    </div>
                  </div>

                  <div class="col-md-5">
                    <div class="form-group">
                      <label>Tanggal Akhir</label>
                      <input type="date" class="form-control" name="tgls" value="<?php echo $tgl_selesai; ?>">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <label>&nbsp;</label></br>
                    <button class="btn btn-dark" name="kirim">Lihat</button>
                  </div>

                </div>
              </form>
              <canvas id="myChart" width="200" height="80"></canvas>
              <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                    labels: [<?php while ($b = mysqli_fetch_array($bytanggal)) { echo '"' . $b['tanggal_pembelian'] . '",'; } ?>],
                    datasets: [{
                      label: 'Total Pembelian',
                      data: [<?php while ($p = mysqli_fetch_array($pendapatan)) { echo '"' . $p['total_pembelian'] . '",'; } ?>],
                      backgroundColor: [
                      'rgba(255, 99, 132, 0.5)',
                      'rgba(54, 162, 235, 0.5)',
                      'rgba(255, 206, 86, 0.5)',
                      'rgba(75, 192, 192, 0.5)',
                      'rgba(153, 102, 255, 0.5)',
                      'rgba(255, 159, 64, 0.5)',
                      'rgba(255, 99, 132, 0.5)',
                      'rgba(54, 162, 235, 0.5)',
                      'rgba(255, 206, 86, 0.5)',
                      'rgba(75, 192, 192, 0.5)',
                      'rgba(153, 102, 255, 0.5)',
                      'rgba(255, 159, 64, 0.5)',
                      'rgba(255, 99, 132, 0.5)',
                      'rgba(54, 162, 235, 0.5)',
                      'rgba(255, 206, 86, 0.5)',
                      'rgba(75, 192, 192, 0.5)',
                      'rgba(153, 102, 255, 0.5)',
                      'rgba(255, 159, 64, 0.5)',
                      'rgba(255, 99, 132, 0.5)',
                      'rgba(54, 162, 235, 0.5)',
                      'rgba(255, 206, 86, 0.5)',
                      'rgba(75, 192, 192, 0.5)',
                      'rgba(153, 102, 255, 0.5)',
                      'rgba(255, 159, 64, 0.5)',
                      'rgba(255, 99, 132, 0.5)',
                      'rgba(54, 162, 235, 0.5)',
                      'rgba(255, 206, 86, 0.5)',
                      'rgba(75, 192, 192, 0.5)',
                      'rgba(153, 102, 255, 0.5)',
                      'rgba(255, 159, 64, 0.5)',
                      'rgba(255, 99, 132, 0.5)',
                      'rgba(54, 162, 235, 0.5)',
                      'rgba(255, 206, 86, 0.5)',
                      'rgba(75, 192, 192, 0.5)',
                      'rgba(153, 102, 255, 0.5)',
                      'rgba(255, 159, 64, 0.5)',
                      'rgba(255, 99, 132, 0.5)',
                      'rgba(54, 162, 235, 0.5)',
                      'rgba(255, 206, 86, 0.5)',
                      'rgba(75, 192, 192, 0.5)',
                      'rgba(153, 102, 255, 0.5)',
                      'rgba(255, 159, 64, 0.5)',
                      'rgba(255, 99, 132, 0.5)',
                      'rgba(54, 162, 235, 0.5)',
                      'rgba(255, 206, 86, 0.5)',
                      'rgba(75, 192, 192, 0.5)',
                      'rgba(153, 102, 255, 0.5)',
                      'rgba(255, 159, 64, 0.5)',
                      'rgba(255, 99, 132, 0.5)',
                      'rgba(54, 162, 235, 0.5)',
                      'rgba(255, 206, 86, 0.5)',
                      'rgba(75, 192, 192, 0.5)',
                      'rgba(153, 102, 255, 0.5)',
                      'rgba(255, 159, 64, 0.5)',
                      'rgba(255, 99, 132, 0.5)',
                      'rgba(54, 162, 235, 0.5)',
                      'rgba(255, 206, 86, 0.5)',
                      'rgba(75, 192, 192, 0.5)',
                      'rgba(153, 102, 255, 0.5)',
                      'rgba(255, 159, 64, 0.5)'
                      ],
                      borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                      ],
                      borderWidth: 1
                    }]
                  },
                  options: {
                    scales: {
                      yAxes: [{
                        ticks: {
                          beginAtZero: true
                        }
                      }]
                    }
                  }
                });
              </script>
            </div>
          </div>
        </div>


      </div><!-- tutup <div class="row"> -->




        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <table class="table" id="dataTable">
                  <tr>
                    <th>No.</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                  </tr>
                  <?php
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from barang");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?>.</td>
                      <td><?php echo $d['kode_barang']; ?></td>
                      <td><?php echo $d['nama_barang']; ?></td>
                      <td><?php echo $d['harga_barang']; ?></td>
                    </td>
                  </tr>
                  <?php 
                }
                ?>
              </table>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>

      <!-- Akhir Div Modal -->


      <!-- Modal -->
        <div class="modal fade" id="pembelian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <table class="table" id="dataTable">
                  <tr>
                    <th>No.</th>
                    <th>Tanggal Pembelian</th>
                    <th>Total Pembelian</th>
                  </tr>
                  <?php
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from pembelian");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?>.</td>
                      <td><?php echo $d['tanggal_pembelian']; ?></td>
                      <td><?php echo $d['total_pembelian']; ?></td>
                    </td>
                  </tr>
                  <?php 
                }
                ?>
              </table>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>

      <!-- Akhir Div Modal -->

    </div>
  </div>

  <br>