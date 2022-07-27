<?php 

try {
    $db=new PDO("mysql:host=localhost; dbname=Uyeler;charset=utf8",'root','123456');
}
catch (PDOExpception $e) {
    echo $e->getMessage();
}

 ?>