<?php foreach($polls as $poll): ?>
<div style="margin-bottom:5px;">
    <div class="poll-text"><?php echo $poll->name ?></div>
    <div class="poll-bar progress" style="height: 10px; background:#E9E9E9; margin-bottom:0px;"><div class="poll-foreground bar bar-danger" style="height:10px; width:<?php echo $poll->percent ?>%; background:red;"></div></div>
    <div class="poll-percent"><span style="float:right;"><?php echo $poll->num ?> คน </span><?php echo $poll->percent ?>%</div>
</div>
<?php endforeach; ?>