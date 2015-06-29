<object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="player" width="300" height="245">
	<param name="movie" value="media/jwplayer/player.swf" />
	<param name="allowfullscreen" value="true" />
	<param name="allowscriptaccess" value="always" />
	<param name="flashvars" value="file=<?php echo base_url().$rs->files?>&image=<?php echo $rs->image?>" />
	<embed
		type="application/x-shockwave-flash"
		id="player2"
		name="player2"
		src="media/jwplayer/player.swf"
		width="500" 
		height="344"
		allowscriptaccess="always" 
		allowfullscreen="true"
		flashvars="file=<?php echo base_url().$rs->files?>&image=<?php echo $rs->image?>" 
	/>
</object>