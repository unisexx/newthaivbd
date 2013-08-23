<div id="picturegallery">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <td width="13" height="13" class="bordergallery_topleft"></td>
	    <td class="bordergallery_top"> </td>
	    <td width="13" height="13" class="bordergallery_topright"></td>
	  </tr>
	  <tr>
	    <td width="13" class="bordergallery_left_bg">&nbsp;</td>
	    <td class="album_bgcolor">
	        <div class="picturegallery">
	        	<div class="viewpicAll"><a href="albums">ดูภาพกิจกรรมทั้งหมด</a></div><br>
	            
	            <div class="carousel" style="margin-top:10px;">
	            	<div style="float:left; border:0; text-indent:-999px;"><a href="#">prev<span class="prev"></span></a></div>
	            	<div style="float:right; border:0; text-indent:-999px;"><a href="#">next<span class="next"></span></a></div>
				    <div class="jCarouselLite">
				        <ul>
				            <?php foreach($pics as $pic):?>
						  		<li>
						  			<div class="picture">
						            <a rel="lightbox[gal]" href="<?php echo $pic->image?>" class="highlightit" alt="<?php echo $pic->album->name?>"><img alt="<?php echo $pic->album->name?>" src="<?php echo $pic->image?>" width="122" height="95"></a>
						            <a rel="lightbox[gal2]" href="<?php echo $pic->image?>"><?php echo $pic->album->name?></a></div>
						  		</li>
						  	<?php endforeach;?>
				        </ul>
				    </div>
				    
				    <div class="clear"></div>   
				</div>
	            
	        </div>
	    </td>
	    <td class="bordergallery_right_bg">&nbsp;</td>
	  </tr>
	  <tr>
	    <td width="13" height="13" class="bordergallery_bottomleft"></td>
	    <td class="album_bgcolor"> </td>
	    <td width="13" height="13" class="bordergallery_bottomright"></td>
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