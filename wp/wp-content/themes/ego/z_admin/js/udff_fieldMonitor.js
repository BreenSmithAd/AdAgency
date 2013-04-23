jQuery(document).ready(function(){
	//FIELD monitor -----------------------------------------------------------------/
	jQuery('.hideHelp').hide();
	jQuery('div#content-wrapper .module-inputField:not(.colorpickerField)' ).dblclick(function(){			 
			jQuery(this).select();
		}).focus(function(){
			var targetSettingItemMessage_hideHelp = jQuery(this).parent().parent().find('.hideHelp').html();
			if(!targetSettingItemMessage_hideHelp) jQuery(this).parent().parent().find('.settingItemMessage').css('display','block');
jQuery(this).parent().parent().find('.settingItemMessage').html(jQuery(this).parent().parent().find('.settingItemMessage_helptext').html());
		}).blur(function(){
			var currentVal = jQuery(this).val();
			var targetSaveButton = jQuery(this).parent().find('input[id^="settingItem_save_"]');
			var targetRevertButton = jQuery(this).parent().find('input[id^="settingItem_revert_"]');
			var targetSettingItemMessage = jQuery(this).parent().parent().find('.settingItemMessage');
			var targetSettingItemMessage_showHelpAlways = jQuery(this).parent().parent().find('.showHelpAlways').html();

			if(currentVal != this.defaultValue) {
				targetSaveButton.removeClass('saveDisabled');
				targetSaveButton.removeClass('revertDisabled');
			}
			
			if(jQuery(this).hasClass('input_email')) {
				if(verifyInputTextField ('email', currentVal, targetSettingItemMessage, targetSaveButton)) {
					defaultValueCheck (this, targetSaveButton, currentVal);
					if(!targetSettingItemMessage_showHelpAlways) targetSettingItemMessage.css('display','none');
				}
			} else if (jQuery(this).hasClass('input_url')) {
				if(verifyInputTextField ('url', currentVal, targetSettingItemMessage, targetSaveButton)) {
					defaultValueCheck (this, targetSaveButton, currentVal);
					if(!targetSettingItemMessage_showHelpAlways) targetSettingItemMessage.css('display','none');
				}
				var regExp_here = /^(http|https|ftp)/;
				if(!currentVal.match(regExp_here)) {
					jQuery(this).val('http://'+currentVal);
				}
			} else if (jQuery(this).hasClass('input_number')) {
				if(verifyInputTextField ('number', currentVal, targetSettingItemMessage, targetSaveButton)) {
					defaultValueCheck (this, targetSaveButton, currentVal);
					if(!targetSettingItemMessage_showHelpAlways) targetSettingItemMessage.css('display','none');
				}
			} else {
				if(!targetSettingItemMessage_showHelpAlways) targetSettingItemMessage.css('display','none');
			}
		});
		
	jQuery('div#content-wrapper textarea.module-txtArea' ).click(function(){		 
			//
		}).focus(function(){
			var targetSettingItemMessage_hideHelp = jQuery(this).parent().parent().find('.hideHelp').html();
			if(!targetSettingItemMessage_hideHelp) jQuery(this).parent().parent().find('.settingItemMessage').css('display','block');
		}).blur(function(){
			var initVal = jQuery(this).val();
			if(initVal != this.defaultValue) {
				var targetSave = jQuery(this).parent().children('.saveDisabled');
				var targetRevertButton = jQuery(this).parent().children('.revertDisabled');
				jQuery(targetSave).removeClass('saveDisabled');
				jQuery(targetRevertButton).removeClass('revertDisabled');
			}
			var targetSettingItemMessage_showHelpAlways = jQuery(this).parent().parent().find('.showHelpAlways').html();
			if(!targetSettingItemMessage_showHelpAlways)  {
				jQuery(this).parent().parent().find('.settingItemMessage').css('display','none');
			}
		});
		
	jQuery('div#fp-wrapper form select' ).change(function(){						 
			var currentVal = jQuery(this).val();
			var targetField = jQuery(this).parent().children('input:hidden.select_initValue');
			var initValue = targetField.val();
			var targetSaveButton = jQuery(this).parent().find('input[id^="settingItem_save_"]');
			var targetRevertButton = jQuery(this).parent().find('input[id^="settingItem_revert_"]');
			if(!initValue) {
				targetSaveButton.removeClass('saveDisabled');
			} else if(currentVal != initValue) {
				targetSaveButton.removeClass('saveDisabled');
				targetRevertButton.removeClass('revertDisabled');
			} else {
				targetSaveButton.addClass('saveDisabled');
				targetRevertButton.addClass('revertDisabled');
			}
		}).focus(function(){
			var targetSettingItemMessage_hideHelp = jQuery(this).parent().parent().find('.hideHelp').html();
			if(!targetSettingItemMessage_hideHelp) {
				jQuery(this).parent().parent().find('.settingItemMessage').css('display','block');
			}
		}).blur(function(){
			var targetSettingItemMessage_hideHelp = jQuery(this).parent().parent().find('.hideHelp').html();
			var targetSettingItemMessage_showHelpAlways = jQuery(this).parent().parent().find('.showHelpAlways').html();
			if(!targetSettingItemMessage_hideHelp && !targetSettingItemMessage_showHelpAlways) {
				jQuery(this).parent().parent().find('.settingItemMessage').css('display','none');
			}
		});
		
	jQuery('div#content-wrapper .module-inputField:not(.colorpickerField)' ).keyup ( function (e) {
		var currentVal = jQuery(this).val();
		var targetSaveButton = jQuery(this).parent().find('input[id^="settingItem_save_"]');
		var targetSettingItemMessage = jQuery(this).parent().parent().find('.settingItemMessage');
		
		if(jQuery(this).hasClass('input_email')) {
			if(verifyInputTextField ('email', currentVal, targetSettingItemMessage, targetSaveButton)) defaultValueCheck (this, targetSaveButton, currentVal);
		} else if (jQuery(this).hasClass('input_url')) {
			if(verifyInputTextField ('url', currentVal, targetSettingItemMessage, targetSaveButton)) defaultValueCheck (this, targetSaveButton, currentVal);
		} else if (jQuery(this).hasClass('input_number')) {
			if(verifyInputTextField ('number', currentVal, targetSettingItemMessage, targetSaveButton)) defaultValueCheck (this, targetSaveButton, currentVal);
		} else {
			defaultValueCheck (this, targetSaveButton, currentVal);
		}
		
		if (e.which == 13) {
			if (jQuery(this).hasClass('input_url')) {
				var regExp_here = /^(http|https|ftp)/;
				if(!currentVal.match(regExp_here)) jQuery(this).val('http://'+currentVal);
			}
			jQuery(this).blur();
		}
	});
	
	jQuery('div#content-wrapper .module-txtArea' ).keyup ( function (e) {
		var initVal = jQuery(this).val();
		var targetRevertButton = jQuery(this).parent().find('input[id^="settingItem_revert_"]');
		var targetSaveButton = jQuery(this).parent().find('input[id^="settingItem_save_"]');
		if(initVal != this.defaultValue) {
			jQuery(targetSaveButton).removeClass('saveDisabled');
			jQuery(targetRevertButton).removeClass('revertDisabled');
		} else {
			
			jQuery(targetSaveButton).addClass('saveDisabled');
			jQuery(targetRevertButton).addClass('revertDisabled');
		}
	});
	
	function defaultValueCheck (that, targetSaveButton, currentVal){
		var targetRevertButton = jQuery(targetSaveButton).parent().find('input[id^="settingItem_revert_"]');
		if(currentVal != that.defaultValue) {
			jQuery(targetSaveButton).removeClass('saveDisabled');
			jQuery(targetRevertButton).removeClass('revertDisabled');
		} else {
			jQuery(targetSaveButton).addClass('saveDisabled');
			jQuery(targetRevertButton).addClass('revertDisabled');
		}
	}
	
	function verifyInputTextField (fieldType, checkString, targetSettingItemMessage, targetSaveButton) {
		var regExp_string;
		var thisMessage = '';
		var thisErrorMessage = '';
		var targetRevertButton = jQuery(targetSaveButton).parent().find('input[id^="settingItem_revert_"]');
		switch (fieldType) {
			case 'email':
				regExp_string = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
				thisErrorMessage = 'Please verify the email address format.';
			break;
			case 'number':
				regExp_string = /^[0-9][0-9]*$/;
				thisErrorMessage = 'The input field accepts only numbers.'
			break;
			case 'url':
				regExp_string = /(http(s)?:\/\/)?([\w-]+\.)+[\w-]+(\/[\w-.\/?%&=]*)?/;
				thisErrorMessage = 'Please verify the url address format.';
			break;
		}
		
		var checkResult = false;
		
		if(checkString!=""){
			if(checkString.match(regExp_string)){
				checkResult = true;
				thisMessage = jQuery(targetSaveButton).parent().parent().find('span.tooltip').html();
			}else{
				checkResult = false;
				thisMessage = thisErrorMessage;
			}
		} else {
			checkResult = false;
			thisMessage = 'The input field is blank.'
			jQuery(targetRevertButton).removeClass('revertDisabled');
		}
		
		var targetSettingItemMessage_hideHelp = targetSettingItemMessage.hasClass('hideHelp');

		if(checkResult) {
			targetSettingItemMessage.html(thisMessage).removeClass('settingItemErrorMessage');
			jQuery(targetSaveButton).removeClass('saveDisabled');
			targetSettingItemMessage.html(targetSettingItemMessage.parent().find('.settingItemMessage_helptext').html());
			if(targetSettingItemMessage_hideHelp) targetSettingItemMessage.css('display','none');
		} else {
			targetSettingItemMessage.css('display','block');
			targetSettingItemMessage.addClass('settingItemErrorMessage');
			targetSettingItemMessage.text(thisMessage);
			jQuery(targetSaveButton).addClass('saveDisabled');
		}
		
		return checkResult;
	}
});
