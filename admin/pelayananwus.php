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

$id_wus = $_REQUEST['id'];
$sql = "select * from wupus where id_wus = $id_wus";
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
            <i class="fa fa-dashboard"></i>  <a href="wuspus.php">Dashboard</a>
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


          <form role="form" action="proWuspus.php?action=updatePel" method="post">


        <div class="panel panel-primary">
          <div class="panel-heading">
            Pelayanan Kesehatan
          </div>

          <div class="panel-body">
          <input type="hidden" name="id" value="<?=$id_wus ?>">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="pembalut" value="1" <?= $stmt->pembalut == 1 ? 'checked' : ''; ?> >Pembagian Pembalut Gratis
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="suntik_kb" value="1" <?= $stmt->suntik_kb == 1 ? 'checked' : ''; ?> >Pengobatan Rigan (Suntik KB)
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="pilkb" value="1" <?= $stmt->pilkb == 1 ? 'checked' : ''; ?> >Pemberian PIL KB
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="vitamin" value="1" <?= $stmt->vitamin == 1 ? 'checked' : ''; ?> >Pemberian Vitamin
              </label><br>
              <label>
                <input type="checkbox" name="tambah_darah" value="1" <?= $stmt->tambah_darah == 1 ? 'checked' : ''; ?> >Pemberian Tablet Tambah Darah 
              </label><br>
              <label>
                <input type="checkbox" name="konsul" value="1" <?= $stmt->konsul == 1 ? 'checked' : ''; ?> >Konsultasi KB
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
