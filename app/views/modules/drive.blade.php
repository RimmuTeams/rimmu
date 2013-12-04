@extends('layouts.master')

@section('styles')
	@parent
	<!-- costume css here -->
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/themes/smoothness/jquery-ui.css" />
	<!-- elFinder file manager -->
	<link rel="stylesheet" media="screen" href="css/plugins/elfinder.min.css">
   	
@stop

@section('scripts')
	@parent
	<!-- costume scripts here -->

   	
@stop

@section('content')
 <!-- Grid row -->
					<div class="row">
						
						<!-- Data block -->
						<article class="span12 data-block">
							<div class="data-container">
								<header>
									<h2>Drive</h2>
								</header>
								<section>
									<div id="elfinder"></div>
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
   	<script src="js/plugins/elFinder/js/elfinder.min.js"></script>
		<script>
			$(document).ready(function(){

				// elFinder init
				var elf = $('#elfinder').elfinder({
					url : 'js/plugins/elFinder/php/connector.php', // connector URL (REQUIRED)
					resizable : false,
					uiOptions : {
						toolbar : [
							['back', 'forward'],
							['mkdir', 'mkfile', 'upload'],
							['open', 'download', 'getfile'],
							['info'],
							['quicklook'],
							['copy', 'cut', 'paste'],
							['rm'],
							['duplicate', 'rename', 'edit', 'resize'],
							['extract', 'archive'],
							['search'],
							['view'],
							['help']
						],
					}
				}).elfinder('instance');
				
			});
		</script>
@stop