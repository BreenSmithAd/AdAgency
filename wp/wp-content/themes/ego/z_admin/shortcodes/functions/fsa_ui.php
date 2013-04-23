<?php
/*
	function for building the FsA unser interfacae

	the js var FSA_ui is generated
	according to $FSA_shortcode_info (see fsa_shortcodes.php)
	the var FSA_ui (str) is referred in the fsa_ui_script.js
*/

function FSA_ui () {
	global $FSA_shortcode_info;
	echo '<script type="text/javascript">';
	// var declaration
	echo 'var FSA_ui = \'';

	echo '<div id="FSA_dialog" title="UDTHEMES Foundry Shortcode Assistant">';
	echo '<div class="FSA_frame">'; // div FSA_frame
	$i = 0;
	echo '<div class="FSA_leftpane"><div id="FSA_leftpane_title">Groups</div><div id="FSA_tabs"><ul>';
		foreach ($FSA_shortcode_info as $key => $value) {
			echo '<li class="FSA_group';
			if($i == 0) echo ' FSA_group_active';
			echo '" id="FSA_groupID_'.$i.'" ';
			echo '>';
			echo '<div class="FSA_leftpane_group_icon ';
			if(array_key_exists('shortcode_group_icon', $value)) {
				echo ' '.$value['shortcode_group_icon'].'"';
				echo '></div>';
			} else {
				echo ' udthemes_shortcodes"></div>';
			}
			echo '<div class="FSA_leftpane_group_label">'.$key.'</div><div class="FSA_group_active_indicator"></div></li>';
			$i ++;
		}
	echo '</ul></div></div>'; // closes left pane

	// right pane
	echo '<div class="FSA_rightpane"><div id="FSA_rightpane_title">Shortcodes</div>';
	$i = 0;
	// outputs right pane pages
		foreach ($FSA_shortcode_info as $key => $value_group) {
			echo '<div class="FSA_page" id="FSA_pageID_'.$i.'"><div class="FSA_page_accordion">';
			foreach ($value_group['shortcode_data'] as $value_page) {
					echo '<h3><div class="FSA_header_icon ';
					if(array_key_exists('shortcode_icon', $value_page) && $value_page['shortcode_icon'] !== '' ) {
						echo ' '.$value_page['shortcode_icon'].'">';
					} else {
						echo ' udthemes_shortcodes">';
					}
					echo '</div><div class="FSA_header_label"><a href="#">'.$value_page['shortcode_title'].'</a></div></h3>';
					echo '<div class="';
					if( array_key_exists('is_column', $value_page) ) echo 'is_column ';
					if( !array_key_exists('contents', $value_page) ) echo 'no_content ';
					if( array_key_exists('is_block_level', $value_page) ) echo 'is_block_level ';
					echo '" ';
					echo 'id="moduleSection_'.$value_page['shortcode_name'].'">';
					//
					echo '<div class="accordion_module">';
					echo "<div class=\"accordion_content_info\"><p class=\"accordion_content_title\">Shortcode name : </p>".$value_page['shortcode_name']."</div>";
					echo "<input type=\"hidden\" name=\"shortcode_name\" value=\"".$value_page['shortcode_name']."\" />";
					echo "<div class=\"accordion_content_info\"><p class=\"accordion_content_title\">Description :</p>".$value_page['description']."</div>";
					echo '</div>';

					// contents
					if(array_key_exists('contents', $value_page)) :
						if(is_array($value_page['contents'])) :
							$first_textarea = " class=\"first_textarea\"";
							foreach($value_page['contents'] as $value_contents) {
								echo '<div class="accordion_module">';
								if(is_array($value_contents)) {
									$textarea_label = $value_contents[0];
									$textarea_id = " id=\"{$value_contents[1]}\"";
								} else {
									$textarea_label = $value_contents;
								}
								echo "<p class=\"accordion_content_title\">$textarea_label</p>";
								echo "<textarea{$first_textarea}{$textarea_id}></textarea>";
								$first_textarea='';
								echo '</div>';
							}
						else :
							echo '<div class="accordion_module">';
							echo "<p class=\"accordion_content_title\">{$value_page['contents']}</p>";
							echo "<textarea class=\"first_textarea\"></textarea>";
							echo '</div>';
						endif;
					endif;

					// attribute
					if(array_key_exists('attributes', $value_page)) :
						// only array is allowed for attributes but
						// accepts string value any way.
						foreach($value_page['attributes'] as $attributes_key => $attributes_value) {
							echo '<div class="accordion_module">';
							echo '<p class=\"accordion_content_title\">'.$attributes_key.' : </p>';
							if(is_array($attributes_value)) :
								echo '<select class="'.$attributes_key.'">';
								foreach($attributes_value as $this_attribute_values) {
									echo "<option value=\"$this_attribute_values\">$this_attribute_values</option>";
								}
								echo '</select>';
							else :
								echo "<input type=\"text\" class=\"$attributes_key\" value=\"{$attributes_value}\">";
							endif;
							echo '</div>';
						}
					endif;
					// for debugging - output array
					// echo str_replace(array("\r\n","\n","\r"), '',addslashes(print_r ($value_page, true)));
					echo '</div>';
				// endif;
			}
			echo '</div></div>';
			$i ++;
		}

	echo '</div>'; // closes the right pane

	// end bits
	echo '</div>'; // closes FSA_frame
	echo '</div>'; // closes FSA_dialog
	echo '\';</script>';
}

// the javascript var FSA_ui (str) inserted at the header
add_action( 'admin_head', 'FSA_ui' );
