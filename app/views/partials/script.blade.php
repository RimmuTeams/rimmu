@section('other_script')
            
		<script src="js/navigation.js"></script>
		<script src="js/bootstrap/bootstrap.min.js"></script>
		
		<!-- Block TODO list -->
		<script>
			$(document).ready(function() {
				
				$('.todo-block input[type="checkbox"]').click(function(){
					$(this).closest('tr').toggleClass('done');
				});
				$('.todo-block input[type="checkbox"]:checked').closest('tr').addClass('done');
				
			});
		</script>	
		

@show