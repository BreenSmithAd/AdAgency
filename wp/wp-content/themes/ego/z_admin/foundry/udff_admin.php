<?php
	// jQuery - load other versions of jQuery
	// note: please uncomment below only when you need to test
/*
	function replace_jquery_version() {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://code.jquery.com/jquery-1.9.0b1.js');
		wp_enqueue_script( 'jquery' );
	}
	add_action('init', 'replace_jquery_version');
*/

	// the Foundry version
	define("UDFFADMINVERSION", '2.9');
	
	// ajax actions
	add_action('wp_ajax_saveOption', 'udff_ajax_saveOptions');
	add_action('wp_ajax_saveOptionSection', 'udff_ajax_saveOptionsSection');
	add_action('wp_ajax_uploadFile', 'udff_ajax_uploadFile');
	// for outputting the Foundry Settings as an XML file.
	add_action('wp_ajax_outputSettings', 'udff_ajax_outputSettings');
	// for importing the Foundry Settings XML file.
	add_action('wp_ajax_importSettings', 'udff_ajax_importSettings');

	// added for all condition in wp admin
	// adding an action to add the Foundry menu in the WP admin menu in the left side.
	add_action('admin_menu', 'udff_add_adminMenu');

	$page_request = '';
	if(array_key_exists('page',$_REQUEST)) $page_request = $_REQUEST['page'];

	if(preg_match("/^udff\_/", $page_request)) {
		// this is for when the Foundry page is loaded
		add_action('admin_init', 'udff_add_init');
	}

/*
	that is all for the udff admin.
	php will continue to load the wp admin page
*/

/* functions */

	/* Add up udff menu items in the wp admin side tab */

	function udff_add_adminMenu() {
		global $current_user, $permission_settings_array;
		//wp admin side menu - icon customization needs the following CSS in the admin - always
		wp_enqueue_style("wpadmin_sideMenu", TEMPLATEURL."/z_admin/css/wpadmin_sideMenu.css", false, "1.0", "all");
		// check for permissions		
		if(
			UDTF_check_role_foundry_user_restricted($current_user->ID) && 
			isset($permission_settings_array) &&
			array_key_exists('product_id', $permission_settings_array) && 
			$permission_settings_array['product_id'] !== '1'
		) {
			return;
		}
		
		add_menu_page('The Foundry', 'The Foundry', 'administrator', 'udff_admin', 'udff_admin');
		// , TEMPLATEURL."/z_admin/images/wp_foundry.png"
		if(ENABLE_WIDGETMENU) {
			// add_action( 'admin_menu', 'removeWidgetsSubmenu', 999 );
			add_submenu_page('udff_admin', 'Sidebar Widgets', 'Sidebar Widgets', 'administrator', 'widgets.php');
		}
	}

	// removes the original submenus under the theme parent menu.
	function removeWidgetsSubmenu () {
		remove_submenu_page( 'themes.php', 'widgets.php' );
		remove_submenu_page( 'themes.php', 'theme-editor.php' );
		remove_submenu_page( 'themes.php', 'nav-menus.php' );
	}
	/* All the following functions are used only when the udff is loaded */

	// For drawing the Foundry UI. Refer to "add_menu_page" within udff_add_adminMenu().
	// the Foundry Page Framework
	function udff_admin () {
			global $menuArray; ?>
		<script>
			var siteurl = "<?php echo site_url(); ?>";
			var templateurl = "<?php echo TEMPLATEURL; ?>"
		</script>

		<!--START #fp-wrapper content wrapper-->
		<div id="fp-wrapper">
			<!--start sidebar-->
			<?php udff_admin_ui_sidebar (); ?>
			<!--end sidebar-->
			<!--start dashboard-->
			<?php udff_admin_ui_dashboard (); ?>
			<!--end dashboard-->
			<!--start content wrapper-->
			<?php udff_admin_ui_content (); ?>
			<!--end content wrapper-->
			<!-- _wp_nonce -->
			<?php wp_nonce_field(UDFFNONCEACTIONNAME); ?>
		<!--end #fp-wrapper content wrapper-->
		</div>
		 <div class="foundry-copyright"><?php echo FOUNDRY_FOOTER_MESSAGE; ?></div>
		 <!--start to top-->
		 <div id="toTop"><!-- empty --></div>
		 <!--end to top--><?php
	}

	// called at admin_init hook, when the Foundry page is loaded
	function udff_add_init() {
		// css
		wp_enqueue_style("colorpicker", TEMPLATEURL."/z_admin/css/colorpicker.css", false, "1.0", "all");
		wp_enqueue_style("jquery-ui-1.8.16.custom", TEMPLATEURL."/z_admin/css/tabs/jquery-ui-1.8.16.custom.css", false, "1.0", "all");
		// wp_enqueue_style("admin_style_pending", TEMPLATEURL."/z_admin/css/style_pending.css", false, "1.0", "all");
		wp_enqueue_style("admin_style", FOUNDRY_SKINFILE_URI, false, "1.0", "all");
		wp_enqueue_style("admin_style_theme", TEMPLATEURL."/z_admin/css/style_theme.css", false, "1.0");

		// javascript
		// wp_enqueue_script("cufon-yui", TEMPLATEURL."/z_admin/js/cufon-yui.js", array('jquery'), "1.09i"); // MIT
		wp_enqueue_script("encoder", TEMPLATEURL."/z_admin/js/encoder.js", null, "2011-07-14"); // GPL + MIT
		wp_enqueue_script("colorpicker_js", TEMPLATEURL."/z_admin/js/colorpicker.js", array('jquery'), "1.0c modified"); // GPL + MIT
		wp_enqueue_script("jquery-easing", TEMPLATEURL."/z_admin/js/jquery.easing.min.js", array('jquery'), "1.3"); // BSD
		wp_enqueue_script("truncatable", TEMPLATEURL."/z_admin/js/jquery.truncatable.js", array('jquery'), "1.2"); // GPL + MIT
		wp_enqueue_script("jqueryUpload", TEMPLATEURL."/z_admin/js/jquery.upload-1.0.2.min.js", array('jquery'), "1.0.2"); // GPL + MIT
		wp_enqueue_script("jquery_json", TEMPLATEURL."/z_admin/js/jquery.json-2.3.min.js", array('jquery'), "2.3"); // MIT
		// wp_enqueue_script("Bebas_Neue_400", TEMPLATEURL."/z_admin/fonts/Bebas_Neue_400.font.js", array('jquery'), "1.0");
		wp_enqueue_script("jquery-ui-1.8.16", TEMPLATEURL."/z_admin/js/jquery-ui-1.8.16.custom.min.js", array('jquery'), "1.8.1.6"); // MIT or GPL Version 2
		wp_enqueue_script("iphone-style-checkboxes", TEMPLATEURL."/z_admin/js/iphone-style-checkboxes.js", array('jquery'), "1.0"); // GPL + MIT

		// in house scrips
		wp_enqueue_script("udff_adminVars", TEMPLATEURL."/z_admin/js/udff_adminVars.js",false, "1.0");
		wp_enqueue_script("udff_adminMain", TEMPLATEURL."/z_admin/js/udff_adminMain.js", array('jquery'), "1.0");
		wp_enqueue_script("udff_commonFunctions", TEMPLATEURL."/z_admin/js/udff_commonFunctions.js", array('jquery'), "1.0");
		wp_enqueue_script("udff_colorpickerInit", TEMPLATEURL."/z_admin/js/udff_colorpickerInit.js", array('jquery'), "1.0");
		wp_enqueue_script("udff_totop", TEMPLATEURL."/z_admin/js/udff_totop.js", array('jquery'), "1.0");
		wp_enqueue_script("udff_tooltips", TEMPLATEURL."/z_admin/js/udff_tooltips.js", array('jquery'), "1.0");
		wp_enqueue_script("udff_fieldMonitor", TEMPLATEURL."/z_admin/js/udff_fieldMonitor.js", array('jquery'), "1.0");
		wp_enqueue_script("udff_uploadImage", TEMPLATEURL."/z_admin/js/udff_uploadImage.js", array('jquery'), "1.0");
		wp_enqueue_script("udff_uploadFile", TEMPLATEURL."/z_admin/js/udff_uploadFile.js", array('jquery'), "1.0");
		wp_enqueue_script("udff_saveSetteingItem", TEMPLATEURL."/z_admin/js/udff_saveSetteingItem.js", array('jquery'), "1.0");
		wp_enqueue_script("udff_saveSetteingItemSection", TEMPLATEURL."/z_admin/js/udff_saveSetteingItemSection.js", array('jquery'), "1.0");
	}

