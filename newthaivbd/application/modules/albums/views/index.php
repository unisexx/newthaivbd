<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10" class="breadcrumb_left"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">ภาพกิจกรรม</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; ภาพกิจกรรม</div>
            </td>
            <td width="10" align="right" class="breadcrumb_right"></td>
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
          <tr>
          	<td></td>
          	<td><?php echo $albums->pagination();?></td>
          	<td></td>
          </tr>
      </tbody>
  </table>
</div>