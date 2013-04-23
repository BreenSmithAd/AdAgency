jQuery(document).ready(function(){
	//TOOLTIP ICONS-----------------------------------------------------------------/
	
	jQuery("a.info").hover(
		function() {
			var target = jQuery(this).attr('alt');
			jQuery(target).show().css({opacity:0});
			jQuery(target).stop().animate({opacity:1});
	},
		function() {
			var target = jQuery(this).attr('alt');
			jQuery(target).stop().animate({opacity:0},function(){
				jQuery(this).hide();
			});
	});
	
	jQuery("a.info").click(
		function() {
			jQuery(this).next().show();
	});
	
	jQuery("a.info").next().click(
		function() {
			jQuery(this).stop().animate({opacity:0},function(){
				jQuery(this).hide();
			});
	});
	
});
