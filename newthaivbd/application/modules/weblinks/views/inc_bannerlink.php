<div class="bannerlink">
    <ul>
        <?php foreach($weblinks as $row):?>
        <li><a href="<?php echo $row->url ?>" target="_blank"><img alt="<?php echo $row->title?>" src="<?php echo $row->image ?>" width="173" height="68" border="0"></a></li>
        <?php endforeach;?>
    </ul>
</div>