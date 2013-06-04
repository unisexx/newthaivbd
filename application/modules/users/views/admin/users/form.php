<div class="page-header position-relative">
    <h1>User <small><i class="icon-double-angle-right"></i> สมาชิก</small></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="users/admin/users/save/<?php echo $user->id?>" enctype="multipart/form-data">
        
		<div class="control-group">
		    <label class="control-label" for="username">ยูสเซอร์เนม</label>
		    <div class="controls">
		      <input id="username" class="span5" type="text" name="username" value="<?php echo $user->username?>">
		    </div>
		</div>
		
		<div class="control-group">
		    <label class="control-label" for="name">ชื่อ - นามสกุล</label>
		    <div class="controls">
		      <input id="name" class="span5" type="text" name="name" value="<?php echo $user->name?>">
		    </div>
		</div>
		
		<div class="control-group">
		    <label class="control-label" for="address">ที่อยู่</label>
		    <div class="controls">
		      <textarea id="address" class="span5" name="address" rows="3"><?php echo $user->address?></textarea>
		    </div>
		</div>
		
		<div class="control-group">
		    <label class="control-label" for="province">จังหวัด</label>
		    <div class="controls">
		      <?php echo form_dropdown('province_id',get_option('id','name','provinces'),$user->province_id,'id="province_id" class="span5"','--- เลือกจังหวัด ---') ?>
		    </div>
		</div>
		
		<div class="control-group">
		    <label class="control-label" for="province" class="span5">อำเภอ</label>
		    <div id="amphur" class="controls">
		       <?php
					echo form_dropdown('amphur_id',(empty($user->province_id)) ? array() : get_option('id','amphur_name','amphures where province_id ='.$user->province_id),$user->amphur_id,'id="amphur_id" class="span5"','--- เลือกอำเภอ ---');
		       ?>
		    </div>
		</div>
		
		<div class="control-group">
		    <label class="control-label" for="phone">เบอร์โทรศัพท์</label>
		    <div class="controls">
		      <input type="text" id="phone" class="span5" name="phone" value="<?php echo $user->phone?>">
		    </div>
		</div>
		
		<div class="control-group">
		    <label class="control-label" for="email">อีเมล์</label>
		    <div class="controls">
		      <input type="text" id="email" class="span5" name="email" value="<?php echo $user->email?>">
		    </div>
		</div>
		
		  <div class="control-group">
		    <label class="control-label" for="facebook" >facebook</label>
		    <div class="controls">
		      <input type="text" id="facebook" class="span5" name="facebook" value="<?php echo $user->facebook?>">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="twitter">twitter</label>
		    <div class="controls">
		      <input type="text" id="twitter" class="span5" name="twitter" value="<?php echo $user->twitter?>">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="google">google+</label>
		    <div class="controls">
		      <input type="text" id="google" class="span5" name="googleplus" value="<?php echo $user->googleplus?>">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="other">ช่องทางการติดต่ออื่นๆ</label>
		    <div class="controls">
		      <textarea id="other" rows="3" class="span5" name="other"><?php echo $user->other?></textarea>
		    </div>
		  </div>
		  <div class="control-group">
		        <label class="control-label" for="inputPass">รหัสผ่าน</label>
		        <div class="controls">
		          <input type="password" name="password" id="inputPass" placeholder="Password">
		        </div>
		    </div>
		    <div class="control-group">
		        <label class="control-label" for="re-inputPass">ยืนยันรหัสผ่าน</label>
		        <div class="controls">
		          <input type="password" name="_password" id="re-inputPass" placeholder="Re Password">
		        </div>
		    </div>
		  <div class="control-group">
		    <label class="control-label" for="inputCaptcha">รหัสลับ</label>
		    <div class="controls">
		      <img src="users/captcha" /><Br>
		      <input type="text" name="captcha" class="input-small" id="inputCaptcha" placeholder="รหัสลับ">
		    </div>
		  </div>
        
        <div class="form-actions">
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
});
</script>