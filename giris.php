<?php 
include("baglan.php");

//ob_start();
session_start();
 
$kadi = $_POST['kadi'];
$sifre = $_POST['pw'];

    $kullanicisor=$db->prepare("select * from kayitlist where uye_mail=:mail and uye_pw=:password");
    $kullanicisor->execute(array(
        'mail' => $kadi,
        'password' => $sifre
    ));

    $say=$kullanicisor->rowCount();
    
    if ($say==1) {
        foreach ($kullanicisor as $row){
            echo $_SESSION['userkullanici_mail']=$kadi;
            echo $_SESSION['userkullanici_id']=$row['id'];
        }
        
        header("Location:admin.php");
        exit;

    } else {

        header("Location:index.php");
    }

 ?>