<?$catArray = array('จัดซื้อจัดจ้าง'=>'label-info','ประกวดราคา'=>'label-success','TOR'=>'label-warning','เผยแพร่ราคากลาง ปปช.'=>'label-important');?>

<div class="list">
	<ul>
		<?php foreach($contents as $content):?>
		<li><a href="contents/view/<?php echo $content->id?>"><span class="label <?=$catArray[$content->category]?>"><?=$content->category?></span> <?php echo $content->title?></a></li>
		<?php endforeach;?>
    </ul>
    <div class="btn_more1"><a href="contents?module=ข่าวประกวดราคา">&nbsp;</a></div>
</div>