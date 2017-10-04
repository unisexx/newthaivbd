<style>
.content img{max-width:720px !important;}
</style>
<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10" class="breadcrumb_left"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">สถานการณ์โรค</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; <a href="dengues?module=<?=@$dengue->module?>&type=<?=@$dengue->type?>&year=<?=@$dengue->year?>"><?php echo $dengue->module?></a> &gt; <?php echo $dengue->module?>ในประเทศไทย ปี <?php echo $dengue->year?>  </div>
            </td>
            <td width="10" align="right" class="breadcrumb_right"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
          		  <?=addThis();?>
                  <h1><?php echo $dengue->module?>ในประเทศไทย ปี <?php echo $dengue->year?><br>
						จำนวนผู้ป่วยสะสม ณ วันที่ <?php echo mysql_to_th($dengue->dates,'S',FALSE)?> (สัปดาห์ที่ <?php echo $dengue->week?>)</h1>
						<table>
							<tr>
								<td width="80%">จำนวนผู้ป่วย</td>
								<td align="right"><?php echo $dengue->sick?></td>
								<td width="10%" align="right">ราย</td>
							</tr>
							<tr>
								<td>จำนวนผู้ป่วยตาย</td>
								<td align="right"><?php echo $dengue->die?></td>
								<td align="right">ราย</td>
							</tr>
							<tr>
								<td>อัตราป่วยต่อแสนประชากร</td>
								<td align="right"><?php echo $dengue->sick_rate?></td>
								<td align="right">ราย</td>
							</tr>
							<tr>
								<td>อัตราตายต่อแสนประชากร</td>
								<td align="right"><?php echo $dengue->die_rate?></td>
								<td align="right">ราย</td>
							</tr>
							<tr>
								<td>อัตราป่วยตาย (ร้อยละ)</td>
								<td align="right"><?php echo $dengue->sickdie_rate?></td>
								<td align="right">ราย</td>
							</tr>
						</table>
                  <?php echo $dengue->detail?>
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>