<div class="page-header position-relative">
    <h1>ปฎิทินปฎิบัติงาน <!-- <small><i class="icon-double-angle-right"></i> with draggable and editable events</small> --></h1>
</div><!--/page-header-->


<!-- PAGE CONTENT BEGINS HERE -->
<div class="row-fluid">
	
<div class="block">
<!-- <a href="calendars/admin/calendars/form" class="btn btn-info">เพิ่มตารางนัดหมาย</a> -->

<div id='calendar'></div>

</div>


<!-- !Calendar -->
<script>
	$(function(){	
	
		$.fullCalendar.parseDate( 'a' );		
		$('#calendar').fullCalendar({
			header: {
				left: 'today',
				center: 'title',
				right: 'prev,next'
			},
			theme: false,
			editable: true,
			eventDrop: function(event, start) {
				$.post('<?php echo base_url()?>calendars/admin/calendars/events_move',{id:event.id,start:start,end:start});
			},
			eventResize: function(event, end){
				$.post('<?php echo base_url()?>calendars/admin/calendars/events_move',{id:event.id,end:end});
			}, 
			dayClick: function(date) { 
				var month = (date.getMonth() + 1).toString();
				var dom = date.getDate().toString();
				if (month.length == 1) month = "0" + month;
				if (dom.length == 1) dom = "0" + dom;
				window.location = '<?php echo base_url()?>calendars/admin/calendars/form?date=' + date.getFullYear() + "-" + month + "-" + dom;
			},
				
			eventMouseover: function(){
				$(this).css('background-color', 'red');
			},
			eventClick: function(event){
				window.location = '<?php echo base_url()?>calendars/admin/calendars/form/' + event.id;
			},
			events: "<?php echo base_url()?>calendars/admin/calendars/events",
			loading: function(bool) {
			if (bool) $('#loading').show();
				else $('#loading').hide();
			}
		});
    });
</script>