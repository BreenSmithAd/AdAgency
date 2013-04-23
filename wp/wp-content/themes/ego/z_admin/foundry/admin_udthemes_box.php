<script type="text/javascript">
<!--
var foundryBoxPack_install_state = false;
jQuery(document).ready(function(){
	jQuery('#foundryBoxPack_install').change(function(event) {
		foundryBoxPack_install_state = true;
		var buttonLabelElement = jQuery('div#foundryBoxPack_install_button .foundry_buttonWithIcon_label');
		buttonLabelElement.html('Uploading ...');
		jQuery(this).upload(siteurl + "/wp-admin/admin-ajax.php", {
		    		'action' : 'importSettings',
					'key': 'foundryBoxPack_install',
					'_wpnonce' : jQuery('div#fp-wrapper input#_wpnonce').val(),
					'_wp_http_referer' : jQuery('div#fp-wrapper input[name=_wp_http_referer]').val()
				}, function(responseData) {
		        	try {
		        		responseData = jQuery.parseJSON(responseData);
		        	}catch( e ){
		        		//
		        	}
		        	if (responseData.result == 'ok') {
		        		buttonLabelElement.html('Installation Complete');
		        		jQuery('.foundry_box_ui .foundryBox_errorMessage').html('Installation succeful. The page will be refreshed in a moment.');
		        		location.reload(true);
		        		setTimeout(function(){
		        			jQuery('.foundry_box_ui .foundryBox_errorMessage').html('Installation succeeded but reloading the Foundry is taking time. Please reload the page manually.');
		            	},10000);
		        	} else {
		        		if(responseData.result) {
			        		buttonLabelElement.html('Installation Error');
			        		jQuery('.foundry_box_ui .foundryBox_errorMessage').html(responseData.result);
			        	} else {
			        		buttonLabelElement.html('Installation Error');
			        		jQuery('.foundry_box_ui .foundryBox_errorMessage').html('Installation error occurred. Please check up that your WordPress is installed correctly.');
			        	}
			        	setTimeout(function(){
		        			buttonLabelElement.html('Upload to Install');
		            		jQuery('#foundryBoxPack_install_reset').trigger('click');
		            		foundryBoxPack_install_state = false;
		            	},2000);
		        	}
		        }, 'html');
	});

	jQuery("#foundryBoxPack_install_button").click(function(){
		if(foundryBoxPack_install_state == true) return;
		if(isIOS) {
			alert("Sorry, but uploading images is not supported on iPad and iPhone.");
		} else {
			jQuery('#foundryBoxPack_install').trigger('click');
		}
		return false;
	});
});
// -->
</script>
<div class="module foundry_box_ui" style="min-height:400px;">
<h1>The Foundry Box - Color Skin Upload</h1>
Please click the upload button and select a skin file to install. The Foundry Panel will reload once installtion has been completed.
	<div style="text-align:center;padding-left: 150px; margin-top: 30px;">
		<div class="foundry_buttonWithIcon" id="foundryBoxPack_install_button">
			<span class="foundry_buttonWithIcon_label">Upload to Install</span>
		</div>
	</div>
	<div class="foundryBox_errorMessage" style="color: #999; font-size: 12px; font-style: italic; margin-top: 30px;"><!-- empty --></div>
	<form id="foundryBoxPack_install_form" name="foundryBoxPack_install_form">
		<input type="file" id="foundryBoxPack_install" name="foundryBoxPack_install" /><br />
		<input type="reset" id="foundryBoxPack_install_reset" value="Reset" />
	</form>
</div>