/*
	for media manager, media items
*/

jQuery(document).ready(function(){
	jQuery("tr.media_type select").each(function(i){
		wpadmin_mediaType_select_init(jQuery(this));
	});

	jQuery("tr.media_flowplayer input").each(function() {
		jQuery(this).blur(function() {
			if(!jQuery(this).val().match( /^(http|https|ftp)/)) jQuery(this).val('http://'+jQuery(this).val());
		});
	});

	jQuery("tr.hide_in_slider input:checkbox").each(function() {
		wpadmin_media_hide_in_slider_init(jQuery(this));
	});

	jQuery("tr.media_id input:text").each(function() {
		jQuery(this).blur(function() {
			var mediaTypeVal = jQuery(this).parent().parent().parent().parent().find('tr.media_type select').val();
			var result;
			switch(mediaTypeVal) {
				case 'youtube':
					result = jQuery(this).val().match(/http\:\/\/www\.youtube\.com\/watch\?v=([\w-]{11})/);
					if(result) jQuery(this).val(result[1]);
					break;
				case 'vimeo':
					result = jQuery(this).val().match(/(http|https)\:\/\/vimeo\.com\/([[\w-]{8})/);
					if(result) jQuery(this).val(result[2]);
					break;
			}
		});
	});
});
