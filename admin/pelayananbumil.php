<?php
require_once "../config.php";
require_once "funcadmin.php";
ceklogin();

include "../template/header.php";
include "../template/menu.php";



// $bulan = isset($_REQUEST['bulan']) ? $_REQUEST['bulan'] : '' ;
// $tahun = isset($_REQUEST['tahun'])? $_REQUEST['tahun'] : '';
// $sql = "select sum(total_harga) as total from pemesanan WHERE tgl_pemesanan BETWEEN '$tahun-$bulan-01 00:00:01 ' and '$tahun-$bulan-31 23:59:59'; ";
// $que = $conn->prepare($sql);
// $que->execute();
// // $que->setFetchMode(PDO::FETCH_OBJ);
// $stmt = $que->fetch(PDO::FETCH_NUM);
// // var_dump($stmt);
// $pemasukan = $stmt['0'];

// $sql1 = "select sum(total_harga) as total from barang WHERE tgl_input BETWEEN '$tahun-$bulan-01 00:00:01 ' and '$tahun-$bulan-31 23:59:59'; ";
// $que1 = $conn->prepare($sql1);
// $que1->execute();
// $stmt1 = $que1->fetch(PDO::FETCH_NUM);
// $pengeluaran = $stmt1['0'];

// $sql = "select * from pelanggan";
// $stmt = getData($sql,$conn);
// $pelanggan = count($stmt);

// $sqlor = "select * from pemesanan";
// $stmt1 = getData($sqlor,$conn);
// $order = count($stmt1);

$id_bumil = $_REQUEST['id'];
$sql = "select * from bumil where id_bumil = $id_bumil";
$que = $conn->prepare($sql);
$que->execute();
$que->setFetchMode(PDO::FETCH_OBJ);
$stmt = $que->fetch();

?>
<style type="text/css">
  .container{
    min-height: 800px;
  }
</style>

<div id="page-wrapper">
  <div class="container">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-header">
          Pelayanan Kesehatan
        </h1>
        <ol class="breadcrumb">
          <li class="active">
            <i class="fa fa-dashboard"></i>  <a href="bumil.php">Dashboard</a>
          </li>
          <li class="active">
            <i class="fa fa-table"></i> Pelayanan Kesehatan
          </li>
        </ol>
      </div>
    </div>



    <div class="row">
      <div class="col-md-12">

      </div>
    </div>

    <div class="row">
      <div class="col-md-6">


          <form role="form" action="proBumil.php?action=updatePel" method="post">


        <div class="panel panel-primary">
          <div class="panel-heading">
            Pelayanan Kesehatan
          </div>

          <div class="panel-body">
          <input type="hidden" name="id" value="<?=$id_bumil ?>">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="cekhamil" value="1" <?= $stmt->cekhamil == 1 ? 'checked' : ''; ?> >Pemeriksaan Kehamilan
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="pmt" value="1" <?= $stmt->pmt == 1 ? 'checked' : ''; ?> >PMT
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="tablet" value="1" <?= $stmt->tablet == 1 ? 'checked' : ''; ?> >Tablet Tambah Darah
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="tetanus" value="1" <?= $stmt->tetanus == 1 ? 'checked' : ''; ?> >Imunisasi Tetanus Toxoid
              </label><br>
        
              <label>
                <input type="checkbox" name="vita" value="1" <?= $stmt->vita == 1 ? 'checked' : ''; ?> >Vitamin A
              </label><br>
            </div>

          </div>


           &nbsp;&nbsp; <Button class="btn btn-primary btn-xl page-scroll">Simpan</Button><br>

          <br>
        </div>



      </div>





    </div>

  </div>
</div>


<?php include "../template/footer.php"; ?>
