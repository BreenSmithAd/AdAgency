<?php
/**
 * @package UDF Foundry Shortcode Assistant Plugin
 */
/*
Plugin Name: UDF Foundry Shortcode Assistant Plugin
Plugin URI: http://udfrance.com/
Description: This is a development tool written for unlimiteDesign
Version: 1.1
Author: Shu Miyao
License:
*/
	// Define the FSA root path
	// define('FSA_PATH', dirname(__FILE__));
	define('FSA_PATH', dirname(__FILE__));
	// Define the FSA root URI
	//define('FSA_URI',plugins_url(null, __FILE__));
	define('FSA_URI',TEMPLATEURL.'/z_admin/shortcodes');

// shortcodes defined
// get_template_directory returns where the parent theme directory is.
include(get_template_directory().'/z_usr/foundry/fsa_shortcodes_data.php');

// for shortcode ui, loads up the js / css files only in editor
if(is_admin()) {
	global $pagenow;
	if(in_array($pagenow, array("post-new.php","post.php"))) {
		add_action( 'admin_footer', 'FSA_register_scripts_styles' );
		fsa_init();
	}
}

// called only in wp contents editor
function fsa_init () {
	// builds the user interface as a javascript string variable
	include(FSA_PATH.'/functions/fsa_ui.php');
	// register the FSA button in the tinymce tool bar
	include(FSA_PATH.'/functions/fsa_tinymce.php');
	// action hook for regsitering scripts and styles
	add_action( 'admin_init', 'FSA_register_scripts_styles' );
}

/*
	js and css loading
*/

function FSA_enqueue_scripts_styles  () {
	//deregister
	/*
	reserved for debugging purposes -
	Note: re-registering scripts causes a problem with the wordpress
	e.g. you will not be able to interact with categories, tags meta boxes
	wp_deregister_script('jquery-ui-core');
	wp_deregister_script('jquery-ui-widget');
	wp_deregister_script('jquery-ui-mouse');
	wp_deregister_script('jquery-ui-sortable');
	wp_deregister_script('jquery-ui-resizable');
	wp_deregister_script('jquery-ui-draggable');
	wp_deregister_script('jquery-ui-button');
	wp_deregister_script('jquery-ui-position');
	wp_deregister_script('jquery-ui-dialog');
	wp_register_script("jquery-ui", "http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js", array('jquery'), "1.8.9"); // google CDN
*/
	// scripts
	wp_register_script("fsa_ui_script", FSA_URI."/js/fsa_ui_script.js", array('jquery'), "1.0"); // udthemes
	wp_register_script("jquery-ui-accordion", FSA_URI."/js/jquery.ui.accordion.js", array('jquery'), "1.0"); // udthemes

	// styles
	wp_register_style("jquery_ui_dialog", FSA_URI."/css/jquery-ui-1.8.22.fsa.css", false, "1.0", "all");
	wp_register_style("fsa_style", FSA_URI."/css/fsa_style.css", false, "1.0", "all");
}

// for the hook called at admin_init
function FSA_register_scripts_styles () {
	FSA_enqueue_scripts_styles ();
	wp_enqueue_script ('fsa_ui_script');
	wp_enqueue_script('jquery-ui-accordion');
	wp_enqueue_style('fsa_style');
	wp_enqueue_style('jquery_ui_dialog');
}

