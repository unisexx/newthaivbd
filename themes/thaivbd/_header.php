<div class="logo"></div>
<div class="name"></div>
<div class="w3c">
<div style="padding-top:5px; float:left; padding-right:10px; margin-left:40px;">เปลี่ยนการแสดงผล</div>
<div style="padding-top:3px; float:left;">
<a class="fontSizeMinus" href="#"><img alt="ตัวอักษรขนาดเล็ก" src="themes/thaivbd/images/fontSize1.png" width="14" height="13" border="0"></a>&nbsp;
<a class="fontReset" href="#"><img alt="ตัวอักษรขนาดปกติ" src="themes/thaivbd/images/fontSize2.png" width="16" height="15" border="0"></a>&nbsp;
<a class="fontSizePlus" href="#"><img alt="ตัวอักษรขนาดใหญ่" src="themes/thaivbd/images/fontSize3.png" width="18" height="18" border="0"></a>&nbsp;
<a href="#"><img alt="line" src="themes/thaivbd/images/line1.gif" width="1" height="18" border="0"></a>&nbsp;
<span class="theme-switch">
<a href="#" rel="themes/thaivbd_white/css/style_white.css"><img alt="ธีมสีขาว" src="themes/thaivbd/images/c1.png" width="18" height="18" border="0"></a>&nbsp;
<a href="#" rel="themes/thaivbd/css/style.css"><img alt="ธีมสีเขียว" src="themes/thaivbd/images/c2.png" width="18" height="18" border="0"></a>&nbsp;
<a href="#" rel="themes/thaivbd_yellow/css/style_yellow.css"><img alt="ธีมสีเหลือง" src="themes/thaivbd/images/c3.png" width="18" height="18" border="0"></a>
</span>
</div>
</div>
<div class="flag"><a href="#"><img src="themes/thaivbd/images/eng.png" alt="English" width="26" height="20" border="0" /></a>&nbsp;&nbsp;<a href="#"><img src="themes/thaivbd/images/thai.png" alt="ภาษาไทย" width="26" height="20" border="0"/></a></div>

<?php if(!is_login()):?>
<div class="login">
	<form method="post" action="users/login">
       	 <label>ชื่อ</label>
         <input type="text" name="username" title="username" class="input_boxLogin" placeholder="" >
         <label>รหัสผ่าน</label>
		 <input type="password" name="password" class="input_boxLogin" title="password"  placeholder="">
         <input type="submit" name="btn_login" class="btn_login" value="login">
         <br><label id="linkRegis"><a href="users/forget_pass" class="linkRegis">ลืมรหัสผ่าน</a> | <a href="users/register" class="linkRegis">สมัครสมาชิก</a></label>
    </form>
</div>
<?php else:?>
	<div style="float: right">
		ยินดีต้อนรับคุณ <?php echo user_login()->username ?> เข้าสู่ระบบค่ะ
		<br><a href="users/logout">ออกจากระบบ</a>
	</div>
<?php endif;?>

<div class="clr"></div>
<div id="topmenu">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="17" height="41" class="bg_topmenu_left"></td>
        <td height="41" class="bg_topmenu_center">
         <ul>
            <li><a href="home">หน้าแรก</a></li>
            <li><a href="#">เกี่ยวกับเรา</a>
            	<ul>
                	<li><a href="abouts/view/3">วิสัยทัศน์</a></li>
                    <li><a href="abouts/view/2">โครงสร้างองค์กร</a></li>
                    <li><a href="abouts/view/1">บุคคลากร</a></li>
                </ul>
            </li>
            <li><a href="#">สำหรับบุคลากร</a>
                <ul>
                	<li><a href="projects?title=สำหรับบุคลากร&module=เอกสารทั่วไป">เอกสารทั่วไป</a></li>
                    <li><a href="projects?title=สำหรับบุคลากร&module=คำสั่ง">คำสั่ง</a></li>
                    <li><a href="projects?title=สำหรับบุคลากร&module=รายงานการประชุม">รายงานการประชุม</a></li>
                    <li><a href="projects?title=สำหรับบุคลากร&module=หนังสือแจ้งเวียน">หนังสือแจ้งเวียน</a></li>
                </ul>
            </li>
            <li><a href="#">สถานการณ์โรค</a>
                <ul>
                	<li><a href="dengues">สถานการณ์โรคไข้เลือดออก</a></li>
                	<li><a href="contents?module=สถานการณ์เท้าช้าง">สถานการณ์โรคเท้าช้าง</a></li>
                    <li><a href="contents?module=สถานการณ์ไข้ปวดข้อยุงลาย">สถานการณ์โรคไข้ปวดข้อยุงลาย</a></li>
                    <li><a href="contents?module=สถานการณ์มาลาเรีย">สถานการณ์โรคมาลาเรีย</a></li>
                    <li><a href="contents?module=โรคติดต่อนำโดยแมลงอื่นๆ">สถานการณ์โรคติดต่อนำโดยแมลงอื่นๆ</a></li>
                </ul>
            </li>
            <li><a href="#">GIS</a>
              <ul>
                	<li><a href="histories?module=ไข้เลือดออก GIS&type=month&year=<?php echo (date('Y')+543);?>">โรคไข้เลือดออก</a></li>
                    <li><a href="histories?module=ไข้มาลาเรีย GIS&type=month&year=<?php echo (date('Y')+543);?>">โรคมาลาเรีย</a></li>
              </ul>
            </li>
            <li><a href="#">ความรู้ทั่วไปสำหรับประชาชน</a>
              <ul>
                	<li><a href="contents?module=โรคไข้เลือดออก">โรคไข้เลือดออก</a></li>
                    <li><a href="contents?module=โรคไข้ปวดข้อยุงลาย">โรคไข้ปวดข้อยุงลาย</a></li>
                    <li><a href="contents?module=ไข้มาลาเรีย">ไข้มาลาเรีย</a></li>
                    <li><a href="contents?module=โรคเท้าช้าง">โรคเท้าช้าง</a></li>
                    <li><a href="contents?module=โรคติดต่อนำโดยแมลงอื่นๆ">โรคติดต่อนำโดยแมลงอื่นๆ</a></li>
              </ul>
            </li>
            <li><a href="#">ศูนย์เอกสาร</a>
              <ul>
                	<li><a href="docs?module=วารสารโรคติดต่อนำโดยแมลง">วารสารโรคติดต่อนำโดยแมลง</a></li>
                    <li><a href="docs?module=แนวทางและคู่มือปฏิบัติการ">แนวทางและคู่มือการปฎิบัติการ</a></li>
                    <li><a href="researchs?module=สื่อต้นแบบ">สื่อต้นแบบ</a></li>
                    <li><a href="researchs?module=งานวิจัย">ผลงานวิจัย</a></li>
              </ul>
            </li>
            <li><a href="#">กิจกรรม</a>
               <ul>
                	<li><a href="calendars">ปฏิทิน</a></li>
                    <li><a href="albums">ภาพกิจกรรม</a></li>
                    <li><a href="vdos">ภาพวีดีโอ</a></li>
              </ul>
            </li>
            <li><a href="#">แผนงาน/โครงการ</a>
             <ul>
                	<li><a href="projects?title=แผนงาน/โครงการ&module=แผนงาน/โครงการตามยุทธศาสตร์">แผนงาน/โครงการตามยุทธศาสตร์</a></li>
                    <li><a href="projects?title=แผนงาน/โครงการ&module=โครงการ Global Fund for Malaria">โครงการ Global Fund for Malaria</a></li>
                    <li><a href="projects?title=แผนงาน/โครงการ&module=โครงการ Bill and Melinda Gates Foundation">โครงการ Bill and Melinda Gates Foundation</a></li>
                    <li><a href="projects?title=แผนงาน/โครงการ&module=คำรับรองปฏิบัติราชการประจำปี">คำรับรองปฏิบัติราชการประจำปี</a></li>
                    <li><a href="projects?title=แผนงาน/โครงการ&module=รายงานประจำปีสำนักโรคติดต่อนำโดยแมลง">รายงานประจำปีสำนักโรคติดต่อนำโดยแมลง</a></li>
                    <li><a href="projects?title=แผนงาน/โครงการ&module=แผนงานด้าน Knowledge management">แผนงานด้าน Knowledge management</a></li>
              </ul>
            </li>
            <li><a href="contacts">ติดต่อเรา</a></li>
        </ul>
        </td>
        <td width="17" height="41" class="bg_topmenu_right"></td>
      </tr>
  </table>
</div><div class="clr"></div>