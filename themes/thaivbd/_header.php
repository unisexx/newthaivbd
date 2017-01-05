<!-- <div class="logo"></div>
<div class="name"></div> -->
<img src="themes/thaivbd/images/logo2017.jpg" width="400" class="pull-left">
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

<!-- 
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
-->

<div class="clr"></div>
<?php echo modules::run('menus/inc_home'); ?>
<div class="clr"></div>