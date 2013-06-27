<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="<?php echo base_url(); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $template['title'] ?></title>
    <?php echo $template['metadata'] ?>
    <?php include "_css.php";?>
    <?php include "_script.php";?>
</head>
<body>
    <div id="wrap">
	<div class="main"><div class="main2">
		<?php include "_header.php";?>
	    	
	      <div id="content">
	        <?php echo modules::run('contents/inc_hilight'); ?>
	        <?php echo modules::run('contents/inc_information'); ?>
	        
	          <div class="clr"></div>
	          <hr class="hr2" />
	          <img src="themes/thaivbd/images/logo_moph.png" width="202" height="63" style="margin-top:-20px; position:absolute;"/> </div>
	      </div>
	      
	      <div class="clr"></div>
	          
			<div id="col1_GIS">
	          <table width="100%" border="0" cellspacing="0" cellpadding="0">
	              <tr>
	                <td width="28" style="padding-top:8px;"><hr class="hr3"/></td>
	                <td width="164"><span class="h1">ส</span><span class="h2">ถานการณ์โรค</span></td>
	                <td width="361" style="padding-top:8px;"><hr class="hr3"/></td>
	              </tr>
	       	  </table>
	          <br>
	          <div id="accordion">
	          	<?php echo modules::run('dengues/inc_dengue'); ?>
	          	<?php echo modules::run('contents/inc_elephantiasis'); ?>
	          	<?php echo modules::run('contents/inc_mosquito'); ?>
	          	<?php echo modules::run('contents/inc_malaria'); ?>
	          	<?php echo modules::run('contents/inc_other_insect'); ?>
	          </div>
	    </div>
		<div id="col2_e-auction">
	             <table width="36%" border="0" cellspacing="0" cellpadding="0">
	             <tr>
	               <td width="13" height="12"><img src="themes/thaivbd/images/title_e-auction_coner_topleft.png" width="13" height="12" /></td>
	               <td class="tde-auction1"> </td>
	               <td width="13" height="12"><img src="themes/thaivbd/images/title_e-auction_coner_topright.png" width="13" height="12" /></td>
	             </tr>
	             <tr>
	               <td class="tde-auction3"> </td>
	               <td><span class="text_e-auction" style="position:absolute; left: 592px; top: 437px;">ข่าวประกวดราคา</span></td>
	               <td class="tde-auction4"> </td>
	             </tr>
	             <tr>
	               <td width="13" height="17" valign="top"><img src="themes/thaivbd/images/title_e-auction_coner_bottomleft.png" width="13" height="12" /></td>
	               <td class="tde-auction2" align="center"><img src="themes/thaivbd/images/title_e-auction_arrow4.png" width="11" height="19" /></td>
	               <td width="13" height="17" valign="top"><img src="themes/thaivbd/images/title_e-auction_coner_bottomright.png" width="13" height="12" /></td>
	             </tr>
	           </table>
	           <table width="100%" border="0" cellspacing="0" cellpadding="0">
	              <tr>
	                <td width="8" height="8"><img src="themes/thaivbd/images/border_e-auction_topleft.png" width="8" height="8" /></td>
	                <td background="themes/thaivbd/images/border_e-auction_top.png"> </td>
	                <td width="8" height="8"><img src="themes/thaivbd/images/border_e-auction_topright.png" width="8" height="8" /> </td>
	             </tr>
	              <tr>
	                <td width="8" background="themes/thaivbd/images/border_e-auction_left.png"> </td>
	                <td>
	                	
	                	<?php echo modules::run('contents/inc_bid'); ?>
	                	
	                </td>
	                <td background="themes/thaivbd/images/border_e-auction_right.png"> </td>
	             </tr>
	              <tr>
	                <td><img src="themes/thaivbd/images/border_e-auction_bottomleft.png" width="8" height="8" /></td>
	                <td background="themes/thaivbd/images/border_e-auction_bottom.png"> </td>
	                <td width="8" height="8"><img src="themes/thaivbd/images/border_e-auction_bottomright.png" width="8" height="8" /></td>
	              </tr>
	            </table>
	      </div>
	      <div id="media">
	      <table width="100%" border="0" cellspacing="0" cellpadding="0">
	        <tr>
	    <td>&nbsp;</td>
	    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
	      <tr>
	        <td width="9"><img src="themes/thaivbd/images/title_media_left.png" width="9" height="21" /></td>
	        <td width="218" class="titlemedia_h">ศูนย์เอกสารและสื่ออิเลคโทรนิค</td>
	        <td width="704"><img src="themes/thaivbd/images/title_media_right.png" width="9" height="21" /></td>
	      </tr>
	    </table></td>
	    <td>&nbsp;</td>
	  </tr>
	  <tr>
	    <td height="13" valign="top"><img src="themes/thaivbd/images/borderrmedia_topleft.png" width="11" height="13" /></td>
	    <td rowspan="3" valign="top" class="tdmedia3">
	    <br>
    	    <style>
			.jrblk{float: left; width:222px; text-align: center;}
			.btn_all a{margin:0 auto;}
    		</style>
    	    
    	    <?php echo modules::run('docs/inc_home'); ?>
    	    <?php echo modules::run('researchs/inc_home'); ?>
	    <br>
	    </td>
	    <td valign="top" height="13"><img src="themes/thaivbd/images/borderrmedia_topright.png" width="11" height="13" /></td>
	  </tr>
	  <tr>
	    <td class="tdmedia1">&nbsp;</td>
	    <td class="tdmedia2">&nbsp;</td>
	  </tr>
	  <tr>
	    <td width="11" valign="bottom" background="themes/thaivbd/images/borderrmedia_left.png"><img src="themes/thaivbd/images/borderrmedia_bottomleft.jpg" width="11" height="83" /></td>
	    <td width="11" valign="bottom" background="themes/thaivbd/images/borderrmedia_right.png"><img src="themes/thaivbd/images/borderrmedia_bottomright.jpg" width="11" height="83" /></td>
	  </tr>
	</table>
	<br>
		<?php echo modules::run('albums/inc_home'); ?>
		<?php echo modules::run('polls/inc_home'); ?>
		
	    <div id="bannerlink">
	    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	      <tr>
	        <td width="12" height="12"><img src="themes/thaivbd/images/borderBanner_topleft.png" width="12" height="12" /></td>
	        <td width="713" background="themes/thaivbd/images/borderBanner_top.png"></td>
	        <td width="183" background="themes/thaivbd/images/borderBanner_top.png" class="tdbannerlink1"> </td>
	        <td width="12" height="12"><img src="themes/thaivbd/images/borderBanner_topright.png" width="12" height="12" /></td>
	      </tr>
	      <tr>
	        <td background="themes/thaivbd/images/borderBanner_left.png"> </td>
	        <td valign="top">
	            <?php echo modules::run('weblinks/inc_bannerlink'); ?>
	        </td>
	        <td valign="top" class="tdbannerlink1"><img src="themes/thaivbd/images/arrow_link.gif" width="4" height="6" style="padding-left:10px;"> <span class="textlink">ลิ้งที่เกี่ยวข้อง</span><br><br>
	        <div class="textlink2">หน่วยงานส่วนกลาง</div><br>
	           <?php echo modules::run('weblinks/inc_textlink'); ?>
	        </td>
	        <td background="themes/thaivbd/images/borderBanner_right.png"> </td>
	      </tr>
	      <tr>
	        <td><img src="themes/thaivbd/images/borderBanner_bottomleft.png" width="12" height="12" /></td>
	        <td background="themes/thaivbd/images/borderBanner_bottom.png"></td>
	        <td background="themes/thaivbd/images/borderBanner_bottom.png" class="tdbannerlink1"> </td>
	        <td><img src="themes/thaivbd/images/borderBanner_bottomright.png" width="12" height="12" /></td>
	      </tr>
	    </table>
	    </div>
	    <br>
	    <?php include "_footer.php";?>
	    
	      <br>
	    </div> 
	  </div> 
	</div>



</body>
</html>