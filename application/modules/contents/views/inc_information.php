<style>
.information li{border-bottom:1px dotted #bcbcbc;}
.btn_more1{margin-top:15px;}
</style>

<div id="col2">
	          <table width="100%" border="0" cellspacing="0" cellpadding="0">
	          <tr>
	            <td width="21" height="21" class="borderPR_topleft"></td>
	            <td rowspan="3" valign="top" class="tdpr"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	              <tr>
	                <td colspan="3" height="20" class="title_newsPR">
	                  <div class="arrowup_pr"><a href="#" title="เลื่อนขึ้น">&nbsp;</a></div>
	                  <div class="arrowdown_pr"><a href="#" title="เลื่อนลง">&nbsp;</a></div></td>
	              </tr>
	              <tr>
	                <td width="4" height="3" class="linePR_left"></td>
	                <td width="338" height="3" class="linePR_center"></td>
	                <td width="4" height="3" class="linePR_right"></td>
	              </tr>
	              <tr>
	                <td colspan="3"><div id="contentNewsPR" style="padding-top:6px;">
	                  
						<div class="information">
			                <div class="newsticker-jcarousellite">
			                 <ul>
			                 	<?php foreach($contents as $content):?>
			                 		<li>
			                 			<a href="contents/view/<?php echo $content->id?>"><img alt="<?php echo $content->title?>" src="<?php echo $content->image?>" width="74" height="65" class="imgNews"/></a><span class="textNews"><a href="contents/view/<?php echo $content->id?>"><?php echo $content->title?></a></span> <span class="dataNew">(<?php echo mysql_to_th($content->created)?>)</span>
			                 		</li>
			                 	<?php endforeach;?>
			                 </ul>
			                 </div>
			            </div>
	                  
	                  <div class="btn_more1"><a href="contents?module=ข่าวประชาสัมพันธ์">&nbsp;</a></div>
	                  </div></td>
	              </tr>
	            </table></td>
	            <td width="21" height="21" class="borderPR_topright"></td>
	          </tr>
	          <tr>
	            <td class="borderPR_left" height="169">&nbsp;</td>
	            <td class="borderPR_right">&nbsp;</td>
	          </tr>
	          <tr>
	            <td width="21" height="21" class="borderPR_bottomleft"></td>
	            <td width="21" height="21" class="borderPR_bottomright"></td>
	          </tr>
	        </table>
	        
	      </div>
	      
<script type="text/javascript">
$(document).ready(function(){
	$(".newsticker-jcarousellite").jCarouselLite({  
	   vertical: true,  
	   visible: 2,  
	   auto:1000,  
	   speed:2000,
	   btnNext: ".arrowup_pr",
	   btnPrev: ".arrowdown_pr"
 	});  
});
</script>