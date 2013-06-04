<div class="page-header position-relative">
    <h1>Permission <small><i class="icon-double-angle-right"></i> กลุ่มผู้ใช้งาน & กำหนดสิทธิ์</small></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="permissions/admin/permissions/save/<?php echo $user_type->id?>" enctype="multipart/form-data">
        
        <div class="control-group">
		    <label class="control-label" for="username">สิทธิ์การใช้งาน</label>
		    <div class="controls">
		      <?php echo form_input('name', $user_type->name, 'class="span5"'); ?>
		    </div>
		</div>
		
        <?php foreach($module as $key => $item): ?>
			<div class="control-group">
			    <label class="control-label"></label>
			    <div class="controls">
			      	<?php foreach($item['permission'] as $perm): ?>
			      		<label class="checkbox inline">
	                        <input id="<?php echo 'checkbox['.$key.']['.$perm.']'; ?>" type="checkbox" name="<?php echo 'checkbox['.$key.']['.$perm.']'; ?>" value="1" <?php echo (@$rs_perm[$key][$perm]) ? 'checked' : ''; ?> ><span class="lbl"> <?php echo $item['label']; ?></span>
	                    </label>
					<?php endforeach; ?>
			    </div>
			</div>
		<?php endforeach; ?>
        
        <div class="form-actions">
            <button class="btn btn-info" type="submit"><i class="icon-ok"></i> Submit</button>
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset"><i class="icon-undo"></i> Reset</button>
        </div>
        
    </form>
<!-- PAGE CONTENT ENDS HERE -->
</div>