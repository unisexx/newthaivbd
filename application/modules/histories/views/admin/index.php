<div class="page-header position-relative">
    <h1><?php echo $_GET['module']?> <!-- <small><i class="icon-double-angle-right"></i> <?php echo $_GET['module']?></small> --></h1>
</div><!--/page-header-->

<div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->

<div class="row-fluid">
    <div class="span12 infobox-container">
        
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
        <div class="infobox infobox-green">
            <div class="infobox-icon"><i class="icon-comments"></i></div>
            <div class="infobox-data">
                <span class="infobox-data-number">สัปดาห์ที่ <?php echo $i?></span>
                <span class="infobox-content"><a href="histories/admin/histories/form?module=<?php echo $_GET['module']?>&type=week&year=<?php echo $_GET['year']?>&week=<?php echo $i?>"><i class="icon-pencil"></i> เพิ่มข้อมูล</a></span>
            </div>
        </div>
        <?php endfor;?>
        
    </div><!--/span-->
</div><!--/row-->

<!-- PAGE CONTENT ENDS HERE -->
</div>