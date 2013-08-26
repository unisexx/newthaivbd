<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10" class="breadcrumb_left"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb"><?php echo $_GET['title']?></div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; <?php echo $_GET['module']?></div>
            </td>
            <td width="10" align="right" class="breadcrumb_right"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  <h1><?php echo $_GET['module']?></h1>
                    <?php foreach($projects as $row):?>
                        <div class="list">
                            <a href="projects/download/<?php echo $row->id?>"><?php echo $row->title?></a>
                            <span><i class="icon-download-alt"></i> <?php echo $row->counter?></span>
                        </div>
                    <?php endforeach;?>
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>