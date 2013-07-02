<div class="page-header position-relative">
    <h1>ปฎิทินปฎิบัติงาน <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="calendars/admin/calendars/save/<?php echo $calendar->id ?>" enctype="multipart/form-data">
    	
        
        <div class="control-group">
            <label class="control-label" for="form-field-1">หัวข้อ</label>
            <div class="controls">
                <input type="text" id="form-field-1" class="input-xxlarge" name="title" value="<?php echo $calendar->title?>">
            </div>
        </div>
        
        <div class="control-group">
			<label class="control-label">ประเภท</label>

			<div class="controls">
				<label>
					<input name="className" type="radio" value="label-important">
					<span class="lbl"> <span class="btn btn-mini btn-primary">ประชุม</span></span>
				</label>

				<label>
					<input name="className" type="radio" value="label-success">
					<span class="lbl"> <span class="btn btn-mini btn-danger">สัมนา</span></span>
				</label>

				<label>
					<input name="className" type="radio" value="label-info">
					<span class="lbl"> <span class="btn btn-mini btn-success">อบรม</span></span>
				</label>

				<label>
					<input name="className" type="radio" value="label-yellow">
					<span class="lbl"> <span class="btn btn-mini btn-warning">อื่นๆ</span></span>
				</label>
			</div>
		</div>
		
		<!-- <div class="control-group">
            <label class="control-label" for="form-field-3">เริ่มวันที่</label>
            <div class="controls">
                <input type="text" id="form-field-3" class="date-picker" name="title" value="<?php echo ($calendar->start)?DB2Date($calendar->start):DB2Date(@$_GET['date']); ?>">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-4">ถึงวันที่</label>
            <div class="controls">
                <input type="text" id="form-field-4" class="date-picker" name="title" value="<?php echo ($calendar->end)?DB2Date($calendar->end):DB2Date(@$_GET['date']); ?>">
            </div>
        </div> -->
                    
												
      <div class="control-group">
            <label class="control-label" for="form-field-4">ถึงวันที่</label>
	            <div class="input-append date date-picker" data-date="<?php echo ($calendar->end)?DB2Date($calendar->end):DB2Date(@$_GET['date']); ?>" data-date-format="dd/mm/yyyy" style="margin-left: 20px;">
				    <input size="16" type="text" value="<?php echo ($calendar->end)?DB2Date($calendar->end):DB2Date(@$_GET['date']); ?>">
				    <span class="add-on"><i class="icon-calendar"></i></span>
				</div>
            </div>
        </div>
                            
                            
        
        <!-- <div class="control-group">
            <label class="control-label" for="form-field-9">รายละเอียด</label>
            <div class="controls">
                <textarea class="input-xxlarge" rows="5" id="form-field-9" name="detail"><?php echo $calendar->detail?></textarea>
            </div>
        </div> -->
        
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
<script type="text/javascript">
    tiny('detail');
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('.date-picker').datepicker();
	
	$('#id-date-range-picker-1').daterangepicker();
});
</script>