
<?php
//include "funcpelanggan.php";
require_once "funcadmin.php";
ceklogin();
require_once '../config.php';

//jika server mendapatkan request post
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  //jika terdapat action sesuai dengan link
  switch ($_GET['action']){
   case "add":
   //inisiasi variabel sesuai data yang dikirim
     $date = date('mdis');
     $nm_ibu   = $_REQUEST['nm_ibu'];
     $nm_suami   = $_REQUEST['nm_suami'];
     $lama_nikah   = $_REQUEST['lama_nikah'];
     $no_reg   = $date;

     // query untuk menambahkan
     $sql  = "insert into wupus (no_reg,nm_ibu,nm_suami,lama_nikah) values ('$no_reg','$nm_ibu','$nm_suami','$lama_nikah')";

     //execute query
     $que = $conn->prepare($sql);
     if(($que->execute()))
        {
           //echo "suskses";
           header('location:wuspus.php?act=add');
        }else{
           $que->errorInfo();
       }
       break;

       case "updatepen":
   //inisiasi variabel sesuai data yang dikirim
      $id_wus = $_REQUEST['id'];
    $personal = $_REQUEST['personal'] ?? "";
    $gizi = $_REQUEST['gizi'] ?? "";
    $masalah = $_REQUEST['masalah'] ?? "";
    $gangguan = $_REQUEST['gangguan'] ?? "";

     // query untuk menambahkan
     $sql  = "update wupus set personal = '$personal',gizi = '$gizi',masalah = '$masalah',gangguan = '$gangguan' where id_wus = '$id_wus' ";

     //execute query
     $que = $conn->prepare($sql);
     if(($que->execute()))
        {
           //echo "suskses";
           header('location:penyuluhanwan.php?id='.$id_wus);
        }else{
           $que->errorInfo();
       }
       break;

       case "update":
   //inisiasi variabel sesuai data yang dikirim
      $id_wus = $_REQUEST['id_wus'];

      $date = date('mdis');
     $nm_ibu   = $_REQUEST['nm_ibu'];
     $nm_suami   = $_REQUEST['nm_suami'];
     $lama_nikah   = $_REQUEST['lama_nikah'];
     

     // query untuk menambahkan
     $sql  = "update wupus set nm_ibu = '$nm_ibu' ,nm_suami = '$nm_suami',lama_nikah = '$lama_nikah' where id_wus = '$id_wus' ";

     //execute query
     $que = $conn->prepare($sql);
     if(($que->execute()))
        {
          //  echo "suskses";
          //  print_r($_REQUEST);
          //  print_r($sql);
          // exit();
            header('location:wuspus.php?act=update');
          
        }else{
           $que->errorInfo();
       }
       break;

    case "updatePel":
    //inisiasi variabel sesuai data yang dikirim
    $id_wus = $_REQUEST['id'];
    $pembalut = $_REQUEST['pembalut'] ?? "";
    $suntik_kb = $_REQUEST['suntik_kb'] ?? "";
    $pilkb = $_REQUEST['pilkb'] ?? "";
    $vitamin = $_REQUEST['vitamin'] ?? "";
    $tambah_darah = $_REQUEST['tambah_darah'] ?? "";
    $konsul = $_REQUEST['konsul'] ?? "";
      // query untuk menambahkan
        $sql  = "update wupus set pembalut = '$pembalut',suntik_kb = '$suntik_kb',pilkb = '$pilkb',vitamin = '$vitamin',tambah_darah = '$tambah_darah',konsul = '$konsul' where id_wus = '$id_wus'";

      //execute query
      $que = $conn->prepare($sql);
      if(($que->execute()))
         {
            //echo "suskses";
           header('location:pelayananwus.php?id='.$id_wus);
            // print_r($que);
         }else{
            $que->errorInfo();
        }
        break;


     }
   }else if($_SERVER['REQUEST_METHOD'] === 'GET')
 {
         if(isset($_GET["action"]) && isset($_GET["id"]))
            {
                $sql="DELETE FROM wupus WHERE id_wus='".$_GET['id']."'";
                $que = $conn->prepare($sql);

                if($que->execute())
                {
                    header("Location:wuspus.php?act=del");

                }
                else
                {
                    echo "kesalahan query";
                }
            }

 }


?>
