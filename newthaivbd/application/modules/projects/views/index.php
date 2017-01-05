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
              	<?=addThis();?>
                  <h1><?php echo $_GET['module']?> <a href="rss/projects?<?=$_SERVER['QUERY_STRING']?>" target="_blank"><i class="icon-rss" style="color:orange;"></i></a></h1>
                  
                  	<form class="frmsearch" method="get" action="">
                  		<fieldset>
						  <legend>ค้นหา:</legend>
							หัวข้อ: <input type="text" name="txtsearch" value="<?=@$_GET['txtsearch']?>" size="50"> 
							<input type="hidden" name="module" value="<?=@$_GET['module']?>">
							<input type="hidden" name="title" value="<?=@$_GET['title']?>">
							<input type="submit" value="ค้นหา">
						</fieldset>
                  	</form>
                  
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
  <?=$projects->pagination();?>
</div>