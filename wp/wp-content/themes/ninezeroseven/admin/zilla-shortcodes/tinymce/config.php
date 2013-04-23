<?php

/*-----------------------------------------------------------------------------------*/
/*	Button Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['title_bar'] = array(
	'no_preview' => true,
	'params' => array(
		'sub_heading' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Sub Heading', 'textdomain'),
			'desc' => __('Add Sub Heading', 'textdomain')
		),
		'heading' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Heading', 'textdomain'),
			'desc' => __('Add Heading', 'textdomain')
		)
		
	),
	'shortcode' => '[title_bar sub_heading="{{sub_heading}}" heading="{{heading}}"]',
	'popup_title' => __('Insert Title Bar', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Link
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['excerpt_link'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Display Text', 'textdomain'),
			'desc' => __('Add Text to Display.', 'textdomain')
		),
		'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('URL', 'textdomain'),
			'desc' => __('Add URL here.', 'textdomain')
		)
		
	),
	'shortcode' => '[link title="{{title}}"] {{url}} [/link]',
	'popup_title' => __('Insert link shortcode.', 'textdomain')
);

/************************************************************************
* MEMEBER INFO
*************************************************************************/

$zilla_shortcodes['member_bar'] = array(
	'no_preview' => true,
	'params' => array(
		'firstname' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('First Name', 'textdomain'),
			'desc' => __('And team members first name here.', 'textdomain')
		),
		'lastname' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Last Name', 'textdomain'),
			'desc' => __('And team members last name here.', 'textdomain')
		),
		'position' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Position', 'textdomain'),
			'desc' => __('Add team members position/rank here', 'textdomain')
		),
		
	),
	'shortcode' => '[member_info position="{{position}}" firstname="{{firstname}}" lastname="{{lastname}}"]',
	'popup_title' => __('Insert Member Bar', 'textdomain')
);

/************************************************************************
* Contact INFO
*************************************************************************/

$zilla_shortcodes['contact_info'] = array(
	'no_preview' => true,
	'params' => array(
		'name' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Name', 'textdomain'),
			'desc' => __('You can add name here.', 'textdomain')
		),
		'phone' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Phone', 'textdomain'),
			'desc' => __('Phone number can go here', 'textdomain')
		),
		'address' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Address', 'textdomain'),
			'desc' => __('Enter your address here', 'textdomain')
		),
		'email' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Email', 'textdomain'),
			'desc' => __('Email address here ie: you@yourmail.com', 'textdomain')
		),
		
	),
	'shortcode' => '[contact_info name="{{name}}" phone="{{phone}}" address="{{address}}" email="{{email}}"]',
	'popup_title' => __('Insert Contact Info', 'textdomain')
);


/************************************************************************
* Contact Form
*************************************************************************/

$zilla_shortcodes['nzs_contact'] = array(
	'no_preview' => true,
	'params' => array(
		'name_label' => array(
			'std' => 'Name',
			'type' => 'text',
			'label' => __('Name Label', 'textdomain'),
			'desc' => ''
		),
		'email_label' => array(
			'std' => 'Email',
			'type' => 'text',
			'label' => __('Email Label', 'textdomain'),
			'desc' => ''
		),
		'message_label' => array(
			'std' => 'Message',
			'type' => 'text',
			'label' => __('Message Label', 'textdomain'),
			'desc' => ''
		),
		'btn_label' => array(
			'std' => 'Send',
			'type' => 'text',
			'label' => __('Button Label', 'textdomain'),
			'desc' => ''
		),
		
	),
	'shortcode' => '[nzs_contact_form name_label="{{name_label}}" email_label="{{email_label}}" message_label="{{message_label}}" btn_label="{{btn_label}}"]',
	'popup_title' => __('Insert Contact Form', 'textdomain')
);

/************************************************************************
* Padding Box
*************************************************************************/

$zilla_shortcodes['padding_box'] = array(
	'no_preview' => true,
	'params' => array(
		'top' => array(
			'std' => '0',
			'type' => 'text',
			'label' => __('Top Padding', 'textdomain'),
			'desc' => __('Add a number for top padding.', 'textdomain')
		),
		'right' => array(
			'std' => '0',
			'type' => 'text',
			'label' => __('Right Padding', 'textdomain'),
			'desc' => __('Add a number for right padding.', 'textdomain')
		),
		'bottom' => array(
			'std' => '0',
			'type' => 'text',
			'label' => __('Bottom Padding', 'textdomain'),
			'desc' => __('Add a number for bottom padding.', 'textdomain')
		),
		'left' => array(
			'std' => '0',
			'type' => 'text',
			'label' => __('Left Padding', 'textdomain'),
			'desc' => __('Add a number for left padding.', 'textdomain')
		),
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Content', 'textdomain'),
			'desc' => __('Add content here.', 'textdomain')
		)
		
	),
	'shortcode' => '[padding_box top="{{top}}" right="{{right}}" bottom="{{bottom}}" left="{{left}}"] {{content}} [/padding_box]',
	'popup_title' => __('Insert Padding Box', 'textdomain')
);


/************************************************************************
* Sercice
*************************************************************************/

$zilla_shortcodes['service'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Heading', 'textdomain'),
			'desc' => __('Enter a heading here.', 'textdomain')
		),
		'icon_url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Icon Image', 'textdomain'),
			'desc' => __('Enter Image URL for icon/image.', 'textdomain')
		),
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Description', 'textdomain'),
			'desc' => __('Add a description here.', 'textdomain')
		)
		
	),
	'shortcode' => '[nzs_service title="{{title}}" icon_url="{{icon_url}}"] {{content}} [/nzs_service]',
	'popup_title' => __('Insert Service', 'textdomain')
);

/************************************************************************
* Heading
*************************************************************************/
$zilla_shortcodes['heading'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Heading', 'textdomain'),
			'desc' => __('Enter a heading here.', 'textdomain')
		),
		'headings' => array(
		'type' => 'select',
		'label' => __('Heading  Tag', 'textdomain'),
		'desc' => __('Select a heading tag.', 'textdomain'),
		'options' => array(
				'1'=> 'H1',
				'2'=> 'H2',
				'3'=> 'H3',
				'4'=> 'H4',
				'5'=> 'H5',
				'6'=> 'H6',
			)
		
		)
	),
	'shortcode' => '[nzs_heading heading="{{headings}}"] {{title}} [/nzs_heading]',
	'popup_title' => __('Insert Heading', 'textdomain')
);

/************************************************************************
* Video Box
*************************************************************************/

$zilla_shortcodes['video_box'] = array(
	'no_preview' => true,
	'params' => array(
		'video_link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Video Link', 'textdomain'),
			'desc' => __('Enter Youtube or Vimeo video link above', 'textdomain')
		)
		
	),
	'shortcode' => '[video_box video_url="{{video_link}}"]',
	'popup_title' => __('Insert Video', 'textdomain')
);

/************************************************************************
* Light Box
*************************************************************************/
$zilla_shortcodes['light_box'] = array(
	'no_preview' => true,
	'params' => array(
		'thumb' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Thumb Image', 'textdomain'),
			'desc' => __('Add thumbnail src', 'textdomain')
		),
		'image' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Full Image', 'textdomain'),
			'desc' => __('Add Image src', 'textdomain')
		),
		'alt' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Alt Text', 'textdomain'),
			'desc' => __('Add alt text', 'textdomain')
		),
		'align' => array(
			'type' => 'select',
			'label' => __('Align', 'textdomain'),
			'desc' => __('Select alignment.', 'textdomain'),
			'options' => array(
				'center' => 'Center',
				'left' => 'Left',
				'right' => 'Right'
			)
		)
	),
	'shortcode' => '[lightbox thumb_img="{{thumb}}" full_img="{{image}}" alt_text="{{alt}}" align="{{align}}"]',
	'popup_title' => __('Insert Light Box Shortcode', 'textdomain')
);





/*-----------------------------------------------------------------------------------*/
/*	Button Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['button'] = array(
	'no_preview' => true,
	'params' => array(
		'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Button URL', 'textdomain'),
			'desc' => __('Add the button\'s url eg http://example.com', 'textdomain')
		),
		'style' => array(
			'type' => 'select',
			'label' => __('Button Style', 'textdomain'),
			'desc' => __('Select the button\'s style, ie the button\'s colour', 'textdomain'),
			'options' => array(
				'main-btn' => 'Default',
				'gray' => 'Grey',
				'black' => 'Black',
				'green' => 'Green',
				'brown' => 'Brown',
				'blue' => 'Blue',
				'red' => 'Red',
				'orange' => 'Orange',
				'purple' => 'Purple'
			)
		),
		'target' => array(
			'type' => 'select',
			'label' => __('Button Target', 'textdomain'),
			'desc' => __('_self = open in same window. _blank = open in new window', 'textdomain'),
			'options' => array(
				'_self' => '_self',
				'_blank' => '_blank'
			)
		),
		'content' => array(
			'std' => 'Button Text',
			'type' => 'text',
			'label' => __('Button\'s Text', 'textdomain'),
			'desc' => __('Add the button\'s text', 'textdomain'),
		)
	),
	'shortcode' => '[button url="{{url}}" color="{{style}}" target="{{target}}"] {{content}} [/button]',
	'popup_title' => __('Insert Button Shortcode', 'textdomain')


);



/*-----------------------------------------------------------------------------------*/
/*	Columns Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ', // as there is no wrapper shortcode
	'popup_title' => __('Insert Columns Shortcode', 'textdomain'),
	'no_preview' => true,
	
	// child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => __('Column Type', 'textdomain'),
				'desc' => __('Select the type, ie width of the column.', 'textdomain'),
				'options' => array(
					'one_third' => 'One Third',
					'one_third_first' => 'One Third First',
					'one_third_last' => 'One Third Last',
					'two_thirds' => 'Two Thirds',
					'two_thirds_first' => 'Two Thirds First',
					'two_thirds_last' => 'Two Thirds Last',
					'one_half' => 'One Half',
					'one_half_first' => 'One Half First',
					'one_half_last' => 'One Half Last',
					'one_fourth' => 'One Fourth',
					'one_fourth_first' => 'One Fourth First',
					'one_fourth_last' => 'One Fourth Last',
					'three_fourth' => 'Three Fourth',
					'three_fourth_first' => 'Three Fourth First',
					'three_fourth_last' => 'Three Fourth Last',
					'full' => 'Full Column',
					'full_nested' => 'Full Nested',
					
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Column Content', 'textdomain'),
				'desc' => __('Add the column content.', 'textdomain'),
			)
		),
		'shortcode' => '[{{column}}] {{content}} [/{{column}}] ',
		'clone_button' => __('Add Column', 'textdomain')
	)
);

/************************************************************************
* Slider
*************************************************************************/

$zilla_shortcodes['nzs_slider'] = array(
	'params' => array(),
	'shortcode' => '[nzs_slider] {{child_shortcode}} [/nzs_slider]', // as there is no wrapper shortcode
	'popup_title' => __('Insert Slider Shortcode', 'textdomain'),
	'no_preview' => true,
	
	// child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
			'title' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Alt Text', 'textdomain'),
				'desc' => __('You can add title text here.', 'textdomain'),
			),
			'slide_img' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Slide Image', 'textdomain'),
				'desc' => __('Add image URL for slider.', 'textdomain'),
			),
			'f_img' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Large Image', 'textdomain'),
				'desc' => __('Add large image URL (optional)', 'textdomain'),
			)
		),
		'shortcode' => '[nzs_slides title="{{title}}" full_img="{{f_img}}" slide_img="{{slide_img}}"] ',
		'clone_button' => __('Add Another Slide', 'textdomain')
	)
);

$zilla_shortcodes['nzs_price'] = array(
	'params' => array(
		'title' => array(
				'std' => 'Basic',
				'type' => 'text',
				'label' => __('Plan Name', 'textdomain'),
				'desc' => __('You can enter a first name for plan here.', 'textdomain'),
			),
		'sub_title' => array(
				'std' => 'Plan',
				'type' => 'text',
				'label' => __('Sub Name', 'textdomain'),
				'desc' => __('You can enter a last name for plan here.', 'textdomain'),
			),
		'featured' => array(
			'type' => 'select',
			'label' => __('Featured?', 'textdomain'),
			'desc' => __('Select rather this plan is featured.', 'textdomain'),
			'options' => array(
				'' => 'Not Featured',
				'best' => 'Featured'
			)
		),
		'link' => array(
				'std' => 'http://',
				'type' => 'text',
				'label' => __('Button Link', 'textdomain'),
				'desc' => __('Enter a link for button here.', 'textdomain'),
			),
		'btn_text' => array(
				'std' => 'Buy Now!',
				'type' => 'text',
				'label' => __('Button Text', 'textdomain'),
				'desc' => __('What would you like button to say?', 'textdomain'),
			),
		),
	'shortcode' => '[price_plan first_word="{{title}}" last_word="{{sub_title}}" link="{{link}}" featured="{{featured}}" btn_text="{{btn_text}}"]  {{child_shortcode}} [/price_plan]', // as there is no wrapper shortcode
	'popup_title' => __('Pricing Plan Shortcode', 'textdomain'),
	'no_preview' => true,
	
	// child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
			'content' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Plan Option', 'textdomain'),
				'desc' => __('Enter plan option info', 'textdomain'),
			)
		),
		'shortcode' => '[price_option] {{content}} [/price_option]',
		'clone_button' => __('Add Plan Option', 'textdomain'),
		
	)
);
?>
