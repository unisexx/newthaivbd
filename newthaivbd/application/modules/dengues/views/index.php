<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10" class="breadcrumb_left"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">สถานการณ์โรค</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; <?php echo $dengues->module?></div>
            </td>
            <td width="10" align="right" class="breadcrumb_right"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  <h1><?php echo $dengues->module?> <a href="rss/dengues?<?=$_SERVER['QUERY_STRING']?>" target="_blank"><i class="icon-rss" style="color:orange;"></i></a></h1>
                    <center>
                    <select name="year" id="form-field-select-1" onchange="window.open(this.options[this.selectedIndex].value,'_self')">
                        <?php for ($x = (date('Y')+543); $x >= 2548; $x--):?>
                            <option value="dengues?module=<?php echo $_GET['module']?>&type=<?php echo $_GET['type']?>&year=<?php echo $x?>" <?php echo ($x == $_GET['year'])?'selected':'';?>>ปี <?php echo $x?></option>
                        <?php endfor;?>
                    </select>
                    </center><br>
                    
                    <?php foreach($dengues as $row):?>
                        <div class="list">
                            <a href="dengues/view/<?php echo $row->id?>"><?php echo $_GET['module']?>ในประเทศไทย ปี <?php echo $row->year?> สัปดาห์ที่ <?php echo $row->week?></a>
                            <span><i class="icon-eye-open"></i> <?php echo $row->counter?></span>
                        </div>
                    <?php endforeach;?>
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>