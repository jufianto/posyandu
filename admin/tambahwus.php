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
                    Tambah Wuspus
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> <a href="wuspus.php">Data Wuspus</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Tambah Wuspus
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-6">

                <form role="form" action="proWuspus.php?action=add" method="post">

                    <div class="form-group">
                        <label>Nama Ibu</label>

                        <span><input required class="form-control" placeholder="Nama Ibu" name="nm_ibu"></span>
                    </div>
                    <div class="form-group">
                        <label>Nama Suami</label>

                        <span><input required  class="form-control" placeholder="Nama Suami" name="nm_suami"></span>
                    </div>
                    <div class="form-group">
                        <label>Lama Menikah</label>

                        <input class="form-control" required  type="number"  name="lama_nikah">
                    </div>
                  
                    </br>

                    <div class="form-group">
                        <Button class="btn btn-primary btn-xl page-scroll">Simpan</Button>

                    </div>

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
