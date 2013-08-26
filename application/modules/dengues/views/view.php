<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10" class="breadcrumb_left"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">สถานการณ์โรค</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; <a href="dengues"><?php echo $dengue->module?></a> &gt; สถานการณ์โรคไข้เลือดออกในประเทศไทย ปี <?php echo $dengue->year?>  </div>
            </td>
            <td width="10" align="right" class="breadcrumb_right"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  <h1>สถานการณ์โรคไข้เลือดออกในประเทศไทย ปี <?php echo $dengue->year?><br>
                                                        จำนวนผู้ป่วยสะสม DHF+DF+DSS ณ วันที่ <?php echo mysql_to_th($dengue->created,'S',FALSE)?> (สัปดาห์ที่ <?php echo $dengue->week?>)</h1>
                                                        จำนวนผู้ป่วย <span><?php echo $dengue->sick?> ราย</span><br>
                                                        จำนวนผู้ป่วยตาย <span><?php echo $dengue->die?> ราย</span><br>
                                                        อัตราป่วยต่อแสนประชากร <span><?php echo $dengue->sick_rate?> ราย</span><br>
                                                        อัตราตายต่อแสนประชากร <span><?php echo $dengue->die_rate?> ราย</span><br>
                                                        อัตราป่วยตาย (ร้อยละ) <span><?php echo $dengue->sickdie_rate?> ราย</span><br>
                  <?php echo $dengue->detail?>
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>