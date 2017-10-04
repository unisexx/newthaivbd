<?$catArray = array('จัดซื้อจัดจ้าง'=>'label-info','ประกวดราคา'=>'label-success','TOR'=>'label-warning','เผยแพร่ราคากลาง ปปช.'=>'label-important','หนังสือ'=>'label-info','คู่มือ'=>'label-success','ผลงาน'=>'label-warning','วิชาการ'=>'label-important','ประกาศ'=>'label-gray','สมัครงาน'=>'label-inverse');?>


<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10" class="breadcrumb_left"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb"><?php echo $_GET['module']?></div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; <?php echo $_GET['module']?></div>
            </td>
            <td width="10" align="right" class="breadcrumb_right"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                  <h1><?php echo $_GET['module']?> <a href="rss/contents?<?=$_SERVER['QUERY_STRING']?>" target="_blank"><i class="icon-rss" style="color:orange;"></i></a></h1>
                  
                  	<form class="frmsearch" method="get" action="">
                  		<fieldset>
						  <legend>ค้นหา:</legend>
							หัวข้อ: <input type="text" name="txtsearch" value="<?=@$_GET['txtsearch']?>" size="50"> 
							
							<?if(@$_GET['module'] == "ข่าวประชาสัมพันธ์"):?>
			                <select class="form-control" name="category">
			                	<option value="">-- หมวดหมู่ --</option>
			                	<option value="หนังสือ" <?=@$_GET['category'] == 'หนังสือ' ? 'selected' : '' ;?>>หนังสือ</option>
			                	<option value="คู่มือ" <?=@$_GET['category'] == 'คู่มือ' ? 'selected' : '' ;?>>คู่มือ</option>
			                	<option value="ผลงาน" <?=@$_GET['category'] == 'ผลงาน' ? 'selected' : '' ;?>>ผลงาน</option>
			                	<option value="วิชาการ" <?=@$_GET['category'] == 'วิชาการ' ? 'selected' : '' ;?>>วิชาการ</option>
			                	<option value="ประกาศ" <?=@$_GET['category'] == 'ประกาศ' ? 'selected' : '' ;?>>ประกาศ</option>
			                	<option value="สมัครงาน" <?=@$_GET['category'] == 'สมัครงาน' ? 'selected' : '' ;?>>สมัครงาน</option>
			                </select>
					        <?endif;?>
					        
					        <?if(@$_GET['module'] == "ข่าวประกวดราคา"):?>
			                <select class="form-control" name="category">
			                	<option value="">-- หมวดหมู่ --</option>
			                	<option value="จัดซื้อจัดจ้าง" <?=@$_GET['category'] == 'จัดซื้อจัดจ้าง' ? 'selected' : '' ;?>>จัดซื้อจัดจ้าง</option>
			                	<option value="ประกวดราคา" <?=@$_GET['category'] == 'ประกวดราคา' ? 'selected' : '' ;?>>ประกวดราคา</option>
			                	<option value="TOR" <?=@$_GET['category'] == 'TOR' ? 'selected' : '' ;?>>TOR</option>
			                	<option value="เผยแพร่ราคากลาง ปปช." <?=@$_GET['category'] == 'เผยแพร่ราคากลาง ปปช.' ? 'selected' : '' ;?>>เผยแพร่ราคากลาง ปปช.</option>
			                </select>
					        <?endif;?>
							
							<input type="hidden" name="module" value="<?=@$_GET['module']?>">
							<input type="submit" value="ค้นหา">
						</fieldset>
                  	</form>
                  
                  	<table class="tblist">
                  		<?php foreach($contents as $row):?>
	                    <tr>
	                    	<?if($_GET['module'] == "ข่าวประชาสัมพันธ์" || $_GET['module'] == "ข่าวประกวดราคา"):?>
	                    	<td><a href="contents?module=<?=@$_GET['module']?>&category=<?=$row->category?>"><span class="label <?=$catArray[$row->category]?>"><?=$row->category?></span></a></td>
	                    	<?endif;?>
	                    	<td><a href="contents/view/<?php echo $row->id?>"><?php echo $row->title?></a></td>
	                    	<td width="50"><i class="icon-eye-open"></i> <?php echo number_format($row->counter)?></td>
	                    </tr>
	                    <?php endforeach;?>
                  	</table>
                  	
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
  <?=$contents->pagination();?>
</div>