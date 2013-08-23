<div class="titleGIS">โรคไข้เลือดออก <span class="date"><?php echo mysql_to_th($dengue->created,'S',TRUE)?></span></div>
<div>
	สถานการณ์โรคไข้เลือดออกในประเทศไทย ปี <?php echo $dengue->year?> <br>
	จำนวนผู้ป่วยสะสม DHF+DF+DSS ณ วันที่ <?php echo mysql_to_th($dengue->created,'S',FALSE)?> (สัปดาห์ที่ <?php echo $dengue->week?>)<br>
	<div style="margin-left:20px;">
	จำนวนผู้ป่วย <span><?php echo $dengue->sick?> ราย</span><br>
	จำนวนผู้ป่วยตาย <span><?php echo $dengue->die?> ราย</span><br>
	อัตราป่วยต่อแสนประชากร <span><?php echo $dengue->sick_rate?> ราย</span><br>
	อัตราตายต่อแสนประชากร <span><?php echo $dengue->die_rate?> ราย</span><br>
	อัตราป่วยตาย (ร้อยละ) <span><?php echo $dengue->sickdie_rate?> ราย</span><br>
	</div>
	<div style="text-align: right"><a href="dengues/view/<?php echo $dengue->id?>">อ่านรายละเอียดเพิ่มเติม</a></div>
	<div class="read-more"><a href="histories?module=ไข้เลือดออก&type=week&year=<?php echo $dengue->year?>">ดูข้อมูลย้อนหลัง</a> | <a href="dengues">ดูทั้งหมด...</a></div>
</div>