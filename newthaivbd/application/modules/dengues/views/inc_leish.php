<div class="titleGIS">โรคลิชมาเนีย <span class="date"><?php echo mysql_to_th($dengue->created,'S',TRUE)?></span></div>
<div>
	สถานการณ์โรคลิชมาเนีย ปี <?php echo $dengue->year?> <br>
	<a href="contents/view/324692" target="_blank">คำอธิบายโรคลิชมาเนีย (Face Sheet)</a><br>
	จำนวนผู้ป่วยสะสม ณ วันที่ <?php echo mysql_to_th($dengue->dates,'S',FALSE)?> (สัปดาห์ที่ <?php echo $dengue->week?>)<br>
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
	
	</div>
	<div style="text-align: right"><a href="dengues/view/<?php echo $dengue->id?>">อ่านรายละเอียดเพิ่มเติม</a></div>
	<div class="read-more"><a href="http://www.thaivbd.org/n/dengues?module=สถานการณ์โรคลิชมาเนีย&type=week&year=<?php echo $dengue->year?>">ดูข้อมูลย้อนหลัง</a> <!-- | <a href="dengues">ดูทั้งหมด...</a> --></div>
</div>