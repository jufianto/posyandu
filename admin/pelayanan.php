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

$id_bayi = $_REQUEST['id'];
$sql = "select * from bayi where id_bayi = $id_bayi";
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
            <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
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


          <form role="form" action="proBayi.php?action=updatePel" method="post">


        <div class="panel panel-primary">
          <div class="panel-heading">
            Paket Pertolongan Gizi
          </div>

          <div class="panel-body">
          <input type="hidden" name="id" value="<?=$id_bayi ?>">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="vit_a" value="1" <?= $stmt->vit_a == 1 ? 'checked' : ''; ?> >Vitamin A
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="mp_asi" value="1" <?= $stmt->mp_asi == 1 ? 'checked' : ''; ?> >MP ASI
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="pmt" value="1" <?= $stmt->pmt == 1 ? 'checked' : ''; ?> >PMT
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="tablet_besi" value="1" <?= $stmt->tablet_besi == 1 ? 'checked' : ''; ?> >Tablet Besi
              </label>
            </div>

          </div>


           &nbsp;&nbsp; <Button class="btn btn-primary btn-xl page-scroll">Simpan</Button><br>

          <br>
        </div>



      </div>


      <div class="col-md-6">




        <div class="panel panel-primary">
          <div class="panel-heading">
            Imunisasi
          </div>

          <div class="panel-body">

            <div class="checkbox">
              <label>
                <input type="checkbox" name="hepatitis_b" value="1" <?= $stmt->hepatitis_b == 1 ? 'checked' : ''; ?> >Hepatitis B
              </label>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="poso" value="1" <?= $stmt->poso == 1 ? 'checked' : ''; ?> >POSO
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="dtp" value="1" <?= $stmt->dtp == 1 ? 'checked' : ''; ?> >DTP
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="campak" value="1" <?= $stmt->campak == 1 ? 'checked' : ''; ?> >Campak
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="hib" value="1" <?= $stmt->hib == 1 ? 'checked' : ''; ?> >HIB
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="rotavirus" value="1" <?= $stmt->rotavirus == 1 ? 'checked' : ''; ?> >Rotavirus
              </label>
            </div>

          </form>
          </div>
        </div>



      </div>



    </div>

  </div>
</div>


<?php include "../template/footer.php"; ?>
