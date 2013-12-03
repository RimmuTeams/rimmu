<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	@include('partials.head')
	<body>
	
		<!-- Full height wrapper -->
		<div id="wrapper">
			
			<!-- Main page header -->
			@include('partials.header')
			<!-- /Main page header -->
			
			<!-- Main page container -->
			<section class="container" role="main">

				<!-- Left (navigation) side -->
				@include('partials.leftnav')
				<!-- Left (navigation) side -->
				
				<!-- Right (content) side -->
				<div class="content-block" role="main">


					@yield('content')
					
				</div>
				<!-- /Right (content) side -->
				
			</section>
			<!-- /Main page container -->
			
			<!-- Sticky footer push -->
			<div id="push"></div>
			
		</div>
		<!-- /Full height wrapper -->
		
		<!-- Main page footer -->
		@include('partials.footer')
		<!-- /Main page footer -->
		
		<!-- Scripts -->
		@include('partials.script')

	</body>
</html>
