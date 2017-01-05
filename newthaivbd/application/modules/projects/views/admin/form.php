<div class="page-header position-relative">
    <h1><?php echo $_GET['module']?> <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="projects/admin/projects/save/<?php echo $project->id?>?module=<?php echo $_GET['module']?>" enctype="multipart/form-data">
        
        <!-- upload file -->
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
        <div class="control-group">
            <label class="control-label" for="form-field-2">ไฟล์</label>
            <div class="controls">
                <input type="text" id="form-field-2" class="input-xxlarge" name="files" value="<?php echo $project->files?>"> <input class="btn btn-mini btn-info" type="button" name="browse" value="เลือกไฟล์" onclick="browser($(this).prev(),'file')" /> 
                <?php if($project->files):?>
                    <a class="btn btn-danger btn-mini" data-rel="tooltip" title="ดาวน์โหลด" href="projects/admin/projects/download/<?php echo $project->id?>"><i class="icon-download-alt"></i></a>
                <?php endif;?>
            </div>
        </div>
        
        <!-- text input -->
        <div class="control-group">
            <label class="control-label" for="form-field-1">คำอธิบาย</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="title" value="<?php echo $project->title?>">
            </div>
        </div>
        
        <!-- tinyMce wysiwyg textarea -->
        <!-- <div class="control-group">
            <label class="control-label" for="form-field-9">รายละเอียด</label>
            <div class="controls">
                <textarea class="input-xxlarge" rows="5" id="form-field-9" name="detail"><?php echo $content->detail?></textarea>
            </div>
        </div> -->
        
        <!-- submit button -->
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
    $('[data-rel=tooltip]').tooltip();
    
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