/* udff_saveSetteingItem */

jQuery(document).ready(function(){
	jQuery('.thisIsSaveSectionButton').click(function(){
		if(!settingItemButtonActiveState (this)) return;
		
		var that = this;
		var data_array = [];
		var settingValue_string;
		var error_check = [];
		
		var allRevertButtons = jQuery(that).parent().find('div.module form input[id^="settingItem_revert_"]');
		var allSaveButtons = jQuery(that).parent().find('div.module form input[id^="settingItem_save_"]');
		
		jQuery(allSaveButtons).each(function(i){
			settingValue_string = '';
			var targetSettingItemMessage = jQuery(this).parent().parent().find('.settingItemMessage');
			var targetSettingItemMessage_error = targetSettingItemMessage.hasClass('settingItemErrorMessage');
			var targetSettingItemMessage_showHelpAlways = targetSettingItemMessage.hasClass('showHelpAlways');
			if(jQuery(this).hasClass('thisIsCheckbox')) {
				if(jQuery(this).parent().find('.toggleSwitch').attr('checked')) {
					settingValue_string = 1;
				} else {
					settingValue_string = 0;
				} 
			} else if(!jQuery(this).hasClass('saveDisabled')) {
				if(jQuery(this).hasClass('thisIsTextarea')) {
					settingValue_string = jQuery(this).parent().find('textarea:first').val();
				} else if (jQuery(this).hasClass('thisIsSelect')) {
					jQuery(this).parent().find('select:first').fadeOut();
					settingValue_string = jQuery(this).parent().find('select:first').val();
				} else if (jQuery(this).hasClass('thisIsSelect_json')) {
					// thisIsSelect_json
					jQuery(this).parent().find('select:first').fadeOut();
					settingValue_string = jQuery(this).parent().find('select:first').val();
				} else {
					settingValue_string = jQuery(this).parent().find('input:first').attr('value');
				}
				data_array.push({id: jQuery(this).attr('id').replace('settingItem_save_',''), value: settingValue_string});
			} else if (targetSettingItemMessage_error) {
				error_check.push(jQuery(this).parent().parent().find('div.titleContainer h1').text());
			}
			if(!targetSettingItemMessage_error && !targetSettingItemMessage_showHelpAlways) {
				targetSettingItemMessage.fadeOut();
			}
		});
		if(error_check.length != 0) {
			jQuery(this).parent().find('div.settingItemMessage_section').css('display','block').text('Please verify: '+error_check);
			return;
		} else {
			jQuery(this).parent().find('div.settingItemMessage_section').fadeOut();
		}
		prepareForPosting_section (allSaveButtons, allRevertButtons, 'SAVING ...', that);
		
		sendDataToServer_section (that, data_array, 0)
	});
	
	jQuery('.thisIsInitSectionButton').click(function(){
		if(!settingItemButtonActiveState (this)) return;
	
		var that = this;
		var data_array = [];
		var settingValue_string;
		
		var allRevertButtons = jQuery(that).parent().find('div.module form input[id^="settingItem_revert_"]');
		var allSaveButtons = jQuery(that).parent().find('div.module form input[id^="settingItem_save_"]');
		
		jQuery(allSaveButtons).each(function(i){
			settingValue_string = '';
			var targetSettingItemMessage = jQuery(this).parent().parent().find('.settingItemMessage');
			if(jQuery(this).hasClass('thisIsTextarea')) {
				settingValue_string = '';
			} else if (jQuery(this).hasClass('thisIsSelect')) {
				jQuery(this).parent().find('select:first').fadeOut();
				settingValue_string = '0';
			} else if (jQuery(this).hasClass('thisIsSelect_json')) {
				jQuery(this).parent().find('select:first').fadeOut();
				settingValue_string = 'select_json';
			} else if(jQuery(this).hasClass('thisIsCheckbox')) {
				settingValue_string = '0';
			} else {
				settingValue_string = '';
			}
			// targetSettingItemMessage.fadeOut();
			data_array.push({id: jQuery(this).attr('id').replace('settingItem_save_',''), value: settingValue_string});
		});
		
		prepareForPosting_section (allSaveButtons, allRevertButtons, 'INITIALIZING ...', that);
		
		sendDataToServer_section (that, data_array, 1)
	});
	
	function sendDataToServer_section (that, data_array, init_switch) {
		var allRevertButtons = jQuery(that).parent().find('div.module form input[id^="settingItem_revert_"]');
		var allSaveButtons = jQuery(that).parent().find('div.module form input[id^="settingItem_save_"]');
		var encoded_data_array = jQuery.toJSON(data_array);
		/* handlings for save / init section buttons*/
		jQuery.post(siteurl+"/wp-admin/admin-ajax.php", {
			action:"saveOptionSection",
				'json_data': encoded_data_array,
				'init_switch': init_switch,
				'_wpnonce' : jQuery('div#fp-wrapper input#_wpnonce').val(),
				'_wp_http_referer' : jQuery('div#fp-wrapper input[name=_wp_http_referer]').val()				
			},
		function(responseData)
		{
			var updateTarget;
			try {
				responseData = jQuery.parseJSON(responseData);
        	}catch( e ){
        		//
        	}
        	
			if (responseData.result == 'ok') {
				for (var settingItem in responseData){
					if(settingItem !== 'result') {
						var resultTextDecoded = stripslashes(Encoder.htmlDecode(responseData[settingItem]));
						updateTarget = jQuery(that).parent().find('input#settingItem_save_' + settingItem);
						if(updateTarget.hasClass('thisIsTextarea')) {	updateTarget.parent().find('textarea:first').prop('defaultValue',resultTextDecoded).val(Encoder.htmlDecode(resultTextDecoded));
						} else if (updateTarget.hasClass('thisIsSelect')) {
							updateTarget.parent().find('select:first').val(resultTextDecoded);
							updateTarget.parent().find('input:hidden.select_initValue').val(resultTextDecoded);
							updateTarget.parent().find('select:first').fadeIn();
						} else if (updateTarget.hasClass('thisIsCheckbox')) {
							// when any value is true make it checked otherwise set to unchecked
							if(resultTextDecoded == 0) {
								updateTarget.parent().find('.toggleSwitch').removeAttr('checked');
							} else {
								updateTarget.parent().find('.toggleSwitch').attr('checked','checked');
							}
							updateTarget.parent().find('.toggleSwitch').iphoneStyle("refresh");
						} else if (updateTarget.hasClass('thisIsSelect_json')) {
							updateTarget.parent().find('select:first').val(resultTextDecoded);
							updateTarget.parent().find('input:hidden.select_initValue').val(resultTextDecoded);
							updateTarget.parent().find('select:first').fadeIn();
						} else if (updateTarget.parent().parent().find('div.colorSelect').length) {
							updateTarget.parent().parent().find('div.colorSelect').css('backgroundColor','#'+resultTextDecoded );
							updateTarget.parent().find('input:first').prop('defaultValue',resultTextDecoded).attr('value',resultTextDecoded);
						} else {
							if (jQuery(this).hasClass('input_url')) {
								if(!resultTextDecoded.match('/^(http|https|ftp)/')) jQuery(this).val('http://'+resultTextDecoded);
							}
							updateTarget.parent().find('input:first').prop('defaultValue',resultTextDecoded).attr('value',resultTextDecoded);
						}
						var targetSettingItemMessage = updateTarget.parent().parent().find('.settingItemMessage');
						var targetSettingItemMessage_showHelpAlways = targetSettingItemMessage.hasClass('showHelpAlways');
						targetSettingItemMessage.removeClass('settingItemErrorMessage');
						if(!targetSettingItemMessage_showHelpAlways) {
							targetSettingItemMessage.hide();
						} else {
								targetSettingItemMessage.html(targetSettingItemMessage.parent().find('.settingItemMessage_helptext').html());
							targetSettingItemMessage.fadeIn();
						}
					}
				}
				jQuery(that).removeClass('saveProgress').addClass('saveSuccess').val('SUCCESS');
				setTimeout(function(){
            		saveReset_section(allSaveButtons, allRevertButtons, that);
            	},2000);
			} else {
				jQuery(that).removeClass('saveProgress').addClass('saveError').val('ERROR');
				jQuery(this).parent().find('div.settingItemMessage_section').css('display','block').text('Error log: '+responseData);
				setTimeout(function(){
            		saveReset_section(allSaveButtons, allRevertButtons, that);
            	},2000);
			}
		});
	};
	
	function prepareForPosting_section (allSaveButtons, allRevertButtons, buttonText, that) {
		jQuery(allSaveButtons).removeClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress').attr('value','');
		jQuery(allRevertButtons).removeClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress').attr('value','');
		jQuery(allRevertButtons).fadeOut();
		jQuery(allSaveButtons).addClass('saveProgress');
		jQuery(that).removeClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress').addClass('saveProgress').text(buttonText);
		jQuery(that).parent().find('.iPhoneCheckContainer').fadeOut();
		if(buttonText == 'SAVING ...') {
			jQuery(that).parent().find('.thisIsInitSectionButton').addClass('saveDisabled');
		} else {
			jQuery(that).parent().find('.thisIsSaveSectionButton').addClass('saveDisabled');
		}
	}
	
	function saveReset_section (allSaveButtons, allRevertButtons, that) {
		jQuery(that).parent().find('.iPhoneCheckContainer').fadeIn();
		jQuery(allRevertButtons).attr('value','Revert').addClass('revertDisabled').fadeIn();
		jQuery(allSaveButtons).attr('value','Save').addClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress');
		jQuery(that).parent().find('.thisIsSaveSectionButton').removeClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress')
		jQuery(that).parent().find('.thisIsSaveSectionButton').val('SAVE');
		jQuery(that).parent().find('.thisIsInitSectionButton').removeClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress');
		jQuery(that).parent().find('.thisIsInitSectionButton').val('INITIALIZE');
	}
});
