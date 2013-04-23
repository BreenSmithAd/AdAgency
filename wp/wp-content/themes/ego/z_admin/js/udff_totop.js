jQuery(document).ready(function(){
	//TO TOP ----------------------------------------------------------------------/
	jQuery(window).scroll(function() {
		if(jQuery(this).scrollTop() > 0) {
			// jQuery('#toTop').stop(true, true).fadeIn().fadeOut().fadeIn();
			if(jQuery('div#toTop').css('display') == 'none') jQuery('div#toTop').fadeIn();
		} else {
			if(jQuery('div#toTop').css('opacity') > 0) {
				jQuery('div#toTop').fadeOut();
			}
		}
	});

	jQuery(document).on('mousedown','div#toTop,.crum .path',function() {
		jQuery('html,body').animate({scrollTop:0},1200);
	 });
});

	// SCROLL TO -- for the Foundry Text links /
	
	function udff_menu_scrollTo(target) {
		jQuery('html,body').animate({scrollTop: target.offset().top - 50}, 1000, function (){
			jQuery('div#toTop').fadeOut().fadeIn();
			});
	}