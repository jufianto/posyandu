<?php
require_once "funcadmin.php";
ceklogin();
require_once '../config.php';

 ?>
<?php include "../template/header.php"; ?>
<?php include "../template/menu.php"; ?>

<div id="page-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Tambah bayi
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> <a href="bayi.php">Data bayi</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Tambah bayi
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-6">

                <form role="form" action="proBayi.php?action=add" method="post">

                    <div class="form-group">
                        <label>Nama Bayi</label>

                        <span><input required class="form-control" placeholder="Nama Bayi" name="nm_bayi"></span>
                    </div>
                    <div class="form-group">
                        <label>Nama Ibu</label>

                        <span><input required  class="form-control" placeholder="Nama Ibu" name="nm_ibu"></span>
                    </div>
                    <div class="form-group">
                        <label>Bulan Lahir</label>

                        <input class="form-control" required  type="number" placeholder="Bulan Lahir"  name="bulan_lahir">
                    </div>
                    <div class="form-group">
                        <label>Tahun Lahir</label>
                        <input class="form-control" required  type="number" placeholder="Tahun Lahir" name="tahun_lahir">
                    </div>
                    </br>

                    <div class="form-group">
                        <Button class="btn btn-primary btn-xl page-scroll">Simpan</button>

                    </div>

            </div>

            <div class="col-md-6">


                    <div class="form-group">
                        <label>Berat Badan</label>

                        <span><input class="form-control" required  placeholder="Berat Badan" name="berat_badan"></span>
                    </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="asi_eks" value="1">Masih Diberikan ASI ? 
                     </div>
                    

                
            </form>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<?php include "../template/footer.php"; ?>
