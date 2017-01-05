<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10" class="breadcrumb_left"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">ข้อมูลย้อนหลัง</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; ข้อมูล<?php echo $_GET['module']?> ปี <?php echo $_GET['year']?></div>
            </td>
            <td width="10" align="right" class="breadcrumb_right"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                    <?=addThis();?>
                    <h1>ข้อมูล<?php echo $_GET['module']?></h1>
                    <center>
                    <select name="year" id="form-field-select-1" onchange="window.open(this.options[this.selectedIndex].value,'_self')">
                        <?php for ($x = (date('Y')+543); $x >= 2548; $x--):?>
                            <option value="histories?module=<?php echo $_GET['module']?>&type=<?php echo $_GET['type']?>&year=<?php echo $x?>" <?php echo ($x == $_GET['year'])?'selected':'';?>>ปี <?php echo $x?></option>
                        <?php endfor;?>
                    </select>
                    </center><br>
                    
                    <?php //foreach($histories as $row):?>
                        <!-- <div class="list">
                            <a href="histories/view/<?php echo $row->id?>">รายงานสถานการณ์โรค<?php echo $row->module?> <?php echo get_month_name($row->month)?> ปี <?php echo $row->year?></a>
                            <span><i class="icon-eye-open"></i> <?php echo $row->counter?></span>
                        </div> -->
                    <?php //endforeach;?>
                    <?if(@$histories->month == ""):?>
                    
                    *** ยังไม่มีข้อมูล ***
                    
                    <?else:?>
                    
                    <style type="text/css">
                    	.gismap th{padding:5px;}
                    	.click_month:hover{cursor: pointer;}
                    </style>
                    <table class="gismap">
                    	<tr style="background:#B0DDA6;">
                    		<th>เดือน</th>
                    		<th>แผนที่</th>
                    	</tr>
                    	<tr>
                    		<td style="vertical-align: top; background:#B0DDA6;">
                    			<?php foreach($histories as $row):?>
			                        <div class="list" style="width:100px !important;">
			                            <div class="click_month"><?php echo get_month_name($row->month)?></div>
			                            <input type="hidden" name="id" value="<?=$row->id?>">
			                        </div>
			                    <?php endforeach;?>
                    		</td>
                    		<td class="showmap">
                    			<img src="<?=$row->history_file->files?>" style="width: 720px;">
                    		</td>
                    	</tr>
                    </table>
                    
                    <?endif;?>
                
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>


<script type="text/javascript">
$(document).ready(function(){
	$('.list:last').css({"background-color":"#85C340"});
	
	$('.click_month').click(function(){
		$(this).closest('.list').css({"background-color":"#85C340"}).siblings().css({"background-color":"#B0DDA6"});
		
		$.get('histories/getmap',{
			id:$(this).next('input[name=id]').val()
		},function(data){
			$('.showmap').html(data);
		});
	});
});
</script>