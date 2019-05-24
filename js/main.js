(function($) {
	$(document).on("click", ".mobile-trigger", function(){
		$(this).toggleClass('is-active');
		if ($(this).hasClass('is-active')) {
			$(".mobile-menu-sidebar").addClass('opened');
		}else{
			$(".mobile-menu-sidebar").removeClass('opened');
		}
	});
})(jQuery);