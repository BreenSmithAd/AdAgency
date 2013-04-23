<?php
/*
	PHP code for adding the FSA Button to the tinyMce tool bar 
*/

class FSA_MceButton {

	// for plugin mode
/*
	function FSA_MceButton() {
		add_action('plugins_loaded', array(&$this, 'Initalization'));
	}
	
	function sink_hooks(){
		add_filter('mce_plugins', array(&$this, 'mce_plugins'));
	}
	function Initalization() {
		add_action('init', array(&$this, 'addbuttons'));
	}
*/
	
	// for themes
	
	function FSA_MceButton() {
        add_action('init', array(&$this, 'addbuttons'));
    }
    function sink_hooks(){
        add_filter('mce_plugins', array(&$this, 'mce_plugins'));
    }

	// shared for both plugin and theme
	function addbuttons() {
		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
			return;

		if ( get_user_option('rich_editing') == 'true') {
			add_filter("mce_external_plugins", array(&$this, 'mce_external_plugins'));
			add_filter('mce_buttons', array(&$this, 'mce_buttons'));
		}
	}

	function mce_buttons($buttons) {
		array_push($buttons, "separator", "FSA");
		return $buttons;
	}

	function mce_external_plugins($plugin_array) {
		// this is where the tinymce plugin js is specified
		$plugin_array['FSA_MceButton'] = FSA_URI.'/js/fsa_ui_plugin.js';
		return $plugin_array;
	}
}

$mybutton = new FSA_MceButton();
add_action('init',array(&$mybutton, 'FSA_MceButton'));
