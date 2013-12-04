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
					
					<!-- Hero unit -->
					<div class="hero-unit">
						<h1>Showcase dashboard</h1>
						<p>When you really need to draw the attention. Create something and share it with us. Because we will like to read, learn and watch your project</p>
						<p><a class="btn btn-alt btn-info btn-large">Learn more</a></p>
					</div>
					<!-- /Hero unit -->
					
					<a href="#" class="btn btn-flat btn-danger" >Hot</a> 
					<a href="#" class="btn btn-flat " >Trending</a> 
					<a href="#" class="btn btn-flat " >New</a>

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







<!-- modal -->

<div class="modal fade hide" id="notifModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Modal header</h3>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae enim ac ligula eleifend commodo id quis risus. Donec consequat lorem et metus facilisis vitae dapibus felis fermentum. Aenean imperdiet nibh vitae sem condimentum pharetra. Mauris molestie molestie faucibus. Aenean sit amet sem orci, at adipiscing dolor. Fusce feugiat odio vitae erat commodo sed accumsan ante sollicitudin. Integer mollis, tellus vel feugiat varius, risus quam lacinia erat, eu ultricies urna dolor ac metus. Mauris vestibulum euismod lectus, vitae vehicula nisl ullamcorper sit amet. In ac consectetur purus. Integer orci ipsum, sollicitudin non rutrum id, adipiscing eu augue. Nulla eget lorem elit. Curabitur vehicula porttitor suscipit.</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-alt" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-alt btn-primary">Save changes</a>
			</div>
		</div>
		
		<div class="modal fade hide" id="inboxModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Modal header</h3>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae enim ac ligula eleifend commodo id quis risus. Donec consequat lorem et metus facilisis vitae dapibus felis fermentum. Aenean imperdiet nibh vitae sem condimentum pharetra. Mauris molestie molestie faucibus. Aenean sit amet sem orci, at adipiscing dolor. Fusce feugiat odio vitae erat commodo sed accumsan ante sollicitudin. Integer mollis, tellus vel feugiat varius, risus quam lacinia erat, eu ultricies urna dolor ac metus. Mauris vestibulum euismod lectus, vitae vehicula nisl ullamcorper sit amet. In ac consectetur purus. Integer orci ipsum, sollicitudin non rutrum id, adipiscing eu augue. Nulla eget lorem elit. Curabitur vehicula porttitor suscipit.</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-alt" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-alt btn-primary">Save changes</a>
			</div>
		</div>
@stop


@section('other_script')
    @parent

   	
@stop