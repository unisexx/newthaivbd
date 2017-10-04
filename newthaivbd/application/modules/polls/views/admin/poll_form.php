<div class="page-header position-relative">
    <h1>แบบสำรวจความคิดเห็น <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="polls/admin/polls/save/<?php echo $poll->id?>" enctype="multipart/form-data">
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">หัวข้อ</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="title" value="<?php echo $poll->title?>">
                <a href="#" class="btn btn-primary btn-mini addans" ><i class="icon-pencil"></i> เพิ่มคำตอบ</a>
            </div>
        </div>
        
        <?php foreach($poll->polldetail as $item): ?>
            <div class="control-group">
                <label class="control-label" for="form-field-1">คำตอบ</label>
                <div class="controls">
                    <input type="text" id="form-field-1" class="input-xxlarge" name="name[]" value="<?php echo $item->name ?>">
                    <a class="btn btn-mini btn-danger" href="polls/admin/polls/delete_ans/<?php echo $item->id?>" class="btn" onclick="return confirm('<?php echo lang('notice_confirm_delete')?>')"><i class='icon-trash'></i></a>
                    <input type="hidden" name="detail_id[]" value="<?php echo $item->id ?>" />
                </div>
            </div>
        <?php endforeach; ?>
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">คำตอบ</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="name[]" value="">
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

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" >
	$(function(){
		$(".addans").click(function(){			
			$('<div class="control-group"><label class="control-label" for="form-field-1">คำตอบ</label><div class="controls"><input type="text" id="form-field-1" class="input-xxlarge" name="name[]" value=""></div></div>').insertBefore($('.form-actions'));
			return false;
		})
	})
</script>