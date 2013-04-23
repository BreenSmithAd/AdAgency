<?php
/*
	custom settings for the Foundry version 2.3 or above
	text encoding : utf-8
*/

// The Foundry theme specific constants

	define("PRODUCTID", 'udt_ego');
	define("THEMENAME", 'Ego');
	
	// The Foundry settings for Wordpress Admin
	define("ENABLE_WPCOREMENUS", TRUE );
	define("ENABLE_WPCOREWIDGETS", TRUE );
	define("ENABLE_WIDGETMENU", FALSE );
	

/* skin settings
just specify the filename of css to be loaded

default:
define("FOUNDRY_SKINFILE_URI",TEMPLATEURL."/z_admin/css/style_foundry.css");
*/

define("FOUNDRY_SKINFILE_URI",TEMPLATEURL."/z_admin/css/style_foundry.css");

/*

admin_style

default:
define("FOUNDRY_LOGOIMAGE_URI",TEMPLATEURL."/z_admin/images/logo.png");
*/

define("FOUNDRY_LOGOIMAGE_URI",TEMPLATEURL."/z_admin/images/logo.png");

/*

foundry square

default:
define("FOUNDRY_BOX_URI",TEMPLATEPATH.'/z_admin/foundry/admin_udthemes_box.php');

if you do not wish to use the foundry BOX, define blank or null to FOUNDRY_BOX_URI
*/

define("FOUNDRY_BOX_URI",TEMPLATEPATH.'/z_admin/foundry/admin_udthemes_box.php');
// define("FOUNDRY_BOX_URI",'');
/*

	The Foundry Footer Message

default:
define("FOUNDRY_LOGOIMAGE_URI",TEMPLATEURL."/z_admin/images/logo.png");
*/

define("FOUNDRY_FOOTER_MESSAGE",'&copy;'.date('Y').' UDTHEMES.');

/*

	The Foundry Options Panel Diagnostic

default:
define("FOUNDRY_LOGOIMAGE_URI",TEMPLATEURL."/z_admin/images/logo.png");
*/

define("FOUNDRY_DIAGO", FALSE);