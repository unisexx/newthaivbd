<div id="col1">
<div id="highlight">
 	<table border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td valign="top">
				<div id="slider" >
					<ul id="run_highLight">
						<?php foreach($contents as $content):?>
							<li style="display:none;">
								<a href="contents/view/<?php echo $content->id?>"><img alt="<?php echo $content->title?>" src="themes/thaivbd/images/hilight1.png" width="531" height="212" border="0"></a>
							</li>
						<?php endforeach;?>
			    	</ul>
				</div>
          	  <div id="run">
	                <ul>
	                	<?php foreach($contents as $content):?>
	                		<li><a href="#">&nbsp;</a></li>
	                	<?php endforeach;?>
	                </ul>
              </div>
            </td>
      </tr>
   </table>
</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$("#highlight #slider li:first").show();
	$("#highlight #run ul li a:first").addClass('active');
	
	$("#highlight #run ul li a").click(function(){
		$(this).addClass("active").parent().siblings().find('a').removeClass("active");
		 $("#highlight #slider li:eq(" + $("#highlight #run ul li").index($(this).parent()) + ")").fadeIn('slow').siblings().hide();
		 clearInterval ( timeout );
		return false;
	});
			
	var timeout = setInterval("hilight();",5000);
});

function hilight(){
	var index = ($("#highlight #run ul li a").index($("#highlight #run ul li a.active")) + 1) % 5;
	// console.log(index);
	$("#highlight #run ul li:eq(" + index + ")").find('a').addClass("active").parent().siblings().find('a').removeClass("active");
	$("#highlight #slider li:eq(" + index + ")").fadeIn('slow').siblings().hide();
}
</script>
