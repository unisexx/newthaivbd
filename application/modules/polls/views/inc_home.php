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

<div id="poll">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="borderVote_topleft"></td>
        <td class="borderVote_top"> </td>
        <td class="borderVote_topright"></td>
      </tr>
      <tr>
        <td width="13" class="borderVote_left"> </td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="icon_poll"></td>
            <td><span class="titlePoll"><?php echo $poll->title ?></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
            <div class="box_radio">
            <ul>
                <?php foreach($poll->polldetail as $key=>$item): ?>
                    <li><input id="<?php echo $key?>" class="radio" type="radio" name="poll" value="<?php echo $item->id ?>"><label for="<?php echo $key?>"><?php echo $item->name ?></label></li>
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
                <div class="link_other_vote"><a href="polls">แสดงความคิดเห็นในหัวข้ออื่นๆ</a></div>
            </td>
          </tr>
          <tr>
            <td height="10"> </td>
            <td height="10"> </td>
          </tr>
        </table></td>
        <td width="13" class="borderVote_right"> </td>
      </tr>
      <tr>
        <td class="borderVote_bottomleft"></td>
        <td class="borderVote_bottom"> </td>
        <td class="borderVote_bottomright"></td>
      </tr>
    </table>
</div>