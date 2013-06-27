<script language="javascript">
$(function(){
	$(".btn_ok").click(function(){
		var p = $(this).closest('#poll');
		if(p.find("input[name=poll]:checked")){
			$.get("polls/vote",{id:p.find("input[name=id]").val(),id_ans:p.find("input[name=poll]:checked").val()},function(data){
				p.find('.poll-result').html(data).show();
				p.find('.box_radio,.btn_ok,.btn_viewvote').hide();
            });
		}
		else
		{
			alert('กรุณาเลือกคำตอบก่อนส่งความคิดเห็นค่ะ');
		}
		return false;
	});
	
	$(".btn_viewvote").click(function(){
		var p = $(this).closest('#poll');
			$.get("polls/view/" + p.find("input[name=id]").val(),function(data){
				p.find('.poll-result').html(data).show();
				p.find('.box_radio,.btn_ok,.btn_viewvote').hide();
				});
		return false;
	});
});
</script>

<!-- <a class="moreleft" href="polls">more</a> -->
<!-- <div id="poll">
	<b><?php echo $poll->title ?></b>
	<div class="chkbox">
		<?php foreach($poll->polldetail as $item): ?>
		<label class="radio">
          <input type="radio" value="<?php echo $item->id ?>" name="poll">
          <?php echo $item->name ?>
        </label>
		<?php endforeach ?>
		<p style="text-align: right;">
			<input type="submit" value="ส่งความคิดเห็น" class="btn btn-mini btn-info" name="pollBtn2"> <input value="ดูผลสำรวจ" type="button" class="btn_pollview link_vote" name="viewBtn2">
			<a href="#" class="link_vote btn btn-mini btn-info">ดูผลโหวต</a>
		</p>
		<input type="hidden" name="id" value="<?php echo $poll->id ?>" />
	</div>
	<div class="poll-result" style="display:none;"></div>
</div> -->




<div id="poll">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="themes/thaivbd/images/borderVote_topleft.jpg" width="13" height="13" /></td>
        <td background="themes/thaivbd/images/borderVote_top.jpg"> </td>
        <td><img src="themes/thaivbd/images/borderVote_topright.jpg" width="13" height="13" /></td>
      </tr>
      <tr>
        <td width="13" background="themes/thaivbd/images/borderVote_left.jpg"> </td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="themes/thaivbd/images/icon_poll.png" width="20" height="20" /></td>
            <td><span class="titlePoll"><?php echo $poll->title ?></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
            <div class="box_radio">
            <ul>
                <?php foreach($poll->polldetail as $item): ?>
                    <li><input class="radio" type="radio" name="poll" value="<?php echo $item->id ?>"><label><?php echo $item->name ?></label></li>
                <?php endforeach;?>
            </ul>
            </div>
            <div class="poll-result" style="display:none;"></div>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $poll->id ?>" />
                <div class="btn_ok"><a href="#">&nbsp;</a></div>
                <div class="btn_viewvote"><a href="#">&nbsp;</a></div>
                <div class="link_other_vote"><a href="#">แสดงความคิดเห็นในหัวข้ออื่นๆ</a></div>
            </td>
          </tr>
          <tr>
            <td height="10"> </td>
            <td height="10"> </td>
          </tr>
        </table></td>
        <td width="13" background="themes/thaivbd/images/borderVote_right.jpg"> </td>
      </tr>
      <tr>
        <td><img src="themes/thaivbd/images/borderVote_bottomleft.jpg" width="13" height="13" /></td>
        <td background="themes/thaivbd/images/borderVote_bottom.jpg"> </td>
        <td><img src="themes/thaivbd/images/borderVote_bottomright.jpg" width="13" height="13" /></td>
      </tr>
    </table>
</div>