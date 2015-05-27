jQuery(function($){
	$(document).ready(function(){
		var $container = $('.category-post-list');
		var col = 300;
		if( $('.category-post-list').width() == 810) {
			col = $container.width()/2;
		}

		var width = $(window).width();

		if(width < 1200 && width >= 992) {
			col = $container.width()/2;
		}
		else if(width < 980) {
			col = $container.width();
		}
		// initialize
		$container.masonry({
			itemSelector: 	'.subcategory-wrapper',
			isAnimated:		true,
			columnWidth: col
		});
	});
	
});