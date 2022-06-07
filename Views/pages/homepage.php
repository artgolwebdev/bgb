<div>
    <h1>Images</h1>
    <a href="<?=URL?>/add-image">New</a>
</div>
<?php foreach($page['data'] as $image):?>
    <div>
       <h2> <?= $image['name'];?></h2>
       <p><?= $image['description']?></p>
       <img src="<?=URL.'/files/'.$image['file']?>">
    </div>
    <hr>
<?php endforeach;?>