<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10" class="breadcrumb_left"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">ศูนย์เอกสารและสื่ออิเลคโทรนิค</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; <a href="researchs?module=<?php echo $researchs->category->module?>"><?php echo $researchs->category->module?></a> &gt; <?php echo $researchs->category->name?></div>
            </td>
            <td width="10" align="right" class="breadcrumb_right"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  <h1><?php echo $researchs->category->name?></h1>
                    <?php foreach($researchs as $row):?>
                        <div class="list">
                            <!-- <a href="researchs/download/<?php echo $row->id?>"><img src="<?php echo $row->files?>" width="100"></a><br> -->
                            <a href="researchs/download/<?php echo $row->id?>"><?php echo $row->title?></a>
                            <span><i class="icon-eye-open"></i> <?php echo $row->counter?></span>
                        </div>
                    <?php endforeach;?>
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>