<div id="footer">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" valign="bottom" class="dress"></td>
    <td width="13">&nbsp;</td>
  </tr>
  <tr>
    <td width="13" class="footer_bg_color"> </td>
    <td width="894" class="footer_bg_color">
    <div style="float:left; padding-top:5px;">สำนักโรคติดต่อนำโดยแมลง กรมควบคุมโรค กระทรวงสาธารณสุข <a href="http://www.thaivbd.org/n/contents/view/324346" style="color:white; font-weight: bold; text-decoration: underline;">เบอร์โทรศัพท์ และ อีเมล์</a></div>
    <div class="social">
    	<a href="https://www.facebook.com/thaivbd" title="Facebook" target="_blank"><img alt="facebook" src="themes/thaivbd/images/icon_fb.png" width="20" height="20" border="0"></a>&nbsp;&nbsp;<a href="https://twitter.com/thaivbd" title="Twitter" target="_blank"><img alt="twitter" src="themes/thaivbd/images/icon_twitter.png" width="20" height="20" border="0"></a>
    </div></td>
    <td valign="top" class="footer_topright"></td>
  </tr>
  <tr>
    <td width="13" height="13" valign="bottom" class="footer_bottomleft"></td>
    <td class="footer_bg_color">
    <div class="copyright">Copyright ⓒ 2013 www.thaivbd.org. All Rights Reserved.</div>
    <div class="footer2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" class="footerleft"></td>
        <!-- <td width="422" class="footer_bg_label"><img alt="visitor-all" src="themes/thaivbd/images/icon_visitor_all.png" width="23" height="21" /> ผู้เข้าเยี่ยมชมทั้งหมด <?=number_format(visit_count_total())?> คน&nbsp;&nbsp;
        <img alt="visitor-online" src="themes/thaivbd/images/icon_visitor_online.png" width="16" height="16" /> ผู้เข้าเยี่ยมชมวันนี้ <?=visit_count_today()?> คน</td> -->
        
        <?=modules::run('dashboards/inc_home'); ?>
        <script src="media/js/gaApi.js" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
			<?php $ga = new Analytics(); ?>
			gaApi('<?php echo $ga->getToday(); ?>', '#gaToday');
			gaApi('<?php echo $ga->getMonth(); ?>', '#gaMonth');
			gaApi('<?php echo $ga->getTotal(); ?>', '#gaTotal');
			});
		</script>
		
        <td width="12" class="footerright"></td>
      </tr>
      </table></div></td>
    <td width="13" height="13" valign="bottom" class="footer_bottomright"></td>
  </tr>
</table>
<br />
</div>