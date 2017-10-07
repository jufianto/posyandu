<?php
require_once "funcadmin.php";
ceklogin();
require_once '../config.php';

$id = $_GET['id_wus'];
$sql = " select * from wupus where id_wus= '$id' ";
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
                    Edit Wuspus
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> <a href="wuspus.php">Data wuspus</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Edit Wuspus
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

                <form role="form" action="proWuspus.php?action=update" method="post">
                   <div class="col-md-6">
                  <input class="form-control" placeholder="Nama" value="<?= $id?>" type="hidden" name="id_wus">
                    <div class="form-group">
                        <label>Nama Ibu</label>

                        <span><input class="form-control" placeholder="Nama Ibu" name="nm_ibu" value="<?= $stmt->nm_ibu ?>"></span>
                    </div>
                    <div class="form-group">
                        <label>Bulan Lahir</label>

                        <input class="form-control" placeholder="Bulan Lahir"  name="nm_suami" value="<?= $stmt->nm_suami ?>">
                    </div>
                    <div class="form-group">
                        <label>Lama Menikah</label>
                        <input class="form-control" type="number" name="lama_nikah" value="<?= $stmt->lama_nikah ?>">
                    </div>
                    </br>

                    <div class="form-group">
                        <Button class="btn btn-primary btn-xl page-scroll">Simpan</button>

                    </div>

            </div>

        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<?php include "../template/footer.php"; ?>
