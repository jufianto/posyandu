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
          Penyuluhan
        </h1>
        <ol class="breadcrumb">
          <li class="active">
            <i class="fa fa-dashboard"></i>  <a href="bumil.php">Dashboard</a>
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

              <form role="form" action="proBumil.php?action=updatepen" method="post">
               <input type="hidden" name="id" value="<?=$id_bumil ?>">
             <label>
                <input type="checkbox" name="tekanan" value="1" <?= $stmt->tekanan == 1 ? 'checked' : ''; ?> >  Tekanan Darah Tinggi atau Pre-eklampsia
              </label><br>

               <label>
                <input type="checkbox" name="darah" value="1" <?= $stmt->darah == 1 ? 'checked' : ''; ?> >  Perdarahan
              </label><br>

               <label>
                <input type="checkbox" name="hipertensi" value="1" <?= $stmt->hipertensi == 1 ? 'checked' : ''; ?> > Hipertensi
              </label><br>
            
                <p><Button class="btn btn-primary btn-xl page-scroll">Simpan</Button></p>
              
            </form>
           
        </div>
      </div>
    </div>

<?php if($stmt->tekanan == 1) { ?>
  <div class="col-md-6">

    <div class="panel panel-primary">
      <div class="panel-heading">
       Tekanan Darah Tinggi atau Pre-eklampsia
      </div>

      <div class="panel-body">
      <ul>
        <li>Diet yang tepat dan sesuai.</li>
        <p>Karena penyebab pastinya belum diketahui, maka pencegahan utama yang baik adalah meminta ibu hamil untuk mengurangi konsumsi garam, meski dianggap tidak efektif menurunkan risiko preeklamsia. Diet yang dianjurkan cukup protein, rendah karbohidraat, lemak dan garam.</p>
        <li>Periksalah kehamilan secara teratur, untuk mengetahui kondisi ibu dan janin. Preklamsia yang terdiagnosa lebih awal, akan memudahkan dokter menyarankan terapi yang tepat untuk ibu dan janinnya.
}
</li>
      </ul>
      </div>
    </div>
  </div>
  <?php } ?>
</div>

<!-- awal row -->

  <div class="row">
<?php if($stmt->darah == 1) { ?>

      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
           Perdarahan
          </div>

          <div class="panel-body">
       <ul>
         <li>Hindari melakukan aktifitas berat, karena dengan mengerjakan sesuatu yang berat dapat mengakibatkan pendarahan. </li>
         <li>Bagi para ibu hamil muda yang mengalaminya posisikan diri anda berbaring dengan tenang, posisikan kaki lebih tinggi daripada badan supaya pendarahan dapat berkurang.</li>
         <li>Berikan waktu cukup untuk mengistirahatkan tubuh anda sampai pendarahan itu dapat berkurang.</li>
       </ul>


        </div>
      </div>
    </div>
      <?php } ?>
<?php if($stmt->hipertensi == 1) { ?>
  <div class="col-md-6">

      <div class="panel panel-primary">
      <div class="panel-heading">
        Hipertensi
      </div>

      <div class="panel-body">

      <ul>
        <li> Jangan Terlalu Banyak Konsumsi Garam</li>
        <li>Hindari Stres</li>
        <p>Jangan terlalu banyak tekanan dan stres karena hal ini akan memicu naiknya tekanan darah. </p>
        <li>Minuman Ramuan Obat Tradisional</li>
        <p>Ibu hamil minum ramuan obat tradisional untuk menurunkan tekanan darah tinggi dari segelas air hangat matang dicampur dengan 1 sendok madu + 1 sendok jahe + 1 sdt bubuk jinten. Minum obat ramuan herbal ini setidaknya 2 kali per hari untuk mengobati hipertensi.</p>
      </ul>


      </div>
    </div>


  </div>


 <?php } ?>
</div>



</div>

</div>
</div>


<?php include "../template/footer.php"; ?>
