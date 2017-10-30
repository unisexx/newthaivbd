<div class="titleGIS">โรคไข้เลือดออก <span class="date"><?php echo mysql_to_th($dengue->created,'S',TRUE)?></span></div>
<div>
	สถานการณ์โรคไข้เลือดออกในประเทศไทย ปี <?php echo $dengue->year?> <br>
	<a href="contents/view/324690" target="_blank">คำอธิบายโรคไข้เลือดออก (Face Sheet)</a><br>
	จำนวนผู้ป่วยสะสม DHF+DF+DSS ณ วันที่ <?php echo mysql_to_th($dengue->dates,'S',FALSE)?> (สัปดาห์ที่ <?php echo $dengue->week?>)<br>
	<div style="margin-left:20px;">
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
	<!-- <style type="text/css">
		#dengue_im_blk img{max-width:445px !important; height:100% !important;}
	</style>
	<div id="dengue_im_blk"><?php echo $dengue->detail?></div> -->
	<a href="dengues/download/<?=$dangue_report->id?>" target="_blank" style="float: right;"><?=$dangue_report->title?></a>
	</div>
	<div style="text-align: right"><a href="dengues/view/<?php echo $dengue->id?>">อ่านรายละเอียดเพิ่มเติม</a></div>
	<div class="read-more"><a href="http://www.thaivbd.org/n/histories?module=%E0%B9%84%E0%B8%82%E0%B9%89%E0%B9%80%E0%B8%A5%E0%B8%B7%E0%B8%AD%E0%B8%94%E0%B8%AD%E0%B8%AD%E0%B8%81&type=week&year=<?php echo $dengue->year?>">ดูข้อมูลย้อนหลัง</a> <!-- | <a href="dengues">ดูทั้งหมด...</a> --></div>
</div>