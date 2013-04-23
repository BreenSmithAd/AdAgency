<?php
// FSA Shortcodes data for EGO 
// 14 Mar 2013 modified by Shu

$FSA_shortcode_info = array(
	"Content Styling"=>array('shortcode_group_icon' => 'udthemes_content_styling', 'shortcode_data'=>array()),
	"Layout"=>array('shortcode_group_icon' => 'udthemes_layout', 'shortcode_data'=>array()),
	"Map"=>array('shortcode_group_icon' => 'udthemes_maps', 'shortcode_data'=>array()),
	"Media"=>array('shortcode_group_icon' => 'udthemes_media', 'shortcode_data'=>array()),
	"Social Media"=>array('shortcode_group_icon' => 'udthemes_social', 'shortcode_data'=>array()),
	"UI"=>array('shortcode_group_icon' => 'udthemes_ui', 'shortcode_data'=>array())
);


// GROUP: Layout

// Halfs
array_push($FSA_shortcode_info['Layout']['shortcode_data'],
	array(
		'shortcode_name'=>'column_one_half / column_one_half_last',
		'shortcode_title'=>'Halfs',
		'description'=>'Shortcode for column_one_half',
		'is_column' => null,
		'is_block_level' => null,
		'shortcode_icon'=>'udthemes_sc_layout-halfcols',
		'contents' => array(
			array('Left','column_one_half'),
			array('Right','column_one_half_last') )
	));

// Thirds
array_push($FSA_shortcode_info['Layout']['shortcode_data'],
	array(
		'shortcode_name'=>'column_one_third / column_one_third_last',
		'shortcode_title'=>'Thirds',
		'description'=>'Shortcode for 1 / 3 columns',
		'is_column' => null,
		'is_block_level' => null,
		'shortcode_icon'=>'udthemes_sc_layout-thirdcols',
		'contents' => array(
			array('Left','column_one_third'),
			array('Center','column_one_third'),
			array('Right','column_one_third_last') )
	));

// Fourths
array_push($FSA_shortcode_info['Layout']['shortcode_data'],
	array(
		'shortcode_name'=>'column_one_fourth / column_one_fourth_last',
		'shortcode_title'=>'Fourths',
		'description'=>'Shortcode for 1 / 4th columns',
		'is_column' => null,
		'is_block_level' => null,
		'shortcode_icon'=>'udthemes_sc_layout-fourthcols',
		'contents' => array(
			array('1st','column_one_fourth'),
			array('2nd','column_one_fourth'),
			array('3rd','column_one_fourth'),
			array('Last','column_one_fourth_last') )
	));

// One Third - Two Thirds
array_push($FSA_shortcode_info['Layout']['shortcode_data'],
	array(
		'shortcode_name'=>'column_one_third / column_two_thirds_last',
		'shortcode_title'=>'One Third - Two Thirds',
		'description'=>'Shortcode for Right 2/3',
		'is_column' => null,
		'is_block_level' => null,
		'shortcode_icon'=>'udthemes_sc_layout-twothirdcols-right',
		'contents' => array(
			array('Left 1/3','column_one_third'),
			array('Right 2/3','column_two_thirds_last') )
	));

// Two Thirds - One Third
array_push($FSA_shortcode_info['Layout']['shortcode_data'],
	array(
		'shortcode_name'=>'column_two_thirds / column_one_third_last',
		'shortcode_title'=>'Two Thirds - One Third',
		'description'=>'Shortcode for Left 2/3',
		'is_column' => null,
		'is_block_level' => null,
		'shortcode_icon'=>'udthemes_sc_layout-twothirdcols-left',
		'contents' => array(
			array('Left 2/3','column_two_thirds'),
			array('Right 1/3','column_one_third_last') )
	));

// One Fourth - Three Fourths
array_push($FSA_shortcode_info['Layout']['shortcode_data'],
	array(
		'shortcode_name'=>'column_one_fourth / column_three_fourths_last',
		'shortcode_title'=>'One Fourth - Three Fourths',
		'description'=>'Shortcode for Right 3/4',
		'is_column' => null,
		'is_block_level' => null,
		'shortcode_icon'=>'udthemes_sc_layout-threefourths-right',
		'contents' => array(
			array('Left 1/4','column_one_fourth'),
			array('Right 3/4','column_three_fourths_last') )
	));

// Three Fourths - One Fourth
array_push($FSA_shortcode_info['Layout']['shortcode_data'],
	array(
		'shortcode_name'=>'column_three_fourths / column_one_fourth_last',
		'shortcode_title'=>'Three Fourths - One Fourth',
		'description'=>'Shortcode for Left 1/4',
		'is_column' => null,
		'is_block_level' => null,
		'shortcode_icon'=>'udthemes_sc_layout-threefourths-left',
		'contents' => array(
			array('Left 3/4','column_three_fourths'),
			array('Right 1/4','column_one_fourth_last') )
	));

// Clear
array_push($FSA_shortcode_info['Layout']['shortcode_data'],
	array(
		'shortcode_name'=>'clear',
		'shortcode_title'=>'Clear',
		'description'=>'Clear',
		'is_block_level' => null,
		'shortcode_icon'=>'udthemes_sc_markup',
		'attributes' => array (
			'clear'=> array('both','left','right'),
			'float'=> array('none','left','right')
		)
	));


// GROUP: Content Styling

// Blockquote
array_push($FSA_shortcode_info['Content Styling']['shortcode_data'],
	array(
		'shortcode_name'=>'blockquote',
		'shortcode_title'=>'Blockquote',
		'description'=>'Blockquote',
		'is_block_level' => null,
		'shortcode_icon'=>'udthemes_sc_styling-blockquote',
		'attributes' => array (
			'blockquote_style'=> array('default','quote'),
			'align'=> array('left','right','none'),
			'text_align' => array('left','right','center','justify'),
			'cite' => '',
			'style'=>''
			),
		'contents' => 'Blockquote Text'
	));

// Divider
array_push($FSA_shortcode_info['Content Styling']['shortcode_data'],
	array(
		'shortcode_name'=>'divider',
		'shortcode_title'=>'Divider',
		'is_block_level' => null,
		'description'=>'Shortcode for Divider style link',
		'shortcode_icon'=>'udthemes_sc_content-styling-divider',
		'attributes' => array (
				'margin_top'=>'0px',
				'margin_bottom'=>'30px',
				'style'=>''
			)
	));

// Drop cap
array_push($FSA_shortcode_info['Content Styling']['shortcode_data'],
	array(
		'shortcode_name'=>'drop_cap',
		'shortcode_title'=>'Drop Cap',
		'description'=>'Shortcode for Drop Cap',
		'shortcode_icon'=>'udthemes_sc_styling-dropcap',
		'attributes' => array (
				'style'=>''
			),
		'contents' => 'Drop Cap Letter'
	));

// Highlight
array_push($FSA_shortcode_info['Content Styling']['shortcode_data'],
	array(
		'shortcode_name'=>'highlight',
		'shortcode_title'=>'Highlight',
		'description'=>'Shortcode for highlight',
		'shortcode_icon'=>'udthemes_sc_styling-highlight',
		'attributes' => array (
				'highlight_type'=>array('bold','italic','mark'),
				'color'=>'',
				'style'=>''
			),
		'contents' => 'Highlight Text'
	));

// List
array_push($FSA_shortcode_info['Content Styling']['shortcode_data'],
	array(
		'shortcode_name'=>'list',
		'shortcode_title'=>'List',
		'is_block_level' => null,
		'description'=>'List <br><strong>Note:</strong> Enter the entire markup for a list. E.g. <br> &lt;ul&gt; <br> &lt;li&gt;List item 1&lt;/li&gt; <br> &lt;li&gt;List item 2&lt;/li&gt; <br> &lt;/ul&gt;',
		'shortcode_icon'=>'udthemes_sc_styling-list',
		'attributes' => array (
				'list_style'=>array('darkGrayDot','darkGrayArrow1','darkGrayArrow2','darkGrayTick','darkGrayPlus','darkGrayDash','grayDot','grayArrow1','grayArrow2','grayTick','grayPlus','grayDash','orangeDot','orangeArrow1','orangeArrow2','orangeTick','orangePlus','orangeDash','turquoiseDot','turquoiseArrow1','turquoiseArrow2','turquoiseTick','turquoisePlus','turquoiseDash','whiteDot','whiteArrow1','whiteArrow2','whiteTick','whitePlus','whiteDash','yellowDot','yellowArrow1','yellowArrow2','yellowTick','yellowPlus','yellowDash'),
				'style'=>''
			),
		'contents' => 'List in HTML (ul)'
	));

// Pre
array_push($FSA_shortcode_info['Content Styling']['shortcode_data'],
	array(
		'shortcode_name'=>'pre',
		'shortcode_title'=>'Pre',
		'description'=>'Pre',
		'shortcode_icon'=>'udthemes_sc_markup',
		'attributes' => array (
				'style'=>''
			),
		'contents' => 'Text'
	));

// Span
array_push($FSA_shortcode_info['Content Styling']['shortcode_data'],
	array(
		'shortcode_name'=>'span',
		'shortcode_title'=>'Span',
		'description'=>'Span',
		'shortcode_icon'=>'udthemes_sc_markup',
		'attributes' => array (
				'class'=>'',
				'style'=>''
			),
		'contents' => 'Text'
	));


// GROUP: Media

// Image
array_push($FSA_shortcode_info['Media']['shortcode_data'],
	array(
		'shortcode_name'=>'image',
		'shortcode_title'=>'Image',
		'description'=>'Image',
		'shortcode_icon'=>'udthemes_sc_media-image',
		'attributes' => array (
				'url'=>'',
				'width'=>'100%',
				'height'=>'auto',
				'align' => array('left','right'),
				'link' => '',
				'link_title' => '',
				'overlay' => array('true','false'),
				'style' => ''
			)
	));

// Lightbox
array_push($FSA_shortcode_info['Media']['shortcode_data'],
	array(
		'shortcode_name'=>'lightbox',
		'shortcode_title'=>'Lightbox',
		'description'=>'Lightbox',
		'is_block_level' => null,
		'shortcode_icon'=>'udthemes_sc_media-lightbox',
		'attributes' => array (
				'media_type' => array('image','iframe'),
				'thumbnail_url' => '',
				'url'=>'',
				'link_title' => '',
				'width'=>'100%',
				'height'=>'auto',
				'align' => array('left','right'),
				'overlay' => array('true','false'),
				'style' => ''
			),
		'contents' => 'Caption (applicable to images only)'
	));
	
// Round Thumb
array_push($FSA_shortcode_info['Media']['shortcode_data'],
	array(
		'shortcode_name'=>'round_thumb',
		'shortcode_title'=>'Round Thumb',
		'description'=>'Round Thumb',
		'is_block_level' => null,
		'shortcode_icon'=>'udthemes_sc_media-roundthumb',
		'attributes' => array (
				'url'=>'',
				'width'=>'250px',
				'link' => '',
				'link_title' => '',
				'align' => array('left','right','aligncenter'),
				'lightbox' => array('false','image','iframe'),
				'style' => ''
			),
		'contents' => 'Caption'
	));

// Slider
array_push($FSA_shortcode_info['Media']['shortcode_data'],
	array(
		'shortcode_name'=>'slider',
		'shortcode_title'=>'Slider',
		'is_block_level' => null,
		'description'=>'Shortcode for Slider.<br>Please make sure to set the id attribute - which needs to be set to the post ID of the Shortcode Slider you want to call. You can read more about this in the documentation.',
		'shortcode_icon'=>'udthemes_sc_media-slider',
		'attributes' => array (
				'id' => '',
				'size' => array('thumbnail','blog-width','page-width','full-width','full-size'),
				'style' => ''
			)
	));

// Video
array_push($FSA_shortcode_info['Media']['shortcode_data'],
	array(
		'shortcode_name'=>'video',
		'shortcode_title'=>'Video',
		'is_block_level' => null,
		'description'=>'Video <br><strong>NOTE:</strong> For YouTube and Vimeo, enter ONLY the video/clip ID in the URL field.',
		'shortcode_icon'=>'udthemes_sc_media-video',
		'attributes' => array (
				'type'=> array('youtube','vimeo'),
				'url'=>'',
				'width'=>'100%',
				'height'=>'auto',
				'player_id'=>'player1',
				'style'=>''
			)
	));


// GROUP: UI

// Accordion
array_push($FSA_shortcode_info['UI']['shortcode_data'],
	array(
		'shortcode_name'=>'accordion',
		'shortcode_title'=>'Accordion',
		'description'=>'Accordion. Please add accordion_label shortcode for each accordion item into the textarea below. <br />Example: \[accordion_label\]Panel 1\[\/accordion_label\]\[accordion_content\]Content of first panel.\[\/accordion_content\]<br />If you would like to insert the child shortcode into the text area below, please click <a onclick=\\\'jQuery("#moduleSection_accordion textarea").val(jQuery("#moduleSection_accordion textarea").val()+"[accordion_label]Panel label[/accordion_label][accordion_content]Content of panel[/accordion_content]\\\n");\\\' href=\\\'javascript:void(0);\\\'>here.</a>',
		'shortcode_icon'=>'udthemes_sc_ui-accordions',
		'contents' => 'Accordion Child Shortcodes'
	));

// Button
array_push($FSA_shortcode_info['UI']['shortcode_data'],
	array(
		'shortcode_name'=>'button',
		'shortcode_title'=>'Button',
		'description'=>'Button',
		'shortcode_icon'=>'udthemes_sc_ui-buttons',
		'attributes' => array (
				'url'=>'',
				'title'=>'',
				'size'=>array('medium','small','large'),
				'color'=>array('theme','gray','white','turquoise','yellow','orange'),
				'new_window'=> array('false','true'),
				'style'=>''
			),
		'contents' => 'Button Label'
	));
	
// Chart
array_push($FSA_shortcode_info['UI']['shortcode_data'],
	array(
		'shortcode_name'=>'chart',
		'shortcode_title'=>'Chart',
		'is_block_level' => null,
		'description'=>'Chart. E.g. for data attribute: Design:45%;Photography:35%;Videography:20%;',
		'shortcode_icon'=>'udthemes_sc_ui-chart',
		'attributes' => array (
				'data'=>'',
				'style'=>''
			)
	));

// Message Box
array_push($FSA_shortcode_info['UI']['shortcode_data'],
	array(
		'shortcode_name'=>'message_box',
		'shortcode_title'=>'Message Box',
		'is_block_level' => null,
		'description'=>'Message Box Shortcode',
		'shortcode_icon'=>'udthemes_sc_media-lightbox',
		'attributes' => array (
				'style'=>''
			),
		'contents' => 'Message Box Text'
	));

// pricing table
array_push($FSA_shortcode_info['UI']['shortcode_data'],
	array(
		'shortcode_name'=>'pricing_table',
		'shortcode_title'=>'Pricing Table',
		'is_block_level' => null,
		'description'=>'To create a table please add a the table column shortcode for columns and unordered lists for table rows. To insert a table shortcode into the textarea below please click here.<br />If you would like to insert the child shortcode into the text area below, please click <a onclick=\\\'jQuery("#moduleSection_pricing_table textarea").val(jQuery("#moduleSection_pricing_table textarea").val()+"[pricing_table_column]<ul><li>Table Row</li></ul>[\/pricing_table_column]\\\n");\\\' href="javascript:void(0);">here.</a>',
		'shortcode_icon'=>'udthemes_sc_ui-table',
		'attributes' => array (
				'columns'=>'',
				'style'=>''
			),
		'contents' => 'Table Rows'
	));

// Tabs
array_push($FSA_shortcode_info['UI']['shortcode_data'],
	array(
		'shortcode_name'=>'tabs',
		'is_block_level' => null,
		'shortcode_title'=>'Tabs',
		'description'=>'Tabs. Please add tabs shortcode for each tab item into the textarea below. As for the labels attributes, make sure that you enter the labels delimitted by comma (,).<br />Example: [tab label_ref=\"1\"]Some cool content for the first tab.[\/tab]<br />If you would like to insert the child shortcode into the text area below, please click <a onclick=\\\'jQuery("#moduleSection_tabs textarea").val(jQuery("#moduleSection_tabs textarea").val()+"[tab label_ref=\\\"\\\"]tab content[\/tab]\\\n");\\\' href="javascript:void(0);">here.</a>',
		'attributes' => array (
				'labels'=>''),
		'shortcode_icon'=>'udthemes_sc_ui-tabs',
		'contents' => 'Tab Child Shortcodes'
	));

// GROUP: Social Media

// Social Links
array_push($FSA_shortcode_info['Social Media']['shortcode_data'],
	array(
		'shortcode_name'=>'social_links',
		'shortcode_title'=>'Social Links',
		'description'=>'Social Links',
		'is_block_level' => null,
		'shortcode_icon'=>'udthemes_sc_social-sociallinks',
		'attributes' => array (
				'dribbble' => '',
				'facebook' => '',
				'flickr' => '',
				'forrst' => '',
				'googleplus' => '',
				'linkedin' => '',
				'myspace' => '',
				'pinterest' => '',
				'skype' => '',
				'twitter' => '',
				'vimeo' => '',
				'style' => ''
			)
	));

// Tweets
array_push($FSA_shortcode_info['Social Media']['shortcode_data'],
	array(
		'shortcode_name'=>'tweets',
		'shortcode_title'=>'Tweets',
		'description'=>'Tweets',
		'is_block_level' => null,
		'shortcode_icon'=>'udthemes_sc_social-twitter',
		'attributes' => array (
				'username'=>'',
				'count'=>'3',
				'loading_text'=>'Loading tweets...',
				'id'=>'',
				'style'=>''
			)
	));


// GROUP: Social Media

// Map
array_push($FSA_shortcode_info['Map']['shortcode_data'],
	array(
		'shortcode_name'=>'map',
		'shortcode_title'=>'Google Maps',
		'description'=>'Google Maps',
		'is_block_level' => null,
		'shortcode_icon'=>'udthemes_sc_map-icon',
		'attributes' => array (
				'id'=>'map_canvas',
				'lat' => '',
				'long' => '',
				'zoom' => '',
				'marker' => array('default','custom'),
				'info_title' => '',
				'info_content' => '',
				'width' => '100%',
				'height' => '300px',
				'style'=>''
			)
	));

