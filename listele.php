<?php
include_once 'baglan.php';
?>

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>#</th>
        <th>Makale Başlığı</th>
        <th>Makale Yazarı</th>
        <th>İçeriği</th>
        <th>İşlem</th>
    </tr>
    </thead>

    <tbody>

    <?php
    include("baglan.php");
    if (isset($_POST["sil"])) {
        $sorgu = "DELETE FROM `makaleler` WHERE `id` = " . $_POST['kayit_no'];
        $db->query($sorgu);
    }
    ?>

    <?php
    $i = 0;
    foreach ($db->query('SELECT * FROM makaleler') as $row) {
        $i++;
        ?>
        <tr>
            <th scope="row"><?= $i ?></th>
            <td><?php echo $row['m_baslik'] ?></td>
            <td><?php echo $row['m_yazar'] ?></td>
            <td><?php echo $row['icerik'] ?></td>
            <td>
                <?php
                if ($_SESSION['userkullanici_id'] == $row['m_yazarid']) {
                    ?>
                    <form action="" method="post">
                        <input type="hidden" name="kayit_no" value="<?= $row["id"] ?>">

                        <button type="submit" class="btn btn-danger" name="sil" value="sil">Sil</button>
                    </form>
                    <?php
                }
                ?>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>


