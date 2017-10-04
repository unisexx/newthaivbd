<div class="page-header position-relative">
    <h1>หน้าแรก <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->

<div class="row-fluid">
	<div class="span2">
		<table class="form">
			<tr>
				<th><label class="control-label" for="form-field-1">เปิดแสดงหน้าแรก</label></th>
				<td>
					<label><input class="ace-switch ace-switch-4" type="checkbox" name="status" value="approve" <?php echo ($coverpages->status=="approve")?'checked="checked"':'' ?>/><span class="lbl"></span>
				</td>
			</tr>
		</table>
	</div>	
</div>


<div class="row-fluid">
    <div class="span12">
    	
        <table id="table_report" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>สถานะ</th>
                    <th>หัวข้อ</th>
					<th width="75">เขียนโดย</th>
					<th>วันที่สร้าง</th>
					<th>แก้ไขล่าสุด</th>
                    <th><a class="btn btn-mini btn-primary" href="coverpages/admin/coverpages/form"><i class="icon-pencil"></i> เพิ่มรายการ </a></th>
                </tr>
            </thead>
                                   
            <tbody>
            <?php foreach($coverpages as $row):?>
                <tr>
                    <td>
                        <label><input class="ace-switch ace-switch-4" type="checkbox" name="active" value="<?php echo $row->id ?>" <?php echo ($row->active==1)?'checked="checked"':'' ?>/><span class="lbl"></span></label>
                    </td>
                    <td><?php echo $row->title?></td>
					<td><?php echo $row->user->username?></td>
					<td><?php echo mysql_to_th($row->created,'S',TRUE) ?></td>
			        <td><?php echo mysql_to_th($row->updated,'S',TRUE) ?></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <a href="coverpages/admin/coverpages/form/<?php echo $row->id?>" class='btn btn-mini btn-info'><i class='icon-edit'></i></a>
                            <a class='btn btn-mini btn-danger' href="coverpages/admin/coverpages/delete/<?php echo $row->id?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><i class='icon-trash'></i></a>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="coverpages/admin/coverpages/form/<?php echo $row->id?>" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="ccoverpages/admin/coverpages/delete/<?php echo $row->id?>" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        
    </div><!--/span-->
</div><!--/row-->

<!-- PAGE CONTENT ENDS HERE -->
</div>

<script type="text/javascript">
$(document).ready(function(){
    $("input[name=active]").click(function(){
        var value = this.checked ? "1" : "0";
        var name = $(this).attr("name");
        var jsonOptions= {};
        jsonOptions[name]= value;
        $.post("coverpages/admin/coverpages/approve2/" + this.value,jsonOptions);
    });
    
    $("input[name=status]").click(function(){
        var value = this.checked ? "approve" : "draft";
        var name = $(this).attr("name");
        var jsonOptions= {};
        jsonOptions[name]= value;
        $.post("coverpages/admin/coverpages/approve/" + this.value,jsonOptions);
    });
    
   
	var oTable1 = $('#table_report').dataTable( {
    "aoColumns": [
      { "bSortable": false },
      null, null, null, null,
      { "bSortable": false }
    ] } );
    
    
    $('table th input:checkbox').on('click' , function(){
        var that = this;
        $(this).closest('table').find('tr > td:first-child input:checkbox')
        .each(function(){
            this.checked = that.checked;
            $(this).closest('tr').toggleClass('selected');
        });
            
    });

    $('[data-rel=tooltip]').tooltip();
});
</script>