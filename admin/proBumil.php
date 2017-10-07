
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
     $sql  = "insert into bumil (no_reg,nm_ibu,nm_suami,lama_nikah) values ('$no_reg','$nm_ibu','$nm_suami','$lama_nikah')";

     //execute query
     $que = $conn->prepare($sql);
     if(($que->execute()))
        {
           //echo "suskses";
           header('location:bumil.php?act=add');
        }else{
           $que->errorInfo();
       }
       break;

       case "updatepen":
   //inisiasi variabel sesuai data yang dikirim
      $id_bumil = $_REQUEST['id'];
    $tekanan = $_REQUEST['tekanan'] ?? "";
    $darah = $_REQUEST['darah'] ?? "";
    $hipertensi = $_REQUEST['hipertensi'] ?? "";

     // query untuk menambahkan
     $sql  = "update bumil set tekanan = '$tekanan',darah = '$darah',hipertensi = '$hipertensi' where id_bumil = '$id_bumil' ";

     //execute query
     $que = $conn->prepare($sql);
     if(($que->execute()))
        {
           //echo "suskses";
           header('location:penyuluhanbumil.php?id='.$id_bumil);
        }else{
           $que->errorInfo();
       }
       break;

       case "update":
   //inisiasi variabel sesuai data yang dikirim
      $id_bumil = $_REQUEST['id_bumil'];

      $date = date('mdis');
     $nm_ibu   = $_REQUEST['nm_ibu'];
     $nm_suami   = $_REQUEST['nm_suami'];
     $lama_nikah   = $_REQUEST['lama_nikah'];
     

     // query untuk menambahkan
     $sql  = "update bumil set nm_ibu = '$nm_ibu' ,nm_suami = '$nm_suami',lama_nikah = '$lama_nikah' where id_bumil = '$id_bumil' ";

     //execute query
     $que = $conn->prepare($sql);
     if(($que->execute()))
        {
          //  echo "suskses";
          //  print_r($_REQUEST);
          //  print_r($sql);
          // exit();
            header('location:bumil.php?act=update');
          
        }else{
           $que->errorInfo();
       }
       break;

    case "updatePel":
    //inisiasi variabel sesuai data yang dikirim
    $id_bumil = $_REQUEST['id'];
    $cekhamil = $_REQUEST['cekhamil'] ?? "";
    $pmt = $_REQUEST['pmt'] ?? "";
    $tetanus = $_REQUEST['tetanus'] ?? "";
    $tablet = $_REQUEST['tablet'] ?? "";
    $vita = $_REQUEST['vita'] ?? "";
   
      // query untuk menambahkan
        $sql  = "update bumil set cekhamil = '$cekhamil',pmt = '$pmt',tetanus = '$tetanus',tablet = '$tablet',vita = '$vita' where id_bumil = '$id_bumil'";

      //execute query
      $que = $conn->prepare($sql);
      if(($que->execute()))
         {
            //echo "suskses";
          //  echo "suskses";
          //  print_r($_REQUEST);
          //  print_r($sql);
          // exit();
           header('location:pelayananbumil.php?id='.$id_bumil);
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
                $sql="DELETE FROM bumil WHERE id_bumil='".$_GET['id']."'";
                $que = $conn->prepare($sql);

                if($que->execute())
                {
                    header("Location:bumil.php?act=del");

                }
                else
                {
                    echo "kesalahan query";
                }
            }

 }


?>
