/* wpadmin template page tool functions */

function wpadmin_loadThumbnail (self, selectThumbnail, action_type) {
	var action_name;
	var frameWidth = selectThumbnail.css('width').replace(/[^-\d\.]/g, '') ;
	var frameHeight = selectThumbnail.css('height').replace(/[^-\d\.]/g, '');
	
	if(!frameWidth || !frameHeight) return;
	
	switch(action_type) {
		case 1:
			action_name = 'returnCoverImageSrc';
			break;
		default:
			action_name = 'returnAtchdrImageSrc';
			break;
	}
	
	selectThumbnail.children('img').fadeOut(function() {selectThumbnail.addClass('udf_meta_ajaxLoaderAnimation');});
	
	
	jQuery.post(jQuery('div#udf_meta_form input#siteurl').val() +"/wp-admin/admin-ajax.php", {
		action: action_name,
			'postID' : self.val(),
			'width' : frameWidth,
			'height' : frameHeight
		},
	function(responseData)
	{
		try {
			responseData = jQuery.parseJSON(responseData);
    	}catch( e ){
    		//
    	}
    	
    	selectThumbnail.removeClass('udf_meta_ajaxLoaderAnimation');
    	
		if (responseData.result == 'ok') {
			selectThumbnail.css({'overflow':'hidden'});
			selectThumbnail.html('<img src="'+responseData.url+'"'+wpadmin_calcurateImageResize(responseData.width,responseData.height,frameWidth,frameHeight,1)+' />');
			selectThumbnail.children('img').fadeIn();
		} else {
			selectThumbnail.html('<span>Image Not Found</span>');
		}
	});
}

function wpadmin_reloadSelect (selectDiv) {
	if(!selectDiv.find('select')) return false;
	var action_name = "returnSelectList";
	var selectedAttachmentID = selectDiv.find('select').val();
	var name = selectDiv.find('select').attr('name');
	var idName = selectDiv.find('select').attr('id');

	selectDiv.html('<span><b>Please wait while refreshing the select menu.</b></span>');
	jQuery.post(jQuery('div#udf_meta_form input#siteurl').val() +"/wp-admin/admin-ajax.php", {
		action: action_name,
			'postID' : jQuery('input#udf_meta_post_ID').val(),
			'name' : name,
			'idName' : idName,
			'selectedAttachmentID' : selectedAttachmentID
		},
	function(responseData)
	{
		try {
			responseData = jQuery.parseJSON(responseData);
    	}catch( e ){
    		//
    	}
    	
		if (responseData.result !== 'error') {
			selectDiv.hide();
			selectDiv.html(responseData.result);
			selectDiv.fadeIn();
			wpadmin_loadThumbnail(selectDiv.find('select'), selectDiv.parent().find('div.selectThumbnail'), 1);
		} else {
			selectDiv.html('<span>Error</span>');
		}
	});
}

/* for ad setting items toggle */

function toggleAdvertisementSettingItems (adBanner_show) {
	var adBanner_type = jQuery('input[name="adBanner_type"]').prop('checked');
	if(adBanner_show) {
		jQuery('tr#adBanner_title, tr#adBannerTypeSelect,tr#adBanner_href').fadeIn();
		if(adBanner_type) {
			jQuery('tr#adBannerImageSelect,tr#adBanner_link_target').fadeOut();
		} else {
			jQuery('tr#adBannerImageSelect,tr#adBanner_link_target').fadeIn();
		}
	} else {
		jQuery('tr#adBanner_title, tr#adBannerTypeSelect,tr#adBannerImageSelect,tr#adBanner_href,tr#adBanner_link_target').fadeOut();
	}
}

function toggleAdvertisementType (adBanner_type) {
	if(adBanner_type) {
		jQuery('tr#adBannerImageSelect,tr#adBanner_link_target').fadeOut();
	} else {
		jQuery('tr#adBannerImageSelect,tr#adBanner_link_target').fadeIn();
	}
}

// thumbnail size calculation
function wpadmin_calcurateImageResize (imageWidth, imageHeight, frameWidth, frameHeight, is_style) {
	var horizontalScaleRatio = Math.round(( frameWidth / imageWidth) * 10)/10;
	var verticalScaleRatio = Math.round(( frameHeight / imageHeight) * 10)/10;
	
	var result_height = imageHeight * verticalScaleRatio;
	var result_width = imageWidth  * verticalScaleRatio;
	
	var diffrenceHeight = frameHeight - result_height; 
	var diffrenceWidth = frameWidth - result_width;
	
	var offset_top = 0;
	var offset_left = 0;
		
	// Crop and resize to best fit the dimensions
	if(imageWidth < imageHeight) {
		// portrait
		result_height = frameHeight / (result_width / frameWidth);
		result_width = frameWidth;
		offset_top = (frameHeight - result_height) / 2;
	} else {
		// landscape
		if(diffrenceHeight > diffrenceWidth) {
			result_width = result_width * (frameHeight / result_height);
			result_height = frameHeight;
			offset_left = (frameWidth - result_width) / 2;
		} else {
			result_width = frameWidth;
			result_height = imageHeight * ( frameWidth / imageWidth );
			offset_left = frameWidth - result_width;
			offset_top = frameHeight - result_height;
		}
	}
	
	//
	if(is_style == 1) {
		return 'style="width:'+result_width+'px;height:'+result_height+'px; top:'+offset_top+'px;left:'+offset_left+'px;" ';
	} else {
		return { result_width: result_width, result_height: result_height, offset_top: offset_top , offset_left: offset_left};
	}
	
};