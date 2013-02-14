///////////////--------------------------------------------->drop down
////custom function there
$(document).ready(function() {

	var $container = $('.result');

	$container.imagesLoaded( function(){
		$container.masonry({
			itemSelector : '.boox',
			isAnimated: true
		});
	});
	var $containers = $('.deals');

	$containers.imagesLoaded( function(){
		$containers.masonry({
			itemSelector : '.boox',
			isAnimated: true
		});
	});
	$("img.lazy").lazyload({
		effect : "fadeIn"
	});
	$.cookie('cookie_name', 'cookie_value', { expires: 8, path: '/', domain: 'tripify.me', secure: true });

    $( "#order-date" ).datepicker();

	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 1000000,
		values: [ 0, 300000 ],
		slide: function( event, ui ) {
			$( "#price-filter" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
	$( "#price-filter" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		" - $" + $( "#slider-range" ).slider( "values", 1 ) );

	$('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})
});



