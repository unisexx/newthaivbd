<div class="page-header position-relative">
    <h1>วีดีโอ <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="vdos/admin/vdos/save/<?php echo $category->id?>" enctype="multipart/form-data">
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">หมวดหมู่วีดีโอ</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="name" value="<?php echo $category->name?>">
                <a href="#" class="btn btn-primary btn-mini addans" ><i class="icon-pencil"></i> เพิ่มวีดีโอ</a>
            </div>
        </div>
        
        <?php foreach($category->vdo as $vdo): ?>
        	<div class="vid-blk">
        	<div class="control-group">
	            <label class="control-label" for="form-field-10">ชื่อวีดีโอ</label>
	            <div class="controls">
	                <input type="text" id="form-field-11" class="input-xxlarge" name="title[]" value="<?php echo $vdo->title ?>">
	                <a class="btn btn-mini btn-danger del-vid" href="#" onclick="return confirm('<?php echo lang('notice_confirm_delete')?>')"><i class='icon-trash'></i></a>
	                <input type="hidden" name="vdo_id[]" value="<?php echo $vdo->id ?>" />
	            </div>
	        </div>
	        
            <div class="control-group">
	            <label class="control-label" for="form-field-10">ลิ้งค์ Youtube</label>
	            <div class="controls">
	                <textarea class="input-xxlarge" name="url[]" rows="5"><?php echo $vdo->url ?></textarea>
	            </div>
	        </div>
	        </div>
        <?php endforeach; ?>
        
        <div class="clone-blk">
        <div class="control-group">
            <label class="control-label" for="form-field-10">ชื่อวีดีโอ</label>
            <div class="controls">
                <input type="text" id="form-field-11" class="input-xxlarge" name="title[]" value="">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-10">ลิ้งค์ Youtube</label>
            <div class="controls">
                <textarea class="input-xxlarge" name="url[]" rows="5"></textarea>
            </div>
        </div>
        </div>
        
        <div class="form-actions">
            <?php echo form_referer() ?>
            <button class="btn btn-info" type="submit"><i class="icon-ok"></i> Submit</button>
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset"><i class="icon-undo"></i> Reset</button>
        </div>
        
    </form>
<!-- PAGE CONTENT ENDS HERE -->
</div>

<!-- inline scripts related to this page -->
<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
    tiny('detail');
</script>

<script type="text/javascript">
$(function(){
	$(".addans").click(function(){			
		$('.clone-blk:first').clone().find("input:text,textarea").val("").end().insertBefore($('.form-actions'));
		return false;
	})
	
	$('.del-vid').click(function(){
	    $this = $(this);
	    $.post('vdos/admin/vdos/delete_vid/' + $this.next('input[type=hidden]').val(),
        function(data){
            $this.closest('.vid-blk').fadeOut(function(){$(this).remove();});
        })
	    return false;
	});
})
</script>