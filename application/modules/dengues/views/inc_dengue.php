<div class="titleGIS">โรคไข้เลือดออก <span class="date"><?php echo mysql_to_th($dengue->created,'S',TRUE)?></span></div>
<div>
	สถานการณ์โรคไข้เลือดออกในประเทศไทย ปี <?php echo $dengue->year?> <br>
	จำนวนผู้ป่วยสะสม DHF+DF+DSS ณ วันที่ <?php echo mysql_to_th($dengue->dates,'S',FALSE)?> (สัปดาห์ที่ <?php echo $dengue->week?>)<br>
	<div style="margin-left:20px;">
	จำนวนผู้ป่วย <span><?php echo $dengue->sick?> ราย</span><br>
	จำนวนผู้ป่วยตาย <span><?php echo $dengue->die?> ราย</span><br>
	อัตราป่วยต่อแสนประชากร <span><?php echo $dengue->sick_rate?> ราย</span><br>
	อัตราตายต่อแสนประชากร <span><?php echo $dengue->die_rate?> ราย</span><br>
	อัตราป่วยตาย (ร้อยละ) <span><?php echo $dengue->sickdie_rate?> ราย</span><br>
	</div>
	<div style="text-align: right"><a href="dengues/view/<?php echo $dengue->id?>">อ่านรายละเอียดเพิ่มเติม</a></div>
	<div class="read-more"><a href="http://www.thaivbd.org/n/dengues?module=%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%93%E0%B9%8C%E0%B9%84%E0%B8%82%E0%B9%89%E0%B9%80%E0%B8%A5%E0%B8%B7%E0%B8%AD%E0%B8%94%E0%B8%AD%E0%B8%AD%E0%B8%81&type=week&year=<?php echo $dengue->year?>">ดูข้อมูลย้อนหลัง</a> <!-- | <a href="dengues">ดูทั้งหมด...</a> --></div>
</div>