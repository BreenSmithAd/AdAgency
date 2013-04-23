/* udff_saveSetteingItem */

jQuery(document).ready(function(){	
	jQuery('input[id^="settingItem_"]').click(function(){
		if(!jQuery(this).hasClass('thisIsCheckbox') && !settingItemButtonActiveState (this)) return;
		
		var settingItemButtonType = (jQuery(this).attr('value') == 'Save');
		var id_string = jQuery(this).parent().find('input:first').attr('id');
		var settingValue_string;
		
		if(jQuery(this).hasClass('thisIsTextarea')) {
			settingValue_string = (settingItemButtonType) ? jQuery(this).parent().find('textarea:first').val() : jQuery(this).parent().find('textarea:first').prop('defaultValue');
		} else if (jQuery(this).hasClass('thisIsSelect')) {
			jQuery(this).parent().find('select:first').fadeOut();
			settingValue_string = (settingItemButtonType) ? jQuery(this).parent().find('select:first').val() : jQuery(this).parent().find('.select_initValue').attr('value');
		} else if (jQuery(this).hasClass('thisIsSelect_json')) {
			jQuery(this).parent().find('select:first').fadeOut();
			if(settingItemButtonType) {
				settingValue_string = jQuery(this).parent().find('select:first').val();
			} else {
				settingValue_string =jQuery(this).parent().find('.select_initValue').attr('value');
			}
		} else if (jQuery(this).hasClass('thisIsCheckbox')) {
			// this is for iPhoneCheckDisabled
			// the element only has 'Save.'
			if(jQuery(this).parent().find('.toggleSwitch').attr('checked')) {
				settingValue_string = 1;
			} else {
				settingValue_string = 0;
			}
		} else {
			settingValue_string = (settingItemButtonType) ? jQuery(this).parent().find('input:first').attr('value') : jQuery(this).parent().find('input:first').prop('defaultValue');
			if (jQuery(this).hasClass('input_url')) {
				if(!settingValue_string.match(/^(http|https|ftp)/)) jQuery(this).val('http://'+settingValue_string);
			}
		}
		sendDataToServer (this, id_string, settingValue_string)
	});
	
	function sendDataToServer (that, id_string, settingValue_string) {
		prepareForSaving (that);

		jQuery.post(siteurl+"/wp-admin/admin-ajax.php", {
			action:"saveOption",
				'id': id_string,
				'settingValue': settingValue_string,
				'_wpnonce' : jQuery('div#fp-wrapper input#_wpnonce').val(),
				'_wp_http_referer' : jQuery('div#fp-wrapper input[name=_wp_http_referer]').val()				
			},
		function(responseData)
		{
			try {
				responseData = jQuery.parseJSON(responseData);
        	}catch( e ){
        		//
        	}
        		
			if (responseData.result == 'ok') {
				var resultTextDecoded = stripslashes(Encoder.htmlDecode(responseData.key));
				var targetField;
				
				jQuery(that).parent().find('input[id^="settingItem_save_"]').removeClass('saveProgress').addClass('saveSuccess').attr('value','OK');
				
				if(jQuery(that).hasClass('thisIsTextarea')) {
					targetField = jQuery(that).parent().find('textarea:first');
				} else if (jQuery(that).hasClass('thisIsSelect')) {
					jQuery(that).parent().find('select:first').val(resultTextDecoded).fadeIn();
					jQuery(that).parent().find('.select_initValue').val(resultTextDecoded);
					targetField = jQuery(that).parent().find('input:hidden.select_initValue');
				} else if (jQuery(that).hasClass('thisIsSelect_json')) {
					jQuery(that).parent().find('select:first').val(resultTextDecoded).fadeIn();
					jQuery(that).parent().find('.select_initValue').val(resultTextDecoded);
					targetField = jQuery(that).parent().find('input:hidden.select_initValue');
				} else {
					targetField = jQuery(that).parent().find('input:first');
				}
				
				targetField.prop('defaultValue',resultTextDecoded).val(resultTextDecoded);
				
				setTimeout(function(){
            		SaveReset(that);
            	},2000);
			} else {
				jQuery(that).parent().find('input[id^="settingItem_save_"]').addClass('saveError').removeClass('saveProgress').attr('value','ERROR');
				setTimeout(function(){
            		SaveReset(that);
            	},2000);
			}
		});
	};
	
	
	function prepareForSaving (that) {
		jQuery(that).parent().find('input[id^="settingItem_"]').removeClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress').attr('value','');
		jQuery(that).parent().find('input[id^="settingItem_revert_"]').fadeOut();
		jQuery(that).parent().find('input[id^="settingItem_save_"]').addClass('saveProgress');
	}
	
	function SaveReset (that) {
jQuery(that).parent().find('input[id^="settingItem_save_"]').addClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress').attr('value','Save');
		jQuery(that).parent().find('input[id^="settingItem_revert_"]').addClass('revertDisabled').attr('value','Revert').fadeIn();
		if(!jQuery(that).parent().parent().find('.settingItemMessage').hasClass('showHelpAlways')) {
			jQuery(that).parent().parent().find('.settingItemMessage').css('display','none');
		}
	}
});

