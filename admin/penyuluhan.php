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
          Penyuluhan
        </h1>
        <ol class="breadcrumb">
          <li class="active">
            <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
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


            <div class="table-responsive" style="margin-top:20px">
              <table class="table table-hover">
               <tr>
                <td>Berat Badan Saat Ini</td>
                <td><?= $stmt->berat_badan ?></td>
              </tr>
              <form role="form" action="proBayi.php?action=updateBB" method="post">
               <input type="hidden" name="id" value="<?=$id_bayi ?>">
               <tr>
                <td>Berat Badan Ideal</td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="bb_ideal" <?= $stmt->bb_ideal == 2 ? 'checked' : ''; ?> value="2">Ideal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="bb_ideal" <?= $stmt->bb_ideal == 1 ? 'checked' : ''; ?>  value="1">Kurang Ideal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="bb_ideal" <?= $stmt->bb_ideal == 0 ? 'checked' : ''; ?>  value="0">Tidak Ideal
                  </label>


                </td>
              </tr>
              <tr>
                <td></td>
                <td><Button class="btn btn-primary btn-xl page-scroll">Simpan</Button></td>
              </tr>
            </form>
            </table>
          </div>
        </div>
      </div>
    </div>
<?php if($stmt->bb_ideal == 0){ ?>


  <div class="col-md-6">

    <div class="panel panel-primary">
      <div class="panel-heading">
        Penyuluhan untuk berat badan anak diatas normal (obesitas)
      </div>

      <div class="panel-body">
      <ol>
        <li>Langkah pertama yang harus dilakukan orangtua adalah menyesuaikan kalori dengan kebutuhan. Penentuan kalori bisa dibantu oleh petugas kesehatan.Namun, pengurangan kalorinya harus bertahap. Bila terlalu cepat, efeknya bisa bermacam-macam, termasuk batu ginjal dan batu empedu.</li>
        <li>Pola diet anak juga harus seimbang, yakni 50-60 persen karbohidrat, 30 persen lemak, dan protein harus mencapai 15-20 persen. Usahakan juga agar makanan yang dikonsumsi anak tinggi serat. Perhitungan kasar untuk kebutuhan serat anak setiap hari adalah usia anak ditambah lima gram.</li>
        <li>Selain menjaga pola makan, aktivitas juga diperlukan dalam menjaga berat badan anak. direkomendasikan olahraga intensitas sedang seperti berjalan cepat selama 60 menit sehari. Sementara itu, olahraga yang agak berat seperti berlari bisa dilakukan tiga kali seminggu.</li>
        <li>Terakhir, tidak melakukan perundungan (bullying) kepada anak. Bagaimana pun keadaan gizi anak, orangtua mau pun teman tidak boleh melakukan bully. Sebab, hal ini bisa berbekas secara psikologis dan membuat anak lari ke makanan.</li>
      </ol>
      </div>
    </div>
  </div>
</div>

<?php }elseif ($stmt->bb_ideal == 1) {
  # code...?>
<!-- awal row -->

  <!-- <div class="row"> -->
      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            Penyuluhan untuk Berat badan anak dibawah normal (kurus)
          </div>

          <div class="panel-body">
          <p>
            Biasanya masalah terletak pada kesulitan makan, maka mau tidak mau Ibu dan keluarga dekat si anak harus mengupayakan trik untuk meningkatkan nafsu makannya, apakah dengan menu yang bervariasi, atau dihiasi dengan bentuk yang ia suka, atau menetapkan waktu makan tertentu yang tidak boleh diselingi dengan bermain sehingga anak menjadi fokus untuk makan, dan trik lainnya yang dapat dibaca di buku-buku pengasuhan anak. Untuk pola makan, sebagai contoh dapat diberikan sebagai berikut:</p>
            <ol>
              <li>Beri Asi setiap kali dibutuhkan, jika masih minum ASI/belum disapih.</li>
              <li>Beri nasi lembik 3 kali sehari. Jika anak sudah makan nasi, maka berikan nasi biasa saja. Usahakan waktu makannya 
              bertepatan dengan waktu makan keluarga sehingga anak menjadi lebih semangat untuk makan.</li>
              <li>Tambahkan telur/ayam/ikan/tempe/tahu/daging sapi/wortel/bayam pada nasi</li>
              <li>Beri makanan selingan 2 kali sehari diantara waktu makan seperti bubur kacang hijau, pisang, biskuit, nagasari dan sebagainya.</li>
              <li.Beri buah-buahan atau sari buah.</li>
              <li>Bantu anak untuk makan sendiri.</li>
              <li>Kami anjurkan juga untuk Ibu si anak agar rutin membawa anak ke dietisien di puskesmas untuk memantau kondisi gizinya dan mendapatkan pengarahan tentang resep makanan yang sesuai untuk perbaikan gizi anak balita.</li>
            </ol>


        </div>
      </div>
    </div>

<?php } else{ ?>
  <div class="col-md-6">

      <div class="panel panel-primary">
      <div class="panel-heading">
        Saran  Penyuluhan
      </div>

      <div class="panel-body">

      
        <h4>Beberapa tips agar berat badan anak selalu ideal</h4>
        <ul>
          <li>Pilih makanan dengan kadar lemak jenuh yang rendah, dan kadar gula yang rendah.</li>
          <li>Konsumsi buah dan sayuran. Perbanyak buah yang banyak mengandung kalium seperti pisang. Bisa juga mengonsumsi alpukat atau apel untuk menurunkan kandungan lemak jenuh dalam darah.</li>
          <li>Perhatikan porsi makanan, setidaknya sepertiga isi piring mengandung makanan berprotein seperti ikan atau telur, sepertiga mengandung kalori seperti nasi atau kentang, sepertiga mengandung serat dan sayuran seperti bayam, kangkung, wortel, dan lain-lain.</li>
          <li>Jangan lupa makan, makan tiga kali sehari penting untuk membantu mengontrol berat badan.</li>
          <li>Pastikan konsumsi serat yang cukup, Jenis makanan yang banyak mengandung serat diantaranya sereal, roti dengan kadar serat yang tinggi, buah dan sayuran. Adanya serat membantu mengurangi nafsu makan karena kenyangnya akan bertahan lebih lama, dan dapat menurunkan kadar kolesterol.</li>
          <li>Usahakan agar mengonsumsi makanan dengan kadar kalori tinggi pada pagi atau siang hari, agar pada malam hari nafsu makan tidak terlalu besar.</li>
          <li>Minum air putih yang banyak, sekitar 6-8 gelas perhari, agar terhindar dari dehidrasi dan mencegah keinginan makan yang berlebihan. </li>
          <li>Seperti halnya makanan, hindari minuman yang dapat meningkatkan kadar lemak, misalnya minuman yang banyak mengandung coklat, gula, atau mengandung alkohol. Sesekali minuman dicampur gula sih boleh saja asal tidak berlebihan dalam takaran dan frekuensinya.</li>
        </ul>

      </div>
    </div>


  </div>

  <?php } ?>  
<!-- </div> -->



</div>

</div>
</div>


<?php include "../template/footer.php"; ?>
