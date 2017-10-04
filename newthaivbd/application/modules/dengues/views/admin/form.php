<div class="page-header position-relative">
    <h1><?php echo $_GET['module']?> <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="dengues/admin/dengues/save/<?php echo $dengue->id?>?module=<?php echo $_GET['module']?>&type=<?php echo $_GET['type']?>&year=<?php echo $_GET['year']?>&week=<?php echo @$_GET['week']?>&month=<?php echo @$_GET['month']?>" enctype="multipart/form-data">
        
        
        <div class="control-group">
            <label class="control-label" for="form-field-2">ปี</label>
            <div class="controls">
                <input type="text" id="form-field-2" class="input-xxlarge" name="year" value="<?php echo $_GET['year']?>">
            </div>
        </div>
        
        <?php if($_GET['type'] == 'week'):?>
        <div class="control-group">
            <label class="control-label" for="form-field-1">สัปดาห์ที่</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="week" value="<?php echo @$_GET['week']?>">
            </div>
        </div>
        <?php elseif($_GET['type'] == 'month'):?>
        <div class="control-group">
            <label class="control-label" for="form-field-1">เดือน</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" value="<?php echo @get_month_name($_GET['month'])?>">
                <input type="hidden" name="month" value="<?php echo @$_GET['month']?>">
            </div>
        </div>
        <?php endif;?>
        
        <div class="control-group">
            <label class="control-label" for="form-field-3">ณ วันที่</label>
            <div class="controls">
                <input type="text" id="form-field-3" class="input-xxlarge" name="dates" value="<?php echo $dengue->dates?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-4">จำนวนผู้ป่วย (ราย)</label>
            <div class="controls">
                <input type="text" id="form-field-4" class="input-xxlarge" name="sick" value="<?php echo $dengue->sick?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-5">จำนวนผู้ตาย (ราย)</label>
            <div class="controls">
                <input type="text" id="form-field-5" class="input-xxlarge" name="die" value="<?php echo $dengue->die?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-6">อัตราป่วยต่อแสนประชากร</label>
            <div class="controls">
                <input type="text" id="form-field-6" class="input-xxlarge" name="sick_rate" value="<?php echo $dengue->sick_rate?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-7">อัตราตายต่อแสนประชากร</label>
            <div class="controls">
                <input type="text" id="form-field-7" class="input-xxlarge" name="die_rate" value="<?php echo $dengue->die_rate?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-8">อัตราป่วยตาย (ร้อยละ)</label>
            <div class="controls">
                <input type="text" id="form-field-8" class="input-xxlarge" name="sickdie_rate" value="<?php echo $dengue->sickdie_rate?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-9">รายละเอียด</label>
            <div class="controls">
                <textarea class="input-xxlarge" id="form-field-9" name="detail" rows="8"><?php echo $dengue->detail?></textarea>
            </div>
        </div>
        
        <div class="form-actions">
        	<?php echo form_referer() ?>
        	<input type="hidden" name="type" value="<?php echo $_GET['type']?>">
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
$(function() {
    $(".addans").click(function(){          
        $('.clone-blk:first').clone().find("input:text").val("").end().insertBefore($('.form-actions'));
        return false;
    })
    
    $('.del-vid').click(function(){
        $this = $(this);
        $.post('histories/admin/histories/delete_file/' + $this.next('input[type=hidden]').val(),
        function(data){
            $this.closest('.vid-blk').fadeOut(300, function() { $(this).remove(); });
        })
        return false;
    });
});
</script>