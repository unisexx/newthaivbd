<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<base href="<?php echo base_url(); ?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php echo $template['title']; ?></title> 
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<?php include_once "_css.php"; ?>
		<?php include_once"_script.php"?>
	</head>
	<body>
        <?php include_once "_header.php"; ?>

        <div class="container-fluid" id="main-container">
            <a href="#" id="menu-toggler"><span></span></a><!-- menu toggler -->
            
            <?php include_once "_menu.php"?>
            <div id="main-content" class="clearfix">
                    <?php echo create_breadcrumb_admin()?>
                    
                    <div id="page-content" class="clearfix">
                        <!-- PAGE CONTENT BEGINS HERE -->
                        <?php echo $template['body']; ?>
                        <!-- PAGE CONTENT ENDS HERE -->
                    </div><!--/#page-content-->
                      

                    <div id="ace-settings-container">
                        <div class="btn btn-app btn-mini btn-warning" id="ace-settings-btn">
                            <i class="icon-cog"></i>
                        </div>
                        <div id="ace-settings-box">
                            <div>
                                <div class="pull-left">
                                    <select id="skin-colorpicker" class="hidden">
                                        <option data-class="default" value="#438EB9">#438EB9</option>
                                        <option data-class="skin-1" value="#222A2D">#222A2D</option>
                                        <option data-class="skin-2" value="#C6487E">#C6487E</option>
                                        <option data-class="skin-3" value="#D0D0D0">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>
                            <div><input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" /><label class="lbl" for="ace-settings-header"> Fixed Header</label></div>
                            <div><input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" /><label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label></div>
                        </div>
                    </div><!--/#ace-settings-container-->


            </div><!-- #main-content -->
        </div><!--/.fluid-container#main-container-->

        <a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
            <i class="icon-double-angle-up icon-only"></i>
        </a>
	</body>
</html>