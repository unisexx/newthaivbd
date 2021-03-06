<div class="page-header position-relative">
    <h1><?php echo $_GET['module']?> <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="contents/admin/contents/save/<?php echo $content->id?>?module=<?php echo $_GET['module']?>" enctype="multipart/form-data">
        
        <!-- <div class="control-group">
            <label class="control-label" for="id-input-file-1">ภาพประกอบข่าว</label>
            <div class="controls">
                <?php if($content->image):?>
                <img class="img" style="width:150px;" src="<?php echo (is_file('uploads/content/'.$content->image))? 'uploads/content/'.$content->image : 'media/images/dummy/656x253.gif' ?>"  /> <br><br>
                <?php endif;?>
                <div class="input-xxlarge">
                    <input type="file" id="id-input-file-1" name="image"/>
                </div>
            </div>
        </div> -->
        
        <!-- file manager -->
        <?if($_GET['module'] != "เพจ"):?>
        <div class="control-group">
            <label class="control-label" for="form-field-2">ภาพประกอบข่าว</label>
            <div class="controls">
            	<?php if($content->image):?>
                <img class="img" style="width:150px;" src="<?php echo (is_file($content->image))? $content->image : 'media/images/dummy/656x253.gif' ?>"  /> <br><br>
                <?php endif;?>
                <input type="text" id="form-field-2" class="input-xxlarge" name="image" value="<?php echo $content->image?>"> <input class="btn btn-mini btn-info" type="button" name="browse" value="เลือกไฟล์" onclick="browser($(this).prev(),'file')" />
            </div>
        </div>
        <?endif;?>
        
        <?if($_GET['module'] == "ข่าวประกวดราคา"):?>
        <div class="control-group">
            <label class="control-label" for="form-field-1">หมวดหมู่</label>
            <div class="controls">
                <select class="form-control" name="category">
                	<option value="จัดซื้อจัดจ้าง" <?=$content->category == 'จัดซื้อจัดจ้าง' ? 'selected' : '' ;?>>จัดซื้อจัดจ้าง</option>
                	<option value="ประกวดราคา" <?=$content->category == 'ประกวดราคา' ? 'selected' : '' ;?>>ประกวดราคา</option>
                	<option value="TOR" <?=$content->category == 'TOR' ? 'selected' : '' ;?>>TOR</option>
                	<option value="เผยแพร่ราคากลาง ปปช." <?=$content->category == 'เผยแพร่ราคากลาง ปปช.' ? 'selected' : '' ;?>>เผยแพร่ราคากลาง ปปช.</option>
                </select>
            </div>
        </div>
        <?endif;?>
        
        <?if($_GET['module'] == "ข่าวประชาสัมพันธ์"):?>
        <div class="control-group">
            <label class="control-label" for="form-field-1">หมวดหมู่</label>
            <div class="controls">
                <select class="form-control" name="category">
                	<option value="หนังสือ" <?=$content->category == 'หนังสือ' ? 'selected' : '' ;?>>หนังสือ</option>
                	<option value="คู่มือ" <?=$content->category == 'คู่มือ' ? 'selected' : '' ;?>>คู่มือ</option>
                	<option value="ผลงาน" <?=$content->category == 'ผลงาน' ? 'selected' : '' ;?>>ผลงาน</option>
                	<option value="วิชาการ" <?=$content->category == 'วิชาการ' ? 'selected' : '' ;?>>วิชาการ</option>
                	<option value="ประกาศ" <?=$content->category == 'ประกาศ' ? 'selected' : '' ;?>>ประกาศ</option>
                	<option value="สมัครงาน" <?=$content->category == 'สมัครงาน' ? 'selected' : '' ;?>>สมัครงาน</option>
                </select>
            </div>
        </div>
        <?endif;?>
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">หัวข้อ</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="title" value="<?php echo $content->title?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-9">รายละเอียด</label>
            <div class="controls">
                <textarea class="input-xxlarge" rows="5" id="form-field-9" name="detail"><?php echo $content->detail?></textarea>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label">วันที่เริ่มแสดง</label>
            <div class="input-append date date-picker" style="margin-left: 20px;">
			    <input size="16" type="text" name="start_date" value="<?php echo DB2Date(($content->start_date)?$content->start_date:date("Y-m-d"))?>">
			    <span class="add-on"><i class="icon-calendar"></i></span>
			</div>
        </div>
        
        <div class="control-group">
            <label class="control-label">วันที่สิ้นสุด</label>
            <div class="input-append date date-picker" style="margin-left: 20px;">
                <input size="16" type="text" name="end_date" value="<?php echo DB2Date($content->end_date)?>">
                <span class="add-on"><i class="icon-calendar"></i></span>
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
$(function() {
    
    $('#id-input-file-1').ace_file_input({
        no_file:'No File ...',
        btn_choose:'Choose',
        btn_change:'Change',
        droppable:false,
        onchange:null,
        thumbnail:false //| true | large
        //whitelist:'gif|png|jpg|jpeg'
        //blacklist:'exe|php'
        //onchange:''
        //
    });
    
    $('#validation-form').validate({
        errorElement: 'span',
        errorClass: 'help-inline',
        focusInvalid: false,
        rules: {
            title: {
                required: true
            }
        },

        messages: {
            title: {
                required: "กรุณากรอกหัวข้อ"
            }
        },

        invalidHandler: function (event, validator) { //display error alert on form submit   
            $('.alert-error', $('.login-form')).show();
        },

        highlight: function (e) {
            $(e).closest('.control-group').removeClass('info').addClass('error');
        },

        success: function (e) {
            $(e).closest('.control-group').removeClass('error').addClass('info');
            $(e).remove();
        },

        errorPlacement: function (error, element) {
            if(element.is(':checkbox') || element.is(':radio')) {
                var controls = element.closest('.controls');
                if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                else error.insertAfter(element.nextAll('.lbl').eq(0));
            } 
            else if(element.is('.chzn-select')) {
                error.insertAfter(element.nextAll('[class*="chzn-container"]').eq(0));
            }
            else error.insertAfter(element);
        },

        // submitHandler: function (form) {
        // },
        // invalidHandler: function (form) {
        // }
    });
    
    $('.date-picker').datepicker({
        language: 'th',
        format: 'dd/mm/yyyy',
        autoclose: true
    });
});
</script>