<div class="page-header position-relative">
    <h1>แฟ้มภาพ <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="albums/admin/albums/save/<?php echo $album->id?>" enctype="multipart/form-data">
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">อัลบั้ม</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="name" value="<?php echo $album->name?>">
                <a href="#" class="btn btn-primary btn-mini addans" ><i class="icon-pencil"></i> เพิ่มรูปภาพ</a>
            </div>
        </div>
        
        <?php foreach($album->picture as $picture): ?>
            <div class="control-group">
                <label class="control-label" for="form-field-1">รูปภาพ</label>
                <div class="controls">
                    <input type="text" id="form-field-1" class="input-xxlarge" name="image[]" value="<?php echo $picture->image ?>"> <input class="btn btn-mini btn-info" type="button" name="browse" value="เลือกไฟล์" onclick="browser($(this).prev(),'file')" />
                    <a class="btn btn-mini btn-danger del-pic" href="#" onclick="return confirm('<?php echo lang('notice_confirm_delete')?>')"><i class='icon-trash'></i></a>
                    <input type="hidden" name="picture_id[]" value="<?php echo $picture->id ?>" />
                </div>
            </div>
        <?php endforeach; ?>
        
        <!-- file manager -->
        <div class="control-group file-manager">
            <label class="control-label" for="form-field-2">รูปภาพ
</label>
            <div class="controls">
                <input type="text" id="form-field-2" class="input-xxlarge" name="image[]" value=""> <input class="btn btn-mini btn-info" type="button" name="browse" value="เลือกไฟล์" onclick="browser($(this).prev(),'file')" />
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
		$('.file-manager:first').clone().find("input:text").val("").end().insertBefore($('.form-actions'));
		return false;
	})
	
	$('.del-pic').click(function(){
	    $this = $(this);
	    $.post('albums/admin/albums/delete_picture/' + $this.next('input[type=hidden]').val(),
        function(data){
            $this.closest('.control-group').fadeOut();
        })
	    return false;
	});
})
</script>