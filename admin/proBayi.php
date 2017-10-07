
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
     $nm_bayi   = $_REQUEST['nm_bayi'];
     $nm_ibu   = $_REQUEST['nm_ibu'];
     $bulan_lahir   = $_REQUEST['bulan_lahir'];
     $tahun_lahir   = $_REQUEST['tahun_lahir'];
     $berat_badan   = $_REQUEST['berat_badan'];
     $asi_eks   = $_REQUEST['asi_eks'];
     $no_reg   = $date;

     if (isset($_POST['asi_eks'])) {
     $asi_eks   = $_REQUEST['asi_eks'];
    }

     // query untuk menambahkan
     $sql  = "insert into bayi (nm_bayi,no_reg,nm_ibu,bulan_lahir,tahun_lahir,berat_badan,asi_eks) values ('$nm_bayi','$no_reg','$nm_ibu','$bulan_lahir','$tahun_lahir','$berat_badan','$asi_eks')";

     //execute query
     $que = $conn->prepare($sql);
     if(($que->execute()))
        {
           //echo "suskses";
           header('location:bayi.php?act=add');
        }else{
           $que->errorInfo();
       }
       break;

       case "updateBB":
   //inisiasi variabel sesuai data yang dikirim
      $id_bayi = $_REQUEST['id'];
     $bb_ideal   = $_REQUEST['bb_ideal'];

     // query untuk menambahkan
     $sql  = "update bayi set bb_ideal = '$bb_ideal' where id_bayi = '$id_bayi' ";

     //execute query
     $que = $conn->prepare($sql);
     if(($que->execute()))
        {
           //echo "suskses";
           header('location:penyuluhan.php?id='.$id_bayi);
        }else{
           $que->errorInfo();
       }
       break;

       case "updatePel":
   //inisiasi variabel sesuai data yang dikirim
      $id_bayi = $_REQUEST['id'];

      $vit_a = $_REQUEST['vit_a'] ?? "";;
      $mp_asi = $_REQUEST['mp_asi'] ?? "";
      $pmt = $_REQUEST['pmt'] ?? "";
      $tablet_besi = $_REQUEST['tablet_besi'] ?? "";
      $hepatitis_b = $_REQUEST['hepatitis_b'] ?? "";
      $poso = $_REQUEST['poso'] ?? "";
      $dtp= $_REQUEST['dtp'] ?? "";
      $campak = $_REQUEST['campak'] ?? "";
      $hib = $_REQUEST['hib'] ?? "";
      $rotavirus = $_REQUEST['rotavirus'] ?? "";
     

     // query untuk menambahkan
     $sql  = "update bayi set vit_a = '$vit_a' ,mp_asi = '$mp_asi',pmt = '$pmt',tablet_besi = '$tablet_besi',hepatitis_b = '$hepatitis_b',poso = '$poso',dtp = '$dtp',campak = '$campak',hib = '$hib',rotavirus = '$rotavirus' where id_bayi = '$id_bayi' ";

     //execute query
     $que = $conn->prepare($sql);
     if(($que->execute()))
        {
          //  echo "suskses";
          // exit();
           header('location:pelayanan.php?id='.$id_bayi);
        }else{
           $que->errorInfo();
       }
       break;

    case "update":
    //inisiasi variabel sesuai data yang dikirim
    $id_bayi = $_REQUEST['id_bayi'];
    $nm_bayi   = $_REQUEST['nm_bayi'];
     $nm_ibu   = $_REQUEST['nm_ibu'];
     $bulan_lahir   = $_REQUEST['bulan_lahir'];
     $tahun_lahir   = $_REQUEST['tahun_lahir'];
     $berat_badan   = $_REQUEST['berat_badan'];
     $asi_eks   = $_REQUEST['asi_eks'];
      // query untuk menambahkan
        $sql  = "update bayi set nm_bayi = '$nm_bayi',nm_ibu ='$nm_ibu',bulan_lahir ='$bulan_lahir' ,tahun_lahir ='$tahun_lahir',berat_badan ='$berat_badan',asi_eks ='$asi_eks' where id_bayi = '$id_bayi'";

      //execute query
      $que = $conn->prepare($sql);
      if(($que->execute()))
         {
            //echo "suskses";
            header('location:bayi.php?act=update');
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
                $sql="DELETE FROM bayi WHERE id_bayi='".$_GET['id']."'";
                $que = $conn->prepare($sql);

                if($que->execute())
                {
                    header("Location:bayi.php?act=del");

                }
                else
                {
                    echo "kesalahan query";
                }
            }

 }


?>
