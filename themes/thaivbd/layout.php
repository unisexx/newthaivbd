<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="th" lang="th" dir="ltr">
<head>
    <base href="<?php echo base_url(); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $template['title'] ?></title>
    <?php echo $template['metadata'] ?>
    <?php include "_css.php";?>
    <?php include "_script.php";?>
</head>
<body>
    <div id="wrap">
    <div class="main">
        <div class="main2">
            <?php include "_header.php";?>
                    
              <div id="content">
                <?php echo modules::run('contents/inc_hilight'); ?>
                <?php echo modules::run('contents/inc_information'); ?>
                
                  <div class="clr"></div>
                  <hr class="hr3" />
              </div>
              <div class="clr"></div>
              <div id="content_blank">
                <?php echo $template['body'] ?>
              </div>
              
            <?php include "_footer.php";?>
        </div> 
    </div> 
</div>

</body>
</html>