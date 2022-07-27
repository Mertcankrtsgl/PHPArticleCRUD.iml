<?php
include_once 'baglan.php';

    $vmenuid= isset($_GET['menuid']) ? $_GET['menuid'] : false;

switch ($vmenuid){
    case 1:
    include_once 'makaleeklefrm.php';
    break;
    case 2:
    include_once 'listele.php';
    break;
}
?>