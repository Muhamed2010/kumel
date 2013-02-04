<script>
	$(function() {
		$( "#city" ).autocomplete({
			source: function( request, response ) {
				$.ajax({ 
					url: "<?php echo base_url(); ?>index.php/main/kota",
					data: { "q": request.term },
					success: function(data) { 
						response(data); 
					}
				});
			},
			minLength: 2,
		});
	});
	</script>
	
	
	<input id="city">