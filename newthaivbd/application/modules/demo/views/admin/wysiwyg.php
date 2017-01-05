<div class="page-header position-relative">
    <h1>Wysiwyg &amp; Markdown Editor </h1>
</div><!--/.page-header-->


<div class="row-fluid">
                        <!--PAGE CONTENT BEGINS HERE-->

                        <h4 class="header green clearfix">
                            Bootstrap Lightweight Editor
                            <div class="pull-right">
                                <small class="grey middle">Choose style: &nbsp;</small>

                                <div class="btn-toolbar inline middle no-margin">
                                    <div data-toggle="buttons-radio" class="btn-group no-margin">
                                        <button class="btn btn-mini btn-yellow">1</button>
                                        <button class="btn btn-mini btn-yellow active">2</button>
                                        <button class="btn btn-mini btn-yellow">3</button>
                                    </div>
                                </div>
                            </div>
                        </h4>

                        <div id="editor-toolbar-1" class="wysiwyg-toolbar wysiwyg-style2 btn-toolbar center" data-target="#editor">
                            <div class="btn-group">
                                <a class="btn btn-small  dropdown-toggle" data-toggle="dropdown" title="Font">
                                    <i class=" icon-font"></i>

                                    <i class="icon-angle-down icon-on-right"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-light">  </ul>
                            </div>

                            <div class="btn-group">
                                <a class="btn btn-small  dropdown-toggle" data-toggle="dropdown" title="Font Size">
                                    <i class=" icon-text-height"></i>

                                    &nbsp;
                                    <i class="icon-angle-down icon-on-right"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-light">
                                    <li>
                                        <a data-edit="fontSize 5">
                                            <font size="5">Huge</font>
                                        </a>
                                    </li>

                                    <li>
                                        <a data-edit="fontSize 3">
                                            <font size="3">Normal</font>
                                        </a>
                                    </li>

                                    <li>
                                        <a data-edit="fontSize 1">
                                            <font size="1">Small</font>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <a class="btn btn-small btn-info " data-edit="bold" title="Bold (Ctrl/Cmd+B)">
                                    <i class=" icon-bold"></i>
                                </a>

                                <a class="btn btn-small btn-info " data-edit="italic" title="Italic (Ctrl/Cmd+I)">
                                    <i class=" icon-italic"></i>
                                </a>

                                <a class="btn btn-small btn-info " data-edit="strikethrough" title="Strikethrough">
                                    <i class=" icon-strikethrough"></i>
                                </a>

                                <a class="btn btn-small btn-info " data-edit="underline" title="Underline (Ctrl/Cmd+U)">
                                    <i class=" icon-underline"></i>
                                </a>
                            </div>

                            <div class="btn-group">
                                <a class="btn btn-small btn-success " data-edit="insertunorderedlist" title="Bullet list">
                                    <i class=" icon-list-ul"></i>
                                </a>

                                <a class="btn btn-small btn-success " data-edit="insertorderedlist" title="Number list">
                                    <i class=" icon-list-ol"></i>
                                </a>

                                <a class="btn btn-small btn-purple " data-edit="outdent" title="Reduce indent (Shift+Tab)">
                                    <i class=" icon-indent-left"></i>
                                </a>

                                <a class="btn btn-small btn-purple " data-edit="indent" title="Indent (Tab)">
                                    <i class=" icon-indent-right"></i>
                                </a>
                            </div>

                            <div class="btn-group">
                                <a class="btn btn-small btn-primary " data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)">
                                    <i class=" icon-align-left"></i>
                                </a>

                                <a class="btn btn-small btn-primary " data-edit="justifycenter" title="Center (Ctrl/Cmd+E)">
                                    <i class=" icon-align-center"></i>
                                </a>

                                <a class="btn btn-small btn-primary " data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)">
                                    <i class=" icon-align-right"></i>
                                </a>

                                <a class="btn btn-small btn-inverse " data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)">
                                    <i class=" icon-align-justify"></i>
                                </a>
                            </div>

                            <div class="btn-group">
                                <a class="btn btn-small btn-pink dropdown-toggle" data-toggle="dropdown" title="Hyperlink">
                                    <i class=" icon-link"></i>
                                </a>

                                <div class="dropdown-menu dropdown-caret input-append pull-right">
                                    <input placeholder="URL" type="text" data-edit="createLink" />
                                    <button class="btn btn-small btn-primary" type="button">Add</button>
                                </div>

                                <a class="btn btn-small btn-pink " data-edit="unlink" title="Remove Hyperlink">
                                    <i class=" icon-unlink"></i>
                                </a>
                            </div>

                            <div class="btn-group">
                                <a class="btn btn-small btn-success" title="Insert picture (or just drag & drop)" id="pictureBtn">
                                    <i class=" icon-picture"></i>
                                </a>

                                <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                            </div>

                            <div class="btn-group">
                                <select id="colorpicker" class="hidden" title="Change Color">
                                    <option value="#ac725e">#ac725e</option>
                                    <option value="#d06b64">#d06b64</option>
                                    <option value="#f83a22">#f83a22</option>
                                    <option value="#fa573c">#fa573c</option>
                                    <option value="#ff7537">#ff7537</option>
                                    <option value="#ffad46">#ffad46</option>
                                    <option value="#42d692">#42d692</option>
                                    <option value="#16a765">#16a765</option>
                                    <option value="#7bd148">#7bd148</option>
                                    <option value="#b3dc6c">#b3dc6c</option>
                                    <option value="#fbe983">#fbe983</option>
                                    <option value="#fad165">#fad165</option>
                                    <option value="#92e1c0">#92e1c0</option>
                                    <option value="#9fe1e7">#9fe1e7</option>
                                    <option value="#9fc6e7">#9fc6e7</option>
                                    <option value="#4986e7">#4986e7</option>
                                    <option value="#9a9cff">#9a9cff</option>
                                    <option value="#b99aff">#b99aff</option>
                                    <option value="#c2c2c2">#c2c2c2</option>
                                    <option value="#cabdbf">#cabdbf</option>
                                    <option value="#cca6ac">#cca6ac</option>
                                    <option value="#f691b2">#f691b2</option>
                                    <option value="#cd74e6">#cd74e6</option>
                                    <option value="#a47ae2">#a47ae2</option>
                                    <option value="#444" selected="">#444</option>
                                </select>

                                <input style="display:none;" disabled="" class="hidden" type="text" data-edit="foreColor" />
                            </div>

                            <div class="btn-group">
                                <a class="btn btn-small btn-grey " data-edit="undo" title="Undo (Ctrl/Cmd+Z)">
                                    <i class=" icon-undo"></i>
                                </a>

                                <a class="btn btn-small btn-grey " data-edit="redo" title="Redo (Ctrl/Cmd+Y)">
                                    <i class=" icon-repeat"></i>
                                </a>
                            </div>

                            <input type="text" data-edit="inserttext" class="wysiwyg-speech-input" id="voiceBtn" x-webkit-speech="" />
                        </div>

                        <div class="wysiwyg-editor" id="editor1"></div>

                        <div class="hr hr-double dotted"></div>

                        <div class="row-fluid">
                            <div class="span6">
                                <h4 class="header blue">Inside Widget</h4>

                                <div class="widget-box">
                                    <div class="widget-header widget-header-small  header-color-green">
                                        <div id="editor-toolbar-2" class="btn-toolbar wysiwyg-toolbar">
                                            <div class="btn-group">
                                                <a class="btn btn-small btn-grey " data-edit="bold" title="Bold (Ctrl/Cmd+B)">
                                                    <i class=" icon-bold"></i>
                                                </a>

                                                <a class="btn btn-small btn-grey " data-edit="italic" title="Italic (Ctrl/Cmd+I)">
                                                    <i class=" icon-italic"></i>
                                                </a>

                                                <a class="btn btn-small btn-grey " data-edit="strikethrough" title="Strikethrough">
                                                    <i class=" icon-strikethrough"></i>
                                                </a>

                                                <a class="btn btn-small btn-grey " data-edit="underline" title="Underline (Ctrl/Cmd+U)">
                                                    <i class=" icon-underline"></i>
                                                </a>
                                            </div>

                                            <div class="btn-group">
                                                <a class="btn btn-small btn-grey " data-edit="insertunorderedlist" title="Bullet list">
                                                    <i class=" icon-list-ul"></i>
                                                </a>

                                                <a class="btn btn-small btn-grey " data-edit="insertorderedlist" title="Number list">
                                                    <i class=" icon-list-ol"></i>
                                                </a>
                                            </div>

                                            <div class="btn-group">
                                                <a class="btn btn-small btn-grey " data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)">
                                                    <i class=" icon-align-left"></i>
                                                </a>

                                                <a class="btn btn-small btn-grey " data-edit="justifycenter" title="Center (Ctrl/Cmd+E)">
                                                    <i class=" icon-align-center"></i>
                                                </a>

                                                <a class="btn btn-small btn-grey " data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)">
                                                    <i class=" icon-align-right"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="widget-toolbar">
                                            <a href="#" data-action="collapse">
                                                <i class="icon-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main no-padding">
                                            <div class="wysiwyg-editor" id="editor2" style="height:200px;"></div>
                                        </div>

                                        <div class="widget-toolbox padding-4 clearfix">
                                            <div class="btn-group pull-left">
                                                <button class="btn btn-small btn-grey">
                                                    <i class="icon-remove bigger-125"></i>
                                                    Cancel
                                                </button>
                                            </div>

                                            <div class="btn-group pull-right">
                                                <button class="btn btn-small btn-danger">
                                                    <i class="icon-save bigger-125"></i>
                                                    Save
                                                </button>

                                                <button class="btn btn-small btn-success">
                                                    <i class="icon-globe bigger-125"></i>

                                                    Publish
                                                    <i class="icon-arrow-right icon-on-right bigger-125"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="span6">
                                <h4 class="header green">Markdown Editor</h4>

                                <div class="widget-box">
                                    <div class="widget-header widget-header-small header-color-blue">  </div>

                                    <div class="widget-body">
                                        <div class="widget-main no-padding">
                                            <textarea class="span12" name="content" data-provide="markdown" rows="10">**Markdown Editor** inside a *widget box*

- list item 1
- list item 2
- list item 3</textarea>
                                        </div>

                                        <div class="widget-toolbox padding-4 clearfix">
                                            <div class="btn-group pull-left">
                                                <button class="btn btn-small btn-info">
                                                    <i class="icon-remove bigger-125"></i>
                                                    Cancel
                                                </button>
                                            </div>

                                            <div class="btn-group pull-right">
                                                <button class="btn btn-small btn-purple">
                                                    <i class="icon-save bigger-125"></i>
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--PAGE CONTENT ENDS HERE-->
                    </div><!--/row-->


<script type="text/javascript" src="themes/admin/media/js/jquery.hotkeys.min.js"></script>
<script type="text/javascript">
    $(function(){
        function initToolbarBootstrapBindings() {
          var fonts = ['Arial', 'Courier', 'Comic Sans MS', 'Helvetica', 'Open Sans', 'Tahoma', 'Verdana'],
                fontTarget = $('[title=Font]').siblings('.dropdown-menu');
          $.each(fonts, function (idx, fontName) {
              fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
          });
          $('a[title]').tooltip({container:'body',animation:false});
            $('.dropdown-menu input').click(function() {return false;})
                .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
            .keydown('esc', function () {this.value='';$(this).change();});
    
    
          $('.wysiwyg-toolbar input[type=file]').prev().on('click', function () { 
            $(this).next().click();//the image icon
          });
    
          $('#colorpicker').ace_colorpicker({pull_right:true,caret:false}).change(function(){
            $(this).nextAll('input').eq(0).val(this.value).change();
          }).next().tooltip({title: $('#colorpicker').attr('title'), container:'body',animation:false}).next().hide();
    
    
          if ("onwebkitspeechchange"  in document.createElement("input")) {
            var editorOffset = $('#editor1').offset();
            $('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#editor1').innerWidth()-35});
          } else {
            $('#voiceBtn').hide();
          }
        };
        function showErrorAlert (reason, detail) {
            var msg='';
            if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
            else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
             '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
        };
        initToolbarBootstrapBindings();  
        $('#editor1').wysiwyg( { fileUploadError: showErrorAlert , activeToolbarClass: 'active' , toolbarSelector : '#editor-toolbar-1'} );
        $('#editor2').wysiwyg( { fileUploadError: showErrorAlert , activeToolbarClass: 'active' , toolbarSelector : '#editor-toolbar-2' } );
    
        
        
        $('[data-toggle="buttons-radio"]').on('click', function(e){
            var target = $(e.target);
            var which = parseInt(target.html());
            var toolbar = $('#editor-toolbar-1').get(0);
            if(which == 1 || which == 2 || which == 3) {
                toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
                if(which == 1) $(toolbar).addClass('wysiwyg-style1');
                else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
            }
        });
    });
</script>