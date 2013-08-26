<div id="sidebar">
    <!-- <div id="sidebar-shortcuts">
        <div id="sidebar-shortcuts-large">
            <button class="btn btn-small btn-success"><i class="icon-signal"></i></button>
            <button class="btn btn-small btn-info"><i class="icon-pencil"></i></button>
            <button class="btn btn-small btn-warning"><i class="icon-group"></i></button>
            <button class="btn btn-small btn-danger"><i class="icon-cogs"></i></button>
        </div>
        <div id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>
            <span class="btn btn-info"></span>
            <span class="btn btn-warning"></span>
            <span class="btn btn-danger"></span>
        </div>
    </div> -->
    <!-- #sidebar-shortcuts -->

    <ul class="nav nav-list">
        
        <li <?php echo menu_active('users','users',false,'active open')?><?php echo menu_active('permissions','permissions',FALSE,'active open')?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-user"></i>
            <span>User</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo menu_active('users','users')?>><a href="users/admin/users"><i class="icon-double-angle-right"></i> สมาชิก</a></li>
            <li <?php echo menu_active('permissions','permissions')?>><a href="permissions/admin/permissions"><i class="icon-double-angle-right"></i> กลุ่มผู้ใช้งาน</a></li>
          </ul>
        </li>
        
        <li <?php echo (@$_GET['module'] == 'สถานการณ์ไข้ปวดข้อยุงลาย' or @$_GET['module'] == 'สถานการณ์มาลาเรีย' or @$_GET['module'] == 'สถานการณ์เท้าช้าง' or @$_GET['module'] == 'สถานการณ์ไข้เลือดออก')?'class="active open"':'';?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-eye-open"></i>
            <span>สถานการณ์</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo (@$_GET['module'] == 'สถานการณ์ไข้เลือดออก')?'class="active"':'';?>><a href="dengues/admin/dengues?module=สถานการณ์ไข้เลือดออก&type=week&year=<?php echo (date('Y')+543);?>"><i class="icon-double-angle-right"></i> สถานการณ์ไข้เลือดออก</a></li>
            <li <?php echo (@$_GET['module'] == 'สถานการณ์ไข้ปวดข้อยุงลาย')?'class="active"':'';?>><a href="contents/admin/contents?module=สถานการณ์ไข้ปวดข้อยุงลาย"><i class="icon-double-angle-right"></i> สถานการณ์ไข้ปวดข้อยุงลาย</a></li>
            <li <?php echo (@$_GET['module'] == 'สถานการณ์มาลาเรีย')?'class="active"':'';?>><a href="contents/admin/contents?module=สถานการณ์มาลาเรีย"><i class="icon-double-angle-right"></i> สถานการณ์มาลาเรีย</a></li>
            <li <?php echo (@$_GET['module'] == 'สถานการณ์เท้าช้าง')?'class="active"':'';?>><a href="contents/admin/contents?module=สถานการณ์เท้าช้าง"><i class="icon-double-angle-right"></i> สถานการณ์เท้าช้าง</a></li>
          </ul>
        </li>
        
        <li <?php echo (@$_GET['module'] == 'โรคไข้เลือดออก' or @$_GET['module'] == 'โรคไข้ปวดข้อยุงลาย' or @$_GET['module'] == 'ไข้มาลาเรีย' or @$_GET['module'] == 'โรคเท้าช้าง' or @$_GET['module'] == 'โรคติดต่อนำโดยแมลงอื่นๆ')?'class="active open"':'';?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-list-alt"></i>
            <span>ความรู้ทั่วไปสำหรับประชาชน</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo (@$_GET['module'] == 'โรคไข้เลือดออก')?'class="active"':'';?>><a href="contents/admin/contents?module=โรคไข้เลือดออก"><i class="icon-double-angle-right"></i> โรคไข้เลือดออก</a></li>
            <li <?php echo (@$_GET['module'] == 'โรคไข้ปวดข้อยุงลาย')?'class="active"':'';?>><a href="contents/admin/contents?module=โรคไข้ปวดข้อยุงลาย"><i class="icon-double-angle-right"></i> โรคไข้ปวดข้อยุงลาย</a></li>
            <li <?php echo (@$_GET['module'] == 'ไข้มาลาเรีย')?'class="active"':'';?>><a href="contents/admin/contents?module=ไข้มาลาเรีย"><i class="icon-double-angle-right"></i> ไข้มาลาเรีย</a></li>
            <li <?php echo (@$_GET['module'] == 'โรคเท้าช้าง')?'class="active"':'';?>><a href="contents/admin/contents?module=โรคเท้าช้าง"><i class="icon-double-angle-right"></i> โรคเท้าช้าง</a></li>
            <li <?php echo (@$_GET['module'] == 'โรคติดต่อนำโดยแมลงอื่นๆ')?'class="active"':'';?>><a href="contents/admin/contents?module=โรคติดต่อนำโดยแมลงอื่นๆ"><i class="icon-double-angle-right"></i> โรคติดต่อนำโดยแมลงอื่นๆ</a></li>
          </ul>
        </li>
        
        <li <?php echo (@$_GET['module'] == 'ข่าว Highlights' or @$_GET['module'] == 'ข่าวประชาสัมพันธ์' or @$_GET['module'] == 'ข่าวประกวดราคา' or @$_GET['module'] == 'Hot issue' or @$_GET['module'] == 'ข่าวประกาศภายใน')?'class="active open"':'';?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-list-alt"></i>
            <span>ข่าว</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo (@$_GET['module'] == 'ข่าวประชาสัมพันธ์')?'class="active"':'';?>><a href="contents/admin/contents?module=ข่าวประชาสัมพันธ์"><i class="icon-double-angle-right"></i> ข่าวประชาสัมพันธ์</a></li>
            <li <?php echo (@$_GET['module'] == 'ข่าวประกวดราคา')?'class="active"':'';?>><a href="contents/admin/contents?module=ข่าวประกวดราคา"><i class="icon-double-angle-right"></i> ข่าวประกวดราคา</a></li>
            <li <?php echo (@$_GET['module'] == 'ข่าว Highlights')?'class="active"':'';?>><a href="contents/admin/contents?module=ข่าว Highlights"><i class="icon-double-angle-right"></i> ข่าว Highlights</a></li>
            <li <?php echo (@$_GET['module'] == 'Hot issue')?'class="active"':'';?>><a href="contents/admin/contents?module=Hot issue"><i class="icon-double-angle-right"></i> Hot issue</a></li>
            <li <?php echo (@$_GET['module'] == 'ข่าวประกาศภายใน')?'class="active"':'';?>><a href="contents/admin/contents?module=ข่าวประกาศภายใน"><i class="icon-double-angle-right"></i> ข่าวประกาศภายใน</a></li>
          </ul>
        </li>
        
        <li <?php echo (@$_GET['module'] == 'สาระน่ารู้' or @$_GET['module'] == 'วารสารโรคติดต่อนำโดยแมลง' or @$_GET['module'] == 'แนวทางและคู่มือปฏิบัติการ' or @$_GET['module'] == 'สื่อต้นแบบ' or @$_GET['module'] == 'งานวิจัย')?'class="active open"':'';?> <?php echo menu_active('albums','albums',FALSE,"active open")?> <?php echo menu_active('vdos','vdos',FALSE,"active open")?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-picture"></i>
            <span>ศูนย์เอกสารและสื่ออิเลคโทรนิค</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo (@$_GET['module'] == 'วารสารโรคติดต่อนำโดยแมลง')?'class="active"':'';?>><a href="docs/admin/docs/?module=วารสารโรคติดต่อนำโดยแมลง"><i class="icon-double-angle-right"></i> วารสารโรคติดต่อนำโดยแมลง</a></li>
            <li <?php echo (@$_GET['module'] == 'แนวทางและคู่มือปฏิบัติการ')?'class="active"':'';?>><a href="docs/admin/docs/?module=แนวทางและคู่มือปฏิบัติการ"><i class="icon-double-angle-right"></i> แนวทางและคู่มือปฏิบัติการ</a></li>
            <li <?php echo menu_active('albums','albums')?>><a href="albums/admin/albums"><i class="icon-double-angle-right"></i> แฟ้มภาพ</a></li>
            <li <?php echo menu_active('vdos','vdos')?>><a href="vdos/admin/vdos/index"><i class="icon-double-angle-right"></i> วีดีโอ</a></li>
            <li <?php echo (@$_GET['module'] == 'สื่อต้นแบบ')?'class="active"':'';?>><a href="researchs/admin/researchs?module=สื่อต้นแบบ"><i class="icon-double-angle-right"></i> สื่อต้นแบบ</a></li>
            <li <?php echo (@$_GET['module'] == 'งานวิจัย')?'class="active"':'';?>><a href="researchs/admin/researchs?module=งานวิจัย"><i class="icon-double-angle-right"></i> งานวิจัย</a></li>
            <li <?php echo (@$_GET['module'] == 'สาระน่ารู้')?'class="active"':'';?>><a href="contents/admin/contents?module=สาระน่ารู้"><i class="icon-double-angle-right"></i> สาระน่ารู้</a></li>
          </ul>
        </li>
        
        <li <?php echo menu_active('polls','polls',FALSE,"active open")?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-bar-chart"></i>
            <span>แบบสำรวจความคิดเห็น</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo menu_active('polls','polls')?>><a href="polls/admin/polls"><i class="icon-double-angle-right"></i> แบบสำรวจความคิดเห็น</a></li>
          </ul>
        </li>
        
        <li <?php echo (@$_GET['module'] == 'แผนงานด้าน Knowledge management')?'class="active open"':'';?> <?php echo menu_active('calendars','calendars',FALSE,"active open")?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-calendar"></i>
            <span>กิจกรรม</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo menu_active('calendars','calendars')?>><a href="calendars/admin/calendars"><i class="icon-double-angle-right"></i> ปฏิทินปฏิบัติงาน</a></li>
            <li <?php echo (@$_GET['module'] == 'แผนงานด้าน Knowledge management')?'class="active"':'';?>><a href="projects/admin/projects?module=แผนงานด้าน Knowledge management"><i class="icon-double-angle-right"></i> แผนงานด้าน Knowledge management</a></li>
          </ul>
        </li>
        
        <li <?php echo (@$_GET['module'] == 'โรคติดต่อนำโดยแมลงอื่นๆ' or @$_GET['module'] == 'ไข้ปวดข้อยุงลาย' or @$_GET['module'] == 'มาลาเรียรายสัปดาห์' or @$_GET['module'] == 'ไข้เลือดออก' or @$_GET['module'] == 'มาลาเรียรายเดือน' or @$_GET['module'] == 'เท้าช้างรายเดือน' or @$_GET['module'] == 'เท้าช้างรายปี')?'class="active open"':'';?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-tags"></i>
            <span>ข้อมูลย้อนหลัง</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo (@$_GET['module'] == 'มาลาเรียรายสัปดาห์')?'class="active"':'';?>><a href="histories/admin/histories?module=มาลาเรียรายสัปดาห์&type=week&year=<?php echo (date('Y')+543);?>"><i class="icon-double-angle-right"></i> มาลาเรียรายสัปดาห์</a></li>
            <li <?php echo (@$_GET['module'] == 'มาลาเรียรายเดือน')?'class="active"':'';?>><a href="histories/admin/histories?module=มาลาเรียรายเดือน&type=month&year=<?php echo (date('Y')+543);?>"><i class="icon-double-angle-right"></i> มาลาเรียรายเดือน</a></li>
            <li <?php echo (@$_GET['module'] == 'ไข้เลือดออก')?'class="active"':'';?>><a href="histories/admin/histories?module=ไข้เลือดออก&type=week&year=<?php echo (date('Y')+543);?>"><i class="icon-double-angle-right"></i> ไข้เลือดออก</a></li>
            <li <?php echo (@$_GET['module'] == 'เท้าช้างรายเดือน')?'class="active"':'';?>><a href="histories/admin/histories?module=เท้าช้างรายเดือน&type=month&year=<?php echo (date('Y')+543);?>"><i class="icon-double-angle-right"></i> เท้าช้างรายเดือน</a></li>
            <li <?php echo (@$_GET['module'] == 'โรคติดต่อนำโดยแมลงอื่นๆ')?'class="active"':'';?>><a href="docs/admin/docs/?module=โรคติดต่อนำโดยแมลงอื่นๆ"><i class="icon-double-angle-right"></i> โรคติดต่อนำโดยแมลงอื่นๆ</a></li>
            <li <?php echo (@$_GET['module'] == 'ไข้ปวดข้อยุงลาย')?'class="active"':'';?>><a href="docs/admin/docs/?module=ไข้ปวดข้อยุงลาย"><i class="icon-double-angle-right"></i> ไข้ปวดข้อยุงลาย</a></li>
            <li <?php echo (@$_GET['module'] == 'เท้าช้างรายปี')?'class="active"':'';?>><a href="histories/admin/histories?module=เท้าช้างรายปี&type=year&year=<?php echo (date('Y')+543);?>"><i class="icon-double-angle-right"></i> เท้าช้างรายปี</a></li>
          </ul>
        </li>
        
        <li <?php echo (@$_GET['module'] == 'แผนงาน/โครงการตามยุทธศาสตร์' or @$_GET['module'] == 'โครงการ Global Fund for Malaria' or @$_GET['module'] == 'โครงการ Bill and Melinda Gates Foundation' or @$_GET['module'] == 'คำรับรองปฏิบัติราชการประจำปี' or @$_GET['module'] == 'รายงานผลความก้าวหน้าของโครงการ')?'class="active open"':'';?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-columns"></i>
            <span>แผนงาน/โครงการ และตัวชี้วัด ประจำปี</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo (@$_GET['module'] == 'แผนงาน/โครงการตามยุทธศาสตร์')?'class="active"':'';?>><a href="projects/admin/projects?module=แผนงาน/โครงการตามยุทธศาสตร์"><i class="icon-double-angle-right"></i> แผนงาน/โครงการตามยุทธศาสตร์</a></li>
            <li <?php echo (@$_GET['module'] == 'โครงการ Global Fund for Malaria')?'class="active"':'';?>><a href="projects/admin/projects?module=โครงการ Global Fund for Malaria"><i class="icon-double-angle-right"></i> โครงการ Global Fund for Malaria</a></li>
            <li <?php echo (@$_GET['module'] == 'โครงการ Bill and Melinda Gates Foundation')?'class="active"':'';?>><a href="projects/admin/projects?module=โครงการ Bill and Melinda Gates Foundation"><i class="icon-double-angle-right"></i> โครงการ Bill and Melinda Gates Foundation</a></li>
            <li <?php echo (@$_GET['module'] == 'คำรับรองปฏิบัติราชการประจำปี')?'class="active"':'';?>><a href="projects/admin/projects?module=คำรับรองปฏิบัติราชการประจำปี"><i class="icon-double-angle-right"></i> คำรับรองปฏิบัติราชการประจำปี</a></li>
            <li <?php echo (@$_GET['module'] == 'รายงานผลความก้าวหน้าของโครงการ')?'class="active"':'';?>><a href="projects/admin/projects?module=รายงานผลความก้าวหน้าของโครงการ"><i class="icon-double-angle-right"></i> รายงานผลความก้าวหน้าของโครงการ</a></li>
          </ul>
        </li>
        
        <li <?php echo (@$_GET['module'] == 'ไข้เลือดออก GIS' or @$_GET['module'] == 'ไข้มาลาเรีย GIS')?'class="active open"':'';?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-th-list"></i>
            <span>ฐานข้อมูลการวิเคราะห์ข้อมูล GIS</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo (@$_GET['module'] == 'ไข้เลือดออก GIS')?'class="active"':'';?>><a href="histories/admin/histories?module=ไข้เลือดออก GIS&type=month&year=<?php echo (date('Y')+543);?>"><i class="icon-double-angle-right"></i> ไข้เลือดออก</a></li>
            <li <?php echo (@$_GET['module'] == 'ไข้มาลาเรีย GIS')?'class="active"':'';?>><a href="histories/admin/histories?module=ไข้มาลาเรีย GIS&type=month&year=<?php echo (date('Y')+543);?>"><i class="icon-double-angle-right"></i> ไข้มาลาเรีย</a></li>
          </ul>
        </li>
        
        <li <?php echo (@$_GET['module'] == 'บุคลากร' or @$_GET['module'] == 'โครงสร้างองค์กร' or @$_GET['module'] == 'วิสัยทัศน์ พันธกิจ ยุทธศาสตร์')?'class="active open"':'';?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-building"></i>
            <span>เกี่ยวกับองค์กร</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo (@$_GET['module'] == 'บุคลากร')?'class="active"':'';?>><a href="abouts/admin/abouts/form/1?module=บุคลากร"><i class="icon-double-angle-right"></i> บุคลากร</a></li>
            <li <?php echo (@$_GET['module'] == 'โครงสร้างองค์กร')?'class="active"':'';?>><a href="abouts/admin/abouts/form/2?module=โครงสร้างองค์กร"><i class="icon-double-angle-right"></i> โครงสร้างองค์กร</a></li>
            <li <?php echo (@$_GET['module'] == 'วิสัยทัศน์ พันธกิจ ยุทธศาสตร์')?'class="active"':'';?>><a href="abouts/admin/abouts/form/3?module=วิสัยทัศน์ พันธกิจ ยุทธศาสตร์"><i class="icon-double-angle-right"></i> วิสัยทัศน์ พันธกิจ ยุทธศาสตร์</a></li>
          </ul>
        </li>
        
        <li <?php echo (@$_GET['module'] == 'ข่าวเด่นประเด็นร้อน' or @$_GET['module'] == 'รายงานการประชุมอินทราเน็ต' or @$_GET['module'] == 'ประชาสัมพันธ์จากไอที')?'class="active open"':'';?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-cloud"></i>
            <span>Intranet</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo (@$_GET['module'] == 'ข่าวเด่นประเด็นร้อน')?'class="active"':'';?>><a href="projects/admin/projects?module=ข่าวเด่นประเด็นร้อน"><i class="icon-double-angle-right"></i> ข่าวเด่นประเด็นร้อน</a></li>
            <li <?php echo (@$_GET['module'] == 'รายงานการประชุมอินทราเน็ต')?'class="active"':'';?>><a href="projects/admin/projects?module=รายงานการประชุมอินทราเน็ต"><i class="icon-double-angle-right"></i> รายงานการประชุม</a></li>
            <li <?php echo (@$_GET['module'] == 'ประชาสัมพันธ์จากไอที')?'class="active"':'';?>><a href="projects/admin/projects?module=ประชาสัมพันธ์จากไอที"><i class="icon-double-angle-right"></i> ประชาสัมพันธ์จากไอที</a></li>
          </ul>
        </li>
        
        <!-- <li>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-list-alt"></i>
            <span>ตารางใช้งานห้องประชุม</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li><a href=""><i class="icon-double-angle-right"></i> ตารางใช้งานห้องประชุม</a></li>
          </ul>
        </li> -->
        
        <li <?php echo (@$_GET['module'] == 'Site map')?'class="active open"':'';?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-list-alt"></i>
            <span>อื่นๆ</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo (@$_GET['module'] == 'Site map')?'class="active"':'';?>><a href="abouts/admin/abouts/form/4?module=Site map"><i class="icon-double-angle-right"></i> Site map</a></li>
          </ul>
        </li>
        
        <li <?php echo (@$_GET['module'] == 'หมวด 1 การนำองค์กร' or @$_GET['module'] == 'หมวด 2 การวางแผนเชิงยุทธศาสตร์' or @$_GET['module'] == 'หมวด 3 ผู้ให้บริการ และ ผู้มีส่วนได้ส่วนเสีย' or @$_GET['module'] == 'หมวด 4 การวัด การวิเคราะห์ และ จักการความรู้' or @$_GET['module'] == 'หมวด 5 ทรัพยากรบุคคล' or @$_GET['module'] == 'หมวด 6 กระบวนการ')?'class="active open"':'';?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-group"></i>
            <span>การพัฒนาองค์กร (PMQA)</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo (@$_GET['module'] == 'หมวด 1 การนำองค์กร')?'class="active"':'';?>><a href="reports/admin/reports?module=หมวด 1 การนำองค์กร"><i class="icon-double-angle-right"></i> หมวด 1 การนำองค์กร</a></li>
            <li <?php echo (@$_GET['module'] == 'หมวด 2 การวางแผนเชิงยุทธศาสตร์')?'class="active"':'';?>><a href="reports/admin/reports?module=หมวด 2 การวางแผนเชิงยุทธศาสตร์"><i class="icon-double-angle-right"></i> หมวด 2 การวางแผนเชิงยุทธศาสตร์</a></li>
            <li <?php echo (@$_GET['module'] == 'หมวด 3 ผู้ให้บริการ และ ผู้มีส่วนได้ส่วนเสีย')?'class="active"':'';?>><a href="reports/admin/reports?module=หมวด 3 ผู้ให้บริการ และ ผู้มีส่วนได้ส่วนเสีย"><i class="icon-double-angle-right"></i> หมวด 3 ผู้ให้บริการ และ ผู้มีส่วนได้ส่วนเสีย</a></li>
            <li <?php echo (@$_GET['module'] == 'หมวด 4 การวัด การวิเคราะห์ และ จักการความรู้')?'class="active"':'';?>><a href="reports/admin/reports?module=หมวด 4 การวัด การวิเคราะห์ และ จักการความรู้"><i class="icon-double-angle-right"></i> หมวด 4 การวัด การวิเคราะห์ และ จักการความรู้</a></li>
            <li <?php echo (@$_GET['module'] == 'หมวด 5 ทรัพยากรบุคคล')?'class="active"':'';?>><a href="reports/admin/reports?module=หมวด 5 ทรัพยากรบุคคล"><i class="icon-double-angle-right"></i> หมวด 5 ทรัพยากรบุคคล</a></li>
            <li <?php echo (@$_GET['module'] == 'หมวด 6 กระบวนการ')?'class="active"':'';?>><a href="reports/admin/reports?module=หมวด 6 กระบวนการ"><i class="icon-double-angle-right"></i> หมวด 6 กระบวนการ</a></li>
          </ul>
        </li>
        
        <li <?php echo (@$_GET['module'] == 'เอกสารทั่วไป' or @$_GET['module'] == 'คำสั่ง' or @$_GET['module'] == 'รายงานการประชุม' or @$_GET['module'] == 'หนังสือแจ้งเวียน')?'class="active open"':'';?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-male"></i>
            <span>สำหรับบุคลากร</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo (@$_GET['module'] == 'เอกสารทั่วไป')?'class="active"':'';?>><a href="projects/admin/projects?module=เอกสารทั่วไป"><i class="icon-double-angle-right"></i> เอกสารทั่วไป</a></li>
            <li <?php echo (@$_GET['module'] == 'คำสั่ง')?'class="active"':'';?>><a href="projects/admin/projects?module=คำสั่ง"><i class="icon-double-angle-right"></i> คำสั่ง</a></li>
            <li <?php echo (@$_GET['module'] == 'รายงานการประชุม')?'class="active"':'';?>><a href="projects/admin/projects?module=รายงานการประชุม"><i class="icon-double-angle-right"></i> รายงานการประชุม</a></li>
            <li <?php echo (@$_GET['module'] == 'หนังสือแจ้งเวียน')?'class="active"':'';?>><a href="projects/admin/projects?module=หนังสือแจ้งเวียน"><i class="icon-double-angle-right"></i> หนังสือแจ้งเวียน</a></li>
          </ul>
        </li>
        
        <li <?php echo (@$_GET['module'] == 'แบนเนอร์ลิ้งค์' or @$_GET['module'] == 'หน่วยงานส่วนกลาง 1' or @$_GET['module'] == 'หน่วยงานส่วนกลาง 2')?'class="active open"':'';?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-link"></i>
            <span>เว็บลิ้งค์</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo (@$_GET['module'] == 'แบนเนอร์ลิ้งค์')?'class="active"':'';?>><a href="weblinks/admin/weblinks?module=แบนเนอร์ลิ้งค์"><i class="icon-double-angle-right"></i> แบนเนอร์ลิ้งค์</a></li>
            <li <?php echo (@$_GET['module'] == 'หน่วยงานส่วนกลาง 1')?'class="active"':'';?>><a href="weblinks/admin/weblinks?module=หน่วยงานส่วนกลาง 1"><i class="icon-double-angle-right"></i> หน่วยงานส่วนกลาง 1</a></li>
            <li <?php echo (@$_GET['module'] == 'หน่วยงานส่วนกลาง 2')?'class="active"':'';?>><a href="weblinks/admin/weblinks?module=หน่วยงานส่วนกลาง 2"><i class="icon-double-angle-right"></i> หน่วยงานส่วนกลาง 2</a></li>
          </ul>
        </li>
        
        <!-- <li>---- demo ----</li>
        
        <li <?php echo menu_active('demo',false,'index')?>>
          <a href="demo/admin/demo/index">
            <i class="icon-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li <?php echo menu_active('demo',false,'typography')?>>
          <a href="demo/admin/demo/typography">
            <i class="icon-text-width"></i>
            <span>Typography</span>
          </a>
        </li>

        
        <li <?php echo menu_active('demo',false,'elements','active open')?> <?php echo menu_active('demo',false,'buttons','active open')?> <?php echo menu_active('demo',false,'treeview','active open')?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-desktop"></i>
            <span>UI Elements</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo menu_active('demo',false,'elements')?>><a href="demo/admin/demo/elements"><i class="icon-double-angle-right"></i> Elements</a></li>
            <li <?php echo menu_active('demo',false,'buttons')?>><a href="demo/admin/demo/buttons"><i class="icon-double-angle-right"></i> Buttons & Icons</a></li>
            <li <?php echo menu_active('demo',false,'treeview')?>><a href="demo/admin/demo/treeview"><i class="icon-double-angle-right"></i> Treeview</a></li>
          </ul>
        </li>

        
        <li <?php echo menu_active('demo',false,'tables')?>>
          <a href="demo/admin/demo/tables">
            <i class="icon-list"></i>
            <span>Tables</span>
            
          </a>
        </li>

        
        <li <?php echo menu_active('demo',false,'form_elements','active open')?> <?php echo menu_active('demo',false,'form_wizard','active open')?> <?php echo menu_active('demo',false,'wysiwyg','active open')?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-edit"></i>
            <span>Forms</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo menu_active('demo',false,'form_elements')?>><a href="demo/admin/demo/form_elements"><i class="icon-double-angle-right"></i> Form Elements</a></li>
            <li <?php echo menu_active('demo',false,'form_wizard')?>><a href="demo/admin/demo/form_wizard"><i class="icon-double-angle-right"></i> Wizard & Validation</a></li>
            <li <?php echo menu_active('demo',false,'wysiwyg')?>><a href="demo/admin/demo/wysiwyg"><i class="icon-double-angle-right"></i> Wysiwyg & Markdown</a></li>
          </ul>
        </li>

        
        <li <?php echo menu_active('demo',false,'widgets')?>>
          <a href="demo/admin/demo/widgets">
            <i class="icon-list-alt"></i>
            <span>Widgets</span>
            
          </a>
        </li>

        
        <li <?php echo menu_active('demo',false,'calendar')?>>
          <a href="demo/admin/demo/calendar">
            <i class="icon-calendar"></i>
            <span>Calendar</span>
            
          </a>
        </li>

        
        <li <?php echo menu_active('demo',false,'gallery')?>>
          <a href="demo/admin/demo/gallery">
            <i class="icon-picture"></i>
            <span>Gallery</span>
            
          </a>
        </li>

        
        <li <?php echo menu_active('demo',false,'grid')?>>
          <a href="demo/admin/demo/grid">
            <i class="icon-th"></i>
            <span>Grid</span>
            
          </a>
        </li>

        
        <li <?php echo menu_active('demo',false,'pricing','active open')?><?php echo menu_active('demo',false,'invoice','active open')?><?php echo menu_active('demo',false,'login','active open')?><?php echo menu_active('demo',false,'error_404','active open')?><?php echo menu_active('demo',false,'error_500','active open')?><?php echo menu_active('demo',false,'blank','active open')?>>
          <a href="#" class="dropdown-toggle" >
            <i class="icon-file"></i>
            <span>Other Pages</span>
            <b class="arrow icon-angle-down"></b>
          </a>
          <ul class="submenu">
            <li <?php echo menu_active('demo',false,'pricing')?>><a href="demo/admin/demo/pricing"><i class="icon-double-angle-right"></i> Pricing Tables</a></li>
            <li <?php echo menu_active('demo',false,'invoice')?>><a href="demo/admin/demo/invoice"><i class="icon-double-angle-right"></i> Invoice</a></li>
            <li <?php echo menu_active('demo',false,'login')?>><a href="themes/_admin/login.php"><i class="icon-double-angle-right"></i> Login & Register</a></li>
            <li <?php echo menu_active('demo',false,'error_404')?>><a href="demo/admin/demo/error_404"><i class="icon-double-angle-right"></i> Error 404</a></li>
            <li <?php echo menu_active('demo',false,'error_500')?>><a href="demo/admin/demo/error_500"><i class="icon-double-angle-right"></i> Error 500</a></li>
            <li <?php echo menu_active('demo',false,'blank')?>><a href="demo/admin/demo/blank"><i class="icon-double-angle-right"></i> Blank Page</a></li>
          </ul>
        </li> -->
        
    </ul><!--/.nav-list-->

    <div id="sidebar-collapse"><i class="icon-double-angle-left"></i></div>


</div><!--/#sidebar-->