/* setting options */

/* functions - button state check for save setting items*/

function settingItemButtonActiveState (that) {
	if(jQuery(that).hasClass('saveDisabled') 
		|| jQuery(that).hasClass('saveProgress')
		|| jQuery(that).hasClass('saveError')
		|| jQuery(that).hasClass('saveSuccess')
		|| jQuery(that).hasClass('revertDisabled')) 
	{
		return false;
	} else {
		return true;
	}
}

/*
	stripslashes
	http://phpjs.org/functions/stripslashes:537
	Published under the 
	MIT and GPL licenses
*/
    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   improved by: Ates Goral (http://magnetiq.com)
    // +      fixed by: Mick@el
    // +   improved by: marrtins
    // +   bugfixed by: Onno Marsman
    // +   improved by: rezna
    // +   input by: Rick Waldron
    // +   reimplemented by: Brett Zamir (http://brett-zamir.me)
    // +   input by: Brant Messenger (http://www.brantmessenger.com/)
    // +   bugfixed by: Brett Zamir (http://brett-zamir.me)
    // *     example 1: stripslashes('Kevin\'s code');
    // *     returns 1: "Kevin's code"
    // *     example 2: stripslashes('Kevin\\\'s code');
    // *     returns 2: "Kevin\'s code"
    
function stripslashes (str) {
    return (str + '').replace(/\\(.?)/g, function (s, n1) {
        switch (n1) {
        case '\\':
            return '\\';
        case '0':
            return '\u0000';
        case '':
            return '';
        default:
            return n1;
        }
    });
}

/* debug */

function debugObject(e){
	var result_string = 'Content of ' + typeof e + " : ";
	var counter = 0;
	for( i in e ){
		result_string += '<br />' + "[" + counter + "] " + i + ' = ' + e[i];
		counter++;
	}
	return result_string;
}
