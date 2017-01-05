<div class="page-header position-relative">
    <h1>ติดต่อสอบถาม</h1>
</div><!--/page-header-->

<table class="table">
	<tr>
		<th>ชื่อ-นามสกุล: </th>
		<td><?php echo $contact->name ?></td>
	</tr>
	<tr>
		<th>อีเมล์: </th>
		<td><?php echo $contact->email ?></td>
	</tr>
	<tr>
		<th>โทรศัพท์: </th>
		<td><?php echo $contact->telephone ?></td>	
	</tr>
	<tr>
		<th>เรื่องที่ติดต่อ: </th>
		<td><?php echo $contact->title ?></td>
	</tr>
	<tr>
		<th>รายละเอียด: </th>
		<td><?php echo nl2br($contact->detail) ?></td>
	</tr>
</table>
<hr>


<h3 class="header smaller lighter blue">&nbsp;ส่งอีเมล์ตอบคำถาม</h3>

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="contacts/admin/contacts/send_mail" enctype="multipart/form-data">
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">อีเมล์ผู้รับ</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="email" value="<?=$contact->email?>">
            </div>
        </div>
        
         <div class="control-group">
            <label class="control-label" for="form-field-1">หัวข้อ</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="subject" value="">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="detail">รายละเอียด</label>
            <div class="controls">
            	<?php echo uppic_mce();?>
                <textarea class="input-xxlarge email" rows="5" id="detail" name="detail"></textarea>
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

<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>