<?php 
include "baglan.php";

	$kaydet=$db->prepare("INSERT INTO kayitlist SET
		uye_adisoyadi=:uye_adisoyadi,
		uye_mail=:uye_mail,
		uye_tel=:uye_tel,
		uye_adres=:uye_adres,
		uye_pw=:uye_pw 
		");
	$insert=$kaydet->execute(array(
		'uye_adisoyadi' => $_POST['kadi'],
		'uye_mail' => $_POST['mail'],
		'uye_tel' => $_POST['tel'],
		'uye_adres' => $_POST['adres'],
		'uye_pw' => $_POST['pw']
	));

		Header("Location:index.php");

 ?>