<div class="page-header position-relative">
    <h1>หน้าแรก <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="coverpages/admin/coverpages/save/<?php echo $rs->id ?>" enctype="multipart/form-data">
        
        <!-- file manager -->
        <div class="control-group">
            <label class="control-label" for="form-field-2">รูปภาพ</label>
            <div class="controls">
            	<?php if($rs->image):?>
                <img class="img" style="width:150px;" src="<?php echo (is_file($rs->image))? $rs->image : 'media/images/dummy/656x253.gif' ?>"  /> <br><br>
                <?php endif;?>
                <input type="text" id="form-field-2" class="input-xxlarge" name="image" value="<?php echo $rs->image?>"> <input class="btn btn-mini btn-info" type="button" name="browse" value="เลือกไฟล์" onclick="browser($(this).prev(),'file')" />
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">หัวข้อ</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="title" value="<?php echo $rs->title?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="color">สีพื้นหลัง</label>
            <div class="controls">
            	<div id="picker"></div>
                <input type="text" id="color" class="input-xxlarge" name="background" value="<?php echo ($rs->background == "")?"#123456":$rs->background;?>">
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

<link rel="stylesheet" href="media/js/farbtastic/farbtastic.css" type="text/css" />
<script type="text/javascript" src="media/js/farbtastic/farbtastic.js"></script>
<script type="text/javascript">
$(function(){
	
	$('#picker').farbtastic('#color');
	
	$("#picker").hide();
	
	$('#color').focus(function(){
		$('#picker').slideUp(function(){
			$(this).slideDown();
		});
	});
	
	// $('#color').blur(function(){
		// $('#picker').slideDown(function(){
			// $(this).slideUp();
		// });
	// });
});
</script>