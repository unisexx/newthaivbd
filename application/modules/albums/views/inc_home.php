<div id="picturegallery">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <td width="13" height="13"><img src="themes/thaivbd/images/bordergallery_topleft.png" width="13" height="13" /></td>
	    <td background="themes/thaivbd/images/bordergallery_top.png"> </td>
	    <td width="13" height="13"><img src="themes/thaivbd/images/bordergallery_topright.png" width="13" height="13" /></td>
	  </tr>
	  <tr>
	    <td width="13" background="themes/thaivbd/images/bordergallery_left_bg.png">&nbsp;</td>
	    <td bgcolor="#f2f6ee">
	        <div class="picturegallery">
	        	<div class="viewpicAll"><a href="#">ดูรูปกิจกรรมทั้งหมด</a></div><br>
	            
	            <div class="carousel" style="margin-top:10px;">
	            	<div style="float:left; border:0;"><a href="#"><img class="prev"   src="themes/thaivbd/images/arrow_gallery_left.png" width="19" height="107" border="0"/></a></div>
	            	<div style="float:right; border:0;"><a href="#"><img class="next"  src="themes/thaivbd/images/arrow_gallery_right.png" width="19" height="107" border="0"></a></div>
				    <div class="jCarouselLite">
				        <ul>
				            <?php foreach($pics as $pic):?>
						  		<li>
						  			<div class="picture">
						            <a href="#" class="highlightit"><img src="<?php echo $pic->image?>" width="122" height="95"></a>
						            <a href="#"><?php echo $pic->album->name?></a></div>
						  		</li>
						  	<?php endforeach;?>
				        </ul>
				    </div>
				    
				    <div class="clear"></div>   
				</div>
	            
	        </div>
	    </td>
	    <td background="themes/thaivbd/images/bordergallery_right_bg.png">&nbsp;</td>
	  </tr>
	  <tr>
	    <td width="13" height="13"><img src="themes/thaivbd/images/bordergallery_bottomleft.png" width="13" height="13" /></td>
	    <td background="" bgcolor="#f2f6ee"> </td>
	    <td width="13" height="13"><img src="themes/thaivbd/images/bordergallery_bottomright.png" width="13" height="13" /></td>
	  </tr>
	</table>
</div>


<script type="text/javascript">
$(function() {
    $(".jCarouselLite").jCarouselLite({
        btnNext: ".carousel .next",
        btnPrev: ".carousel .prev"
    });   
});
</script>   