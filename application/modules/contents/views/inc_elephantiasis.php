<div class="titleGIS">โรคเท้าช้าง <span class="date"><?php echo mysql_to_th($content->created,'S',TRUE)?></span></div>
<div>
    <?php echo $content->detail?>
    <div class="read-more"><a href="histories?module=เท้าช้างรายเดือน&type=month&year=<?php echo (date('Y')+543);?>">ดูข้อมูลย้อนหลังรายเดือน</a> | <a href="histories?module=เท้าช้างรายปี&type=year&year=<?php echo (date('Y')+543);?>">ดูข้อมูลย้อนหลังรายปี</a> | <a href="contents?module=สถานการณ์เท้าช้าง">ดูทั้งหมด...</a></div>
</div>