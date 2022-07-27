<?php
include_once 'baglan.php';
?>

<div class="list-group">
    <?php
    foreach ($db->query('SELECT * FROM katagoriler') as $row){
        ?>
    <a href="admin.php?menuid=<?php echo $row['kat_id'] ?>"
       class="list-group-item"><?php echo $row['kat_ad']?></a>
        <?php
    }
    ?>
</div>
