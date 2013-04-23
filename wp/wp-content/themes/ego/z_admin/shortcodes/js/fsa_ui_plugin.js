/*
	tinyMCE javascript plugin code for fsa ui (tinymce plugin)
*/


var FSA_currentPage = 0;
var FSA_codeToInsert = '';
var currentTinyMCEfield;
var tinyMCE_bookmark;

(function() {
	tinymce.create('tinymce.plugins.FSA_MceButton', {
		getInfo : function() {
			return {
				longname : 'Foundry Shortcode Assistant',
				author : 'UDTHEMES',
				authorurl : 'http://udthemes.com',
				infourl : 'http://udthemes.com',
				version : "1.0"
				};
		},
		init : function(ed, url) {
			var init_this = this;

			var currentSelection_str = '';

			ed.addCommand('FSA',
				function() {
					FSA_codeToInsert = '';
					ed.focus();
					tinyMCE_bookmark = ed.selection.getBookmark();
					currentSelection_str = ed.selection.getContent({format : 'text'});
					// currentTinyMCEfield is a global var.

					// fsa_printObject(tinyMCE_bookmark);
					// Initialize all the textarea in the UI at once
					jQuery('.FSA_page textarea').val("");

					// If text is selected...
					if(currentSelection_str.length > 0) {
						// the textareas for the content will have the selection text.
						jQuery('.FSA_page .first_textarea').val(currentSelection_str);
					}

					jQuery( '#FSA_dialog' ).dialog( "open" );
				}
			);

			// assigning FSA title and icon to the tinymce toolbar
			// the command (cmd) FSA is the one assinged in the PHP code (fsa_tinymce.php).
			ed.addButton('FSA', {
				title : 'UDTHEMES Foundry Shortcode Assistant',
				cmd : 'FSA',
				image : url + '/images/udthemes_shortcodes.png'
				}
			);
		},
		_testDebug : function () {
			// This is how function inside here is to be written
			return 'testDebug';
		}
	});

	// finally adding the FSA_MceButton tinymce plugin to the tinymce
	tinymce.PluginManager.add('FSA_MceButton', tinymce.plugins.FSA_MceButton);
})();


// for the rest of FSA codes in js, look at fsa_ui_script.js
// Note: fsa_ui.php is used to generate FSA_ui which has the content HTML to be showin in the dialog
// including the group tabs and the accordion contents.

// a function for debugging purpose
/*
function fsa_printObject(o) {
  var out = '';
  for (var p in o) {
    out += p + ': ' + o[p] + '\n';
  }
  alert(out);
}
*/