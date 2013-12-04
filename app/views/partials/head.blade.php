<head>
		<meta charset="utf-8">
		<title>Rimmu</title>
		<meta name="description" content="">
		<meta name="author" content="Rimmu Team">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
		<!-- style loop config assets -->
		@section('styles')
			@foreach ( Config::get('assets.css') as $style )
				{{ HTML::style($style) }}
			@endforeach
		@show		

		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/icons/apple-touch-icon-57-precomposed.png">
		
		<!-- JS Libs -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/libs/jquery.js"><\/script>')</script>
		

		<!-- style loop config assets -->
		@section('scripts')
			@foreach ( Config::get('assets.scripts') as $script )
				 {{ HTML::script($script) }}
			@endforeach
		@show	
		
		<script>
			$(document).ready(function(){
				
				// Tooltips
				$('[title]').tooltip({
					placement: 'top'
				});
				
				// Tabs
				$('.demoTabs a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
					$('.fullcalendar, .full-calendar-gcal').fullCalendar('render'); // Refresh jQuery FullCalendar for hidden tabs
				})

			});
		</script>
		
	</head>