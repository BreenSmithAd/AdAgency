// Upload files
jQuery(document).ready(function(){
	//upload files -----------------------------------------------------------------/
	jQuery(':input.upload_regularFile').change(function(event) {
			var saveFilename = jQuery(this).parent().find('input:hidden[name="default_filename"]').attr('value');
			jQuery(this).parent().find(':input.upload_regularFile').hide();
			jQuery(this).parent().find(':input.upload_button').removeClass('saveSuccess').addClass('saveProgress').attr('value','');
			jQuery(this).parent().find('div.upload_thumbnail_message').html('Please wait while uploading. upload file name ' + jQuery(this).parent().find('input:hidden[name="default_filename"]').attr('value'));
            jQuery(this).upload(siteurl + "/wp-admin/admin-ajax.php", {
            		'action' : 'uploadFile',
					'key': jQuery(this).prop('name'),
					'fileType': 'files',
					'filename': saveFilename,
					'_wpnonce' : jQuery('div#fp-wrapper input#_wpnonce').val(),
					'_wp_http_referer' : jQuery('div#fp-wrapper input[name=_wp_http_referer]').val()
				}, function(responseData) {
	            	var that = this;
	            	try {
	            		responseData = jQuery.parseJSON(responseData);
	            	}catch( e ){
	            		//
	            	}
	            	
	            	if(responseData.filename) {
	            		jQuery(that).parent().find(':input.upload_button').attr('value','OK');
		            	afterUploading ('saveSuccess', 950, 'Sucessfully uploaded.');
		            } else if (responseData.error ) {
		            	afterUploading ('saveError', 2000, 'Error occurred '+ responseData.error);
		            } else {
						afterUploading ('saveError', 2000, 'Error occurred. Possiblly something to do with your server configuration. '+ responseData);
		            }
		            
		            function afterUploading (resultClass, delayTime, resultMessage) {
		            	jQuery(that).parent().find('input:reset').trigger('click');
	            		jQuery(that).parent().find('input:reset').hide();
	            		jQuery(that).parent().find(':input.upload_button').removeClass('saveProgress').addClass(resultClass).delay(delayTime).fadeOut('slow');

		            	jQuery(that).parent().find('div.upload_thumbnail_message').html('Uploaded file: '+saveFilename);
		            	if(!responseData.filename) {
		            		alert(resultMessage);
		            		jQuery(that).parent().find('div.upload_thumbnail_message').text('Error Occurred.');
		            		resultMessage = '';
		            		// jQuery(that).parent().find('div.upload_thumbnail_message').truncatable({	limit: 80, more: 'more', less: true, hideText: 'less' }); 
						}
		            	setTimeout(function(){
		            		jQuery(that).parent().find('div.upload_thumbnail_message').html(resultMessage);
	
		            		jQuery(that).parent().find(':input.upload_button').removeClass('saveSuccess').removeClass('saveError').attr('value','Upload');
		            		jQuery(that).parent().find(':input.upload_button').fadeIn('slow');
		            		jQuery(that).parent().find(':input.upload_regularFile').delay(delayTime).fadeIn();
	            			jQuery(that).parent().find('input:reset').delay(delayTime).fadeIn();
		            	},2000);
		            }
	            }, 'html');
        });
	jQuery(".upload_button").click(function(){
		if(isIOS) {
			alert("Sorry, but uploading file is not supported on iPad and iPhone.");
		} else {
			jQuery(this).parent().find(':input.upload_regularFile').trigger('click');
		}
		return false;
	});
});