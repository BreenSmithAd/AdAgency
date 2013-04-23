jQuery(document).ready(function($) {
	$('.tweets').each(function() {
		var udt_tw_data = $(this).metadata({type:'elem',name:'script'});
		if(udt_tw_data.username=='') {
			$(this).html('Please set your username in the shortcode.');
		} else {
			$(this).tweet({
				username: udt_tw_data.username,
				count: udt_tw_data.count,
				loading_text: udt_tw_data.loading_text,
				template: "{user}{text}{time}"
			});
		}
	});
});