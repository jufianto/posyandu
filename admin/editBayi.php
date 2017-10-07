<?php
require_once "funcadmin.php";
ceklogin();
require_once '../config.php';

$id = $_GET['id_bayi'];
$sql = " select * from bayi where id_bayi= '$id' ";
$que = $conn->prepare($sql);
$que->execute();
$que->setFetchMode(PDO::FETCH_OBJ);
$stmt = $que->fetch();


 ?>
<script src="../js/jquery.js"></script>
<?php include "../template/header.php"; ?>
<?php include "../template/menu.php"; ?>

<div id="page-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit pelanggan
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> <a href="bayi.php">Data Bayi</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Edit Bayi
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

                <form role="form" action="proBayi.php?action=update" method="post">
                   <div class="col-md-6">
                  <input class="form-control" placeholder="Nama" value="<?= $id?>" type="hidden" name="id_bayi">

                    <div class="form-group">
                        <label>Nama Bayi</label>

                        <span><input class="form-control" placeholder="Nama Bayi" name="nm_bayi" value="<?= $stmt->nm_bayi ?>"></span>
                    </div>
                    <div class="form-group">
                        <label>Nama Ibu</label>

                        <span><input class="form-control" placeholder="Nama Ibu" name="nm_ibu" value="<?= $stmt->nm_ibu ?>"></span>
                    </div>
                    <div class="form-group">
                        <label>Bulan Lahir</label>

                        <input class="form-control" placeholder="Bulan Lahir"  name="bulan_lahir" value="<?= $stmt->bulan_lahir ?>">
                    </div>
                    <div class="form-group">
                        <label>Tahun Lahir</label>
                        <input class="form-control" placeholder="Tahun Lahir" name="tahun_lahir" value="<?= $stmt->tahun_lahir ?>">
                    </div>
                    </br>

                    <div class="form-group">
                        <Button class="btn btn-primary btn-xl page-scroll">Simpan</button>

                    </div>

            </div>

            <div class="col-md-6">


                    <div class="form-group">
                        <label>Berat Badan</label>

                        <span><input class="form-control" placeholder="Berat Badan" name="berat_badan" value="<?= $stmt->berat_badan ?>"></span>
                    </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" <?= $stmt->asi_eks == 1 ? 'checked' : ''; ?>  name="asi_eks" value="1">Masih Diberikan ASI ? 
                     </div>
                    

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<?php include "../template/footer.php"; ?>
