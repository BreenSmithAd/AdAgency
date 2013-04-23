<?php
// function to load options for the Foundry
	function udff_getOptions () {
		global $idArray;
		foreach ($idArray as $settingItem_key => $settingItem_value) {
			global $$settingItem_key;
			$defaultVar = $settingItem_key.'_default';
			if(get_option($settingItem_key) === false || ($settingItem_value[1] == 'select_json' && get_option($settingItem_key) == '')) {
				// setting the default value
				if($settingItem_value[1] == 'select') {
					$$settingItem_key = 0;
				} else if($settingItem_value[1] == 'select_json') {
					$decoded_menuData = json_decode( html_entity_decode(substr_replace($settingItem_value[0],'',0,4), ENT_QUOTES,'UTF-8'));
					if( $decoded_menuData->default ) {
						$$settingItem_key = $decoded_menuData->default;
					} else {
						$tempValue = $decoded_menuData->values;
						$$settingItem_key = $tempValue[0]->value;
					}
				} else {
					$$settingItem_key = $settingItem_value[0];
				}
			} else {
				$$settingItem_key = get_option( $settingItem_key );
			}
			global $$defaultVar;
			$$defaultVar = $settingItem_value[0];
		}
	}

/*
	used for both site and admin the Foundry functions
*/

	// returns option value
	function returnOptionValue ($id_str) {
		$option_var = PRODUCTID.'_'.$id_str;
		global $$option_var;
		return $$option_var;
	}
	function returnAtchdImageURL ($postID, $width, $height) {
		$attached_image = wp_get_attachment_image_src($postID, 'full') ;
		// no more timthumb support
		// $attached_image_url = timthum_url_featured ($attached_image[0] , $width, $height, 0);
		// return $attached_image_url;
		return $attached_image[0];
	}

	function returnUploadedImageByID ($idName, $echoResult = 0) {
		$value = PRODUCTID.'_'.$idName;
		global $$value;

		if(file_exists(WPUPLOAD_BASEDIR.WPUPLOAD_UDFF_DIR_NAME."/images/".$$value)) {
			$result = WPUPLOAD_BASEURL.WPUPLOAD_UDFF_DIR_NAME."/images/".$$value;
		} else {
			// if no custom files are uploaded, load the default
			$result = TEMPLATEURL.'/z_usr/images/'.$$value;
		}

		if($echoResult) {
			echo $result;
		} else {
			return $result;
		}
	}

	function returnUploadedFileByID ($idName, $echoResult = 0) {
		$value = PRODUCTID.'_'.$idName;
		global $$value;

		if(file_exists(WPUPLOAD_BASEDIR.WPUPLOAD_UDFF_DIR_NAME."/files/".$$value)) {
			$result = WPUPLOAD_BASEURL.WPUPLOAD_UDFF_DIR_NAME."/files/".$$value;
		} else {
			// if no custom files are uploaded, load the default
			$result = TEMPLATEURL.'/z_usr/files/'.$$value;
		}

		if($echoResult) {
			echo $result;
		} else {
			return $result;
		}
	}

/*
	used for the Foundry admin
*/

	/* the Foundry Save One item  */
	function udff_ajax_saveOptions(){
		global $wpdb, $idArray;

		if ( !empty($_POST) && check_admin_referer(UDFFNONCEACTIONNAME) ) {
			$newvalue = htmlentities($_POST['settingValue'], ENT_QUOTES,'UTF-8');
			try {
				update_option ($_POST['id'], $newvalue);
				$data = array ('result' => 'ok','key' => get_option($_POST['id']));
			} catch (Exception $e) {
				$data = array ('result' => $e);
			}
		} else {
			$resultData_array += array('result' => 'Error?');
		}

		header('Content-type: text/html');
		echo json_encode($data);
		exit;
	}

	/* the Foundry Save options in a section at once */
	function udff_ajax_saveOptionsSection (){
		global $wpdb, $idArray;
		//
		$sentData_array = json_decode(stripslashes($_POST['json_data']), true);
		$resultData_array = array();
		if ( !empty($_POST) && check_admin_referer(UDFFNONCEACTIONNAME) ) {
			try {
				foreach ($sentData_array as $sentData){
					// !select_json mod
					if($_POST['init_switch'] == 1) {
						if($sentData['value']=='select_json') {
							$defaultVar = $sentData['id'].'_default';
							global $$defaultVar;
							if(substr($$defaultVar, 0, 5)=='json{') {
								$decoded_menuData =
									json_decode(
										html_entity_decode(substr_replace($$defaultVar,'',0,4), ENT_QUOTES,'UTF-8')
									); // as object
								$select_json_currentValue = $decoded_menuData->default;
								update_option($sentData['id'],$select_json_currentValue);
							}
						} else if($sentData['value']!=='0') {
							$targetID = $sentData['id'].'_default';
							global $$targetID;
							update_option ($sentData['id'], $$targetID);
						} else {
							update_option ($sentData['id'], '0');
						}
					} else {
						update_option ($sentData['id'], htmlentities($sentData['value'], ENT_QUOTES,'UTF-8'));
					}
					$resultData_array += array($sentData['id'] => get_option($sentData['id']));
				}
				$resultData_array += array('result' => 'ok');
			} catch (Exception $e) {
				$resultData_array += array ('result' => $e);
			}
		} else {
			$resultData_array += array('result' => 'Error?');
		}

		header('Content-type: text/html');
		echo json_encode($resultData_array);
		exit;
	}

/**
 * the Foundry System Administration related (ajax) - dump all the Foundry Options Panel Settings as an XML file.
 * The ajax action (outputSettings) is defined in udff_admin.php of the Foundry
 *
 * @since 2.1
 *
 * @uses UDFFNONCEACTIONNAME For nonce name. Defined in the foundry-functions.php.
 * @param N/A (wp ajax action mame : uploadFile)
 * @return No return values but the function outputs data stream of result (json format) at the end.
 * 		   Error message in the response if it is not ok (success).
 */


	function udff_ajax_outputSettings (){
		global $wpdb, $idArray;
		$outputdata = array();
		$count = 0;
		$sentData= stripslashes($_POST['request_data']);
		if ( !empty($_POST) && check_admin_referer(UDFFNONCEACTIONNAME) ) {
			try {
				foreach ($idArray as $settingItem_key => $settingItem_value) {
					global $$settingItem_key;
					$defaultVar = $settingItem_key.'_default';
					if(get_option($settingItem_key) === false || ($settingItem_value[1] == 'select_json' && get_option($settingItem_key) == '')) {
						// setting the default value
						if($settingItem_value[1] == 'select') {
							// add data
							$outputdata += array($settingItem_key => '0');
						} else if($settingItem_value[1] == 'select_json') {
							$decoded_menuData = json_decode( html_entity_decode(substr_replace($settingItem_value[0],'',0,4), ENT_QUOTES,'UTF-8'));
							if( $decoded_menuData->default ) {
								// add data
								$outputdata += array($settingItem_key => htmlspecialchars_decode($decoded_menuData->default));
							} else {
								$tempValue = $decoded_menuData->values;
								// add data
								$outputdata += array($settingItem_key => htmlspecialchars_decode($tempValue[0]->value) );
							}
						} else {
							// add data
							$outputdata += array( $settingItem_key => htmlspecialchars_decode($settingItem_value[0]));
						}
					} else {
						// add data
						$outputdata += array( $settingItem_key => htmlspecialchars_decode(get_option( $settingItem_key )));
					}
				}
			} catch (Exception $e) {
				$outputdata = array ('result' => $e);
			}
		} else {
			$outputdata[]= array('result' => 'Error?');
		}

		// prep dom
		$dom_foundry_settings = new DomDocument('1.0'); // xml version
		$dom_foundry_settings->encoding = "UTF-8"; // encoding
		$dom_foundry_settings->formatOutput = true; // line breaks
		//
		$root_foundry_settings = $dom_foundry_settings->createElement('foundry_options_panel');
		$root_foundry_settings = $dom_foundry_settings->appendChild($root_foundry_settings);

		foreach($outputdata as $key => $value){
			$setting_child = $dom_foundry_settings->createElement('foundry_setting');
			$setting_child = $root_foundry_settings->appendChild($setting_child);

			$setting_child_value = $dom_foundry_settings->createCDATASection($value);
			$setting_child_value = $setting_child->appendChild($setting_child_value);
			$setting_child_value = $setting_child->setAttribute('id', $key);
		}

		$fileDataToOutput = $dom_foundry_settings->saveXML();
		header('Content-Type: text;');
		header('Content-Length: '.strlen($fileDataToOutput));
		echo $fileDataToOutput;
		exit;
	}

/**
 * foundry settings file importation
 * The ajax action (importSettings) is defined in udff_admin.php of the Foundry
 *
 * @since 2.1
 *
 * @uses UDFFNONCEACTIONNAME For nonce name. Defined in the foundry-functions.php.
 * @param N/A (wp ajax action mame : uploadFile)
 * @return No return values but the function outputs data stream of result (json format) at the end.
 * 		   Error message in the response if it is not ok (success).
 */


	function udff_ajax_importSettings () {
		global $wpdb, $idArray;
		$resultData_array = array(); // $sentData id->value

		if ( !empty($_POST) && check_admin_referer(UDFFNONCEACTIONNAME) ) {
				if (($pos = strrpos($_FILES[$_POST['key']]['name'], ".")) !== false) {
					// file extension check
					$ext = strtolower(substr($_FILES[$_POST['key']]['name'], $pos+1));
					if ($ext == 'xml') {
						try {
							// get XML file
							// read uploaded xml file
							$downloadedFileContent = htmlspecialchars_decode(udff_file_get_contents($_FILES[$_POST['key']]['tmp_name']));
							// parse xml data into array
							$downloadedFileContent_xml= xml_parser_create();
							xml_parse_into_struct($downloadedFileContent_xml,$downloadedFileContent,$downloadedFileContent_array);
							// update
							if($downloadedFileContent_array) {
								foreach($downloadedFileContent_array as $value){
									if(
										array_key_exists('attributes',$value) &&
										array_key_exists('ID',$value['attributes']) &&
										$value['level'] == 2
									) {
										if ( 
											strpos($value['attributes']['ID'], 'udff' , 0) === 0 ||
											strpos($value['attributes']['ID'], 'udt_' , 0) === 0 
											) {
											update_option ($value['attributes']['ID'], htmlentities($value['value'], ENT_QUOTES,'UTF-8'));
											$resultData_array += array($value['attributes']['ID'] => get_option($value['value']));
										} else {
											$resultData_array += array ('result' => 'The Foundry Box Pack file data is invalid (data error).');
											udff_outputResult('text/html', json_encode($resultData_array) );
											// Exit upon error immediately
											exit;
										}
									}
								}
								$resultData_array += array('result' => 'ok');
							} else {
								$resultData_array += array ('result' => 'The Foundry Box Pack file is invalid (invalid file).');
							}
						} catch (Exception $e) {
							$resultData_array += array ('result' => $e);
						}
					} else if ($ext == 'zip' || $ext == 'ZIP') {
						$resultData_array += array ('result' => 'The Foundry Box Pack file you have uploaded is not supported by this version of Foundry Options Panel.');
						udff_outputResult('text/html', json_encode($resultData_array) );
						exit;
						// WIP.
						$uploadDirectoryPath = WPUPLOAD_BASEDIR.WPUPLOAD_UDFF_DIR_NAME;
						$uploadFoundryBoxPath = WPUPLOAD_BASEDIR.WPUPLOAD_UDFF_DIR_NAME."/foundry_box/";
						$uploadFoundryBoxURL = WPUPLOAD_BASEURL.WPUPLOAD_UDFF_DIR_NAME."/foundry_box/";
						// foundry working temp directory
						$foundryTempPath = WPUPLOAD_BASEDIR.WPUPLOAD_UDFF_DIR_NAME."/temp/";

						$uploadErrorFlag = FALSE;

						$uploadErrorMessage = '';

						// prep for WP File System
						$url = wp_nonce_url('admin.php?page=udff_admin',UDFFNONCEACTIONNAME);
						$extra_fields = array('action','key','fileType','filename','_wpnonce','_wp_http_referer');
						if (true === ($creds = request_filesystem_credentials($url, '', false, false, $extra_fields ) ) ) {
							// WP File System
							if(WP_Filesystem($creds)) {
								global $wp_filesystem;
								// try making a work directory $foundryTempPath
								if(!$wp_filesystem->is_dir($foundryTempPath)) {
									if(!$wp_filesystem->mkdir($foundryTempPath, FS_CHMOD_DIR) &&
										$wp_filesystem->is_dir($foundryTempPath)) {
											$uploadErrorFlag = TRUE;
											$uploadErrorMessage .= "\nThe WordPress File System could not create a work directory necessary for this transaction. Please report to the support forum with this error message.";
									}
								}
								// !mkdir foundry_box
								if(!$wp_filesystem->is_dir($uploadFoundryBoxPath)) {
									if(!$wp_filesystem->mkdir($uploadFoundryBoxPath, FS_CHMOD_DIR) &&
										$wp_filesystem->is_dir($uploadFoundryBoxPath)) {
											$uploadErrorFlag = TRUE;
											$uploadErrorMessage .= "\nThe WordPress File System could not create a directory necessary for uploading the file to your server (udf_foundry) . Please report to the support forum with this error message.";
									}
								}

								/*
									move file from temp to foundry temp....
									 zip file extraction into the work temp dir
								*/
								if (!unzip_file(
										$_FILES[$_POST['key']]['tmp_name'],
										$foundryTempPath
										)) {
									$uploadErrorMessage .= "\nThe WordPress File System could not defroze the package zip. Please report to the support forum with this error message.";
									$uploadErrorFlag = TRUE;
								}

								var_dump($wp_filesystem->dirlist($uploadDirectoryPath, FALSE, FALSE));

								// rmdir $foundryTempPath recursive
								if (!$wp_filesystem->rmdir($foundryTempPath, TRUE)) {
									$uploadErrorMessage .= "\nThe WordPress File System could not remove a temporary directory. Please report to the support forum with this error message.";
									$uploadErrorFlag = TRUE;
								}

								echo $uploadErrorMessage;
								exit;
								// !this is different from regular uploading.
								//
								if(!$wp_filesystem->is_dir($uploadDirectoryPath."/$fileType")) {
									if(!$wp_filesystem->mkdir($uploadDirectoryPath."/$fileType", FS_CHMOD_DIR) &&
										$wp_filesystem->is_dir($uploadDirectoryPath."/$fileType")) {
											$uploadErrorFlag = TRUE;
											$uploadErrorMessage .= "\nThe WordPress File System could not create a directory necessary for uploading the package data directory to your server (udf_foundry/$fileType) . Please report to the support forum with this error message.";
									}
								}

								// successfully installed
								// $data = array('filename' => $filename, 'fileurl' =>$uploadDestinationURL );
								// finalizing ....
								if (!$uploadErrorFlag) :
									$data = array('result' => 'ok');
								else :
									$data = array('result' => $uploadErrorMessage);
								endif;

							} else {
								remove_filter( 'filesystem_method', '__return_direct' );
								$data = array('error' => 'The WordPress File System could not be activated though you have been granted a credential from the WordPress. Please report to the support forum with this error message.');
							}
						} else {
							$data = array('result' => 'The WordPress could not grant you a credential to use its own file system. Please report to the support forum with this error message.');
						}

					} else {
						$resultData_array += array ('result' => 'The Foundry Box Pack file is invalid (invalid file and file type unknown).');
					}
				}
		} else {
			$resultData_array += array('result' => 'Error?');
		}
		udff_outputResult('text/html', json_encode($resultData_array) );
		exit;
	}
/**
 * ajax handler for the Foundry file uploads
 * It makes use of the WP File System. The ajax action is defined in udff_admin.php of the Foundry
 *
 * @since 1.1.7
 *
 * @uses WPUPLOAD_BASEDIR Path to the upload directory. Generated with trailingslashit($upload_dir['basedir']); Defined in the foundry-functions.php.
 * @uses WPUPLOAD_BASEURL Path to the upload directory. Generated with trailingslashit($upload_dir['baseurl']); Defined in the foundry-functions.php.
 * @uses WPUPLOAD_UDFF_DIR_NAME Upload Directory name (udf_foundry) Defined in the foundry-functions.php.
 * @uses UDFFNONCEACTIONNAME For nonce name. Defined in the foundry-functions.php.
 * @uses FS_CHMOD_DIR A constant for the File system directory permission mode. Defined in file.php of wp core.
 * @param N/A (wp ajax action mame : uploadFile)
 * @return No return values but the function outputs data stream of result (json format) at the end.
 */

	function udff_ajax_uploadFile () {
		// prep $data
		$data = array();
		
		// check_ajax_referer
		if(!check_admin_referer(UDFFNONCEACTIONNAME) ) 
			$data = array('error' => 'Nonce error: WordPress did not permit this operation. Please report to the support forum with this error message.');
		
		//
		if(!isset($_POST['fileType'])) {
			$fileType = 'files';
		} else {
			$fileType = $_POST['fileType'];
		}

		$filename = basename($_FILES[$_POST['key']]['name']);

		$uploadDirectoryPath = WPUPLOAD_BASEDIR.WPUPLOAD_UDFF_DIR_NAME;
		$uploadDestinationPath = WPUPLOAD_BASEDIR.WPUPLOAD_UDFF_DIR_NAME."/$fileType/" . $_POST['filename'];
		$uploadDestinationURL = WPUPLOAD_BASEURL.WPUPLOAD_UDFF_DIR_NAME."/$fileType/" . $_POST['filename'];

		$uploadErrorFlag = FALSE;

		$uploadErrorMessage = '';
		// 
		$connection_type = get_filesystem_method();
		// filename, directories...
		if(!isset($data['error']) && udff_connection_checkup($connection_type)) {
			// direct method
			// prep for WP File System
			$url = wp_nonce_url('admin.php?page=udff_admin',UDFFNONCEACTIONNAME);
			$extra_fields = array('action','key','fileType','filename','_wpnonce','_wp_http_referer');
			if (true === ($creds = request_filesystem_credentials($url, '', false, false, $extra_fields ) ) ) {
				// WP File System
				if(WP_Filesystem($creds)) {
					global $wp_filesystem;
					// !mkdir udf_foundry
					if(!$wp_filesystem->is_dir($uploadDirectoryPath)) {
						if(!$wp_filesystem->mkdir($uploadDirectoryPath, FS_CHMOD_DIR) &&
							$wp_filesystem->is_dir($uploadDirectoryPath)) {
								$uploadErrorFlag = TRUE;
								$uploadErrorMessage = 'The WordPress File System could not create a directory necessary for uploading the file to your server (udf_foundry) . Please report to the support forum with this error message. (direct method)';
						}
					}
	
					// !mkdir $fileType
					if(!$wp_filesystem->is_dir($uploadDirectoryPath."/$fileType")) {
						if(!$wp_filesystem->mkdir($uploadDirectoryPath."/$fileType", FS_CHMOD_DIR) &&
							$wp_filesystem->is_dir($uploadDirectoryPath."/$fileType")) {
								$uploadErrorFlag = TRUE;
								$uploadErrorMessage = 'The WordPress File System could not create a directory necessary for uploading the file to your server (udf_foundry/'.$fileType.') . Please report to the support forum with this error message. (direct method)';
						}
					}
	
					if (!$uploadErrorFlag) :
					// !then move file
						if ( ! $wp_filesystem->put_contents(
								$uploadDestinationPath,
								udff_file_get_contents($_FILES[$_POST['key']]['tmp_name']),
								FS_CHMOD_FILE) ) {
							$data = array('error' => 'The WordPress File System could not copy the file. Please report to the support forum with this error message. (direct method)');
						} else {
							// successfully uploaded
							$data = array('filename' => $filename, 'fileurl' =>$uploadDestinationURL );
						}
					else :
						$data = array('error' => $uploadErrorMessage);
					endif;
				} else {
					$data = array('error' => 'The WordPress File System could not be activated though you have been granted a credential from the WordPress. Please report to the support forum with this error message. (direct method)');
				}
			} else {
				$data = array('error' => 'The WordPress could not grant you a credential to use its own file system. Please report to the support forum with this error message. (direct method)');
			}
		} else {
			// for non-direct methods
			// make directory
			if (!isset($data['error']) && !file_exists($uploadDirectoryPath."/$fileType") ) {
				if(!mkdir($uploadDirectoryPath."/$fileType", 0755, true) )
					$data = array('error' => 'Directory could not be created. ('.$uploadDestinationPath.' method)');
			}
			
			// ref file.php of wordpress core
			if (!isset($data['error']) ) :
				if (false === @ move_uploaded_file($_FILES[$_POST['key']]['tmp_name'], $uploadDestinationPath ) ) {
					$data = array('error' => 'Error in moving the uploaded file. ('.$connection_type.' method)');
				} else {
					$data = array('filename' => $filename, 'fileurl' =>$uploadDestinationURL );
				}
			endif;
			
			if (!isset($data['error'])) :
				$stat = stat( dirname( $uploadDestinationPath ));
				$perms = $stat['mode'] & 0000666;
				@ chmod( $new_file, $perms );
			endif;
		}
		
		header('Content-type: text/html');
		echo json_encode($data);
		exit;
	}

	/* function for admin bar customization */
	function udff_admin_bar_menu () {
		global $wp_admin_bar;
		$wp_admin_bar->add_menu( array(
			'parent' => 'appearance',
			'id' => 'udff_admin',
			'title' => 'The Foundry',
			'href' => admin_url('admin.php?page=udff_admin' ) ) );
	}

	/* used for the Foundry UI (module) */

		function udff_attachements_selectlist ($post_ID, $name, $idName, $selectedAttachmentID, $echo) {
		$resultData = '';
		$args = array(
			'post_type' => 'attachment',
			'numberposts' => -1,
			'post_status' => null,
			'post_parent' => $post_ID
		);
		$resultData .= "<select name='$name' id='$idName'>";
		$attachments = get_posts( $args );
			if ( $attachments ) {
				foreach ( $attachments as $attachment ) {
					$resultData .= "<option value='{$attachment->ID}'";
					if ($selectedAttachmentID == $attachment->ID) $resultData .= ' selected="selected"';
					$resultData .= ">{$attachment->post_title}</option>";
			     }
			} else {
				$resultData .= '<option value="">No images found. Please upload images.</option>';
			}
		$resultData .= '</select>';
		if($echo) {
			echo $resultData;
		} else {
			return $resultData;
		}
	}

	// portfolio single
	function udff_functions_category_list( $separator = '', $parents='', $post_id = false ) {
		$categories = get_the_category( $post_id );
		if ( !is_object_in_taxonomy( get_post_type( $post_id ), 'category' ) )
			return false;

		if ( empty( $categories ) )
			return 'No category';

		$thelist = '';

			$i = 0;
			foreach ( $categories as $category ) {
				if ( 0 < $i )
					$thelist .= $separator;
				switch ( strtolower( $parents ) ) {
					case 'multiple':
						if ( $category->parent ) $thelist .= get_category_parents( $category->parent, true, $separator );
						$thelist .= $category->name;
						break;
					case 'single':
						if ( $category->parent ) $thelist .= get_category_parents( $category->parent, false, $separator );
						$thelist .= "$category->name";
						break;
					case '':
					default:
						$thelist .= $category->name;
				}
				++$i;
			}

		return $thelist;
	}
	
/**
 * General use Function
 * It just does file_get_contents. It may be re-written later
 *
 * @since 2.1
 *
 * @uses WPUPLOAD_BASEDIR Path to the upload directory. Generated with trailingslashit($upload_dir['basedir']); Defined in the foundry-functions.php.
 * @uses WPUPLOAD_BASEURL Path to the upload directory. Generated with trailingslashit($upload_dir['baseurl']); Defined in the foundry-functions.php.
 * @uses WPUPLOAD_UDFF_DIR_NAME Upload Directory name (udf_foundry) Defined in the foundry-functions.php.
 * @uses UDFFNONCEACTIONNAME For nonce name. Defined in the foundry-functions.php.
 * @uses FS_CHMOD_DIR A constant for the File system directory permission mode. Defined in file.php of wp core.
 * @param N/A (wp ajax action mame : uploadFile)
 * @return No return values but the function outputs data stream of result (json format) at the end.
 */

 function udff_file_get_contents ($filePath) {
	return file_get_contents($filePath);
 }

 /* output results */
 function udff_outputResult ($contentType, $content) {
 	header('Content-type: '.$contentType);
	echo $content;
 }


/* UDT ROLES and permissions */

// check role foundry
function UDTF_check_role_foundry_user_restricted ($user_ID) {
	$wp_user = new WP_User( $user_ID );
	if( $wp_user->has_cap("foundry_user_restricted")) {
		unset($wp_user);
	    return true;
    } else {
    	unset($wp_user);
	    return false;
    }
}

function UDTF_get_permissions () {
	// $permission_data is an array
	$permission_data = unserialize(get_option('udt_foundry_restricted_settings_'.PRODUCTID) );
	if(!$permission_data) return null;
	try {
		// stripslashes just in case
		foreach ($permission_data as $key => $value) {
			$permission_data[$key] = stripslashes($value);
		}
		return $permission_data; // return $permission_data if successful
	} catch (Exception $error_code) {
		return $error_code; // error handling
	}
}

/* functions for the ui elements */

// returns true if the user IS NOT restricted
function foundry_ui_checkPermission ($menuItem_ID) {
	global $foundry_user_restricted, $permission_settings_array;
	if(
		!isset($permission_settings_array) || 
		!$foundry_user_restricted || 
		(
			$foundry_user_restricted && 
			array_key_exists($menuItem_ID, $permission_settings_array) && 
			$permission_settings_array[$menuItem_ID]
		)
	) :
		return true;
	else:
		return false;
	endif;
}

/* end of udff_functions.php */