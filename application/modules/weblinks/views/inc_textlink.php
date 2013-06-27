<div class="styled-select">
   <select onchange="window.open(this.options[this.selectedIndex].value,'_blank')">
      <option value="">----------------------------------</option>
      <?php foreach($weblinks as $row):?>
        <option value="<?php echo $row->url?>"><?php echo $row->title?></option>
      <?php endforeach;?>
   </select>
</div>
<br><br>
<div class="textlink2">หน่วยงานส่วนกลาง</div><br>
<div class="styled-select">
   <select onchange="window.open(this.options[this.selectedIndex].value,'_blank')">
      <option value="">----------------------------------</option>
      <?php foreach($weblinks2 as $row):?>
        <option value="<?php echo $row->url?>"><?php echo $row->title?></option>
      <?php endforeach;?>
   </select>
</div>