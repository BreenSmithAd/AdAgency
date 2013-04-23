/* wpadmin_saveMeta */

jQuery(document).ready(function(){
	jQuery('input#wpadmin_updatemeta').click(function(){
		var data_array = [];
		var thisValue ;

		var allInputFields = jQuery('#udf_meta_form').find('input[type!=button][type!=hidden], select, textarea');
		
		jQuery(allInputFields).each(function(i){
			switch (jQuery(this).attr('type')) {
				case 'checkbox':
					thisValue = jQuery(this).prop('checked');
					break;
				default:
					thisValue = jQuery(this).val();
					break;
			}
			data_array.push({name: jQuery(this).attr('name'), id: jQuery(this).attr('id'), value: thisValue});
		});

		prepareForPosting_section ();

		sendDataToServer_ajaxmeta (this, data_array);
	});
	
	function sendDataToServer_ajaxmeta (that, data_array) {
		var encoded_data_array = jQuery.toJSON(data_array);
/*
		alert(encoded_data_array);
		return;
*/
		/* handlings for save / init section buttons*/
		jQuery.post(jQuery('div#udf_meta_form input#siteurl').val() +"/wp-admin/admin-ajax.php", {
			action:"saveMeta",
				'json_data': encoded_data_array,
				'postID' :  jQuery('div#udf_meta_form input#udf_meta_post_ID').val(),
				'_udfnonce' : jQuery('div#udf_meta_form input#_udfnonce').val(),
				'_wp_http_referer' : jQuery('div#udf_meta_form input[name=_wp_http_referer]').val()				
			},
		function(responseData)
		{
/* 			alert(responseData); */
			var updateTarget;
			var resultTextDecoded 
			try {
				responseData = jQuery.parseJSON(responseData);
        	}catch( e ){
        		//
        	}
        	
			if (responseData.result == 'ok') {
				for (var settingItem in responseData){
					if(settingItem !== 'result') {
						var updateTarget = jQuery('table#udf_meta_table').find('input[id='+ settingItem + ']');
						/* alert(settingItem + ' ' +responseData[settingItem]); */
						if (updateTarget.attr('type') == 'checkbox') {
							if(responseData[settingItem]!=='') {
								updateTarget.attr('checked', responseData[settingItem]);
							} else {
							
							}
						} else {
							updateTarget.val(Encoder.htmlDecode(responseData[settingItem].replace(/\\|\\/g, "")));
						}
					}
				}
				jQuery('div#ajax-response').text('Your setting items have successfully been saved.');
				setTimeout(function(){
            		saveReset_section();
            	},2000);
			} else {
				jQuery('div#ajax-response').text('Error in saving the setting items. Please try again or check up your server configuration. Response from the server : ' + responseData.error);
				setTimeout(function(){
            		saveReset_section();
            	},2000);
			}
		});
	};
	
	function prepareForPosting_section () {
		jQuery('div#ajax-response').text('Please wait while saving.');
		jQuery('input#wpadmin_updatemeta').fadeOut ();
		jQuery('#udf_meta_table .udf_meta_settingItem').fadeOut ();
	}
	
	function saveReset_section () {
		jQuery('div#ajax-response').text('Please make sure to press on \'Update all the …\' button if you have modified any of these setting items.');
		jQuery('input#wpadmin_updatemeta').fadeIn ();
		jQuery('#udf_meta_table .udf_meta_settingItem').fadeIn ();
		jQuery('html,body').animate({scrollTop: jQuery('div#udf_meta_form').parent().parent().find('div.handlediv').offset().top-50}, 1000);
	}
});
