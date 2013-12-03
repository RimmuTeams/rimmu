@extends('layouts.master')

@section('styles')
	@parent
	<!-- costume css here -->

   	
@stop

@section('scripts')
	@parent
	<!-- costume scripts here -->

   	
@stop

@section('content')
   <!-- Page header 
					<article class="page-header">
						<h1>Welcome, username!</h1>
					</article> -->
					<!-- /Page header -->
					
					<a href="#" class="btn btn-flat" ><span class="awe-plus"></span> Create</a> 

					<!-- Grid row -->
					<div class="row">
					
					<!-- Data block -->
					<article class="span4 data-block">
						<div class="data-container">
							<header>
								<h2>Project Title</h2>
							</header>
							<section>
								<ul class="unstyled">
									<li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis erat dui, quis purus.</li>
									<li><a class="btn btn-info" href="#">Learn More</a>
								</ul>
							</section>
						</div>
					</article>
					<!-- /Data block -->
					
						
						
					</div>
					<!-- /Grid row -->

@stop


@section('other_script')
    @parent
    <!-- costume scripts_other here -->
   	
@stop