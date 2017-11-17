<div class="page-header position-relative">
    <h1>เมนูบาร์</h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="menus/admin/menus/save/<?php echo $menu->id?>" enctype="multipart/form-data">
        
        
        <!-- file manager -->
        <!-- <div class="control-group">
            <label class="control-label" for="form-field-2">แบนเนอร์</label>
            <div class="controls">
                <?php if($menu->image):?>
                <img class="img" style="width:150px;" src="<?php echo (is_file($menu->image))? $menu->image : 'media/images/dummy/656x253.gif' ?>"  /> <br><br>
                <?php endif;?>
                <input type="text" id="form-field-2" class="input-xxlarge" name="image" value="<?php echo $menu->image?>"> <input class="btn btn-mini btn-info" type="button" name="browse" value="เลือกไฟล์" onclick="browser($(this).prev(),'file')" />
            </div>
        </div> -->
        
        <div class="control-group">
            <label class="control-label" for="form-field-3">ชื่อเมนู</label>
            <div class="controls">
                <input type="text" id="form-field-3" class="input-xxlarge" name="title" value="<?php echo $menu->title?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">URL</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="url" value="<?php echo $menu->url?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">หมวดหมู่ย่อย</label>
            <div class="controls">
                <a href="#" class="btn btn-primary btn-mini addans" ><i class="icon-pencil"></i> เพิ่มหมวดหมู่ย่อย</a>
            </div>
        </div>
        
        <?php if($menu->id):?>
        	<?foreach($smenu as $item):?>
        		<div class="control-group smenu">
		            <label class="control-label" for="form-field-1"></label>
		            <div class="controls">
		            <input type="text" class="input-mini" name="sorderlist[]" value="<?=$item->orderlist?>" placeholder="ลำดับ"> <input type="text" name="stitle[]" value="<?=$item->title?>" placeholder="ชื่อเมนูย่อย"> <input type="text" name="surl[]" value="<?=$item->url?>" placeholder="url"> <input type="hidden" name="sid[]" value="<?=$item->id?>"> <a class="btn btn-mini btn-danger del-menu" href="#"><i class='icon-trash'></i></a>
		            </div>
		        </div>
        	<?endforeach;?>
        <?php endif;?>
        
        <div class="control-group smenu">
            <label class="control-label" for="form-field-1"></label>
            <div class="controls">
            <input type="text" class="input-mini" name="sorderlist[]" value="" placeholder="ลำดับ"> <input type="text" class="" name="stitle[]" value="" placeholder="ชื่อเมนูย่อย"> <input type="text" name="surl[]" value="" placeholder="url">
            <input name="sid[]" value="" type="hidden">
            <a class="btn btn-mini btn-danger del-menu" href="#"><i class='icon-trash'></i></a>
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
    $(".addans").click(function(){			
		$('.smenu:first').clone().find("input:text").val("").end().insertBefore($('.form-actions'));
		return false;
	});
	
	$('.del-menu').click(function(){
		if (!confirm('Are you sure?')) return false;
	    $this = $(this);
	    $.post('menus/admin/menus/delete_submenu/' + $this.prev('input[type=hidden]').val(),
        function(data){
            $this.closest('.control-group').fadeOut("normal", function() {
                $(this).remove();
            });
        })
	    return false;
	});
	
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
});
</script>