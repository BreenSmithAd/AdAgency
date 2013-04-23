/* wpadmin_about meta box ui */

/* iPad detection */
	if ((navigator.userAgent.indexOf('iPhone') != -1) || (navigator.userAgent.indexOf('iPod') != -1) || (navigator.userAgent.indexOf('iPad') != -1)) {
		var isIOS = true;
		// $('head').append('<link rel="stylesheet" href="css/style_ipad.css" type="text/css" />');
		// if(isIOS) alert('you must be using iPad or iPhone.');
	}

jQuery(document).ready(function(){
	// catches the moment when MEdia Manager is just about to be closed
	jQuery(document).on('tb_unload','#TB_window', function () {
		jQuery('div.udff_attachements_selectlist_div').each ( function () {
			wpadmin_reloadSelect(jQuery(this));
		});
	});

	jQuery(document).on( 'click', '.media-modal-backdrop, .media-modal-close', function () {
		jQuery('div.udff_attachements_selectlist_div').each ( function () {
			wpadmin_reloadSelect(jQuery(this));
		});
	});
	
	if(!jQuery('input[name=customBackgroundImage_show]').prop('checked')) {
		jQuery('tr.customBackgroundImageSelect').hide();
	}
	
	if(!jQuery('input[name=headerImage_show]').prop('checked')) {
		jQuery('tr.headerImageSelect').hide();
		jQuery('tr.headerImageCaptionText').hide();
	}
	
	if(!jQuery('input[name=teaser_show]').prop('checked')) {
		jQuery('tr.teaserTitleTr').hide();
		jQuery('tr.teaserImageSelect').hide();
		jQuery('tr.teaserTextTr').hide();
	}
	
	jQuery('input[name=customBackgroundImage_show]').change(function () {
		var parentNode = jQuery(this).parent().parent().parent();
		var image_type = parentNode.find('select[name=customBackgroundImage_type]').val();
		
		if(jQuery('input[name=customBackgroundImage_show]').prop('checked')) {
			jQuery('tr.customBackgroundImageSelect').fadeIn();
		} else {
			jQuery('tr.customBackgroundImageSelect').fadeOut();
		}
		if(image_type < 2) {
			parentNode.find('tr.customBackgroundImageSelectType_image').show();
			parentNode.find('tr.customBackgroundImageSelectType_solidColor').hide();
		} else {
			parentNode.find('tr.customBackgroundImageSelectType_image').hide();
			parentNode.find('tr.customBackgroundImageSelectType_solidColor').show();
		}
	});
	
	jQuery('input[name=headerImage_show]').change(function () {
		if(jQuery('input[name=headerImage_show]').prop('checked')) {
			jQuery('tr.headerImageSelect').fadeIn();
			jQuery('tr.headerImageCaptionText').fadeIn();
		} else {
			jQuery('tr.headerImageSelect').fadeOut();
			jQuery('tr.headerImageCaptionText').fadeOut();
		}
	});
	
	jQuery('input[name=teaser_show]').change(function () {
		if(jQuery('input[name=teaser_show]').prop('checked')) {
			jQuery('tr.teaserTitleTr').fadeIn();
			jQuery('tr.teaserImageSelect').fadeIn();
			jQuery('tr.teaserTextTr').fadeIn();
		} else {
			jQuery('tr.teaserTitleTr').fadeOut();
			jQuery('tr.teaserImageSelect').fadeOut();
			jQuery('tr.teaserTextTr').fadeOut();
		}
	});
	
	jQuery('div.udf_meta_settingItem ul.showcase li div.folioSelect select').each(function () {
		wpadmin_loadThumbnail(jQuery(this), jQuery(this).parent().find('div.selectThumbnail'), 1);
	});
	
	jQuery('div.udf_meta_settingItem div.udff_attachements_selectlist_div select').each(function () {
		wpadmin_loadThumbnail(jQuery(this), jQuery(this).parent().parent().find('div.selectThumbnail'), 0);
	});
	
	
	jQuery(document).on('change', 'div.udf_meta_settingItem ul.showcase li div.folioSelect select', function () {
		wpadmin_loadThumbnail(jQuery(this), jQuery(this).parent().find('div.selectThumbnail'), 1);
	});
	
	jQuery(document).on('change','div.udf_meta_settingItem div.udff_attachements_selectlist_div select', function () {
		wpadmin_loadThumbnail(jQuery(this), jQuery(this).parent().parent().find('div.selectThumbnail'), 0);
	});
});
