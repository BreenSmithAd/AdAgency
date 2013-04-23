function wpadmin_mediaType_select_init (that, fader) {
	var mediaIdTr = jQuery(that).parent().parent().parent().parent().find('tr.media_id');
	var flowplayerTr = jQuery(that).parent().parent().parent().parent().find('tr.media_flowplayer');
	var imageClickableTr = jQuery(that).parent().parent().parent().parent().find('tr.media_image_clickable');
	var mediaIdTrSW;
	var flowplayerTrSW;
	var imageClickableTrSW;

	switch(jQuery(that).val()) {
		case 'image':
			mediaIdTrSW = false;
			flowplayerTrSW = false;
			imageClickableTrSW = false;
			break;
		case 'flowplayer':
			mediaIdTrSW = false;
			flowplayerTrSW = true;
			imageClickableTrSW = false;
			break;
		case 'image_clickable':
			mediaIdTrSW = false;
			flowplayerTrSW = false;
			imageClickableTrSW = true;
			break;
		default:
			mediaIdTrSW = true;
			flowplayerTrSW = false;
			imageClickableTrSW = false;
			break;
	}

	if(fader) {
		if(mediaIdTrSW) {
			mediaIdTr.fadeIn('slow');
		} else {
			mediaIdTr.hide();
		}

		if(flowplayerTrSW) {
			flowplayerTr.fadeIn('slow');
		} else {
			flowplayerTr.hide();
		}

		if(imageClickableTrSW) {
			imageClickableTr.fadeIn('slow');
		} else {
			imageClickableTr.hide();
		}
	} else {
		if(mediaIdTrSW) {
			mediaIdTr.show();
		} else {
			mediaIdTr.hide();
		}

		if(flowplayerTrSW) {
			flowplayerTr.show();
		} else {
			flowplayerTr.hide();
		}

		if(imageClickableTrSW) {
			imageClickableTr.show();
		} else {
			imageClickableTr.hide();
		}
	}
}

function wpadmin_media_hide_in_slider_init (that, fader) {
	var targetOptions = that.parent().parent().parent().find("tr.media_caption_type,tr.media_caption_color,tr.media_mainheading,tr.media_subheading");
	if(fader) {
		if(that.attr('checked')) {
			targetOptions.fadeOut();
		} else {
			targetOptions.fadeIn();
		}
	} else {
		if(that.attr('checked')) {
			targetOptions.hide();
		} else {
			targetOptions.show();
		}
	}
}