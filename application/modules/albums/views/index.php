<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10"><img src="themes/thaivbd/images/breadcrumb_left.png" width="10" height="26"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">ภาพกิจกรรม</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; ภาพกิจกรรม</div>
            </td>
            <td width="10" align="right"><img src="themes/thaivbd/images/breadcrumb_right.png" width="10" height="26"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  <h1>ภาพกิจกรรม</h1>
                    <?php foreach($albums as $row):?>
                        <div class="list">
                            <a href="albums/view/<?php echo $row->id?>"><?php echo $row->name?></a>
                            <span><i class="icon-eye-open"></i> <?php echo $row->counter?></span>
                        </div>
                    <?php endforeach;?>
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>