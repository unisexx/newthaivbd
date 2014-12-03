<div class="page-header position-relative">
    <h1>ติดต่อสอบถาม <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->

<div class="row-fluid">
    <div class="span12">
        <table id="table_report" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>หัวข้อ</th>
                    <th>รายละเอียด</th>
					<th>ชื่อ-นามสกุล</th>
					<th width="75">วันที่แจ้ง</th>
					<th></th>
                </tr>
            </thead>
                                    
            <tbody>
            <?php foreach($contacts as $contact): ?>
                <tr>
                    <td><?php echo $contact->title ?></td>
                    <td><?php echo $contact->detail ?></td>
					<td><?php echo $contact->name ?><br><?php echo $contact->email ?></td>
					<td><?php echo mysql_to_th($contact->created,'S',false) ?></td>
                    <td>
                        <div class='hidden-phone visible-desktop btn-group'>
                            <!-- <a href="contacts/admin/contacts/form/<?php echo $contact->id?>" class='btn btn-mini btn-info'><i class='icon-edit'></i></a> -->
                            <a class='btn btn-mini btn-danger' href="contacts/admin/contacts/delete/<?php echo $contact->id?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><i class='icon-trash'></i></a>
                        </div>
                        <div class='hidden-desktop visible-phone'>
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <!-- <li><a href="contacts/admin/contacts/form/<?php echo $contact->id?>" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left"><span class="green"><i class="icon-edit"></i></span></a></li> -->
                                    <li><a href="contacts/admin/contacts/delete/<?php echo $contact->id?>" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><span class="red"><i class="icon-trash"></i></span> </a></li>
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
    
    var oTable1 = $('#table_report').dataTable( {
    "aoColumns": [
      { "bSortable": false },
      { "bSortable": false },
      { "bSortable": false },
      { "bSortable": false },
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