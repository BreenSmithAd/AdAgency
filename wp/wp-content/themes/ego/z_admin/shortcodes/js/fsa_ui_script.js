/*
	javascript for fsa ui
*/

// the following vars are declared in the fsa_ui_plugin.js
// var FSA_codeToInsert = '';
// var currentTinyMCEfield;

// 'FSA_ui' var (str) holding the ui HTML is in the fsa_ui.php

// dialog height and width are automatically adjusted (see fsa_ui_script.js)
var FSA_dialog_height = 650;
var FSA_dialog_width = 650;

// excecuted when the html page is loaded
jQuery(document).ready(function(){
	if(!jQuery('div#postdivrich').length) return;
	jQuery('div#poststuff').append(FSA_ui);
	jQuery('#FSA_dialog ul li.FSA_group').each(
		function () {
			//
			jQuery(this).click(
				function () {
					FSA_currentPage = jQuery(this).attr('id').replace('FSA_groupID_', '');
					jQuery('.FSA_page').stop().hide();
					jQuery('.FSA_group').removeClass('FSA_group_active');
					jQuery('.FSA_leftpane_group_icon').css({'backgroundPositionY': '0px'});
					jQuery(this).addClass('FSA_group_active');
					jQuery(this).find('.FSA_leftpane_group_icon').css({'backgroundPositionY': '17px'});
					jQuery('#FSA_pageID_'+FSA_currentPage).fadeIn('fast');
				}
			);

			jQuery(this).hover(
				function () {
					if(!jQuery(this).hasClass('FSA_group_active')) {
						jQuery(this).find('.FSA_leftpane_group_icon').css({'backgroundPositionY': '17px'});
					}
				},
				function () {
					if(!jQuery(this).hasClass('FSA_group_active')) {
						jQuery(this).find('.FSA_leftpane_group_icon').css({'backgroundPositionY': '0px'});
					}
				}
			);
		});

	// setting the dialog height and width to 70% of the window size (as of when the page is loaded)
	FSA_dialog_height = jQuery(window).height() * 0.7;
	FSA_dialog_width = jQuery(window).width() * 0.7;

	// prep the FSA dialog
	jQuery( '#FSA_dialog' ).dialog({
		open: function() {
				jQuery('body').css({'overflow': 'hidden'})
			},
		autoOpen: false,
		height: FSA_dialog_height,
		width: FSA_dialog_width,
		modal: true,
		buttons: {
			Cancel: function() {
				jQuery( this ).dialog( "close" );
				// ed.selection.moveToBookmark(tinyMCE_bookmark);
			},
			"Insert the shortcode": function() {
				// making sure that an accordion section opened
				var bValid = jQuery('#FSA_pageID_'+FSA_currentPage+' div.ui-accordion-content-active').size();
				var ed = tinymce.get(wpActiveEditor);
				var tempStr = '';
				if ( bValid ) {
					var active_accordion = jQuery('#FSA_pageID_'+FSA_currentPage+' div.ui-accordion-content-active');
					var is_column = active_accordion.hasClass('is_column');
					var no_content = active_accordion.hasClass('no_content');
					var is_block_level = active_accordion.hasClass('is_block_level');
					var shortcode_name = active_accordion.find("input[name='shortcode_name']").val();

					// initializing
					var shortcode_attributes_to_insert = '';

					// is the shortcode is ...
					if(is_column) {
						// for column
						var shortcode_columns = new Array();
						active_accordion.find("textarea").each(function(i) {
							var object_key = jQuery(this).attr('id');
							tempStr = tempStr.replace(/\r\n/g,"\n");
							tempStr = jQuery(this).val().replace(/(\r\n)+$/g,'');
							FSA_codeToInsert += '<p>['+object_key+']</p><p>'+ tempStr + '</p><p>[/'+object_key+']</p>';
						});
					} else {
						// for all others
						var shortcode_attributes = {};
						// get all the attributes from input text fields.
						active_accordion.find("input[type!='hidden'], select").each(function(i) {
							shortcode_attributes[jQuery(this).attr('class')] = jQuery(this).val();
						});
						// constructing the shortcode to be output
						for (var object_value in shortcode_attributes) {
							if(shortcode_attributes[object_value]) {
								shortcode_attributes_to_insert += ' ' + object_value + '=\"' + shortcode_attributes[object_value] + '\"';
							}
						}

						// finalizing the shortcode date .... including the content
						
						if (is_block_level) {
							FSA_codeToInsert =  "<p>";
						} else {
							FSA_codeToInsert = '';
						}
						
						FSA_codeToInsert = FSA_codeToInsert + '['+shortcode_name;
						if(shortcode_attributes_to_insert) FSA_codeToInsert += shortcode_attributes_to_insert;
						
						if (is_block_level && no_content) {
							FSA_codeToInsert += "]";
						} else if(is_block_level) {
							FSA_codeToInsert += "]</p>";
						} else {
							FSA_codeToInsert += "]";
						}
						
						// if it has A content, then close the shortcode with the content then the closing tag
						if(!no_content) {
							tempStr = active_accordion.find('.first_textarea').val().replace(/(\r\n)+$/g,'');
							tempStr = tempStr.replace(/\r\n/g,"\n");
							if (is_block_level) {
								FSA_codeToInsert += "<p>" + tempStr + '</p><p>[/'+shortcode_name+']</p>';
							} else {
								FSA_codeToInsert += tempStr + '[/'+shortcode_name+']';
							}
						} else {
							if (is_block_level) FSA_codeToInsert = FSA_codeToInsert + "</p>";
						}
					}
					// for debug - alert(FSA_codeToInsert);
					// making sure that all the scroll positions are resetted.
					jQuery('.FSA_page, .FSA_rightpane, FSA_leftpane').scrollTop(0);
					// Closes all the according
					jQuery( '.FSA_page_accordion' ).accordion('activate', -1);

					// job finished. Now closing the FSA dialog
					jQuery( this ).dialog( "close" );
					// insert the shortcode constructed above
					ed.selection.moveToBookmark(tinyMCE_bookmark);
					ed.execCommand("mceInsertContent", false, FSA_codeToInsert);

				} else {
					// just a reminder. This happens when a user click on the insert button
					// with the accordions of current page is closed.
					alert("To insert a shortcode, you need to toggle any of those accordion first. To cancel this operation, please click on the cancel button.");
				}
				return false;
			}
		},
		beforeClose: function() {
			// making sure that all the scroll positions are resetted.
			jQuery('.FSA_page, .FSA_rightpane, FSA_leftpane').scrollTop(0);
			// Closes all the according
			jQuery( '.FSA_page_accordion' ).accordion('activate', -1);
		},
		close: function() {
			// callback in closing the dialog
			// set the overflow of body to auto so that the scrollbar appears
			jQuery('body').css({'overflow': 'auto'});
			tinyMCE.get('content').focus();
			if(FSA_codeToInsert.length == 0) {
				var ed = tinymce.get(wpActiveEditor);
				ed.selection.moveToBookmark(tinyMCE_bookmark);
			}
		}
	});

	// Initializing the Accordion
	jQuery( '.FSA_page_accordion' ).accordion({
		fillSpace: false,
		autoHeight: false,
		animated: false,
		active: false,
		collapsible: true });

	// showing the first page only at launch
	jQuery('.FSA_page').hide();
	jQuery('#FSA_pageID_0').show();
});
