<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10"><img src="themes/thaivbd/images/breadcrumb_left.png" width="10" height="26"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">สถานการณ์โรค</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; <?php echo $dengues->module?></div>
            </td>
            <td width="10" align="right"><img src="themes/thaivbd/images/breadcrumb_right.png" width="10" height="26"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  <h1><?php echo $dengues->module?></h1>
                    <?php foreach($dengues as $row):?>
                        <div class="list">
                            <a href="dengues/view/<?php echo $row->id?>">สถานการณ์โรคไข้เลือดออกในประเทศไทย ปี <?php echo $row->year?> สัปดาห์ที่ <?php echo $row->week?></a>
                            <span><i class="icon-eye-open"></i> <?php echo $row->counter?></span>
                        </div>
                    <?php endforeach;?>
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>