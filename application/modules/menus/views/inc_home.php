<div id="topmenu">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="17" height="41" class="bg_topmenu_left"></td>
        <td height="41" class="bg_topmenu_center">
        <ul>
    	<?foreach($menus as $row):?>
    		<li><a href="<?=$row->url?>"><?=$row->title?></a>
    			<?
					$sql = "select * from menus where pid = ".$row->id." and status = 'approve' order by orderlist asc";
        			$submenu = $this->db->query($sql)->result();
    			?>
    			<?if($submenu):?>
    			<ul>
    				<?foreach($submenu as $item):?>
    					<li><a href="<?=$item->url?>"><?=$item->title?></a></li>
    				<?endforeach;?>
    			</ul>
    			<?endif;?>
    		</li>
    	<?endforeach;?>
    	</ul>
        </td>
        <td width="17" height="41" class="bg_topmenu_right"></td>
      </tr>
  </table>
</div>