<div class="page-header position-relative">
    <h1><?php echo $_GET['module']?> <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="researchs/admin/researchs/save/<?php echo $category->id?>?module=<?php echo $_GET['module']?>" enctype="multipart/form-data">
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">หมวดหมู่</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="name" value="<?php echo $category->name?>">
                <a href="#" class="btn btn-primary btn-mini addans" ><i class="icon-pencil"></i> เพิ่มไฟล์</a>
            </div>
        </div>
        
        <?php foreach($category->research as $row): ?>
        	<div class="vid-blk">
        	<div class="control-group">
	            <label class="control-label" for="form-field-10">ชื่อไฟล์</label>
	            <div class="controls">
	                <input type="text" id="form-field-11" class="input-xxlarge" name="title[]" value="<?php echo $row->title ?>">
	                <a class="btn btn-mini btn-danger del-vid" href="#" onclick="return confirm('<?php echo lang('notice_confirm_delete')?>')"><i class='icon-trash'></i></a>
	                <input type="hidden" name="research_id[]" value="<?php echo $row->id ?>" />
	            </div>
	        </div>
	        
            <div class="control-group">
	            <label class="control-label" for="form-field-2">ไฟล์</label>
	            <div class="controls">
	                <input type="text" id="form-field-2" class="input-xxlarge" name="files[]" value="<?php echo $row->files?>"> <input class="btn btn-mini btn-info" type="button" name="browse" value="เลือกไฟล์" onclick="browser($(this).prev(),'file')" /> 
	                <!-- <?php if($row->files):?>
	                    <a class="btn btn-danger btn-mini" data-rel="tooltip" title="ดาวน์โหลด" href="researchs/admin/researchs/download/<?php echo $row->id?>"><i class="icon-download-alt"></i></a>
	                <?php endif;?> -->
	            </div>
	        </div>
	        </div>
        <?php endforeach; ?>
        
        <div class="clone-blk">
        <div class="control-group">
            <label class="control-label" for="form-field-10">ชื่อไฟล์</label>
            <div class="controls">
                <input type="text" id="form-field-11" class="input-xxlarge" name="title[]" value="">
            </div>
        </div>
        
        <!-- file manager -->
        <div class="control-group">
            <label class="control-label" for="form-field-2">ไฟล์</label>
            <div class="controls">
                <input type="text" id="form-field-2" class="input-xxlarge" name="files[]" value=""> <input class="btn btn-mini btn-info" type="button" name="browse" value="เลือกไฟล์" onclick="browser($(this).prev(),'file')" />
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
		$('.clone-blk:first').clone().find("input:text").val("").end().insertBefore($('.form-actions'));
		return false;
	})
	
	$('.del-vid').click(function(){
	    $this = $(this);
	    $.post('researchs/admin/researchs/delete_file/' + $this.next('input[type=hidden]').val(),
        function(data){
            $this.closest('.vid-blk').fadeOut();
        })
	    return false;
	});
})
</script>