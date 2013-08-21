<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10" class="breadcrumb_left"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">ข้อมูลย้อนหลัง</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; <a href="histories?module=<?php echo $history->module?>&type=<?php echo $history->type?>&year=<?php echo $history->year?>">ข้อมูล<?php echo $history->module?> ปี <?php echo $history->year?></a> &gt; รายงานสถานการณ์โรค<?php echo $history->module?> ปี <?php echo $history->year?></div>
            </td>
            <td width="10" align="right" class="breadcrumb_right"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  <?php if($history->type == 'week'):?>
                      
                    <h1>รายงานสถานการณ์โรค<?php echo $history->module?> ปี <?php echo $history->year?> สัปดาห์ที่ <?php echo $history->week?></h1>
                  
                    <?php foreach($history->history_file->get() as $row):?>
                        <div class="list">
                            <a href="histories/download/<?php echo $row->id?>"><?php echo $row->title?></a>
                            <span><i class="icon-download-alt"></i> <?php echo $row->counter?></span>
                        </div>
                    <?php endforeach;?>
                    
                  <?php elseif($history->type == 'month'):?>
                  
                  
                    <h1>รายงานสถานการณ์โรค<?php echo $history->module?> <?php echo get_month_name($history->month)?> ปี <?php echo $history->year?></h1>
                  
                    <?php foreach($history->history_file->get() as $row):?>
                        <div class="list">
                            <a href="histories/download/<?php echo $row->id?>"><?php echo $row->title?></a>
                            <span><i class="icon-download-alt"></i> <?php echo $row->counter?></span>
                        </div>
                    <?php endforeach;?>
                    
                    
                  <?php elseif($history->type == 'year'):?>
                      
                    <h1>รายงานสถานการณ์โรค<?php echo $history->module?> <?php echo $history->year?></h1>
                  
                    <?php foreach($history->history_file->get() as $row):?>
                        <div class="list">
                            <a href="histories/download/<?php echo $row->id?>"><?php echo $row->title?></a>
                            <span><i class="icon-download-alt"></i> <?php echo $row->counter?></span>
                        </div>
                    <?php endforeach;?>
                      
                  <?php endif;?>
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>