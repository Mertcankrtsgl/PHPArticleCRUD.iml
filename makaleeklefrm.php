<form method="POST" action="makaleekle.php">
    <div class="form-group">
        <label for="exampleInputEmaili">Makale Başlık</label>
        <input type="text" class="form-control" id="exampleInputEmaili" placeholder="Makale Başlığı ...." name="mbaslikfrm"></input>
    </div>
     <div class="form-group">
        <label for="exampleInputPassword">Makale Yazarı</label>
        <input type="text" readonly="readonly" class="form-control" *  id="exampleInputPassword" value="<?php echo  $_SESSION['userkullanici_mail'];?> " name="myazarfrm"></input>
    </div>
    
    <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
    <div class="form-group">
        <label for="exampleInputPassword">İçerik</label>
        <textarea class="ckeditor" name="icerikfrm" id="cedit1" cols="15" rows="10"></textarea>
    </div>
    
    <button type="submit" class="btn btn-default">Makaleyi Ekle</button>
       
</form>

