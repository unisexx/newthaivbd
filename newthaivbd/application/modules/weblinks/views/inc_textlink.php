<div class="styled-select">
	<label for="textlink1" style="display:none;">Textlink1</label>
	<select id="textlink1" onchange="window.open(this.options[this.selectedIndex].value,'_blank')">
	  <option value="">----------------------------------</option>
	  <?php foreach($weblinks as $row):?>
	    <option value="<?php echo $row->url?>"><?php echo $row->title?></option>
	  <?php endforeach;?>
	</select>
</div>
<br><br>
<div class="textlink2">หน่วยงานส่วนกลาง</div><br>
<div class="styled-select">
	<label for="textlink2" style="display:none;">Textlink2</label>
	<select id="textlink2" onchange="window.open(this.options[this.selectedIndex].value,'_blank')">
      <option value="">----------------------------------</option>
      <?php foreach($weblinks2 as $row):?>
        <option value="<?php echo $row->url?>"><?php echo $row->title?></option>
      <?php endforeach;?>
	</select>
</div>