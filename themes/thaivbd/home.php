<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="th" lang="th" dir="ltr">
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
	          <img alt="สำนักโรคติดต่อนำโดยแมลง" src="themes/thaivbd/images/logo_moph.png" width="202" height="63" style="margin-top:-20px; position:absolute;"/> </div>
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
		<div id="col2_e-auction" style="position:relative;">
	             <table width="36%" border="0" cellspacing="0" cellpadding="0">
	             <tr>
	               <td width="13" height="12" class="title_e-auction_coner_topleft"></td>
	               <td class="tde-auction1"> </td>
	               <td width="13" height="12" class="title_e-auction_coner_topright"></td>
	             </tr>
	             <tr>
	               <td class="tde-auction3"> </td>
	               <td><span class="text_e-auction" style="position:absolute; top: 4px;">ข่าวประกวดราคา</span></td>
	               <td class="tde-auction4"> </td>
	             </tr>
	             <tr>
	               <td width="13" height="17" valign="top" class="title_e-auction_coner_bottomleft"></td>
	               <td class="tde-auction2" align="center" class="title_e-auction_arrow4"><span class="title_e-auction_arrow4">&nbsp;&nbsp;&nbsp;</span></td>
	               <td width="13" height="17" valign="top" class="title_e-auction_coner_bottomright"></td>
	             </tr>
	           </table>
	           <table width="100%" border="0" cellspacing="0" cellpadding="0">
	              <tr>
	                <td width="8" height="8" class="border_e-auction_topleft"></td>
	                <td class="border_e-auction_top"> </td>
	                <td width="8" height="8" class="border_e-auction_topright"> </td>
	             </tr>
	              <tr>
	                <td width="8" class="border_e-auction_left"> </td>
	                <td>
	                	
	                	<?php echo modules::run('contents/inc_bid'); ?>
	                	
	                </td>
	                <td class="border_e-auction_right"> </td>
	             </tr>
	              <tr>
	                <td class="border_e-auction_bottomleft"></td>
	                <td class="border_e-auction_bottom"> </td>
	                <td width="8" height="8" class="border_e-auction_bottomright"></td>
	              </tr>
	            </table>
	      </div>
	      <div id="media">
	      <table width="100%" border="0" cellspacing="0" cellpadding="0">
	        <tr>
	    <td>&nbsp;</td>
	    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
	      <tr>
	        <td width="9" class="title_media_left"></td>
	        <td width="218" class="titlemedia_h">ศูนย์เอกสารและสื่ออิเลคโทรนิค</td>
	        <td width="704" class="title_media_right"></td>
	      </tr>
	    </table></td>
	    <td>&nbsp;</td>
	  </tr>
	  <tr>
	    <td height="13" valign="top" class="borderrmedia_topleft"></td>
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
	    <td valign="top" height="13" class="borderrmedia_topright"></td>
	  </tr>
	  <tr>
	    <td class="tdmedia1">&nbsp;</td>
	    <td class="tdmedia2">&nbsp;</td>
	  </tr>
	  <tr>
	    <td width="11" valign="bottom">
	        <span class="borderrmedia_left"></span>
	        <span class="borderrmedia_bottomleft"></span>
	    </td>
	    <td width="11" valign="bottom">
	        <span class="borderrmedia_right"></span>
	        <span class="borderrmedia_bottomright"></span>
	    </td>
	  </tr>
	</table>
	<br>
		<?php echo modules::run('albums/inc_home'); ?>
		<?php echo modules::run('polls/inc_home'); ?>
		
	    <div id="bannerlink">
	    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	      <tr>
	        <td width="12" height="12" class="borderBanner_topleft"></td>
	        <td width="713" class="borderBanner_top"></td>
	        <td width="183" class="tdbannerlink1 borderBanner_top"> </td>
	        <td width="12" height="12" class="borderBanner_topright"></td>
	      </tr>
	      <tr>
	        <td class="borderBanner_left"> </td>
	        <td valign="top">
	            <?php echo modules::run('weblinks/inc_bannerlink'); ?>
	        </td>
	        <td valign="top" class="tdbannerlink1"><img alt="arrow_link" src="themes/thaivbd/images/arrow_link.gif" width="4" height="6" style="padding-left:10px;"> <span class="textlink">ลิ้งที่เกี่ยวข้อง</span><br><br>
	        <div class="textlink2">หน่วยงานส่วนกลาง</div><br>
	           <?php echo modules::run('weblinks/inc_textlink'); ?>
	        </td>
	        <td class="borderBanner_right"> </td>
	      </tr>
	      <tr>
	        <td class="borderBanner_bottomleft"></td>
	        <td class="borderBanner_bottom"></td>
	        <td class="tdbannerlink1 borderBanner_bottom"> </td>
	        <td class="borderBanner_bottomright"></td>
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