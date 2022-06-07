
<?php if(isset($_GET['number'])&&is_numeric($_GET['number'])):?>
    <form  action="<?=URL.'/save-new-images'?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="number" value="<?=$_GET['number']?>">
    <?php for($i=1;$i<=$_GET['number'];$i++):?>
        <input type="text" name="names[]" placeholder="Name"><br>
        <textarea name="descriptions[]" placeholder="Description"></textarea><br>
        <input type="file" name="files[]"><br>
        <hr>
    <?php endfor;?>
    <input type="submit">
    <a href="<?=URL.'/add-image'?>">Cancel</a>
    </form>
<?php else : ?>
    <h2>Add new image</h2>
<form>
    <input type="number" name="number" placeholder="Please insert number">
    <input type="submit">
</form>
<?php endif;?>
<small>
    <a href="<?=URL?>">back</a>
</small>