<?php
require_once "../config.php";
require_once "funcadmin.php";
ceklogin();

include "../template/header.php";
include "../template/menu.php";
 ?>

 <?php
$cari = isset($_REQUEST['cari']) ? $_REQUEST['cari'] : '';
if ($cari == ""){
  $sql = " select * from bumil";
}else {
  # code...
  $sql = "select * from bumil where nm_ibu like '%$cari%'";
}

$que = $conn->prepare($sql);
$que->execute();
$que->setFetchMode(PDO::FETCH_OBJ);
$stmt = $que->fetchAll();

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
              Wus / Pus
          </h1>
          <ol class="breadcrumb">
              <li class="active">
                  <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
              </li>
              <li class="active">
                  <i class="fa fa-table"></i> Data Ibu Hamil
              </li>
          </ol>
      </div>
  </div>


  <!-- tabel pelanggan -->
  <div class="row">

      <div class="col-md-9">
        <a href="tambahBumil.php" class="btn btn-default btn-md " style="margin-bottom:7px">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Ibu Hamil
        </a>
      </div>
      <div class="col-md-3">

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
          <div class="input-group stylish-input-group">
            <input type="text" class="form-control" name="cari"  placeholder="Search" value="<?= $cari ?>" >
            <span class="input-group-addon">
                <button type="submit" >
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
          </div>
        </form>
      </div>
  </div>
  <div class="row">
      <div class="col-lg-12">

<?php

  if(isset($_GET['act'])){
   if($_GET['act'] == 'del'){
     echo "
     <div class='alert alert-warning'>
         <a href='#' class='close' data-dismiss='alert'>&times;</a>
         <strong>Berhasil</strong> Data Telah di di hapus.
     </div>";
   }else if($_GET['act'] == 'add'){
     echo "
     <div class='alert alert-success'>
         <a href='#' class='close' data-dismiss='alert'>&times;</a>
         <strong>Berhasil</strong> Data Telah di Tambah.
     </div>";
   }
   else if($_GET['act'] == 'update'){
     echo "
     <div class='alert alert-warning'>
         <a href='#' class='close' data-dismiss='alert'>&times;</a>
         <strong>Berhasil</strong> Data Telah di edit.
     </div>";
   }
 }

 ?>





          <div class="table-responsive">
              <table class="table table-bordered table-hover">
                  <thead>

                      <tr>
                          <th width="50">No</th>
                          <th>No Registrasi</th>
                          <th>Nama Ibu</th>
                          <th>Nama Suami</th>
                          <th>Lama Menikah</th>
                          <th width="200" colspan="3">KMS (Kartu Menuju Sehat)</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    foreach ($stmt as $q)
                    {
                        $no++;
                        ?>
                      <tr>
                          <td><?= $no ?></td>
                          <td><?= $q->no_reg ?></td>
                          <td><?= $q->nm_ibu ?></td>
                          <td><?= $q->nm_suami ?></td>
                          <td><?= $q->lama_nikah ?></td>
                          <td width="140">
                            <a href="editBumil.php?id_bumil=<?= $q->id_bumil ?>" > <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit </a>
                            <a href="proBumil.php?action=del&id=<?= $q->id_bumil?> " > <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete </a>
                          </td>
                        
                          <td width="75">
                            <a href="penyuluhanbumil.php?id=<?= $q->id_bumil?>" class="btn btn-info btn-sm">Penyuluhan</a>
                          </td>
                          <td width="75">
                            <a href="pelayananbumil.php?id=<?= $q->id_bumil?>" class="btn btn-info btn-sm">Pelayanan</a>
                          </td>
                      </tr>
                      <?php }?>

                  </tbody>
              </table>
          </div>
      </div>
  </div>
  <!-- /.row -->

</div>

</div>

<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 2000);
</script>
<?php include "../template/footer.php"; ?>
