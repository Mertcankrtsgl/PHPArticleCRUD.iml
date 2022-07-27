<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="123456";
    $dbname="Uyeler";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
     if($conn->connect_error){
        die("Bağlantı başarısız: ".$conn->connect_error);
    }
    echo "Bağlantı başarılı"."<br>";
    /*
    $sql = "CREATE DATABASE Uyeler";
    if ($conn->query($sql) === TRUE) {
        echo "Veritabanı başarılı bir şekilde oluşturuldu";
        }
        else { echo "Hata meydana geldi: " . $conn->error;
        }
    */
    /*
    $sql = "CREATE TABLE KayitList (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                uye_adisoyadi VARCHAR(30) NOT NULL, 
                uye_mail VARCHAR(50) NOT NULL,
                uye_tel VARCHAR(50) NOT NULL,
                uye_adres VARCHAR(100) NOT NULL,
                uye_pw VARCHAR(50) NOT NULL,
                kayit_tarihi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )";
    $conn->query($sql);
    */
    /*
    $sql= "CREATE TABLE makaleler (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                m_baslik VARCHAR(50) NOT NULL, 
                m_yazar VARCHAR(50) NOT NULL,
                m_yazarid VARCHAR(50) NOT NULL;
                icerik TEXT,
                kayit_tarihi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )";
    $conn->query($sql);
    */
    /*
    $sql= "CREATE TABLE katagoriler (
                kat_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                kat_ad VARCHAR(50) NOT NULL )";
    $conn->query($sql);
    */
    $conn->close();
    ?>
    <!doctype html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
              integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<title>Mertcan Karataşoğlu</title>
</head>
<body>
	<div class="container">
		<div class="row">
			
			<div class="col-md-6">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uyegiris">
					Üye Giriş
				</button>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kayitol">
					Kayıt Ol
				</button>
			</div>
			<div class="modal fade" id="kayitol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Kayıt OL</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="kaydet.php" method="POST">
								<label>Ad Soyad</label>
								<input class="form-control" type="text" name="kadi">
								<label>Mail Adresi</label>
								<input class="form-control" type="email" name="mail">
								<label>Telefon</label>
								<input class="form-control" type="number" name="tel">
								<label>Adres</label>
								<input class="form-control" type="text" name="adres">
								<label>Şifreniz</label>
								<input class="form-control" type="password" name="pw">
								<br>
								<button type="submit" class="btn btn-success">Kayit OL</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="uyegiris" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Üye Giriş</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                                                    <form action="giris.php" method="POST">
								<label>Kullanıcı Adınız</label>
								<input class="form-control" type="text" name="kadi">
								<label>Şifreniz</label>
								<input class="form-control" type="password" name="pw">
								<br>
								<button type="submit" class="btn btn-primary">Giriş Yap</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
							</form>
						</div>
					</div>
				</div>
			</div>	
		</div>  
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
                crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
                crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" 
                integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" 
                crossorigin="anonymous"></script>
	</body>
	</html>
</body>
</html>
