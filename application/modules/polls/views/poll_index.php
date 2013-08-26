 <script language="javascript">
$(function(){
	$("#data input[name='pollBtn2']").click(function(){
		var p = $(this).parent().parent();
		if(p.find("input[name=poll]:checked")){
			$.get("polls/vote",{id:p.find("input[name=id]").val(),id_ans:p.find("input[name=poll]:checked").val()},function(data){
				p.parent().find('.poll-result').html(data).show();
				p.hide();							
				});
		}
		else
		{
			alert('กรุณาเลือกคำตอบก่อนส่งความคิดเห็นค่ะ');
		}
		return false;
	});
	
	$("#data input[name='viewBtn2']").click(function(){
		var p = $(this).parent().parent();
			$.get("polls/view/" + p.find("input[name=id]").val(),function(data){
				p.parent().find('.poll-result').html(data).show();
				p.hide();
				});
		return false;
	});
});
</script>

<div id="breadcrumb">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
          <tr>
            <td width="10" class="breadcrumb_left"></td>
            <td width="910" bgcolor="#ECECEC" class="imgleaf">
            <div class="textbreadcrumb">แบบสำรวจความคิดเห็น</div>         
            <div class="location"><a href="home">หน้าแรก</a> &gt; แบบสำรวจความคิดเห็น</div>
            </td>
            <td width="10" align="right" class="breadcrumb_right"></td>
          </tr>
          <tr>
              <td></td>
              <td class="content">
                    <h1>แบบสำรวจความคิดเห็น</h1>
                      
                    <div id="data">
                        <?php echo $polls->pagination() ?>
                        <?php foreach($polls as $poll): ?>
                        <div class="poll">
                        <h3 class="B f14"><?php echo $poll->title ?></h3>
                        <div id="listpoll">
                            <?php foreach($poll->polldetail as $item): ?>
                            <p><input type="radio" value="<?php echo $item->id ?>" name="poll"><label><?php echo $item->name ?></label></p>
                            <?php endforeach ?>
                            <p>
                                <input type="submit" value="ส่งความคิดเห็น" class="btn_pollcomment" name="pollBtn2"> 
                                <input type="button" value="ดูผลสำรวจ" class="btn_pollview" name="viewBtn2">
                            </p>
                            <input type="hidden" name="id" value="<?php echo $poll->id ?>" />
                        </div>
                        <div class="poll-result" style="display:none;"></div>
                        <hr />
                        </div>
                        <?php endforeach; ?>
                        <?php echo $polls->pagination() ?>
                    </div>
                    
              </td>
              <td></td>
          </tr>
      </tbody>
  </table>
</div>
