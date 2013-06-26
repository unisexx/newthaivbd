<style>
.information li{border-bottom:1px dotted #bcbcbc;}
.btn_more1{margin-top:15px;}
</style>

<div id="col2">
	          <table width="100%" border="0" cellspacing="0" cellpadding="0">
	          <tr>
	            <td width="21" height="21"><img src="themes/thaivbd/images/borderPR_topleft.png" width="21" height="21" /></td>
	            <td rowspan="3" valign="top" class="tdpr"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	              <tr>
	                <td colspan="3" height="20"><div style="float:left;"><img src="themes/thaivbd/images/title_newsPR.png" width="131" height="17" /></div>
	                  <div class="arrowup_pr"><a href="#" title="เลื่อนขึ้น">&nbsp;</a></div>
	                  <div class="arrowdown_pr"><a href="#" title="เลื่อนลง">&nbsp;</a></div></td>
	              </tr>
	              <tr>
	                <td width="4" height="3"><img src="themes/thaivbd/images/linePR_left.png" width="4" height="3" /></td>
	                <td width="338" height="3" background="themes/thaivbd/images/linePR_center.png"></td>
	                <td width="4" height="3"><img src="themes/thaivbd/images/linePR_right.png" width="4" height="3" /></td>
	              </tr>
	              <tr>
	                <td colspan="3"><div id="contentNewsPR" style="padding-top:6px;">
	                  
						<div class="information">
			                <div class="newsticker-jcarousellite" style="background: #f3f6f4;">
			                 <ul>
			                 	<?php foreach($contents as $content):?>
			                 		<li>
			                 			<a href="contents/view/<?php echo $content->id?>"><img src="<?php echo $content->image?>" width="74" height="65" class="imgNews"/></a><span class="textNews"><a href="contents/view/<?php echo $content->id?>"><?php echo $content->title?></a><b></b></span> <span class="dataNew">(<?php echo mysql_to_th($content->created)?>)</span>
			                 		</li>
			                 	<?php endforeach;?>
			                 </ul>
			                 </div>
			            </div>
	                  
	                  <div class="btn_more1"><a href="contents?module=ข่าวประชาสัมพันธ์">&nbsp;</a></div>
	                  </div></td>
	              </tr>
	            </table></td>
	            <td width="21" height="21"><img src="themes/thaivbd/images/borderPR_topright.png" width="21" height="21" /></td>
	          </tr>
	          <tr>
	            <td background="themes/thaivbd/images/borderPR_left.png" height="169">&nbsp;</td>
	            <td background="themes/thaivbd/images/borderPR_right.png">&nbsp;</td>
	          </tr>
	          <tr>
	            <td width="21" height="21"><img src="themes/thaivbd/images/borderPR_bottomleft.png" width="21" height="21" /></td>
	            <td width="21" height="21"><img src="themes/thaivbd/images/borderPR_bottomright.png" width="21" height="21" /></td>
	          </tr>
	        </table>
	        
	      </div>
	      
<script type="text/javascript">
$(document).ready(function(){
	$(".newsticker-jcarousellite").jCarouselLite({  
	   vertical: true,  
	   visible: 2,  
	   auto:1000,  
	   speed:2000  
 	});  
});
</script>