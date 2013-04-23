jQuery(document).ready(function(){
	//COLOR PICKERS----------------------------------------------------------------/

	//border focus for color circle
	jQuery('.module-inputField.hexVal').each(function(){
		jQuery(this).focus(function(){
							   
			 jQuery(this).parent().children('.colorSelect').addClass('colorSelect_focus');
			 
		})
	});
	
	//border unfocus for color circle
	jQuery('.module-inputField.hexVal').each(function(){
		jQuery(this).blur(function(){
							   
	 	 jQuery(this).parent().children('.colorSelect').removeClass('colorSelect_focus');
		 
		})
	});
	
	
	//mimick field clicks upon color circle clicks
	jQuery('div.colorSelect').click(function(){		
		//get the ID of currently clicked element
		var id = jQuery(this).attr('id');
		//trigger click 
		jQuery('.colorpickerField#' + id).trigger('click');
     });
	
	jQuery(':input.colorpickerField').blur( function () {
		var hexCheckPattern = /^#?([0-9a-f]{1,2}){3}$/i;
		if(!jQuery(this).val().match(hexCheckPattern))  {
			jQuery(this).val('000000');
			jQuery(this).parent().find('div.colorSelect').css('background-color', 'rgb(0, 0, 0)'); 
		} else {
			jQuery(this).parent().find('div.colorSelect').css('background-color', '#' + jQuery(this).val());
		}
	});
	
	//pickers field init
	jQuery(':input.colorpickerField').ColorPicker({
		//initial color
		color: '#000',
		onChange: function (hsb, hex, rgb, el) {
			jQuery(el).val(hex);
			jQuery(el).parent().find('div.colorSelect').css('backgroundColor', '#' + hex);
		},
		onHide: function(one, two) {
			var el = jQuery(two['colorpicker']['el']);
			colorpickerCheckForDefaultValue (el.val(), el.prop('defaultValue'), el.parent().find('input[id^="settingItem_save_"]'));
		},
		//on submit actions
		onSubmit: function(hsb, hex, rgb, el) {
			jQuery(el).val(hex);
			colorpickerCheckForDefaultValue (jQuery(el).val(), jQuery(el).prop('defaultValue'), jQuery(el).parent().find('input[id^="settingItem_save_"]'));
			jQuery(el).ColorPickerHide();
		},
		//before actions
		onBeforeShow: function () {
			jQuery(this).ColorPickerSetColor(this.value);
		}
		})
		.bind('keyup', function(e){
			jQuery(this).ColorPickerSetColor(this.value);
			if(e.which == 13) {
				jQuery(this).ColorPickerHide();
			}
		})
		.bind('focus', function(e){
			jQuery(this).parent().find('input[id^="settingItem_save_"]').addClass('saveDisabled');
		});
	
	/* color picker aid functions */
	function colorpickerCheckForDefaultValue (initVal, thisDefaultValue, targetSaveButton){
		var targetRevertButton = jQuery(targetSaveButton).parent().find('input[id^="settingItem_revert_"]');
		if(initVal != thisDefaultValue) {
			jQuery(targetSaveButton).removeClass('saveDisabled');
			jQuery(targetRevertButton).removeClass('revertDisabled');
		} else {
			jQuery(targetSaveButton).addClass('saveDisabled');
			jQuery(targetRevertButton).addClass('revertDisabled');
		}
	}
});
