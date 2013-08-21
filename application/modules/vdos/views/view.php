<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10" class="breadcrumb_left"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">กิจกรรม</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; ภาพวีดีโอ</div>
            </td>
            <td width="10" align="right" class="breadcrumb_right"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  <h1>ภาพวีดีโอ</h1>
                    <?php foreach($vdos as $row):?>
                        <div class="picture">
                            <a href="<?php echo $row->url ?>" rel="lightbox[vdo]" class="highlightit" alt="<?php echo $row->title ?>"><img src="http://img.youtube.com/vi/<?php echo getYouTubeIdFromURL($row->url)?>/0.jpg" width="122" height="95"></a><br>
                            <span><?php echo $row->title ?></span>
                        </div>
                    <?php endforeach;?>
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>