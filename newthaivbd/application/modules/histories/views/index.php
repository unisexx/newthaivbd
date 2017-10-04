<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10" class="breadcrumb_left"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">ข้อมูลย้อนหลัง</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; ข้อมูล<?php echo $_GET['module']?> ปี <?php echo $_GET['year']?></div>
            </td>
            <td width="10" align="right" class="breadcrumb_right"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  
                <?php if($_GET['type'] == 'week'):?>
                  
                  <h1>ข้อมูล<?php echo $_GET['module']?> ปี <?php echo $_GET['year']?></h1>
                    <center>
                    <select name="year" id="form-field-select-1" onchange="window.open(this.options[this.selectedIndex].value,'_self')">
                        <?php for ($x = (date('Y')+543); $x >= 2548; $x--):?>
                            <option value="histories?module=<?php echo $_GET['module']?>&type=<?php echo $_GET['type']?>&year=<?php echo $x?>" <?php echo ($x == $_GET['year'])?'selected':'';?>>ปี <?php echo $x?></option>
                        <?php endfor;?>
                    </select>
                    </center><br>
                  
                    <?php foreach($histories as $row):?>
                        <div class="list">
                            <a href="histories/view/<?php echo $row->id?>">รายงานสถานการณ์โรค<?php echo $row->module?> ปี <?php echo $row->year?> สัปดาห์ที่ <?php echo $row->week?></a>
                            <span><i class="icon-eye-open"></i> <?php echo $row->counter?></span>
                        </div>
                    <?php endforeach;?>
                
                <?php elseif($_GET['type'] == 'month'):?>
                    
                    <h1>ข้อมูล<?php echo $_GET['module']?></h1>
                    <center>
                    <select name="year" id="form-field-select-1" onchange="window.open(this.options[this.selectedIndex].value,'_self')">
                        <?php for ($x = (date('Y')+543); $x >= 2548; $x--):?>
                            <option value="histories?module=<?php echo $_GET['module']?>&type=<?php echo $_GET['type']?>&year=<?php echo $x?>" <?php echo ($x == $_GET['year'])?'selected':'';?>>ปี <?php echo $x?></option>
                        <?php endfor;?>
                    </select>
                    </center><br>
                    
                    <?php foreach($histories as $row):?>
                        <div class="list">
                            <a href="histories/view/<?php echo $row->id?>">รายงานสถานการณ์โรค<?php echo $row->module?> <?php echo get_month_name($row->month)?> ปี <?php echo $row->year?></a>
                            <span><i class="icon-eye-open"></i> <?php echo $row->counter?></span>
                        </div>
                    <?php endforeach;?>
                <?php elseif($_GET['type'] == 'year'):?>
                    
                    <h1>ข้อมูล<?php echo $_GET['module']?>ย้อนหลัง</h1>
                    <?php foreach($histories as $row):?>
                        <div class="list">
                            <a href="histories/view/<?php echo $row->id?>">รายงานสถานการณ์โรค<?php echo $row->module?> <?php echo $row->year?></a>
                            <span><i class="icon-eye-open"></i> <?php echo $row->counter?></span>
                        </div>
                    <?php endforeach;?>
                    
                <?php endif;?>
                
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>