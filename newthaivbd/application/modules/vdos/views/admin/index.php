<div class="page-header position-relative">
    <h1>วีดีโอ <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->



<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->

<div class="row-fluid">
    <div class="span12">
        <table id="table_report" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>สถานะ</th>
                    <th>หมวดหมู่</th>
                    <th>เขียนโดย</th>
                    <th><a class="btn btn-mini btn-primary" href="vdos/admin/vdos/form"><i class="icon-pencil"></i> เพิ่มรายการ </a></th>
                </tr>
            </thead>
                                    
            <tbody>
            <?php foreach($categories as $row): ?>
                <tr>
                    <td>
                        <label><input class="ace-switch ace-switch-4" type="checkbox" name="status" value="<?php echo $row->id ?>" <?php echo ($row->status=="approve")?'checked="checked"':'' ?>/><span class="lbl"></span></label>
                    </td>
                    <td><?php echo $row->name?></td>
                    <td><?php echo $row->user->display?></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <a href="vdos/admin/vdos/form/<?php echo $row->id?>" class='btn btn-mini btn-info'><i class='icon-edit'></i></a>
                            <a href="vdos/admin/vdos/delete/<?php echo $row->id?>" class='btn btn-mini btn-danger' onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><i class='icon-trash'></i></a>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li><a href="vdos/admin/vdos/form/<?php echo $row->id?>" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li>
                                    <li><a href="vdos/admin/vdos/delete/<?php echo $row->id?>" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><span class="red"><i class="icon-trash"></i></span> </a></li>
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
    $("input:checkbox").click(function(){
        var value = this.checked ? "approve" : "draft";
        var name = $(this).attr("name");
        var jsonOptions= {};
        jsonOptions[name]= value;
        $.post("vdos/admin/vdos/approve/" + this.value,jsonOptions);
    });
    
    var oTable1 = $('#table_report').dataTable( {
    "aoColumns": [
      { "bSortable": false },
      null, null,
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