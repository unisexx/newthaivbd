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
                            <option value="histories/admin/histories?module=<?php echo $_GET['module']?>&type=week&year=<?php echo $x?>" <?php echo ($x == $_GET['year'])?'selected':'';?>>ปี <?php echo $x?></option>
                        <?php endfor;?>
                    </select>
                </div>
            </div>
        	
	        <?php for ($i=1; $i<=52; $i++):?>
	        	<?php $history = $history->where('module = "'.$_GET['module'].'" and type = "'.$_GET['type'].'" and year ='.$_GET['year'].' and week = '.$i)->get();?>
	        <div class="infobox <?php echo ($history->id)?'infobox-green':'infobox-red';?>">
	            <div class="infobox-icon"><i class="icon-comments"></i></div>
	            <div class="infobox-data">
	                <span class="infobox-data-number">สัปดาห์ที่ <?php echo $i?></span>
	                <span class="infobox-content"><a href="histories/admin/histories/form/<?php echo @$history->id?>?module=<?php echo $_GET['module']?>&type=week&year=<?php echo $_GET['year']?>&week=<?php echo $i?>"><i class="icon-pencil"></i> เพิ่มข้อมูล</a></span>
	            </div>
	        </div>
	        <?php endfor;?>
	        
        <?php elseif($_GET['type'] == 'month'):?>
            
            <!-- select box -->
            <div class="control-group">
                <div class="controls">
                    <select name="year" id="form-field-select-1" onchange="window.open(this.options[this.selectedIndex].value,'_self')">
                        <?php for ($x = (date('Y')+543); $x >= 2548; $x--):?>
                            <option value="histories/admin/histories?module=<?php echo $_GET['module']?>&type=week&year=<?php echo $x?>" <?php echo ($x == $_GET['year'])?'selected':'';?>>ปี <?php echo $x?></option>
                        <?php endfor;?>
                    </select>
                </div>
            </div>
        	
        	<?php for ($i=1; $i<=12; $i++):?>
	        	<?php $history = $history->where('module = "'.$_GET['module'].'" and type = "'.$_GET['type'].'" and year ='.$_GET['year'].' and month = '.$i)->get();?>
	        <div class="infobox <?php echo ($history->id)?'infobox-green':'infobox-red';?>">
	            <div class="infobox-icon"><i class="icon-comments"></i></div>
	            <div class="infobox-data">
	                <span class="infobox-data-number"><?php echo get_month_name($i)?></span>
	                <span class="infobox-content"><a href="histories/admin/histories/form/<?php echo @$history->id?>?module=<?php echo $_GET['module']?>&type=month&year=<?php echo $_GET['year']?>&month=<?php echo $i?>"><i class="icon-pencil"></i> เพิ่มข้อมูล</a></span>
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
                    <span class="infobox-content"><a href="histories/admin/histories/form/<?php echo @$history->id?>?module=<?php echo $_GET['module']?>&type=year&year=<?php echo $x?>"><i class="icon-pencil"></i> เพิ่มข้อมูล</a></span>
                </div>
            </div>
            <?php endfor;?>
	        
        <?php endif;?>
        
    </div><!--/span-->
</div><!--/row-->

<!-- PAGE CONTENT ENDS HERE -->
</div>