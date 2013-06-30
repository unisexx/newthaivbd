<div class="titleGIS">โรคมาลาเรีย <span class="date"><?php echo mysql_to_th($content->created,'S',TRUE)?></span></div>
<div>
    <?php echo $content->detail?>
    <div class="read-more"><a href="histories?module=มาลาเรียรายสัปดาห์&type=week&year=<?php echo (date('Y')+543);?>">ดูข้อมูลย้อนหลังรายสัปดาห์</a> | <a href="histories?module=มาลาเรียรายเดือน&type=month&year=<?php echo (date('Y')+543);?>">รายเดือน</a> | <a href="http://www.ddc.moph.go.th/drug_travel/" target="_blank">มาลาเรียในแหล่งท่องเที่ยว</a> | <a href="contents?module=สถานการณ์มาลาเรีย">ดูทั้งหมด...</a></div>
</div>