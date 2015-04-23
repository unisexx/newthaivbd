<div class="page-header position-relative">
    <h1><?php echo $_GET['module']?> <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->

<div class="row-fluid">
    <div class="span12 infobox-container">
        
        
        <?php if($_GET['type'] == 'week'):?>
            
            <!-- select box -->
            <div class="control-group">
                <div class="controls">
                    <select name="year" id="form-field-select-1" onchange="window.open(this.options[this.selectedIndex].value,'_self')">
                        <?php for ($x = (date('Y')+543); $x >= 2548; $x--):?>
                            <option value="dengues/admin/dengues?module=<?php echo $_GET['module']?>&type=week&year=<?php echo $x?>" <?php echo ($x == $_GET['year'])?'selected':'';?>>ปี <?php echo $x?></option>
                        <?php endfor;?>
                    </select>
                </div>
            </div>
        	
	        <?php for ($i=1; $i<=52; $i++):?>
	        	<?php $dengue = $dengue->where('module = "'.$_GET['module'].'" and type = "'.$_GET['type'].'" and year ='.$_GET['year'].' and week = '.$i)->get();?>
	        <div class="infobox <?php echo ($dengue->id)?'infobox-green':'infobox-red';?>">
	            <div class="infobox-icon"><i class="icon-comments"></i></div>
	            <div class="infobox-data">
	                <span class="infobox-data-number">สัปดาห์ที่ <?php echo $i?></span>
	                <span class="infobox-content"><a href="dengues/admin/dengues/form/<?php echo @$dengue->id?>?module=<?php echo $_GET['module']?>&type=week&year=<?php echo $_GET['year']?>&week=<?php echo $i?>"><i class="icon-pencil"></i> เพิ่มข้อมูล</a></span>
	            </div>
	        </div>
	        <?php endfor;?>
	        
        <?php elseif($_GET['type'] == 'month'):?>
            
            <!-- select box -->
            <div class="control-group">
                <div class="controls">
                    <select name="year" id="form-field-select-1" onchange="window.open(this.options[this.selectedIndex].value,'_self')">
                        <?php for ($x = (date('Y')+543); $x >= 2548; $x--):?>
                            <option value="dengues/admin/dengues?module=<?php echo $_GET['module']?>&type=week&year=<?php echo $x?>" <?php echo ($x == $_GET['year'])?'selected':'';?>>ปี <?php echo $x?></option>
                        <?php endfor;?>
                    </select>
                </div>
            </div>
        	
        	<?php for ($i=1; $i<=12; $i++):?>
	        	<?php $dengue = $dengue->where('module = "'.$_GET['module'].'" and type = "'.$_GET['type'].'" and year ='.$_GET['year'].' and month = '.$i)->get();?>
	        <div class="infobox <?php echo ($dengue->id)?'infobox-green':'infobox-red';?>">
	            <div class="infobox-icon"><i class="icon-comments"></i></div>
	            <div class="infobox-data">
	                <span class="infobox-data-number"><?php echo get_month_name($i)?></span>
	                <span class="infobox-content"><a href="dengues/admin/dengues/form/<?php echo @$dengue->id?>?module=<?php echo $_GET['module']?>&type=month&year=<?php echo $_GET['year']?>&month=<?php echo $i?>"><i class="icon-pencil"></i> เพิ่มข้อมูล</a></span>
	            </div>
	        </div>
	        <?php endfor;?>
	    
	    <?php elseif($_GET['type'] == 'year'):?>
	        
	        <?php for ($x = (date('Y')+543); $x >= 2548; $x--):?>
	            <?php $history = $history->where('module = "'.$_GET['module'].'" and type = "'.$_GET['type'].'" and year ='.$x)->get();?>
            <div class="infobox <?php echo ($history->id)?'infobox-green':'infobox-red';?>">
                <div class="infobox-icon"><i class="icon-comments"></i></div>
                <div class="infobox-data">
                    <span class="infobox-data-number">ปี <?php echo $x?></span>
                    <span class="infobox-content"><a href="dengues/admin/dengues/form/<?php echo @$history->id?>?module=<?php echo $_GET['module']?>&type=year&year=<?php echo $x?>"><i class="icon-pencil"></i> เพิ่มข้อมูล</a></span>
                </div>
            </div>
            <?php endfor;?>
	        
        <?php endif;?>
        
    </div><!--/span-->
</div><!--/row-->

<hr>

<?if(@$_GET['module'] == 'สถานการณ์ไข้เลือดออก'):?>
<div class="row-fluid">
	
	<div class="page-header position-relative">
	    <h1>รายงานโรคไข้เลือดออก ประเทศไทย <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
	</div><!--/page-header-->

<!-- PAGE CONTENT BEGINS HERE -->
    <form id="validation-form" class="form-horizontal" method="post" action="dengues/admin/dengues/save_report" enctype="multipart/form-data">
        
        <div class="control-group">
            <label class="control-label" for="form-field-2">หัวข้อ</label>
            <div class="controls">
                <input type="text" id="form-field-2" class="input-xxlarge" name="title" value="<?=@$dangue_report->title?>">
            </div>
        </div>
        
        <!-- file manager -->
        <div class="control-group">
            <label class="control-label" for="form-field-2">ไฟล์แนบ</label>
            <div class="controls">
                <input type="text" id="form-field-2" class="input-xxlarge" name="files" value="<?=@$dangue_report->files?>"> <input class="btn btn-mini btn-info" type="button" name="browse" value="เลือกไฟล์" onclick="browser($(this).prev(),'file')" />
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
<?endif;?>


<!-- PAGE CONTENT ENDS HERE -->
</div>

<!-- inline scripts related to this page -->
<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>