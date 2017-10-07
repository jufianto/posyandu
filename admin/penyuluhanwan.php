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
          Penyuluhan
        </h1>
        <ol class="breadcrumb">
          <li class="active">
            <i class="fa fa-dashboard"></i>  <a href="wuspus.php">Dashboard</a>
          </li>
          <li class="active">
            <i class="fa fa-table"></i> Penyuluhan
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
        <div class="panel panel-primary">
          <div class="panel-heading">
            Penyuluhan
          </div>

          <div class="panel-body">

              <form role="form" action="proWuspus.php?action=updatepen" method="post">
               <input type="hidden" name="id" value="<?=$id_wus ?>">
             <label>
                <input type="checkbox" name="personal" value="1" <?= $stmt->personal == 1 ? 'checked' : ''; ?> >  Personal Hygiene
              </label><br>

               <label>
                <input type="checkbox" name="gizi" value="1" <?= $stmt->gizi == 1 ? 'checked' : ''; ?> >  Gizi
              </label><br>

               <label>
                <input type="checkbox" name="masalah" value="1" <?= $stmt->masalah == 1 ? 'checked' : ''; ?> >  Masalah Reproduksi
              </label><br>
               <label>
                <input type="checkbox" name="gangguan" value="1" <?= $stmt->gangguan == 1 ? 'checked' : ''; ?> >  Gangguan Kesehatan Lainnya
              </label>
                <p><Button class="btn btn-primary btn-xl page-scroll">Simpan</Button></p>
              
            </form>
           
        </div>
      </div>
    </div>

<?php if($stmt->personal == 1){ ?>


  <div class="col-md-6">

    <div class="panel panel-primary">
      <div class="panel-heading">
       Personal Hygiene
      </div>

      <div class="panel-body">
      <p>
       mandi 2x sehari, ganti pakaian dalam setia hari, ganti pembalut maksimal tiap 6 jam, hindari penggunaan, cairan pembersih kewanitaan
      </p>

       <p>pelayanan kesehatannya : pembagian pembalut gratis

          </p>
      </div>
    </div>
  </div>
 <?php } ?>
</div>

<!-- awal row -->

  <div class="row">
  <?php if($stmt->gizi == 1){ ?>
      <div class="col-md-4">
        <div class="panel panel-primary">
          <div class="panel-heading">
           Gizi
          </div>

          <div class="panel-body">
          <p>
            diet tinggi serat dan kacang-kacangan/kecambah banyak minum air putih) </p>
            <p>pelayanan kesehatannya : konsultasi kesehatan

          </p>


        </div>
      </div>
    </div>
<?php } ?>
<?php if($stmt->masalah == 1){ ?>
  <div class="col-md-4">
      <div class="panel panel-primary">
      <div class="panel-heading">
        Masalah Reproduksi
      </div>

      <div class="panel-body">

      <p> pelayanan kesehatan : konsultasi dan pengobatan ringan (suntik KB)</p>

      </div>
    </div>


  </div>
  <?php } ?>
<?php if($stmt->gangguan == 1){ ?>

    <div class="col-md-4">

      <div class="panel panel-primary">
      <div class="panel-heading">
        Gangguan Kesehatan Lainnya
      </div>

      <div class="panel-body">

      <p> pemberian tablet tambah darah, vitamin, dan konsultasi kb-kesehatan</p>

      </div>
    </div>


  </div>
  
 <?php } ?>
</div>



</div>

</div>
</div>


<?php include "../template/footer.php"; ?>
