<script type="text/javascript">
<!--
jQuery(function($){
	<?php 
		if(get_filesystem_method() !== 'direct') {
			echo 'var direct_fs_mode = false;';
		} else {
			echo 'var direct_fs_mode = true;';
		}
	?>
	jQuery('.foundry_systemInfo_click').click ( function (event_browser) {
		if(jQuery('.foundry_systemInfo').css('display') == 'none') {
			if (event_browser.altKey){
				jQuery('#foundry_systemInfo_admin').show();
			}
			jQuery('.foundry_systemInfo').fadeIn();
		} else {
			jQuery('.foundry_systemInfo').fadeOut();
			jQuery('#foundry_systemInfo_admin').hide();
		}
	});

	jQuery('#downloadFoundrySettings').click ( function () {
		var that = jQuery(this);
		jQuery(this).fadeOut();
		jQuery.post(siteurl+"/wp-admin/admin-ajax.php", {
		action:"outputSettings",
			'request_data': 'all',
			'_wpnonce' : jQuery('div#fp-wrapper input#_wpnonce').val(),
			'_wp_http_referer' : jQuery('div#fp-wrapper input[name=_wp_http_referer]').val()
		},
		function(responseData)
		{
			that.fadeIn();
			jQuery('.foundry_systemInfo').val(responseData);
			window.location.href = 'data:application/octet-stream;filename=foundry.xml,'+encodeURIComponent(responseData);
		}
		);
	});

	jQuery('#downloadFoundrySettings_import').change(function(event) {
		jQuery('.foundry_systemInfo').val('Uploading ...');
		jQuery(this).upload(siteurl + "/wp-admin/admin-ajax.php", {
		    		'action' : 'importSettings',
					'key': 'downloadFoundrySettings_import',
					'_wpnonce' : jQuery('div#fp-wrapper input#_wpnonce').val(),
					'_wp_http_referer' : jQuery('div#fp-wrapper input[name=_wp_http_referer]').val()
				}, function(responseData) {
					jQuery('.foundry_systemInfo').val(responseData);
		        	try {
		        		responseData = jQuery.parseJSON(responseData);
		        	}catch( e ){
		        		//
		        	}
		        	if (responseData.result == 'ok') {
		        		// jQuery('.foundry_systemInfo').val(responseData);
		        		// location.reload();
		        	} else {
		        		// jQuery('.foundry_systemInfo').val(responseData);
		        	}
		        }, 'html');
	});
	
	// envato api Mar 5 2013
	$('form#api-verification input#save_options').click(function(){
		evudt_svOpt();
	});
	
	$('input#evudt_toggleAPIsettings').click(function(){
		$('form#api-verification').toggle('normal');
	});
});

function evudt_svOpt() {
	jQuery.ajax({
		url:		ajaxurl,
		type:'POST',
		cache:false,
		data:		{
			'action': 'evudt_svOpt',
			'form_values' : jQuery('form#api-verification').serialize(),
	        '_ajax_nonce': jQuery('#ajax_nonce_evudt_svOpt').val()
		},
		dataType: 'html',
		beforeSend: function(){
			jQuery('div#envud_message').html('Sending data...');
},
		success: function(obj){
			// alert(obj);
			var decoded_json;
			try {
				decoded_json = jQuery.parseJSON( obj );
			} catch (e) {
				decoded_json = 'Error in the data returned from the server: ' + e + ' ' + obj;
			}
			// alert(decoded_json);
			if( decoded_json.response ) {
				switch(decoded_json.response){
				// var decoded_message = jQuery.parseJSON( obj.message );
				// alert( decoded_json.message );
					case 'updated':
						jQuery('div#envud_message').html(decoded_json.message);
						break;
					case 'no_changes':
						jQuery('div#envud_message').html(decoded_json.message);
						break;
					default:
						break;
				}
				// nestable
				// 
			} else if(decoded_json.response == false) {
				jQuery('div#envud_message').html(decoded_json.message);
			} else if(decoded_json == -1) {
				jQuery('div#envud_message').html('Authentication failed. Please try reloading the web page.');
	} else {
				jQuery('div#envud_message').html(decoded_json);
	}
			// show_uploadButton();
			return false;
},
		error:		function(obj){
			jQuery('div#envud_message').html('<b>Error occurred.</b> Dumping the response text:<br />' +obj.responseText);
			// show_uploadButton();
			return false;
		}
	});
	return false;
}
// -->
</script>
<div class="module">
<h1>Welcome to The Foundry for <?php echo THEMENAME; ?></h1>
<p>Take a moment to view the video below which will breifly explain how to set up your theme and how to best use the Foundry Theme Options panel. Please also visit our other tutorial videos that show different aspects of the theme in more detail. Videos are accessible from the video link up top.
<br/>
Happy Themeing!</p>
</div><?php
if(class_exists('Envato_WP_Toolkit_UDT')) : ?>
<div class="module envato_toolkit"><?php
/**
 * Instantiates the Class for Envato_WP_Toolkit_UDT previously included in the foundry-functions.php
 *
 * @since     1.0
 * @global    object
 */

$envato_wp_toolkit_udt = new Envato_WP_Toolkit_UDT();
?></div><?php endif; ?>
<?php if(file_exists(FOUNDRY_BOX_URI) && foundry_ui_checkPermission('foundry_box') ) : ?>
<div class="module module-even">
<h1>The Foundry Box</h1>
The Foundry Box gives you the ability to upload skin files provided by UDTHEMES. Click the upload button below to upload a skin file.
	<div style="text-align:center;padding-left: 150px; margin-top: 30px;">
		<div class="foundry_buttonWithIcon" id="foundry_box">
			<div class="buttonIcon_foundryBox"><!--- empty --></div>
			<span class="foundry_buttonWithIcon_label">Upload a Foundry Pack</span>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( foundry_ui_checkPermission('system_information') ) : ?>
<div class="module">
<h1>System Information</h1>
<div class="settingItemMessage">Please provide system information should you require support. Simply click the textarea, right click and select "copy" or hit "ctrl+c".</div>
<p><a class="foundry_systemInfo_click" style="cursor: pointer;">Show/Hide System Information</a></p>
<?php if(defined('FOUNDRY_DIAGO') && FOUNDRY_DIAGO === TRUE) : ?>
<div id="foundry_systemInfo_admin" class="module module-odd" style="display: none; clear: both;">
	<div class="titleContainer">
		<h1>System Administration - Import / Export</h1>
	</div>
	<p>This option is hidden because uesrs are not supposed to be using it. Therefore this option is not officially supported.</p>
	<input type="button" id="downloadFoundrySettings" class="ui-button large theme rcorners" style="margin-left: 0px; width: auto;" value="Download the Foundry Settings as an XML file"><br /><br />
	<p>This feature is closed to public.</p>
	<p>To upload an xml file of the Foundry settings, use the button below.</p>
	<form id="downloadFoundrySettings_import_form" name="downloadFoundrySettings_import_form">
		<input type="file" id="downloadFoundrySettings_import" name="downloadFoundrySettings_import" class="ui-button large theme rcorners" style="margin-left: 0px; width: auto;" value="Download the Foundry Settings as an XML file" /><br />
		<input type="reset" style="margin: 0;" value="Reset" />
	</form>
</div>
<?php endif; ?>
<textarea class="foundry_systemInfo" style="height: 300px; width : 100%; display: none;" onclick="jQuery(this).select();">
Server Information

Server software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?>


PHP Information
PHP Version: <?php echo phpversion(); ?>

file_uploads: <?php echo (ini_get('file_uploads')) ? 'On' : 'Off'; ?>

max_file_uploads: <?php echo ini_get('max_file_uploads'); ?>

upload_max_filesize: <?php echo ini_get('upload_max_filesize'); ?>

sendmail_path: <?php echo ini_get('sendmail_path'); ?>


MySQL Version: <?php echo mysql_get_server_info(); ?>


Wordpress Information
WordPress Version: <?php bloginfo("version"); ?>

Site URL: <?php echo home_url(); ?>

WordPress URL: <?php echo site_url(); ?>

WordPress Language: <?php bloginfo("language"); ?>

WordPress Character set: <?php bloginfo("charset"); ?>

Filesystem Method: <?php echo get_filesystem_method(); ?>

UDTHEMES Product information: <?php
	echo THEMENAME; ?> Version <?php
    global $wp_version;
    if ( version_compare( $wp_version, '3.4', '<=' ) ) {
		$theme_data = get_theme_data( get_template_directory() . '/style.css' );
		echo $theme_data['Version'];
    } else {
		$theme = wp_get_theme();
		echo $theme->Version;
    }
?>


Installed Plugins:

<?php
$plugin_status = '';
$installedPluginsArray = get_plugins();
foreach($installedPluginsArray as $key => $value) {
	(is_plugin_active($key)) ? $plugin_status = 'Activated' : $plugin_status = 'Deactivated';
	echo  $value['Name'].' '.$value['Version'].' ('.$plugin_status.")\n";
}
?>

Your browser information:<?php echo $_SERVER['HTTP_USER_AGENT']; ?>
</textarea>
</div>
<?php endif; ?>