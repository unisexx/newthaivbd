$(function() {
	// Set Theme from cookie
	$("link.theme").attr("href",$.cookie('theme'));
	
	// Theme Switcher
	$(".theme-switch a").click(function() { 
		$("link.theme").attr("href",$(this).attr('rel'));
		
		// create cookie (30 วัน)
		$.cookie('theme', $(this).attr('rel'), { expires: 30 });
		
		return false;
	});
	
	$( "#accordion" ).accordion({
      collapsible: true,
      heightStyle: "content"
    });
    
    
	$(function () {
  		$("a[rel^=lightbox]").prettyPhoto();
	});
						
	
	var availableTags = [
		"ActionScript",
		"AppleScript",
		"Asp",
		"BASIC",
		"C",
		"C++",
		"Clojure",
		"COBOL",
		"ColdFusion",
		"Erlang",
		"Fortran",
		"Groovy",
		"Haskell",
		"Java",
		"JavaScript",
		"Lisp",
		"Perl",
		"PHP",
		"Python",
		"Ruby",
		"Scala",
		"Scheme"
	];
	
	$( "#autocomplete" ).autocomplete({
		source: availableTags
	});
	

	
	$( "#button" ).button();
	$( "#radioset" ).buttonset();
	

	
	$( "#tabs" ).tabs();
	

	
	$( "#dialog" ).dialog({
		autoOpen: false,
		width: 400,
		buttons: [
			{
				text: "Ok",
				click: function() {
					$( this ).dialog( "close" );
				}
			},
			{
				text: "Cancel",
				click: function() {
					$( this ).dialog( "close" );
				}
			}
		]
	});

	// Link to open the dialog
	$( "#dialog-link" ).click(function( event ) {
		$( "#dialog" ).dialog( "open" );
		event.preventDefault();
	});
	

	
	$( "#datepicker" ).datepicker({
		inline: true
	});
	
	
	$( "#progressbar" ).progressbar({
		value: 20
	});
	

	// Hover states on the static widgets
	$( "#dialog-link, #icons li" ).hover(
		function() {
			$( this ).addClass( "ui-state-hover" );
		},
		function() {
			$( this ).removeClass( "ui-state-hover" );
		}
	);
	
	
	// declare a few constants:
		 var ELE = "td.content"; //action element
	     var SMALL = 9; //small font size in pixels
	     var LARGE = 16; //larger size in pixels
	     var RESET = 13; //reset size to default
	     var COOKIE_NAME = "fontsize"; //Maybe give this the name of your site.
	     //make it small by default
	     var fontsize = RESET;

	     // if cookie exists set font size to saved value, otherwise create cookie
	     if($.cookie(COOKIE_NAME)) {
		     fontsize = $.cookie(COOKIE_NAME);
		     //set initial font size for this page view:
		     $(ELE).css("font-size", fontsize + "px");
		     //set up appropriate class on font resize link:
		     if(fontsize == SMALL) { $("#small").addClass("current"); }
		     else { $("#large").addClass("current"); }
	     } else {
		     $("#small").addClass("current");
		     $.cookie(COOKIE_NAME, fontsize);
	     }

	     // large font-size link:
	     $(".fontSizePlus").bind("click", function() {
			     if(fontsize == SMALL || fontsize == RESET) {
				     fontsize = LARGE;
					     $(ELE).css("font-size", fontsize + "px");
					     	$.cookie(COOKIE_NAME, fontsize);
					     }
				     return false;	
			     });
	     
	     // small font-size link:
	     $(".fontSizeMinus").bind("click", function() {
			     if(fontsize == LARGE || fontsize == RESET) {
				     fontsize = SMALL;
					     $(ELE).css("font-size", fontsize + "px");
					     	$.cookie(COOKIE_NAME, fontsize);
					     }
				     return false;	
			     });
			     
		// small font-size link:
	     $(".fontReset").bind("click", function() {
			     if(fontsize == SMALL || fontsize == LARGE) {
				     fontsize = RESET;
					     $(ELE).css("font-size", fontsize + "px");
					     	$.cookie(COOKIE_NAME, fontsize);
					     }
				     return false;	
			     });
			     
	
});