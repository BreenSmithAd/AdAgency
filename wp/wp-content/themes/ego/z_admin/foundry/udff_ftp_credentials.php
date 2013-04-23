<?php

/**
 * General use Function - show text fields for ftp details if the FS method is not direct
 *
 * @since 2.2
 */

/* Note:
	FS_METHOD
	(Primary Preference) "direct" forces it to use Direct File I/O requests from within PHP, this is fraught with opening up security issues on poorly configured hosts, This is chosen automatically when appropriate.
	(Secondary Preference) "ssh2" is to force the usage of the SSH PHP Extension if installed
	(3rd Preference) "ftpext" is to force the usage of the FTP PHP Extension for FTP Access, and finally
	(4th Preference) "ftpsockets" utilises the PHP Sockets Class for FTP Access.
*/

/*
	ftp / direct connection check
*/

function udff_connection_checkup ($connection_type) {
	if ( $connection_type == 'direct' && function_exists('getmyuid') && function_exists('fileowner') ){
		$context = WP_CONTENT_DIR;
		$context = trailingslashit($context);
		$temp_file_name = $context . 'temp-write-test-' . time();
		$temp_handle = @fopen($temp_file_name, 'w');
		if ( $temp_handle ) {
			if ( getmyuid() == @fileowner($temp_file_name) ) {
				$method_result = 'direct';
			} else {
				$method_result = 'direct_error';
			}
			@fclose($temp_handle);
			@unlink($temp_file_name);
		}
		if($method_result == 'direct') {
			return true;
		} else {
			return false;
		}
 	}
 	return false;
}
