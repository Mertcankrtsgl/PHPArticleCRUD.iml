<?php
session_start();
include_once 'baglan.php';
$vbaslik=$_POST['mbaslikfrm'];
$vyazar=$_POST['myazarfrm'];
$vicerik=$_POST['icerikfrm'];
$vYazarId=intval($_SESSION['userkullanici_id']);

$query=$db->prepare('INSERT INTO makaleler (m_baslik,m_yazar,icerik,m_yazarid) VALUES(?,?,?,?)');

$query->execute(array($vbaslik,$vyazar,$vicerik,$vYazarId));

$db=null;

header("Location: http://localhost/admin.php?menuid=2");
?>