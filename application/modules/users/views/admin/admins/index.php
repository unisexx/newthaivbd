<div class="page-header position-relative">
    <h1>ผู้ดูแล <small><i class="icon-double-angle-right"></i> ส่วนจัดการแอดมิน & ผู้ดูแลระบบ</small></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <th>ยูสเซอร์เนม</th>
        <th>ชื่อ - นามสกุล</th>
        <th>อีเมล์</th>
        <th>กลุ่มผู้ใช้งาน</th>
        <th width="100">
            <?php if(permission('administrators', 'create')):?>
                <?php echo anchor('users/admin/administrators/form',lang('btn_add'),'class="btn btn-primary btn-mini"')?>
            <?php endif;?>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($users->order_by('id','desc')->get_page() as $user):?>
    <tr <?php echo cycle()?>>
        <td><?php echo $user->username?></td>
        <td><?php echo $user->display?></td>
        <td><?php echo $user->email?></td>
        <td><?php echo $user->user_type->name?></td>
        <td>
            <?php if(permission('administrators', 'update')):?>
                <?php echo anchor('users/admin/administrators/form/'.$user->id,'<i class="icon-edit"></i>','class="btn btn-success btn-mini"')?>
            <?php endif;?>
            <?php if(permission('administrators', 'delete')):?>
                <?php echo anchor('users/admin/administrators/delete/'.$user->id,'<i class="icon-trash"></i>','class="btn btn-danger btn-mini" onclick="return confirm(\''.lang('confirm_delete').'\')"')?>
            <?php endif;?>
        </td>
    </tr>
    <?php endforeach?>
    </tbody>
</table>
<?php echo $users->pagination()?>
<!-- PAGE CONTENT ENDS HERE -->
</div>