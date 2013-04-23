<?php
/*
	all the functions for admin ui elements are here.

	supported setting options elements:
		input_email,input_text,input_number,input_url,input_upload,select,colorpicker,textarea,html,url

	Also functions that support above
*/

/* ui SIDEBAR */

function udff_admin_ui_sidebar () {
global $menuArray;
// check up permission

?>
	<div id="sidebar">
		<!--start inner-->
        	<div id="inner">
				<!--start logo-->
                <div id="logo">
          			<img src="<?php echo FOUNDRY_LOGOIMAGE_URI ?>" alt="logo"/>
				</div>
				<!--end logo-->
                <!--start main tabs-->
                <div id="navContainer"><ul id="nav">
		            <?php foreach ($menuArray as $menu) {
		            	if( foundry_ui_checkPermission( urlencode($menu['root']) ) ) {
			            	($menu['icon']=='') ? $iconClassName = 'default-icon' : $iconClassName = $menu['icon'];
							echo '<li><a class="mainmenu" href="javascript:void(0);" alt="'.$menu['helptext'].'">';
							echo '<div class="foundry_icon foundry_icon-'.$iconClassName.'"><!-- background image .foundry_icon-'.$iconClassName.' present --></div>';
							echo $menu['root'].'</a></li>';
						}
					} ?>
				</ul></div>
				<!--end main tabs-->
 			</div>
 			<!--end inner-->

	</div>
<?php
}

/* DASHBOARD */

function udff_admin_ui_dashboard () {
	global $supportMenu, $menuArray;
	$lastNum = count($supportMenu) - 1;
	$i = 0;
?>
	<div id="header">
        	<!--start inner-->
            <div id="header-inner">
                <!--start dashboard icons-->
                <div id="dashboard-icons">
                	<?php 
                	// support menu
                	foreach ($supportMenu as $menu) {                		
						echo '<div class="link_holder alignLeft';
							if($i == $lastNum) echo ' last';
						echo '"><a class="db_icon" target="_blank" href="'.$menu['url'].'">';
						echo $menu['title'].'</a></div>';
						$i++;
					} ?>
                </div>
                <!--end dashboard icons-->
                <!--start message area-->
                <div id="dashboard-message">
                	<div class="settingItemMessage">
	                    <p class="dashboardMessage" style="position:relative;z-index:50;">
							<?php echo $menuArray[0]['helptext']; ?>
						</p>
					</div>
				</div>
                <!--end message area-->

            </div>
            <!--end inner-->
	</div><?php
}

/* UI CONTENTS */

function udff_admin_ui_content () {
	global $menuArray;
	$hideExampleTypes = array ('input_upload','select_page','select_json','select','html','toggle_switch');
	?>
	<div id="content-wrapper">
	<?php $lastMenuNum = count($menuArray);
	// loop level 1
	for($i = 0; $i < $lastMenuNum; $i++) {
		// permission check for section contents
		if(foundry_ui_checkPermission( urlencode($menuArray[$i]['root']) ) ) 
		{
			if(!$menuArray[$i]['subnode']) {
				?><div class="content untabbed" style="display:none"><?php
				if($menuArray[$i]['type']=='url') {
					if(file_exists(TEMPLATEPATH.'/'.$menuArray[$i]['defaultvalue'])) {
						include_once (TEMPLATEPATH.'/'.$menuArray[$i]['defaultvalue']);
					} else {
						echo "File Not Found";
					}
				} else {
					echo $menuArray[$i]['defaultvalue'];
				}
				?></div><?php
			} else { ?>
				<!-- start section -->
				<div class="content" style="display:none">
				<!-- start tabs -->
				<div class="tab_button tabPosition">
					<ul><?php
						$countTab = count($menuArray[$i]['subnode']);
						// loop level 2
						for($j = 0; $j < $countTab; $j++) {
							// permission check
							if(foundry_ui_checkPermission( urlencode($menuArray[$i]['subnode'][$j][0]) ) )
					    	{
							?><li><a href="#tabs-<?php echo $i.'-'.$j; ?>"><?php echo $menuArray[$i]['subnode'][$j][0]; ?></a></li><?php
							}
						} ?>
					</ul>
					<!-- start tab contents -->
					<?php
						// loop level 3
						for($j = 0; $j < $countTab; $j++) {
							$groupOn = false;
							$restricted_groupOn = false;
							$countItems = count($menuArray[$i]['subnode'][$j]);	
							// permission check
							if(foundry_ui_checkPermission( urlencode($menuArray[$i]['subnode'][$j][0]) ) )
					    	{ ?>
								<div id="tabs-<?php echo $i.'-'.$j; ?>"><?php
									// loop level 4
									$evenOddCount = 1;
									$evenOddArray = array ('module-even','module-odd');
									$evenOdd = 0;
									for($k = 1; $k < $countItems; $k++) {
										($evenOddCount % 2 == 0) ? $evenOdd = 0 : $evenOdd = 1;
										if($menuArray[$i]['subnode'][$j][$k]['type'] == 'group') {
											// permission check
											if(foundry_ui_checkPermission( $menuArray[$i]['subnode'][$j][$k]['id'] ) ) :
												// fool proof
												if($groupOn == true && $restricted_groupOn == false) echo '<!-- group close type 1 --></div>';
												udff_admin_ui_group_open(
													$menuArray[$i]['subnode'][$j][$k]['settingitem'],
													$menuArray[$i]['subnode'][$j][$k]['defaultvalue'],
													$menuArray[$i]['subnode'][$j][$k]['helptext'],
													$i, $j, $k, $evenOddArray[$evenOdd]);
												$restricted_groupOn = false;
											else :
												$restricted_groupOn = true;
											endif;
											$groupOn = true;
										} else if ($menuArray[$i]['subnode'][$j][$k]['type'] == 'group_close') {
											// permission check
											if($restricted_groupOn == false) :
												echo '<!-- group close --></div>';
												$evenOddCount ++;
											endif;
											$restricted_groupOn = false;
											$groupOn = false;
										} else {
											// permission check
											if($restricted_groupOn == true ) :
												echo '<!-- setting '.$menuArray[$i]['subnode'][$j][$k]['id'].' skipped because it is in a restricted group -->';
											elseif (foundry_ui_checkPermission( $menuArray[$i]['subnode'][$j][$k]['id'] )) : ?>
												<div class="module <?php echo $evenOddArray[$evenOdd]?>" id="<?php echo "moduleID_$i-$j-$k"; ?>">
													<div class="titleContainer">
						                           		<h1><?php echo $menuArray[$i]['subnode'][$j][$k]['settingitem']; ?></h1>
														<?php
														$helptext = '';
														if ($menuArray[$i]['subnode'][$j][$k]['helptext']) {
															$helptext = html_entity_decode($menuArray[$i]['subnode'][$j][$k]['helptext'],ENT_QUOTES,"UTF-8").' ';
						                                    if(strlen($menuArray[$i]['subnode'][$j][$k]['defaultvalue']) &&
						                                    	!in_array($menuArray[$i]['subnode'][$j][$k]['type'],$hideExampleTypes)) {
																$helptext .= 'Example: <span class="example">'.$menuArray[$i]['subnode'][$j][$k]['defaultvalue'].'</span>';
															}
															if($menuArray[$i]['subnode'][$j][$k]['showtooltip'] == TRUE) { ?>
								                                <a style="position:relative;" href="javascript:void(0);" alt="#tt-<?php echo $i.'-'.$j.'-'.$k; ?>" class="info"></a>
								                                <span id="tt-<?php echo $i.'-'.$j.'-'.$k; ?>" class="tooltip">
								                                    <?php echo sprintf($helptext,TEMPLATEURL); ?>
								                                </span>
							                               	<?php } ?>
						                                <?php } ?>
						                            </div>
						                            <?php
					                            	switch ($menuArray[$i]['subnode'][$j][$k]['type']) {
					                            		case 'input_email':
					                            			udff_admin_ui_settingOptions_input_email ($menuArray[$i]['subnode'][$j][$k]['id']);
					                            			break;
					                            		case 'input_text':
					                            			udff_admin_ui_settingOptions_input_text ($menuArray[$i]['subnode'][$j][$k]['id']);
					                            			break;
					                            		case 'input_number':
					                            			udff_admin_ui_settingOptions_input_number ($menuArray[$i]['subnode'][$j][$k]['id']);
					                            			break;
					                            		case 'input_url':
					                            			udff_admin_ui_settingOptions_input_url ($menuArray[$i]['subnode'][$j][$k]['id']);
					                            			break;
					                            		case 'input_upload':
					                            			udff_admin_ui_settingOptions_input_upload ($menuArray[$i]['subnode'][$j][$k]['id']);
					                            			break;
					                            		case 'input_upload_file':
					                            			udff_admin_ui_settingOptions_input_upload_file ($menuArray[$i]['subnode'][$j][$k]['id']);
					                            			break;
					                            		case 'select':
					                            			udff_admin_ui_settingOptions_select ($menuArray[$i]['subnode'][$j][$k]['id']);
					                            			break;
					                            		case 'toggle_switch':
					                            			udff_admin_ui_settingOptions_toggle_switch ($menuArray[$i]['subnode'][$j][$k]['id'],$helptext);
					                            			break;
					                            		case 'select_json':
					                            			udff_admin_ui_settingOptions_select_json ($menuArray[$i]['subnode'][$j][$k]['id']);
					                            			break;
					                            		case 'colorpicker':
					                            			udff_admin_ui_settingOptions_colorpicker ($menuArray[$i]['subnode'][$j][$k]['id']);
					                            			break;
					                            		case 'textarea':
					                            			udff_admin_ui_settingOptions_textarea ($menuArray[$i]['subnode'][$j][$k]['id']);
					                            			break;
					                            		case 'html':
					                            			udff_admin_ui_settingOptions_html ($menuArray[$i]['subnode'][$j][$k]['id']);
					                            			break;
					                            		case 'url':
					                            			udff_admin_ui_settingOptions_url ($menuArray[$i]['subnode'][$j][$k]['id']);
					                            			break;
					                            		case 'select_page':
					                            			udff_admin_ui_settingOptions_select_page ($menuArray[$i]['subnode'][$j][$k]['id']);
					                            			break;
					                            	} ?>
													<div class="settingItemMessage <?php
														echo 'settingItemMessage_'.$menuArray[$i]['subnode'][$j][$k]['type'].' ';
														if($menuArray[$i]['subnode'][$j][$k]['showsettinghelp'] == 'Always') {
															echo 'showHelpAlways';
														} else if($menuArray[$i]['subnode'][$j][$k]['showsettinghelp'] == 'Hide'){
															echo 'hideHelp';
														}
													?>" style="<?php
			
													if($menuArray[$i]['subnode'][$j][$k]['showsettinghelp'] == 'Always') echo 'display:block;';
													?>"><?php echo sprintf($helptext,TEMPLATEURL); ?></div>
													<span class="settingItemMessage_helptext" style="display:none;">
														<?php echo sprintf($helptext,TEMPLATEURL); ?>
													</span>
												</div><!-- closing div for a module of setting item or a group -->
											<?php endif; // close if for permission check ?>
											<?php if(!$groupOn) $evenOddCount ++; ?>
											<?php } // close if ?>
									<?php } // close loop for setting items ?>
									<?php // fool proof
										if($groupOn == true) echo '<!-- group close type 2 --></div>';
									?>
									<!--master save-->
									<p class="progressMessage">Save all options above:</p>
									<input type="button" class="ui-button large theme rcorners thisIsSaveSectionButton" value="SAVE" />
									<input type="hidden" class="ui-button large theme rcorners thisIsInitSectionButton" value="INITIALIZE" />
									<div class="settingItemMessage_section"><!-- empty --></div>
									<!-- end tab section-->
								</div>
						<?php } // end if for permission tab contents ?>
					<?php } // end loop for tab contents ?>
					<!-- end tab contents -->
				</div><!-- end tabs -->
				</div><!-- end section -->
				<?php } // ends if for the settings tab contents
			} // endif for permission check for section contents
	} // end loop ?>
	<!-- foundry_box -->
	<?php if(file_exists(FOUNDRY_BOX_URI)) : ?>
		<div class="content untabbed page_foundry_box" style="display:none">
			<?php include_once (FOUNDRY_BOX_URI); ?>
		</div>
	<?php endif; ?>
	<!-- end foundry_box -->
 	</div><?php }

/* ui elements */


function udff_admin_ui_group_open ($groupTitle, $defaultvalue, $helptext, $i, $j, $k, $evenOdd_className) {
	?>
	<div class="module group <?php echo $evenOdd_className; ?>" id="<?php echo "moduleID_$i-$j-$k";?>">
		<div class="titleContainer">
			<h1><?php echo $groupTitle; ?></h1>
			<?php if($helptext) { ?>
			<a style="position:relative;" href="javascript:void(0);" alt="#tt-<?php echo $i.'-'.$j.'-'.$k; ?>" class="info"></a>
            <span id="tt-<?php echo $i.'-'.$j.'-'.$k; ?>" class="tooltip">
                <?php echo sprintf(html_entity_decode($helptext,ENT_QUOTES,"UTF-8"),TEMPLATEURL); ?>
            </span>
            <?php } ?>
		</div>
		<div class="groupInfoMessage">
			<?php if($defaultvalue) echo sprintf(html_entity_decode($defaultvalue),TEMPLATEURL); ?>
		</div><?php
}

function udff_admin_ui_settingOptions_input_email ($settingItem_id) {
	global $$settingItem_id;
	?>
	<form name="formName_<?php echo $settingItem_id; ?>" action="javascript:void(0);">
	<input type="text" name="<?php echo $settingItem_id; ?>"  class="module-inputField standard input_email" id="<?php
		echo $settingItem_id;
		?>" value="<?php echo stripslashes ($$settingItem_id) ; ?>" />
	<input type="submit" value="Save" id="settingItem_save_<?php echo $settingItem_id; ?>" class="saveDisabled ui-button small theme rcorners alignRight last" />
	<input type="submit" value="Revert" id="settingItem_revert_<?php echo $settingItem_id; ?>" class="revertDisabled ui-button small theme rcorners alignRight" />
	</form><?php
}

function udff_admin_ui_settingOptions_input_text ($settingItem_id) {
	global $$settingItem_id; ?>
	<form name="formName_<?php echo $settingItem_id; ?>" action="javascript:void(0);">
	<input type="text" name="<?php echo $settingItem_id; ?>"  class="module-inputField standard input_text" id="<?php
	echo $settingItem_id;
		?>" value="<?php echo stripslashes ($$settingItem_id) ; ?>" />
	<input type="submit" value="Save" id="settingItem_save_<?php echo $settingItem_id; ?>" class="saveDisabled ui-button small theme rcorners alignRight last" />
	<input type="submit" value="Revert" id="settingItem_revert_<?php echo $settingItem_id; ?>" class="revertDisabled ui-button small theme rcorners alignRight" />
	</form><?php
}

function udff_admin_ui_settingOptions_input_number ($settingItem_id) {
	global $$settingItem_id; ?>
	<form name="formName_<?php echo $settingItem_id; ?>" action="javascript:void(0);">
	<input type="text" name="<?php echo $settingItem_id; ?>"  class="module-inputField standard input_number" id="<?php
	echo $settingItem_id;
		?>" value="<?php echo stripslashes ($$settingItem_id) ; ?>" />
	<input type="submit" value="Save" id="settingItem_save_<?php echo $settingItem_id; ?>" class="saveDisabled ui-button small theme rcorners alignRight last" />
	<input type="submit" value="Revert" id="settingItem_revert_<?php echo $settingItem_id; ?>" class="revertDisabled ui-button small theme rcorners alignRight" />
	</form><?php
}

function udff_admin_ui_settingOptions_input_url ($settingItem_id) {
	global $$settingItem_id; ?>
	<form name="formName_<?php echo $settingItem_id; ?>" action="javascript:void(0);">
	<input type="text" name="<?php echo $settingItem_id; ?>"  class="module-inputField standard input_url" id="<?php
	echo $settingItem_id;
		?>" value="<?php echo stripslashes ($$settingItem_id) ; ?>" />
	<input type="submit" value="Save" id="settingItem_save_<?php echo $settingItem_id; ?>" class="saveDisabled ui-button small theme rcorners alignRight last" />
	<input type="submit" value="Revert" id="settingItem_revert_<?php echo $settingItem_id; ?>" class="revertDisabled ui-button small theme rcorners alignRight" />
	</form><?php
}

function udff_admin_ui_settingOptions_input_upload ($settingItem_id) {
	global $$settingItem_id;
	$filename = $$settingItem_id;
	if(file_exists(WPUPLOAD_BASEDIR.WPUPLOAD_UDFF_DIR_NAME.'/images/'.$filename)) {
		$file_location = WPUPLOAD_BASEURL.WPUPLOAD_UDFF_DIR_NAME.'/images/'.$filename;
	} else {
		$file_location = TEMPLATEURL.'/z_usr/images/'.$filename;
	}
	?>
	<form name="formName_<?php echo $settingItem_id; ?>" action="javascript:void(0);">
	<div class="upload_thumbnail" id="upload_thumbnail_<?php echo $settingItem_id; ?>" style="width:200px; height:100px">
		<img style="max-width: 200px; max-height: 100px;" src="<?php echo $file_location; ?>" />
	</div>
	<input type="file" id="settingItem_upload_<?php
		echo $settingItem_id; ?>" name="settingItem_upload_<?php echo $settingItem_id; ?>" class="upload_file" />
	<input type="reset" />
	<input type="hidden" name="default_filename" value="<?php echo stripslashes ($filename) ; ?>" />
	<div class="upload_thumbnail_message">
		Image file name: <?php echo $filename; ?>
	</div>
	<input type="button" value="Upload" class="upload_button ui-button small theme rcorners alignRight last" />
	</form><?php
}

function udff_admin_ui_settingOptions_input_upload_file ($settingItem_id) {
	global $$settingItem_id; ?>
	<form name="formName_<?php echo $settingItem_id; ?>" action="javascript:void(0);">
	<input style="height:0px;width:0px;position:absolute;float:right;top: -290px;" type="file" id="settingItem_upload_<?php
		echo $settingItem_id; ?>" name="settingItem_upload_<?php echo $settingItem_id; ?>" class="upload_regularFile" />
	<input style="height:0px;width:0px;position:absolute;float:right;top: -290px;" type="reset" />
	<input type="hidden" name="default_filename" value="<?php echo $$settingItem_id; ?>" />
	<div class="upload_thumbnail_message" style="height: 10px;">
		Image file name: <?php echo $$settingItem_id; ?>
	</div>
	<input style="margin-top: -35px;" type="button" value="Upload" class="upload_button ui-button small theme rcorners alignRight last" />
	</form><?php
}

function udff_admin_ui_settingOptions_select ($settingItem_id) {
	global $wpdb, $$settingItem_id;
	$defaultVar =  $settingItem_id.'_default';
	global $$defaultVar;
	$optionItems = explode(',',$$defaultVar);
	$countOptions = count($optionItems); ?>
	<form name="formName_<?php echo $settingItem_id; ?>" action="javascript:void(0);" style="height:37px;">
		<input type="hidden" name="<?php echo $settingItem_id; ?>" id="<?php echo $settingItem_id; ?>" />
		<input type="hidden" class="select_initValue" value="<?php echo $$settingItem_id; ?>" />
		<select class="module-comboBox" name="<?php echo $settingItem_id; ?>" id="<?php echo $settingItem_id; ?>">
			<?php for($l = 0; $l < $countOptions; $l++) { ?>
				<option value="<?php echo $l; ?>"<?php
					if($l == $$settingItem_id) echo ' selected';
				?>><?php echo $optionItems[$l];?></option>
			<?php } ?>
		</select>
		<input type="submit" value="Save" id="settingItem_save_<?php echo $settingItem_id; ?>" class="saveDisabled ui-button small theme rcorners alignRight thisIsSelect last" />
		<input type="submit" value="Revert" id="settingItem_revert_<?php echo $settingItem_id; ?>" class="revertDisabled ui-button small theme rcorners thisIsSelect alignRight" />
	</form><?php
}

/* iOS style toggle switch */

function udff_admin_ui_settingOptions_toggle_switch ($settingItem_id, $helptext) {
	global $wpdb, $$settingItem_id;
	$defaultVar =  $settingItem_id.'_default';
	global $$defaultVar;
	$optionItems = explode(',',$$defaultVar); ?>
	<form name="formName_<?php echo $settingItem_id; ?>" action="javascript:void(0);" style="height:37px;">
		<input type="hidden" name="<?php echo $settingItem_id; ?>" id="<?php echo $settingItem_id; ?>" />
		<input type="hidden" class="select_initValue" value="<?php echo $$settingItem_id; ?>" />
		<div class="labelToggleButton"><?php echo $helptext; ?></div>
		<div style="float: right;">
			<input type="checkbox" class="toggleSwitch normal" <?php if($$settingItem_id !== '0') echo 'checked'; ?> />
		</div>
		<input type="hidden" value="Save" id="settingItem_save_<?php echo $settingItem_id; ?>" class=" ui-button small theme rcorners alignRight thisIsCheckbox last thisIsSaveCheckbox" />
		<input type="hidden" value="Revert" id="settingItem_revert_<?php echo $settingItem_id; ?>" class="revertDisabled ui-button small theme rcorners thisIsCheckbox alignRight" />
	</form><?php
}

/*
	!udff_admin_ui_settingOptions_select_json
*/

function udff_admin_ui_settingOptions_select_json ($settingItem_id) {
	global $wpdb, $$settingItem_id;
	$defaultVar =  $settingItem_id.'_default';
	global $$defaultVar;
	if(substr($$defaultVar, 0, 5)!=='json{') return;

	$decoded_menuData = json_decode( html_entity_decode(substr_replace($$defaultVar,'',0,4), ENT_QUOTES,'UTF-8')); // as object
	$select_json_currentValue = $$settingItem_id;

	?>
	<form name="formName_<?php echo $settingItem_id; ?>" action="javascript:void(0);" style="height:37px;">
		<input type="hidden" name="<?php echo $settingItem_id; ?>" id="<?php echo $settingItem_id; ?>" />
		<input type="hidden" class="select_initValue" value="<?php echo $select_json_currentValue; ?>" />
		<select class="module-comboBox" name="<?php echo $settingItem_id; ?>" id="<?php echo $settingItem_id; ?>">
			<?php foreach ($decoded_menuData->values as $selectData) { ?>
				<option value="<?php echo $selectData->value; ?>"<?php
					if($select_json_currentValue == $selectData->value) echo ' selected';
				?>><?php echo $selectData->label;?></option>
			<?php } ?>
		</select>
		<input type="submit" value="Save" id="settingItem_save_<?php echo $settingItem_id; ?>" class="saveDisabled ui-button small theme rcorners alignRight thisIsSelect_json last" />
		<input type="submit" value="Revert" id="settingItem_revert_<?php echo $settingItem_id; ?>" class="revertDisabled ui-button small theme rcorners thisIsSelect alignRight" />
	</form><?php
}

function udff_admin_ui_settingOptions_colorpicker ($settingItem_id) {
	global $$settingItem_id; ?>
	<form name="formName_<?php echo $settingItem_id; ?>" action="javascript:void(0);">
		<div id="<?php echo $settingItem_id; ?>" class="colorSelect" style="background-color: #<?php echo stripslashes ($$settingItem_id) ; ?>"></div>
		<input type="text" name="<?php echo $settingItem_id; ?>" maxlength="6"  class="module-inputField hexVal colorpickerField" id="<?php echo $settingItem_id; ?>" value="<?php echo stripslashes ($$settingItem_id) ; ?>" />
		<input type="submit" value="Save" id="settingItem_save_<?php echo $settingItem_id; ?>" class="saveDisabled ui-button small theme rcorners alignRight last" />
		<input type="submit" value="Revert" id="settingItem_revert_<?php echo $settingItem_id; ?>" class="revertDisabled ui-button small theme rcorners alignRight" />
	</form><?php
}

function udff_admin_ui_settingOptions_textarea ($settingItem_id) {
	global $$settingItem_id; ?>
	<form name="formName_<?php echo $settingItem_id; ?>" action="javascript:void(0);" class="settingOption_textarea">
		<input type="hidden" name="<?php echo $settingItem_id; ?>" id="<?php echo $settingItem_id; ?>" />
		<textarea class="module-txtArea" rows="0" cols="0"><?php echo stripslashes(html_entity_decode($$settingItem_id)); ?></textarea>
		<input type="submit" value="Save" id="settingItem_save_<?php echo $settingItem_id; ?>" class="saveDisabled ui-button small theme rcorners alignRight thisIsTextarea last" />
		<input type="submit" value="Revert" id="settingItem_revert_<?php echo $settingItem_id; ?>" class="revertDisabled ui-button small theme rcorners alignRight thisIsTextarea" />
		<div style="clear:both;"><!-- clear both --></div>
	</form><?php
}

function udff_admin_ui_settingOptions_select_page ($settingItem_id) {
	global $wpdb, $$settingItem_id;
	$defaultVar =  $settingItem_id.'_default';
	global $$defaultVar;
	// if these two has an identical value, then the setting item has not been set.
	if($$settingItem_id === $$defaultVar) $$settingItem_id = "";
	if(preg_match("/{(.*?)}/",$$defaultVar)) {
		// read as variable or constant when the var $defaultVar is bracketed with { and }
		$postTypeName_var_string = preg_replace("/{(.+?)}/","\\1",$$defaultVar);
		$postTypeName = constant($postTypeName_var_string);
	} else {
		$postTypeName = $$defaultVar;
	}
	?>
	<form name="formName_<?php echo $settingItem_id; ?>" action="javascript:void(0);" style="height:37px;">
		<input type="hidden" name="<?php echo $settingItem_id; ?>" id="<?php echo $settingItem_id; ?>" />
		<input type="hidden" class="select_initValue" value="<?php
			if($$settingItem_id) {
				echo $$settingItem_id;
			}
			?>" />
			<?php
			$dropdown = wp_dropdown_pages(array(
				'post_type' => $postTypeName,
				'name' => $settingItem_id,
				'selected' => $$settingItem_id,
				'echo' => 0,
			));
			if(!$$settingItem_id) $dropdown = str_replace("<select name='$settingItem_id' id='$settingItem_id'>","<select name='$settingItem_id' id='$settingItem_id'><option value=\"\">Please choose a page.</option>",$dropdown);
			echo $dropdown;
		  ?>
		<input type="submit" value="Save" id="settingItem_save_<?php echo $settingItem_id; ?>" class="<?php if($$settingItem_id) echo 'saveDisabled'; ?> ui-button small theme rcorners alignRight thisIsSelect last" />
	</form><?php
}

function udff_admin_ui_settingOptions_html ($settingItem_id) {
	global $$settingItem_id;

	echo sprintf(html_entity_decode($$settingItem_id),TEMPLATEURL);
}

