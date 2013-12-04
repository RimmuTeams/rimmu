@extends('layouts.master')

@section('styles')
	@parent
	<!-- costume css here -->
	<link rel='stylesheet' type='text/css' href='css/plugins/jquery.fullcalendar.css'>
   	
@stop

@section('scripts')
	@parent
	<!-- costume scripts here -->

   	
@stop

@section('content')
  <!-- Grid row -->
					<div class="row">
					
						<!-- Example jQuery FullCalendar -->
						<!-- Data block -->
						<article class="span12 data-block">
							<div class="data-container">
								<header>
									<a href="#" class="btn btn-flat btn-large"><span class="awe-plus"></span> Create</a>
								</header>
								<section>
									<div class='full-calendar full-calendar-demo'></div>
								</section>
							</div>
						</article>
						<!-- /Data block -->
						
					</div>
					<!-- /Grid row -->

@stop


@section('other_script')
    @parent
		
		<!-- jQuery FullCalendar -->
	<script src="js/plugins/fullCalendar/jquery.fullcalendar.min.js"></script>
		
		<!-- Google Calendar plugin for jQuery FullCalendar -->
	<script src="js/plugins/fullCalendar/gcal.js"></script>
    <!-- costume scripts_other here -->
   	<script>
			$(document).ready(function() {
			
				var date = new Date();
				var d = date.getDate();
				var m = date.getMonth();
				var y = date.getFullYear();
				
				$('.full-calendar-demo').fullCalendar({
					header: {
						left: 'title',
						center: '',
						right: 'today month,basicWeek prev,next'
					},
					buttonText: {
						prev: '<span class="awe-circle-arrow-left"></span>',
						next: '<span class="awe-circle-arrow-right"></span>'
					},
					editable: true,
					events: [
						{
							title: 'All Day Event',
							start: new Date(y, m, 1)
						},
						{
							title: 'Long Event',
							start: new Date(y, m, d-5),
							end: new Date(y, m, d-2)
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: new Date(y, m, d-3, 16, 0),
							allDay: false
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: new Date(y, m, d+4, 16, 0),
							allDay: false
						},
						{
							title: 'Meeting',
							start: new Date(y, m, d, 10, 30),
							allDay: false
						},
						{
							title: 'Lunch',
							start: new Date(y, m, d, 12, 0),
							end: new Date(y, m, d, 14, 0),
							allDay: false
						},
						{
							title: 'Birthday Party',
							start: new Date(y, m, d+1, 19, 0),
							end: new Date(y, m, d+1, 22, 30),
							allDay: false
						},
						{
							title: 'Walking Pixels website',
							start: new Date(y, m, 28),
							end: new Date(y, m, 29),
							url: 'http://www.walkingpixels.com/'
						}
					]
				});
				
				$('.full-calendar-gcal').fullCalendar({
					header: {
						left: 'title',
						center: '',
						right: 'today month,basicWeek prev,next'
					},
					buttonText: {
						prev: '<span class="awe-arrow-left"></span>',
						next: '<span class="awe-arrow-right"></span>'
					},
					events: {
						url: 'http://www.google.com/calendar/feeds/usa__en%40holiday.calendar.google.com/public/basic',
						className: 'gcal-event', // an option!
						currentTimezone: 'America/Chicago' // an option!
					}
				});
				
			});
		</script>
@stop