<?php
//Version : 2013-03-09_18-11-26 Updated by farid

//support menu array
$supportMenu=array (
  0 => 
  array (
    'title' => 'Documentation',
    'url' => 'http://demo.udthemes.com/ego/wordpress/documentation/',
  ),
  1 => 
  array (
    'title' => 'Support Forum',
    'url' => 'http://support.udthemes.com',
  ),
  2 => 
  array (
    'title' => 'Video Tutorials',
    'url' => 'http://www.youtube.com/user/UDTHEMES/',
  ),
  3 => 
  array (
    'title' => 'UDTHEMES Website',
    'url' => 'http://udthemes.com',
  ),
);

// menu array
$menuArray=array (
  0 => 
  array (
    'root' => 'Welcome',
    'subnode' => 
    array (
    ),
    'icon' => 'welcome',
    'type' => 'url',
    'helptext' => 'Welcome to the Foundry Theme Options Panel. This theme panel gives you control over key aspects of your theme.',
    'defaultvalue' => 'z_usr/foundry/admin_welcome.php',
  ),
  1 => 
  array (
    'root' => 'General',
    'subnode' => 
    array (
      0 => 
      array (
        0 => 'General Settings',
        1 => 
        array (
          'settingitem' => 'Blog Title',
          'id' => 'udt_ego_blog_title',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Title that appears above the blog index &amp; posts.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Blog &lt;span&gt;Title&lt;/span&gt;&lt;small&gt;And &lt;span&gt;Some&lt;/span&gt; Other &lt;span&gt;Info&lt;/span&gt; Here&lt;/small&gt;',
        ),
        2 => 
        array (
          'settingitem' => 'Portfolio Title',
          'id' => 'udt_ego_portfolio_title',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Title that appears above the portfolio pages.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Portfolio &lt;span&gt;Title&lt;/span&gt;&lt;small&gt;And &lt;span&gt;Some&lt;/span&gt; Other &lt;span&gt;Info&lt;/span&gt; Here&lt;/small&gt;',
        ),
        3 => 
        array (
          'settingitem' => 'Page Scroll Duration',
          'id' => 'udt_ego_page_scroll_duration',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'For scrolling on the homepage/onepage. A lower value results in faster scrolling.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;200&quot;, &quot;label&quot;:&quot;200 ms&quot; }, { &quot;value&quot;:&quot;400&quot;, &quot;label&quot;:&quot;400 ms&quot; }, { &quot;value&quot;:&quot;600&quot;, &quot;label&quot;:&quot;600 ms&quot; }, { &quot;value&quot;:&quot;800&quot;, &quot;label&quot;:&quot;800 ms&quot; }, { &quot;value&quot;:&quot;1000&quot;, &quot;label&quot;:&quot;1000 ms&quot; } ], &quot;default&quot;:&quot;600&quot; }',
        ),
      ),
      1 => 
      array (
        0 => 'Contact Form',
        1 => 
        array (
          'settingitem' => 'Title',
          'id' => 'udt_ego_contact_form_title',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'The title to display above the contact form.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Send us a message',
        ),
        2 => 
        array (
          'settingitem' => 'Message',
          'id' => 'udt_ego_contact_form_message',
          'type' => 'textarea',
          'icon' => '',
          'helptext' => 'Some content to display above the contact form.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Send us an e-mail and we will get back to you in 24 hours.',
        ),
        3 => 
        array (
          'settingitem' => 'Required Fields',
          'id' => 'udt_ego_contact_form_required_fields_label',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Message to display that * indicates a required field.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '* = required field',
        ),
        4 => 
        array (
          'settingitem' => 'Required Fields on Focus',
          'id' => 'udt_ego_contact_form_required_fields_label_ajax',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Message to display when a required field is in focus.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'This is a required field.',
        ),
        5 => 
        array (
          'settingitem' => 'Success Message',
          'id' => 'udt_ego_contact_form_success_message',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'The message to display when the contact form has successfully been submitted.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Thanks, we got your mail and will get back to you in 24h!',
        ),
        6 => 
        array (
          'settingitem' => 'Invalid E-mail Message',
          'id' => 'udt_ego_contact_form_email_warning',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'The message to display when the contact form is submitted with an invalid e-mail address.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Please enter a valid e-mail address and try again.',
        ),
        7 => 
        array (
          'settingitem' => 'Warning Message',
          'id' => 'udt_ego_contact_form_warning',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'The message to display when the contact form is submitted with errors.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Please verify fields and try again.',
        ),
        8 => 
        array (
          'settingitem' => 'Error Message',
          'id' => 'udt_ego_contact_form_error',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'The message to display when the contact form is submitted but something technical went wrong.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'There was an error sending your email. Please try again later.',
        ),
        9 => 
        array (
          'settingitem' => 'Loading GIF (Odd Sections)',
          'id' => 'udt_ego_contact_loading_gif_odd',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a loading GIF animation for contact forms in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'contact_loading_gif_odd.gif',
        ),
        10 => 
        array (
          'settingitem' => 'Loading GIF (Even Sections)',
          'id' => 'udt_ego_contact_loading_gif_even',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a loading GIF animation for contact forms in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'contact_loading_gif_even.gif',
        ),
      ),
      2 => 
      array (
        0 => 'Social Networks',
        1 => 
        array (
          'settingitem' => 'Social Network 1 ( Footer Link )',
          'id' => 'udt_ego_sns_network_1',
          'type' => 'group',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => 'Set Social Network 1',
        ),
        2 => 
        array (
          'settingitem' => 'Type',
          'id' => 'udt_ego_sns_type_1',
          'type' => 'select',
          'icon' => '',
          'helptext' => 'Select network',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Select Network,Dribbble,Facebook,Flickr,Forrst,Google+,LinkedIn,Myspace,Skype,Twitter,Vimeo,RSS',
        ),
        3 => 
        array (
          'settingitem' => 'Url',
          'id' => 'udt_ego_sns_url_1',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter your social network link.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
        4 => 
        array (
          'settingitem' => 'Social Network 2 ( Footer Link )',
          'id' => 'udt_ego_sns_network_2',
          'type' => 'group',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => 'Set Social Network 2',
        ),
        5 => 
        array (
          'settingitem' => 'Type',
          'id' => 'udt_ego_sns_type_2',
          'type' => 'select',
          'icon' => '',
          'helptext' => 'Select network',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Select Network,Dribbble,Facebook,Flickr,Forrst,Google+,LinkedIn,Myspace,Skype,Twitter,Vimeo,RSS',
        ),
        6 => 
        array (
          'settingitem' => 'Url',
          'id' => 'udt_ego_sns_url_2',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter your social network link.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
        7 => 
        array (
          'settingitem' => 'Social Network 3 ( Footer Link )',
          'id' => 'udt_ego_sns_network_3',
          'type' => 'group',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => 'Set Social Network 3',
        ),
        8 => 
        array (
          'settingitem' => 'Type',
          'id' => 'udt_ego_sns_type_3',
          'type' => 'select',
          'icon' => '',
          'helptext' => 'Select network',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Select Network,Dribbble,Facebook,Flickr,Forrst,Google+,LinkedIn,Myspace,Skype,Twitter,Vimeo,RSS',
        ),
        9 => 
        array (
          'settingitem' => 'Url',
          'id' => 'udt_ego_sns_url_3',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter your social network link.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
        10 => 
        array (
          'settingitem' => 'Social Network 4 ( Footer Link )',
          'id' => 'udt_ego_sns_network_4',
          'type' => 'group',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => 'Set Social Network 4',
        ),
        11 => 
        array (
          'settingitem' => 'Type',
          'id' => 'udt_ego_sns_type_4',
          'type' => 'select',
          'icon' => '',
          'helptext' => 'Select network',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Select Network,Dribbble,Facebook,Flickr,Forrst,Google+,LinkedIn,Myspace,Skype,Twitter,Vimeo,RSS',
        ),
        12 => 
        array (
          'settingitem' => 'Url',
          'id' => 'udt_ego_sns_url_4',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter your social network link.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
        13 => 
        array (
          'settingitem' => 'Social Network 5 ( Footer Link )',
          'id' => 'udt_ego_sns_network_5',
          'type' => 'group',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => 'Set Social Network 5',
        ),
        14 => 
        array (
          'settingitem' => 'Type',
          'id' => 'udt_ego_sns_type_5',
          'type' => 'select',
          'icon' => '',
          'helptext' => 'Select network',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Select Network,Dribbble,Facebook,Flickr,Forrst,Google+,LinkedIn,Myspace,Skype,Twitter,Vimeo,RSS',
        ),
        15 => 
        array (
          'settingitem' => 'Url',
          'id' => 'udt_ego_sns_url_5',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter your social network link.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
        16 => 
        array (
          'settingitem' => 'Social Network 6 ( Footer Link )',
          'id' => 'udt_ego_sns_network_6',
          'type' => 'group',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => 'Set Social Network 6',
        ),
        17 => 
        array (
          'settingitem' => 'Type',
          'id' => 'udt_ego_sns_type_6',
          'type' => 'select',
          'icon' => '',
          'helptext' => 'Select network',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Select Network,Dribbble,Facebook,Flickr,Forrst,Google+,LinkedIn,Myspace,Skype,Twitter,Vimeo,RSS',
        ),
        18 => 
        array (
          'settingitem' => 'Url',
          'id' => 'udt_ego_sns_url_6',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter your social network link.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
        19 => 
        array (
          'settingitem' => '',
          'id' => 'udt_ego_',
          'type' => 'group_close',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
      ),
      3 => 
      array (
        0 => 'Footer Content',
        1 => 
        array (
          'settingitem' => 'Copyright',
          'id' => 'udt_ego_footer_copyright',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Note: Use &amp;amp;copy; to get the copyright symbol.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '&amp;copy;&lt;a href=&quot;http://udthemes.com&quot; title=&quot;Premium WordPress Themes - UDTHEMES&quot;&gt;UDTHEMES&lt;/a&gt;. All Rights Reserved.',
        ),
      ),
      4 => 
      array (
        0 => 'SEO',
        1 => 
        array (
          'settingitem' => 'Google Tracking ID',
          'id' => 'udt_ego_google_tracking_id',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter your Google Analytics Tracking ID here.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
      ),
    ),
    'icon' => 'general',
    'type' => '',
    'helptext' => 'General site parameters, contact form settings, social networks, footer content and SEO.',
    'defaultvalue' => '',
  ),
  2 => 
  array (
    'root' => 'Logos',
    'subnode' => 
    array (
      0 => 
      array (
        0 => 'Logos',
        1 => 
        array (
          'settingitem' => 'Header Logo',
          'id' => 'udt_ego_site_logo',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload your main logo.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'logo.png',
        ),
        2 => 
        array (
          'settingitem' => 'Homepage Slider Logo',
          'id' => 'udt_ego_epic_slider_logo',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a logo that appears in the Homepage Slider when you select the &quot;Logo&quot; caption.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'epic_slider_logo.png',
        ),
        3 => 
        array (
          'settingitem' => 'Footer Logo',
          'id' => 'udt_ego_footer_logo',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a logo for the footer.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'footer_logo.png',
        ),
        4 => 
        array (
          'settingitem' => 'Lightbox Loading Logo',
          'id' => 'udt_ego_lightbox_logo',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a logo that appears while lighbox is loading an image.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'lightbox_logo.png',
        ),
        5 => 
        array (
          'settingitem' => 'Favicon',
          'id' => 'udt_ego_favicon',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Add a custom favicon.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'favicon.png',
        ),
      ),
    ),
    'icon' => 'logos',
    'type' => '',
    'helptext' => 'Upload your logos.',
    'defaultvalue' => '',
  ),
  3 => 
  array (
    'root' => 'Colors',
    'subnode' => 
    array (
      0 => 
      array (
        0 => 'Global',
        1 => 
        array (
          'settingitem' => 'Header Background Color',
          'id' => 'udt_ego_header_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for the header.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '000000',
        ),
        2 => 
        array (
          'settingitem' => 'Header Background Opacity',
          'id' => 'udt_ego_header_background_opacity',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the opacity for the header.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0.1&quot;, &quot;label&quot;:&quot;10%&quot; }, { &quot;value&quot;:&quot;0.2&quot;, &quot;label&quot;:&quot;20%&quot; }, { &quot;value&quot;:&quot;0.3&quot;, &quot;label&quot;:&quot;30%&quot; }, { &quot;value&quot;:&quot;0.4&quot;, &quot;label&quot;:&quot;40%&quot; }, { &quot;value&quot;:&quot;0.5&quot;, &quot;label&quot;:&quot;50%&quot; }, { &quot;value&quot;:&quot;0.6&quot;, &quot;label&quot;:&quot;60%&quot; }, { &quot;value&quot;:&quot;0.7&quot;, &quot;label&quot;:&quot;70%&quot; }, { &quot;value&quot;:&quot;0.8&quot;, &quot;label&quot;:&quot;80%&quot; }, { &quot;value&quot;:&quot;0.9&quot;, &quot;label&quot;:&quot;90%&quot; }, { &quot;value&quot;:&quot;1&quot;, &quot;label&quot;:&quot;100%&quot; } ], &quot;default&quot;:&quot;0.5&quot; }',
        ),
        3 => 
        array (
          'settingitem' => 'Menu Link Color',
          'id' => 'udt_ego_menu_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for the main navigation links.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'cccccc',
        ),
        4 => 
        array (
          'settingitem' => 'Menu Link Hover Color',
          'id' => 'udt_ego_menu_link_hover_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover color for the main navigation links.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff2778',
        ),
        5 => 
        array (
          'settingitem' => 'Active Menu Background Color',
          'id' => 'udt_ego_active_menu_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for the active link in the main navigation.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '333333',
        ),
        6 => 
        array (
          'settingitem' => 'Active Menu Link Color',
          'id' => 'udt_ego_active_menu_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for the active link in the main navigation.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'eeeeee',
        ),
        7 => 
        array (
          'settingitem' => 'Thumb Rollover Color',
          'id' => 'udt_ego_thumb_rollover_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the rollover color for lightbox thumbs and linked images.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff005a',
        ),
        8 => 
        array (
          'settingitem' => 'Vimeo Controls Color',
          'id' => 'udt_ego_vimeo_controls_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for the Vimeo player controls.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff005a',
        ),
        9 => 
        array (
          'settingitem' => 'Default Button Background Color',
          'id' => 'udt_ego_default_button_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the default background color for buttons.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff005a',
        ),
        10 => 
        array (
          'settingitem' => 'Default Button Text Color',
          'id' => 'udt_ego_default_button_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the default font color for buttons.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        11 => 
        array (
          'settingitem' => 'Footer Background Color',
          'id' => 'udt_ego_footer_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for the footer.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '353535',
        ),
        12 => 
        array (
          'settingitem' => 'Footer Background Pattern',
          'id' => 'udt_ego_footer_background_pattern',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a pattern for the footer.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'footer_pattern.png',
        ),
        13 => 
        array (
          'settingitem' => 'Footer Text Color',
          'id' => 'udt_ego_footer_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for the content in the footer.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        14 => 
        array (
          'settingitem' => 'Footer Link Color',
          'id' => 'udt_ego_footer_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for links in the footer.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff005a',
        ),
        15 => 
        array (
          'settingitem' => 'Footer Link Hover Color',
          'id' => 'udt_ego_footer_link_hover_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover color for links in the footer.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff005a',
        ),
      ),
      1 => 
      array (
        0 => 'Odd',
        1 => 
        array (
          'settingitem' => 'Odd Sections &amp; Inner Pages',
          'id' => 'udt_ego_odd_colors_note',
          'type' => 'html',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => '&lt;p&gt;The color settings below apply to odd sections of the onepage and all inner pages.&lt;/p&gt;&lt;p&gt;Colors for even sections of the onepage are set under the &quot;Even&quot; tab.&lt;/p&gt;',
        ),
        2 => 
        array (
          'settingitem' => 'Section Background Color',
          'id' => 'udt_ego_section_background_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f4f4f5',
        ),
        3 => 
        array (
          'settingitem' => 'Use Section Background Pattern',
          'id' => 'udt_ego_use_section_background_patter_odd',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => 'Whether to use a background pattern or not.',
          'showsettinghelp' => 'Hide',
          'showtooltip' => false,
          'defaultvalue' => '1',
        ),
        4 => 
        array (
          'settingitem' => 'Section Background Pattern',
          'id' => 'udt_ego_section_background_pattern_odd',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'If &quot;Use Section Background Pattern&quot; above is turned on, upload a background pattern for &quot;odd&quot; sections here.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'section_background_pattern_odd.png',
        ),
        5 => 
        array (
          'settingitem' => 'Divider Color',
          'id' => 'udt_ego_divider_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for dividers.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        6 => 
        array (
          'settingitem' => 'Title Color',
          'id' => 'udt_ego_title_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for titles in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '333333',
        ),
        7 => 
        array (
          'settingitem' => 'Title Color Variation',
          'id' => 'udt_ego_title_color_variation_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the variation color for titles in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '666666',
        ),
        8 => 
        array (
          'settingitem' => 'Text Color',
          'id' => 'udt_ego_text_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for text in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '888888',
        ),
        9 => 
        array (
          'settingitem' => 'Link Color',
          'id' => 'udt_ego_link_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for links in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff005a',
        ),
        10 => 
        array (
          'settingitem' => 'Link Hover Color',
          'id' => 'udt_ego_link_hover_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover color for links in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff005a',
        ),
        11 => 
        array (
          'settingitem' => 'Default Blockquote Border Color',
          'id' => 'udt_ego_default_blockquote_border_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color of the border of default blockquotes in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        12 => 
        array (
          'settingitem' => '&quot;Quote&quot; Blockquote Graphic',
          'id' => 'udt_ego_quote_blockquote_graphic_odd',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a graphic for &quot;Quote&quot; blockquotes in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'quote_blockquote_odd.png',
        ),
        13 => 
        array (
          'settingitem' => 'Form Input Background Color',
          'id' => 'udt_ego_form_input_background_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for form input fields in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        14 => 
        array (
          'settingitem' => 'Form Input Border Color',
          'id' => 'udt_ego_form_input_border_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the border color for form input fields in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'e6e6e6',
        ),
        15 => 
        array (
          'settingitem' => 'Form Input Text Color',
          'id' => 'udt_ego_form_input_text_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for form input fields in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        16 => 
        array (
          'settingitem' => 'Form Input Background Hover Color',
          'id' => 'udt_ego_form_input_background_hover_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background hover color for form input fields in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f9f9f9',
        ),
        17 => 
        array (
          'settingitem' => 'Form Input Border Hover Color',
          'id' => 'udt_ego_form_input_border_hover_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the border hover color for form input fields in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        18 => 
        array (
          'settingitem' => 'Form Input Text Hover Color',
          'id' => 'udt_ego_form_input_text_hover_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font hover color for form input fields in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '888888',
        ),
        19 => 
        array (
          'settingitem' => 'Form Input Background Active Color',
          'id' => 'udt_ego_form_input_background_active_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for active form input fields in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        20 => 
        array (
          'settingitem' => 'Form Input Border Active Color',
          'id' => 'udt_ego_form_input_border_active_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the border color for active form input fields in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        21 => 
        array (
          'settingitem' => 'Form Input Text Active Color',
          'id' => 'udt_ego_form_input_text_active_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for active form input fields in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '888888',
        ),
        22 => 
        array (
          'settingitem' => 'Form Input Required Field Graphic',
          'id' => 'udt_ego_form_input_required_field_graphic_odd',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a graphic for required fields.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'required_field_graphic_odd.png',
        ),
        23 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs Label Background Color',
          'id' => 'udt_ego_accordions_tabs_label_background_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the label background and border colors for accordions and tabs in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        24 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs Label Text Color',
          'id' => 'udt_ego_accordions_tabs_label_text_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the label font color for accordions and tabs in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        25 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs Active Label Background Color',
          'id' => 'udt_ego_accordions_tabs_active_label_background_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the active label background color for accordions and tabs in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '666666',
        ),
        26 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs Active Label Font Color',
          'id' => 'udt_ego_accordions_tabs_active_label_font_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the active label font color for accordions and tabs in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        27 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs Background Color',
          'id' => 'udt_ego_accordions_tabs_background_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for accordions and tabs in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f9f9f9',
        ),
        28 => 
        array (
          'settingitem' => 'Pricing Tables Border Color',
          'id' => 'udt_ego_pricing_tables_border_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the border color for the Pricing Tables in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        29 => 
        array (
          'settingitem' => 'Pricing Tables Header Background Color',
          'id' => 'udt_ego_pricing_tables_header_background_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for the Pricing Table Header.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '666666',
        ),
        30 => 
        array (
          'settingitem' => 'Pricing Tables Header Text Color',
          'id' => 'udt_ego_pricing_tables_header_text_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for the Pricing Table Header.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'eeeeee',
        ),
        31 => 
        array (
          'settingitem' => 'Pricing Tables Price Background Color',
          'id' => 'udt_ego_pricing_tables_price_background_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for the price cell.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f4f4f4',
        ),
        32 => 
        array (
          'settingitem' => 'Pricing Tables Price Text Color',
          'id' => 'udt_ego_pricing_tables_price_text_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for the price cell.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '666666',
        ),
        33 => 
        array (
          'settingitem' => 'Pricing Tables Background Color',
          'id' => 'udt_ego_pricing_tables_background_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for the Pricing Tables in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f9f9f9',
        ),
        34 => 
        array (
          'settingitem' => 'Pricing Tables Text Color',
          'id' => 'udt_ego_pricing_tables_text_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for pricing tables in &quot;odd&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
      ),
      2 => 
      array (
        0 => 'Even',
        1 => 
        array (
          'settingitem' => 'Even Sections',
          'id' => 'udt_ego_even_colors_note',
          'type' => 'html',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => '&lt;p&gt;If enabled, the color settings below will apply to even sections of the onepage.&lt;/p&gt;&lt;p&gt;Colors for odd sections of the onepage - and all inner pages - are set under the &quot;Odd&quot; tab.&lt;/p&gt;',
        ),
        2 => 
        array (
          'settingitem' => 'Enable Even Sections',
          'id' => 'udt_ego_enable_even_sections',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => 'Enable/Disable even sections.',
          'showsettinghelp' => 'Hide',
          'showtooltip' => false,
          'defaultvalue' => '0',
        ),
        3 => 
        array (
          'settingitem' => 'Section Background Color',
          'id' => 'udt_ego_section_background_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f4f4f5',
        ),
        4 => 
        array (
          'settingitem' => 'Use Section Background Pattern',
          'id' => 'udt_ego_use_section_background_patter_even',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => 'Whether to use a background pattern or not.',
          'showsettinghelp' => 'Hide',
          'showtooltip' => false,
          'defaultvalue' => '1',
        ),
        5 => 
        array (
          'settingitem' => 'Section Background Pattern',
          'id' => 'udt_ego_section_background_pattern_even',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'If &quot;Use Section Background Pattern&quot; above is turned on, upload a background pattern for &quot;even&quot; sections here.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'section_background_pattern_even.png',
        ),
        6 => 
        array (
          'settingitem' => 'Divider Color',
          'id' => 'udt_ego_divider_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for dividers.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        7 => 
        array (
          'settingitem' => 'Title Color',
          'id' => 'udt_ego_title_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for titles in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '333333',
        ),
        8 => 
        array (
          'settingitem' => 'Title Color Variation',
          'id' => 'udt_ego_title_color_variation_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the variation color for titles in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '666666',
        ),
        9 => 
        array (
          'settingitem' => 'Text Color',
          'id' => 'udt_ego_text_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for text in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '888888',
        ),
        10 => 
        array (
          'settingitem' => 'Link Color',
          'id' => 'udt_ego_link_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for links in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff005a',
        ),
        11 => 
        array (
          'settingitem' => 'Link Hover Color',
          'id' => 'udt_ego_link_hover_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover color for links in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff005a',
        ),
        12 => 
        array (
          'settingitem' => 'Default Blockquote Border Color',
          'id' => 'udt_ego_default_blockquote_border_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color of the border of default blockquotes in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        13 => 
        array (
          'settingitem' => '&quot;Quote&quot; Blockquote Graphic',
          'id' => 'udt_ego_quote_blockquote_graphic_even',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a graphic for &quot;Quote&quot; blockquotes in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'quote_blockquote_even.png',
        ),
        14 => 
        array (
          'settingitem' => 'Form Input Background Color',
          'id' => 'udt_ego_form_input_background_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for form input fields in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        15 => 
        array (
          'settingitem' => 'Form Input Border Color',
          'id' => 'udt_ego_form_input_border_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the border color for form input fields in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'e6e6e6',
        ),
        16 => 
        array (
          'settingitem' => 'Form Input Text Color',
          'id' => 'udt_ego_form_input_text_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for form input fields in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        17 => 
        array (
          'settingitem' => 'Form Input Background Hover Color',
          'id' => 'udt_ego_form_input_background_hover_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background hover color for form input fields in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f9f9f9',
        ),
        18 => 
        array (
          'settingitem' => 'Form Input Border Hover Color',
          'id' => 'udt_ego_form_input_border_hover_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the border hover color for form input fields in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        19 => 
        array (
          'settingitem' => 'Form Input Text Hover Color',
          'id' => 'udt_ego_form_input_text_hover_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font hover color for form input fields in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '888888',
        ),
        20 => 
        array (
          'settingitem' => 'Form Input Background Active Color',
          'id' => 'udt_ego_form_input_background_active_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for active form input fields in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        21 => 
        array (
          'settingitem' => 'Form Input Border Active Color',
          'id' => 'udt_ego_form_input_border_active_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the border color for active form input fields in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        22 => 
        array (
          'settingitem' => 'Form Input Text Active Color',
          'id' => 'udt_ego_form_input_text_active_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for active form input fields in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '888888',
        ),
        23 => 
        array (
          'settingitem' => 'Form Input Required Field Graphic',
          'id' => 'udt_ego_form_input_required_field_graphic_even',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a graphic for required fields.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'required_field_graphic_even.png',
        ),
        24 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs Label Background Color',
          'id' => 'udt_ego_accordions_tabs_label_background_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the label background and border colors for accordions and tabs in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        25 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs Label Text Color',
          'id' => 'udt_ego_accordions_tabs_label_text_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the label font color for accordions and tabs in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        26 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs Active Label Background Color',
          'id' => 'udt_ego_accordions_tabs_active_label_background_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the active label background color for accordions and tabs in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '666666',
        ),
        27 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs Active Label Font Color',
          'id' => 'udt_ego_accordions_tabs_active_label_font_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the active label font color for accordions and tabs in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        28 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs Background Color',
          'id' => 'udt_ego_accordions_tabs_background_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for accordions and tabs in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f9f9f9',
        ),
        29 => 
        array (
          'settingitem' => 'Pricing Tables Border Color',
          'id' => 'udt_ego_pricing_tables_border_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the border color for the Pricing Tables in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        30 => 
        array (
          'settingitem' => 'Pricing Tables Header Background Color',
          'id' => 'udt_ego_pricing_tables_header_background_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for the Pricing Table Header.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '666666',
        ),
        31 => 
        array (
          'settingitem' => 'Pricing Tables Header Text Color',
          'id' => 'udt_ego_pricing_tables_header_text_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for the Pricing Table Header.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'eeeeee',
        ),
        32 => 
        array (
          'settingitem' => 'Pricing Tables Price Background Color',
          'id' => 'udt_ego_pricing_tables_price_background_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for the price cell.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f4f4f4',
        ),
        33 => 
        array (
          'settingitem' => 'Pricing Tables Price Text Color',
          'id' => 'udt_ego_pricing_tables_price_text_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for the price cell.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '666666',
        ),
        34 => 
        array (
          'settingitem' => 'Pricing Tables Background Color',
          'id' => 'udt_ego_pricing_tables_background_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for the Pricing Tables in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f9f9f9',
        ),
        35 => 
        array (
          'settingitem' => 'Pricing Tables Text Color',
          'id' => 'udt_ego_pricing_tables_text_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for pricing tables in &quot;even&quot; sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
      ),
      3 => 
      array (
        0 => 'Homepage Slider',
        1 => 
        array (
          'settingitem' => 'Slider Logo Background Color',
          'id' => 'udt_ego_slider_logo_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color of the circular background for the logo in the Homepage Slider.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff2778',
        ),
        2 => 
        array (
          'settingitem' => 'Slider Theme Color',
          'id' => 'udt_ego_slider_theme_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the Homepage Slider theme color.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff005a',
        ),
        3 => 
        array (
          'settingitem' => 'Overlay Pattern',
          'id' => 'udt_ego_slider_overlay_pattern',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload an overlay pattern.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'slider_overlay_pattern.png',
        ),
      ),
      4 => 
      array (
        0 => 'Portfolio Controls',
        1 => 
        array (
          'settingitem' => 'Controls Color',
          'id' => 'udt_ego_portfolio_controls_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color of the navigation controls in the Portfolio section.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '000000',
        ),
        2 => 
        array (
          'settingitem' => 'Controls Hover Color',
          'id' => 'udt_ego_portfolio_controls_hover_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover color of the navigation controls in the Portfolio section.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff005a',
        ),
        3 => 
        array (
          'settingitem' => 'Disabled Controls Color',
          'id' => 'udt_ego_portfolio_disabled_controls_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color of disabled navigation controls in the Portfolio section.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '333333',
        ),
        4 => 
        array (
          'settingitem' => 'Loading GIF',
          'id' => 'udt_ego_portfolio_loading_gif',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a loading GIF animation for the Portfolio section.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'portfolio_loading_gif.gif',
        ),
      ),
    ),
    'icon' => 'colors',
    'type' => '',
    'helptext' => 'Easily set colors for various sections of your site.',
    'defaultvalue' => '',
  ),
  4 => 
  array (
    'root' => 'Fonts',
    'subnode' => 
    array (
      0 => 
      array (
        0 => 'Content',
        1 => 
        array (
          'settingitem' => 'Title Font',
          'id' => 'udt_ego_title_font',
          'type' => 'select',
          'icon' => '',
          'helptext' => 'Select the font you would like to use for headings.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
        ),
        2 => 
        array (
          'settingitem' => 'Title Font Variation',
          'id' => 'udt_ego_title_font_variation',
          'type' => 'select',
          'icon' => '',
          'helptext' => 'Select the variation font you would like to use for headings.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
        ),
        3 => 
        array (
          'settingitem' => 'H1 Font Size',
          'id' => 'udt_ego_h1_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;40px&quot;
}',
        ),
        4 => 
        array (
          'settingitem' => 'H1 Line Height',
          'id' => 'udt_ego_h1_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;40px&quot;
}',
        ),
        5 => 
        array (
          'settingitem' => 'H1 Variation Font Size',
          'id' => 'udt_ego_h1_variation_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;40px&quot;
}',
        ),
        6 => 
        array (
          'settingitem' => 'H1 Variation Line Height',
          'id' => 'udt_ego_h1_variation_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;40px&quot;
}',
        ),
        7 => 
        array (
          'settingitem' => 'H2 Font Size',
          'id' => 'udt_ego_h2_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;38px&quot;
}',
        ),
        8 => 
        array (
          'settingitem' => 'H2 Line Height',
          'id' => 'udt_ego_h2_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;38px&quot;
}',
        ),
        9 => 
        array (
          'settingitem' => 'H2 Variation Font Size',
          'id' => 'udt_ego_h2_variation_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;38px&quot;
}',
        ),
        10 => 
        array (
          'settingitem' => 'H2 Variation Line Height',
          'id' => 'udt_ego_h2_variation_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;38px&quot;
}',
        ),
        11 => 
        array (
          'settingitem' => 'H3 Font Size',
          'id' => 'udt_ego_h3_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;35px&quot;
}',
        ),
        12 => 
        array (
          'settingitem' => 'H3 Line Height',
          'id' => 'udt_ego_h3_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;35px&quot;
}',
        ),
        13 => 
        array (
          'settingitem' => 'H3 Variation Font Size',
          'id' => 'udt_ego_h3_variation_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;35px&quot;
}',
        ),
        14 => 
        array (
          'settingitem' => 'H3 Variation Line Height',
          'id' => 'udt_ego_h3_variation_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;35px&quot;
}',
        ),
        15 => 
        array (
          'settingitem' => 'H4 Font Size',
          'id' => 'udt_ego_h4_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;32px&quot;
}',
        ),
        16 => 
        array (
          'settingitem' => 'H4 Line Height',
          'id' => 'udt_ego_h4_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;32px&quot;
}',
        ),
        17 => 
        array (
          'settingitem' => 'H4 Variation Font Size',
          'id' => 'udt_ego_h4_variation_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;32px&quot;
}',
        ),
        18 => 
        array (
          'settingitem' => 'H4 Variation Line Height',
          'id' => 'udt_ego_h4_variation_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;32px&quot;
}',
        ),
        19 => 
        array (
          'settingitem' => 'H5 Font Size',
          'id' => 'udt_ego_h5_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;28px&quot;
}',
        ),
        20 => 
        array (
          'settingitem' => 'H5 Line Height',
          'id' => 'udt_ego_h5_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;28px&quot;
}',
        ),
        21 => 
        array (
          'settingitem' => 'H5 Variation Font Size',
          'id' => 'udt_ego_h5_variation_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;28px&quot;
}',
        ),
        22 => 
        array (
          'settingitem' => 'H5 Variation Line Height',
          'id' => 'udt_ego_h5_variation_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;28px&quot;
}',
        ),
        23 => 
        array (
          'settingitem' => 'H6 Font Size',
          'id' => 'udt_ego_h6_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;24px&quot;
}',
        ),
        24 => 
        array (
          'settingitem' => 'H6 Line Height',
          'id' => 'udt_ego_h6_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;24px&quot;
}',
        ),
        25 => 
        array (
          'settingitem' => 'H6 Variation Font Size',
          'id' => 'udt_ego_h6_variation_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;24px&quot;
}',
        ),
        26 => 
        array (
          'settingitem' => 'H6 Variation Line Height',
          'id' => 'udt_ego_h6_variation_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;24px&quot;
}',
        ),
        27 => 
        array (
          'settingitem' => 'Display Title Font Size',
          'id' => 'udt_ego_display_title_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the font size for Display Titles.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        },
        {
                &quot;value&quot;: &quot;51px&quot;,
                &quot;label&quot;: &quot;51px&quot;
        },
        {
                &quot;value&quot;: &quot;52px&quot;,
                &quot;label&quot;: &quot;52px&quot;
        },
        {
                &quot;value&quot;: &quot;53px&quot;,
                &quot;label&quot;: &quot;53px&quot;
        },
        {
                &quot;value&quot;: &quot;54px&quot;,
                &quot;label&quot;: &quot;54px&quot;
        },
        {
                &quot;value&quot;: &quot;55px&quot;,
                &quot;label&quot;: &quot;55px&quot;
        },
        {
                &quot;value&quot;: &quot;56px&quot;,
                &quot;label&quot;: &quot;56px&quot;
        },
        {
                &quot;value&quot;: &quot;57px&quot;,
                &quot;label&quot;: &quot;57px&quot;
        },
        {
                &quot;value&quot;: &quot;58px&quot;,
                &quot;label&quot;: &quot;58px&quot;
        },
        {
                &quot;value&quot;: &quot;59px&quot;,
                &quot;label&quot;: &quot;59px&quot;
        },
        {
                &quot;value&quot;: &quot;60px&quot;,
                &quot;label&quot;: &quot;60px&quot;
        },
        {
                &quot;value&quot;: &quot;61px&quot;,
                &quot;label&quot;: &quot;61px&quot;
        },
        {
                &quot;value&quot;: &quot;62px&quot;,
                &quot;label&quot;: &quot;62px&quot;
        },
        {
                &quot;value&quot;: &quot;63px&quot;,
                &quot;label&quot;: &quot;63px&quot;
        },
        {
                &quot;value&quot;: &quot;64px&quot;,
                &quot;label&quot;: &quot;64px&quot;
        },
        {
                &quot;value&quot;: &quot;65px&quot;,
                &quot;label&quot;: &quot;65px&quot;
        },
        {
                &quot;value&quot;: &quot;66px&quot;,
                &quot;label&quot;: &quot;66px&quot;
        },
        {
                &quot;value&quot;: &quot;67px&quot;,
                &quot;label&quot;: &quot;67px&quot;
        },
        {
                &quot;value&quot;: &quot;68px&quot;,
                &quot;label&quot;: &quot;68px&quot;
        },
        {
                &quot;value&quot;: &quot;69px&quot;,
                &quot;label&quot;: &quot;69px&quot;
        },
        {
                &quot;value&quot;: &quot;70px&quot;,
                &quot;label&quot;: &quot;70px&quot;
        },
        {
                &quot;value&quot;: &quot;71px&quot;,
                &quot;label&quot;: &quot;71px&quot;
        },
        {
                &quot;value&quot;: &quot;72px&quot;,
                &quot;label&quot;: &quot;72px&quot;
        },
        {
                &quot;value&quot;: &quot;73px&quot;,
                &quot;label&quot;: &quot;73px&quot;
        },
        {
                &quot;value&quot;: &quot;74px&quot;,
                &quot;label&quot;: &quot;74px&quot;
        },
        {
                &quot;value&quot;: &quot;75px&quot;,
                &quot;label&quot;: &quot;75px&quot;
        },
        {
                &quot;value&quot;: &quot;76px&quot;,
                &quot;label&quot;: &quot;76px&quot;
        },
        {
                &quot;value&quot;: &quot;77px&quot;,
                &quot;label&quot;: &quot;77px&quot;
        },
        {
                &quot;value&quot;: &quot;78px&quot;,
                &quot;label&quot;: &quot;78px&quot;
        },
        {
                &quot;value&quot;: &quot;79px&quot;,
                &quot;label&quot;: &quot;79px&quot;
        },
        {
                &quot;value&quot;: &quot;80px&quot;,
                &quot;label&quot;: &quot;80px&quot;
        },
                {
                &quot;value&quot;: &quot;81px&quot;,
                &quot;label&quot;: &quot;81px&quot;
        },
                {
                &quot;value&quot;: &quot;82px&quot;,
                &quot;label&quot;: &quot;82px&quot;
        },
                {
                &quot;value&quot;: &quot;83px&quot;,
                &quot;label&quot;: &quot;83px&quot;
        },
                {
                &quot;value&quot;: &quot;84px&quot;,
                &quot;label&quot;: &quot;84px&quot;
        },
                {
                &quot;value&quot;: &quot;85px&quot;,
                &quot;label&quot;: &quot;85px&quot;
        },
                {
                &quot;value&quot;: &quot;86px&quot;,
                &quot;label&quot;: &quot;86px&quot;
        },
                {
                &quot;value&quot;: &quot;87px&quot;,
                &quot;label&quot;: &quot;87px&quot;
        },
                {
                &quot;value&quot;: &quot;88px&quot;,
                &quot;label&quot;: &quot;88px&quot;
        },
                {
                &quot;value&quot;: &quot;89px&quot;,
                &quot;label&quot;: &quot;89px&quot;
        },
                {
                &quot;value&quot;: &quot;90px&quot;,
                &quot;label&quot;: &quot;90px&quot;
        },
        {
                &quot;value&quot;: &quot;91px&quot;,
                &quot;label&quot;: &quot;91px&quot;
        },
        {
                &quot;value&quot;: &quot;92px&quot;,
                &quot;label&quot;: &quot;92px&quot;
        },
        {
                &quot;value&quot;: &quot;93px&quot;,
                &quot;label&quot;: &quot;93px&quot;
        },
        {
                &quot;value&quot;: &quot;94px&quot;,
                &quot;label&quot;: &quot;94px&quot;
        },
        {
                &quot;value&quot;: &quot;95px&quot;,
                &quot;label&quot;: &quot;95px&quot;
        },
        {
                &quot;value&quot;: &quot;96px&quot;,
                &quot;label&quot;: &quot;96px&quot;
        },
        {
                &quot;value&quot;: &quot;97px&quot;,
                &quot;label&quot;: &quot;97px&quot;
        },
        {
                &quot;value&quot;: &quot;98px&quot;,
                &quot;label&quot;: &quot;98px&quot;
        },
        {
                &quot;value&quot;: &quot;99px&quot;,
                &quot;label&quot;: &quot;99px&quot;
        },
        {
                &quot;value&quot;: &quot;100px&quot;,
                &quot;label&quot;: &quot;100px&quot;
        }
],
&quot;default&quot;: &quot;85px&quot;
}',
        ),
        28 => 
        array (
          'settingitem' => 'Display Title Line Height',
          'id' => 'udt_ego_display_title_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the line-height for Display Titles.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        },
        {
                &quot;value&quot;: &quot;51px&quot;,
                &quot;label&quot;: &quot;51px&quot;
        },
        {
                &quot;value&quot;: &quot;52px&quot;,
                &quot;label&quot;: &quot;52px&quot;
        },
        {
                &quot;value&quot;: &quot;53px&quot;,
                &quot;label&quot;: &quot;53px&quot;
        },
        {
                &quot;value&quot;: &quot;54px&quot;,
                &quot;label&quot;: &quot;54px&quot;
        },
        {
                &quot;value&quot;: &quot;55px&quot;,
                &quot;label&quot;: &quot;55px&quot;
        },
        {
                &quot;value&quot;: &quot;56px&quot;,
                &quot;label&quot;: &quot;56px&quot;
        },
        {
                &quot;value&quot;: &quot;57px&quot;,
                &quot;label&quot;: &quot;57px&quot;
        },
        {
                &quot;value&quot;: &quot;58px&quot;,
                &quot;label&quot;: &quot;58px&quot;
        },
        {
                &quot;value&quot;: &quot;59px&quot;,
                &quot;label&quot;: &quot;59px&quot;
        },
        {
                &quot;value&quot;: &quot;60px&quot;,
                &quot;label&quot;: &quot;60px&quot;
        },
        {
                &quot;value&quot;: &quot;61px&quot;,
                &quot;label&quot;: &quot;61px&quot;
        },
        {
                &quot;value&quot;: &quot;62px&quot;,
                &quot;label&quot;: &quot;62px&quot;
        },
        {
                &quot;value&quot;: &quot;63px&quot;,
                &quot;label&quot;: &quot;63px&quot;
        },
        {
                &quot;value&quot;: &quot;64px&quot;,
                &quot;label&quot;: &quot;64px&quot;
        },
        {
                &quot;value&quot;: &quot;65px&quot;,
                &quot;label&quot;: &quot;65px&quot;
        },
        {
                &quot;value&quot;: &quot;66px&quot;,
                &quot;label&quot;: &quot;66px&quot;
        },
        {
                &quot;value&quot;: &quot;67px&quot;,
                &quot;label&quot;: &quot;67px&quot;
        },
        {
                &quot;value&quot;: &quot;68px&quot;,
                &quot;label&quot;: &quot;68px&quot;
        },
        {
                &quot;value&quot;: &quot;69px&quot;,
                &quot;label&quot;: &quot;69px&quot;
        },
        {
                &quot;value&quot;: &quot;70px&quot;,
                &quot;label&quot;: &quot;70px&quot;
        },
        {
                &quot;value&quot;: &quot;71px&quot;,
                &quot;label&quot;: &quot;71px&quot;
        },
        {
                &quot;value&quot;: &quot;72px&quot;,
                &quot;label&quot;: &quot;72px&quot;
        },
        {
                &quot;value&quot;: &quot;73px&quot;,
                &quot;label&quot;: &quot;73px&quot;
        },
        {
                &quot;value&quot;: &quot;74px&quot;,
                &quot;label&quot;: &quot;74px&quot;
        },
        {
                &quot;value&quot;: &quot;75px&quot;,
                &quot;label&quot;: &quot;75px&quot;
        },
        {
                &quot;value&quot;: &quot;76px&quot;,
                &quot;label&quot;: &quot;76px&quot;
        },
        {
                &quot;value&quot;: &quot;77px&quot;,
                &quot;label&quot;: &quot;77px&quot;
        },
        {
                &quot;value&quot;: &quot;78px&quot;,
                &quot;label&quot;: &quot;78px&quot;
        },
        {
                &quot;value&quot;: &quot;79px&quot;,
                &quot;label&quot;: &quot;79px&quot;
        },
        {
                &quot;value&quot;: &quot;80px&quot;,
                &quot;label&quot;: &quot;80px&quot;
        },
                {
                &quot;value&quot;: &quot;81px&quot;,
                &quot;label&quot;: &quot;81px&quot;
        },
                {
                &quot;value&quot;: &quot;82px&quot;,
                &quot;label&quot;: &quot;82px&quot;
        },
                {
                &quot;value&quot;: &quot;83px&quot;,
                &quot;label&quot;: &quot;83px&quot;
        },
                {
                &quot;value&quot;: &quot;84px&quot;,
                &quot;label&quot;: &quot;84px&quot;
        },
                {
                &quot;value&quot;: &quot;85px&quot;,
                &quot;label&quot;: &quot;85px&quot;
        },
                {
                &quot;value&quot;: &quot;86px&quot;,
                &quot;label&quot;: &quot;86px&quot;
        },
                {
                &quot;value&quot;: &quot;87px&quot;,
                &quot;label&quot;: &quot;87px&quot;
        },
                {
                &quot;value&quot;: &quot;88px&quot;,
                &quot;label&quot;: &quot;88px&quot;
        },
                {
                &quot;value&quot;: &quot;89px&quot;,
                &quot;label&quot;: &quot;89px&quot;
        },
                {
                &quot;value&quot;: &quot;90px&quot;,
                &quot;label&quot;: &quot;90px&quot;
        },
        {
                &quot;value&quot;: &quot;91px&quot;,
                &quot;label&quot;: &quot;91px&quot;
        },
        {
                &quot;value&quot;: &quot;92px&quot;,
                &quot;label&quot;: &quot;92px&quot;
        },
        {
                &quot;value&quot;: &quot;93px&quot;,
                &quot;label&quot;: &quot;93px&quot;
        },
        {
                &quot;value&quot;: &quot;94px&quot;,
                &quot;label&quot;: &quot;94px&quot;
        },
        {
                &quot;value&quot;: &quot;95px&quot;,
                &quot;label&quot;: &quot;95px&quot;
        },
        {
                &quot;value&quot;: &quot;96px&quot;,
                &quot;label&quot;: &quot;96px&quot;
        },
        {
                &quot;value&quot;: &quot;97px&quot;,
                &quot;label&quot;: &quot;97px&quot;
        },
        {
                &quot;value&quot;: &quot;98px&quot;,
                &quot;label&quot;: &quot;98px&quot;
        },
        {
                &quot;value&quot;: &quot;99px&quot;,
                &quot;label&quot;: &quot;99px&quot;
        },
        {
                &quot;value&quot;: &quot;100px&quot;,
                &quot;label&quot;: &quot;100px&quot;
        }
],
&quot;default&quot;: &quot;70px&quot;
}',
        ),
        29 => 
        array (
          'settingitem' => 'Display Title Variation Font Size',
          'id' => 'udt_ego_display_title_variation_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the variation font size for Display Titles.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        },
        {
                &quot;value&quot;: &quot;51px&quot;,
                &quot;label&quot;: &quot;51px&quot;
        },
        {
                &quot;value&quot;: &quot;52px&quot;,
                &quot;label&quot;: &quot;52px&quot;
        },
        {
                &quot;value&quot;: &quot;53px&quot;,
                &quot;label&quot;: &quot;53px&quot;
        },
        {
                &quot;value&quot;: &quot;54px&quot;,
                &quot;label&quot;: &quot;54px&quot;
        },
        {
                &quot;value&quot;: &quot;55px&quot;,
                &quot;label&quot;: &quot;55px&quot;
        },
        {
                &quot;value&quot;: &quot;56px&quot;,
                &quot;label&quot;: &quot;56px&quot;
        },
        {
                &quot;value&quot;: &quot;57px&quot;,
                &quot;label&quot;: &quot;57px&quot;
        },
        {
                &quot;value&quot;: &quot;58px&quot;,
                &quot;label&quot;: &quot;58px&quot;
        },
        {
                &quot;value&quot;: &quot;59px&quot;,
                &quot;label&quot;: &quot;59px&quot;
        },
        {
                &quot;value&quot;: &quot;60px&quot;,
                &quot;label&quot;: &quot;60px&quot;
        },
        {
                &quot;value&quot;: &quot;61px&quot;,
                &quot;label&quot;: &quot;61px&quot;
        },
        {
                &quot;value&quot;: &quot;62px&quot;,
                &quot;label&quot;: &quot;62px&quot;
        },
        {
                &quot;value&quot;: &quot;63px&quot;,
                &quot;label&quot;: &quot;63px&quot;
        },
        {
                &quot;value&quot;: &quot;64px&quot;,
                &quot;label&quot;: &quot;64px&quot;
        },
        {
                &quot;value&quot;: &quot;65px&quot;,
                &quot;label&quot;: &quot;65px&quot;
        },
        {
                &quot;value&quot;: &quot;66px&quot;,
                &quot;label&quot;: &quot;66px&quot;
        },
        {
                &quot;value&quot;: &quot;67px&quot;,
                &quot;label&quot;: &quot;67px&quot;
        },
        {
                &quot;value&quot;: &quot;68px&quot;,
                &quot;label&quot;: &quot;68px&quot;
        },
        {
                &quot;value&quot;: &quot;69px&quot;,
                &quot;label&quot;: &quot;69px&quot;
        },
        {
                &quot;value&quot;: &quot;70px&quot;,
                &quot;label&quot;: &quot;70px&quot;
        },
        {
                &quot;value&quot;: &quot;71px&quot;,
                &quot;label&quot;: &quot;71px&quot;
        },
        {
                &quot;value&quot;: &quot;72px&quot;,
                &quot;label&quot;: &quot;72px&quot;
        },
        {
                &quot;value&quot;: &quot;73px&quot;,
                &quot;label&quot;: &quot;73px&quot;
        },
        {
                &quot;value&quot;: &quot;74px&quot;,
                &quot;label&quot;: &quot;74px&quot;
        },
        {
                &quot;value&quot;: &quot;75px&quot;,
                &quot;label&quot;: &quot;75px&quot;
        },
        {
                &quot;value&quot;: &quot;76px&quot;,
                &quot;label&quot;: &quot;76px&quot;
        },
        {
                &quot;value&quot;: &quot;77px&quot;,
                &quot;label&quot;: &quot;77px&quot;
        },
        {
                &quot;value&quot;: &quot;78px&quot;,
                &quot;label&quot;: &quot;78px&quot;
        },
        {
                &quot;value&quot;: &quot;79px&quot;,
                &quot;label&quot;: &quot;79px&quot;
        },
        {
                &quot;value&quot;: &quot;80px&quot;,
                &quot;label&quot;: &quot;80px&quot;
        },
                {
                &quot;value&quot;: &quot;81px&quot;,
                &quot;label&quot;: &quot;81px&quot;
        },
                {
                &quot;value&quot;: &quot;82px&quot;,
                &quot;label&quot;: &quot;82px&quot;
        },
                {
                &quot;value&quot;: &quot;83px&quot;,
                &quot;label&quot;: &quot;83px&quot;
        },
                {
                &quot;value&quot;: &quot;84px&quot;,
                &quot;label&quot;: &quot;84px&quot;
        },
                {
                &quot;value&quot;: &quot;85px&quot;,
                &quot;label&quot;: &quot;85px&quot;
        },
                {
                &quot;value&quot;: &quot;86px&quot;,
                &quot;label&quot;: &quot;86px&quot;
        },
                {
                &quot;value&quot;: &quot;87px&quot;,
                &quot;label&quot;: &quot;87px&quot;
        },
                {
                &quot;value&quot;: &quot;88px&quot;,
                &quot;label&quot;: &quot;88px&quot;
        },
                {
                &quot;value&quot;: &quot;89px&quot;,
                &quot;label&quot;: &quot;89px&quot;
        },
                {
                &quot;value&quot;: &quot;90px&quot;,
                &quot;label&quot;: &quot;90px&quot;
        },
        {
                &quot;value&quot;: &quot;91px&quot;,
                &quot;label&quot;: &quot;91px&quot;
        },
        {
                &quot;value&quot;: &quot;92px&quot;,
                &quot;label&quot;: &quot;92px&quot;
        },
        {
                &quot;value&quot;: &quot;93px&quot;,
                &quot;label&quot;: &quot;93px&quot;
        },
        {
                &quot;value&quot;: &quot;94px&quot;,
                &quot;label&quot;: &quot;94px&quot;
        },
        {
                &quot;value&quot;: &quot;95px&quot;,
                &quot;label&quot;: &quot;95px&quot;
        },
        {
                &quot;value&quot;: &quot;96px&quot;,
                &quot;label&quot;: &quot;96px&quot;
        },
        {
                &quot;value&quot;: &quot;97px&quot;,
                &quot;label&quot;: &quot;97px&quot;
        },
        {
                &quot;value&quot;: &quot;98px&quot;,
                &quot;label&quot;: &quot;98px&quot;
        },
        {
                &quot;value&quot;: &quot;99px&quot;,
                &quot;label&quot;: &quot;99px&quot;
        },
        {
                &quot;value&quot;: &quot;100px&quot;,
                &quot;label&quot;: &quot;100px&quot;
        }
],
&quot;default&quot;: &quot;85px&quot;
}',
        ),
        30 => 
        array (
          'settingitem' => 'Display Title Variation Line Height',
          'id' => 'udt_ego_display_title_variation_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the variation line-height for Display Titles.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        },
        {
                &quot;value&quot;: &quot;51px&quot;,
                &quot;label&quot;: &quot;51px&quot;
        },
        {
                &quot;value&quot;: &quot;52px&quot;,
                &quot;label&quot;: &quot;52px&quot;
        },
        {
                &quot;value&quot;: &quot;53px&quot;,
                &quot;label&quot;: &quot;53px&quot;
        },
        {
                &quot;value&quot;: &quot;54px&quot;,
                &quot;label&quot;: &quot;54px&quot;
        },
        {
                &quot;value&quot;: &quot;55px&quot;,
                &quot;label&quot;: &quot;55px&quot;
        },
        {
                &quot;value&quot;: &quot;56px&quot;,
                &quot;label&quot;: &quot;56px&quot;
        },
        {
                &quot;value&quot;: &quot;57px&quot;,
                &quot;label&quot;: &quot;57px&quot;
        },
        {
                &quot;value&quot;: &quot;58px&quot;,
                &quot;label&quot;: &quot;58px&quot;
        },
        {
                &quot;value&quot;: &quot;59px&quot;,
                &quot;label&quot;: &quot;59px&quot;
        },
        {
                &quot;value&quot;: &quot;60px&quot;,
                &quot;label&quot;: &quot;60px&quot;
        },
        {
                &quot;value&quot;: &quot;61px&quot;,
                &quot;label&quot;: &quot;61px&quot;
        },
        {
                &quot;value&quot;: &quot;62px&quot;,
                &quot;label&quot;: &quot;62px&quot;
        },
        {
                &quot;value&quot;: &quot;63px&quot;,
                &quot;label&quot;: &quot;63px&quot;
        },
        {
                &quot;value&quot;: &quot;64px&quot;,
                &quot;label&quot;: &quot;64px&quot;
        },
        {
                &quot;value&quot;: &quot;65px&quot;,
                &quot;label&quot;: &quot;65px&quot;
        },
        {
                &quot;value&quot;: &quot;66px&quot;,
                &quot;label&quot;: &quot;66px&quot;
        },
        {
                &quot;value&quot;: &quot;67px&quot;,
                &quot;label&quot;: &quot;67px&quot;
        },
        {
                &quot;value&quot;: &quot;68px&quot;,
                &quot;label&quot;: &quot;68px&quot;
        },
        {
                &quot;value&quot;: &quot;69px&quot;,
                &quot;label&quot;: &quot;69px&quot;
        },
        {
                &quot;value&quot;: &quot;70px&quot;,
                &quot;label&quot;: &quot;70px&quot;
        },
        {
                &quot;value&quot;: &quot;71px&quot;,
                &quot;label&quot;: &quot;71px&quot;
        },
        {
                &quot;value&quot;: &quot;72px&quot;,
                &quot;label&quot;: &quot;72px&quot;
        },
        {
                &quot;value&quot;: &quot;73px&quot;,
                &quot;label&quot;: &quot;73px&quot;
        },
        {
                &quot;value&quot;: &quot;74px&quot;,
                &quot;label&quot;: &quot;74px&quot;
        },
        {
                &quot;value&quot;: &quot;75px&quot;,
                &quot;label&quot;: &quot;75px&quot;
        },
        {
                &quot;value&quot;: &quot;76px&quot;,
                &quot;label&quot;: &quot;76px&quot;
        },
        {
                &quot;value&quot;: &quot;77px&quot;,
                &quot;label&quot;: &quot;77px&quot;
        },
        {
                &quot;value&quot;: &quot;78px&quot;,
                &quot;label&quot;: &quot;78px&quot;
        },
        {
                &quot;value&quot;: &quot;79px&quot;,
                &quot;label&quot;: &quot;79px&quot;
        },
        {
                &quot;value&quot;: &quot;80px&quot;,
                &quot;label&quot;: &quot;80px&quot;
        },
                {
                &quot;value&quot;: &quot;81px&quot;,
                &quot;label&quot;: &quot;81px&quot;
        },
                {
                &quot;value&quot;: &quot;82px&quot;,
                &quot;label&quot;: &quot;82px&quot;
        },
                {
                &quot;value&quot;: &quot;83px&quot;,
                &quot;label&quot;: &quot;83px&quot;
        },
                {
                &quot;value&quot;: &quot;84px&quot;,
                &quot;label&quot;: &quot;84px&quot;
        },
                {
                &quot;value&quot;: &quot;85px&quot;,
                &quot;label&quot;: &quot;85px&quot;
        },
                {
                &quot;value&quot;: &quot;86px&quot;,
                &quot;label&quot;: &quot;86px&quot;
        },
                {
                &quot;value&quot;: &quot;87px&quot;,
                &quot;label&quot;: &quot;87px&quot;
        },
                {
                &quot;value&quot;: &quot;88px&quot;,
                &quot;label&quot;: &quot;88px&quot;
        },
                {
                &quot;value&quot;: &quot;89px&quot;,
                &quot;label&quot;: &quot;89px&quot;
        },
                {
                &quot;value&quot;: &quot;90px&quot;,
                &quot;label&quot;: &quot;90px&quot;
        },
        {
                &quot;value&quot;: &quot;91px&quot;,
                &quot;label&quot;: &quot;91px&quot;
        },
        {
                &quot;value&quot;: &quot;92px&quot;,
                &quot;label&quot;: &quot;92px&quot;
        },
        {
                &quot;value&quot;: &quot;93px&quot;,
                &quot;label&quot;: &quot;93px&quot;
        },
        {
                &quot;value&quot;: &quot;94px&quot;,
                &quot;label&quot;: &quot;94px&quot;
        },
        {
                &quot;value&quot;: &quot;95px&quot;,
                &quot;label&quot;: &quot;95px&quot;
        },
        {
                &quot;value&quot;: &quot;96px&quot;,
                &quot;label&quot;: &quot;96px&quot;
        },
        {
                &quot;value&quot;: &quot;97px&quot;,
                &quot;label&quot;: &quot;97px&quot;
        },
        {
                &quot;value&quot;: &quot;98px&quot;,
                &quot;label&quot;: &quot;98px&quot;
        },
        {
                &quot;value&quot;: &quot;99px&quot;,
                &quot;label&quot;: &quot;99px&quot;
        },
        {
                &quot;value&quot;: &quot;100px&quot;,
                &quot;label&quot;: &quot;100px&quot;
        }
],
&quot;default&quot;: &quot;70px&quot;
}',
        ),
        31 => 
        array (
          'settingitem' => 'Display Title Small Size',
          'id' => 'udt_ego_display_title_small_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the font size for the part of a Display Title that is wrapped in a small tag.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;50px&quot;
}',
        ),
        32 => 
        array (
          'settingitem' => 'Display Title Small Line Height',
          'id' => 'udt_ego_display_title_small_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the line-height for the part of a title that is wrapped in a small tag.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;35px&quot;
}',
        ),
        33 => 
        array (
          'settingitem' => 'Display Title Small Variation Size',
          'id' => 'udt_ego_display_title_small_variation_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the variation font size for the part of a Display Title that is wrapped in a small tag.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;50px&quot;
}',
        ),
        34 => 
        array (
          'settingitem' => 'Display Title Small Variation Line Height',
          'id' => 'udt_ego_display_title_small_variation_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the variation line-height for the part of a title that is wrapped in a small tag.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;35px&quot;
}',
        ),
      ),
      1 => 
      array (
        0 => 'Homepage Slider',
        1 => 
        array (
          'settingitem' => 'Impact Caption Font',
          'id' => 'udt_ego_impact_caption_font',
          'type' => 'select',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
        ),
        2 => 
        array (
          'settingitem' => 'Impact Caption Font Variation',
          'id' => 'udt_ego_impact_caption_font_variation',
          'type' => 'select',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
        ),
        3 => 
        array (
          'settingitem' => 'Striped Caption Font',
          'id' => 'udt_ego_striped_caption_font',
          'type' => 'select',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
        ),
        4 => 
        array (
          'settingitem' => 'Striped Caption Font Variation',
          'id' => 'udt_ego_striped_caption_font_variation',
          'type' => 'select',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
        ),
        5 => 
        array (
          'settingitem' => 'Boxed Caption Title Font',
          'id' => 'udt_ego_boxed_caption_title_font',
          'type' => 'select',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
        ),
        6 => 
        array (
          'settingitem' => 'Boxed Caption Title Font Variation',
          'id' => 'udt_ego_boxed_caption_title_font_variation',
          'type' => 'select',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
        ),
        7 => 
        array (
          'settingitem' => 'Elegant Caption Title Font',
          'id' => 'udt_ego_elegant_caption_title_font',
          'type' => 'select',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
        ),
        8 => 
        array (
          'settingitem' => 'Elegant Caption Title Font Variation',
          'id' => 'udt_ego_elegant_caption_title_font_variation',
          'type' => 'select',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
        ),
      ),
    ),
    'icon' => 'fonts',
    'type' => '',
    'helptext' => 'Set fonts for various sections of your site.',
    'defaultvalue' => '',
  ),
  5 => 
  array (
    'root' => 'Sliders',
    'subnode' => 
    array (
      0 => 
      array (
        0 => 'Homepage Slider',
        1 => 
        array (
          'settingitem' => 'Slideshow',
          'id' => 'udt_ego_epic_slideshow',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Hide',
          'showtooltip' => false,
          'defaultvalue' => '0',
        ),
        2 => 
        array (
          'settingitem' => 'Autoplay',
          'id' => 'udt_ego_epic_autoplay',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Hide',
          'showtooltip' => false,
          'defaultvalue' => '1',
        ),
        3 => 
        array (
          'settingitem' => 'Slide Timer',
          'id' => 'udt_ego_epic_slide_timer',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '3000',
        ),
        4 => 
        array (
          'settingitem' => 'Slide Animation Speed',
          'id' => 'udt_ego_epic_slide_animation_speed',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '600',
        ),
        5 => 
        array (
          'settingitem' => 'Slide Animation',
          'id' => 'udt_ego_epic_slide_animation',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;none&quot;, &quot;label&quot;:&quot;None&quot; }, { &quot;value&quot;:&quot;fade&quot;, &quot;label&quot;:&quot;Fade&quot; }, { &quot;value&quot;:&quot;leftToRight&quot;, &quot;label&quot;:&quot;Left to Right&quot; }, { &quot;value&quot;:&quot;topToBottom&quot;, &quot;label&quot;:&quot;Top to Bottom&quot; } ], &quot;default&quot;:&quot;leftToRight&quot; }',
        ),
        6 => 
        array (
          'settingitem' => 'Mobile Slide Animation',
          'id' => 'udt_ego_epic_mobile_slide_animation',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;none&quot;, &quot;label&quot;:&quot;None&quot; }, { &quot;value&quot;:&quot;fade&quot;, &quot;label&quot;:&quot;Fade&quot; }, { &quot;value&quot;:&quot;leftToRight&quot;, &quot;label&quot;:&quot;Left to Right&quot; }, { &quot;value&quot;:&quot;topToBottom&quot;, &quot;label&quot;:&quot;Top to Bottom&quot; } ], &quot;default&quot;:&quot;leftToRight&quot; }',
        ),
        7 => 
        array (
          'settingitem' => 'Easing',
          'id' => 'udt_ego_epic_easing',
          'type' => 'select',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'easeInQuad,easeInQuad,easeInOutQuad,easeInCubic,easeOutCubic,easeInOutCubic,easeInQuart,easeOutQuart,easeInOutQuart,easeInQuint,easeOutQuint,easeInOutQuint,easeInSine,easeOutSine,easeInOutSine,easeInExpo,easeOutExpo,easeInOutExpo,easeInCirc,easeOutCirc,easeInOutCirc',
        ),
      ),
      1 => 
      array (
        0 => 'Flexslider',
        1 => 
        array (
          'settingitem' => 'Autoplay',
          'id' => 'udt_ego_flexslider_autoplay',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '1',
        ),
        2 => 
        array (
          'settingitem' => 'Slide Timer',
          'id' => 'udt_ego_flexslider_slide_timer',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '3000',
        ),
        3 => 
        array (
          'settingitem' => 'Slide Animation Speed',
          'id' => 'udt_ego_flexslider_slide_animation_speed',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '600',
        ),
      ),
    ),
    'icon' => 'sliders',
    'type' => '',
    'helptext' => 'Settings for the sliders included with the theme.',
    'defaultvalue' => '',
  ),
  6 => 
  array (
    'root' => 'Shortcodes',
    'subnode' => 
    array (
      0 => 
      array (
        0 => 'Chart',
        1 => 
        array (
          'settingitem' => 'Chart Bar Color (Odd Sections)',
          'id' => 'udt_ego_chart_bar_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the chart bar color in odd sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff005a',
        ),
        2 => 
        array (
          'settingitem' => 'Chart Border Color (Odd Sections)',
          'id' => 'udt_ego_chart_border_color_odd',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the chart bar border color in odd sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f4f4f5',
        ),
        3 => 
        array (
          'settingitem' => 'Chart Bar Color (Even Sections)',
          'id' => 'udt_ego_chart_bar_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the chart bar color in even sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff005a',
        ),
        4 => 
        array (
          'settingitem' => 'Chart Border Color (Even Sections)',
          'id' => 'udt_ego_chart_border_color_even',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the chart bar border color in even sections.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f4f4f5',
        ),
      ),
      1 => 
      array (
        0 => 'Map',
        1 => 
        array (
          'settingitem' => 'Controls',
          'id' => 'udt_ego_map_controls',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Hide',
          'showtooltip' => false,
          'defaultvalue' => '1',
        ),
        2 => 
        array (
          'settingitem' => 'Map Marker',
          'id' => 'udt_ego_map_marker',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'map_marker.png',
        ),
      ),
    ),
    'icon' => 'shortcode',
    'type' => '',
    'helptext' => 'This section allows you to set parameters for some of the custom shortcodes included with the theme.',
    'defaultvalue' => '',
  ),
  7 => 
  array (
    'root' => 'CSS Editor',
    'subnode' => 
    array (
      0 => 
      array (
        0 => 'CSS Editor',
        1 => 
        array (
          'settingitem' => 'CSS Editor',
          'id' => 'udt_ego_css_editor',
          'type' => 'textarea',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
      ),
    ),
    'icon' => 'css_editor',
    'type' => '',
    'helptext' => 'Use the CSS Editor to add your custom styles.',
    'defaultvalue' => '',
  ),
);

$idArray=array (
  'udt_ego_blog_title' => 
  array (
    0 => 'Blog &lt;span&gt;Title&lt;/span&gt;&lt;small&gt;And &lt;span&gt;Some&lt;/span&gt; Other &lt;span&gt;Info&lt;/span&gt; Here&lt;/small&gt;',
    1 => 'input_text',
  ),
  'udt_ego_portfolio_title' => 
  array (
    0 => 'Portfolio &lt;span&gt;Title&lt;/span&gt;&lt;small&gt;And &lt;span&gt;Some&lt;/span&gt; Other &lt;span&gt;Info&lt;/span&gt; Here&lt;/small&gt;',
    1 => 'input_text',
  ),
  'udt_ego_page_scroll_duration' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;200&quot;, &quot;label&quot;:&quot;200 ms&quot; }, { &quot;value&quot;:&quot;400&quot;, &quot;label&quot;:&quot;400 ms&quot; }, { &quot;value&quot;:&quot;600&quot;, &quot;label&quot;:&quot;600 ms&quot; }, { &quot;value&quot;:&quot;800&quot;, &quot;label&quot;:&quot;800 ms&quot; }, { &quot;value&quot;:&quot;1000&quot;, &quot;label&quot;:&quot;1000 ms&quot; } ], &quot;default&quot;:&quot;600&quot; }',
    1 => 'select_json',
  ),
  'udt_ego_contact_form_title' => 
  array (
    0 => 'Send us a message',
    1 => 'input_text',
  ),
  'udt_ego_contact_form_message' => 
  array (
    0 => 'Send us an e-mail and we will get back to you in 24 hours.',
    1 => 'textarea',
  ),
  'udt_ego_contact_form_required_fields_label' => 
  array (
    0 => '* = required field',
    1 => 'input_text',
  ),
  'udt_ego_contact_form_required_fields_label_ajax' => 
  array (
    0 => 'This is a required field.',
    1 => 'input_text',
  ),
  'udt_ego_contact_form_success_message' => 
  array (
    0 => 'Thanks, we got your mail and will get back to you in 24h!',
    1 => 'input_text',
  ),
  'udt_ego_contact_form_email_warning' => 
  array (
    0 => 'Please enter a valid e-mail address and try again.',
    1 => 'input_text',
  ),
  'udt_ego_contact_form_warning' => 
  array (
    0 => 'Please verify fields and try again.',
    1 => 'input_text',
  ),
  'udt_ego_contact_form_error' => 
  array (
    0 => 'There was an error sending your email. Please try again later.',
    1 => 'input_text',
  ),
  'udt_ego_contact_loading_gif_odd' => 
  array (
    0 => 'contact_loading_gif_odd.gif',
    1 => 'input_upload',
  ),
  'udt_ego_contact_loading_gif_even' => 
  array (
    0 => 'contact_loading_gif_even.gif',
    1 => 'input_upload',
  ),
  'udt_ego_sns_network_1' => 
  array (
    0 => 'Set Social Network 1',
    1 => 'group',
  ),
  'udt_ego_sns_type_1' => 
  array (
    0 => 'Select Network,Dribbble,Facebook,Flickr,Forrst,Google+,LinkedIn,Myspace,Skype,Twitter,Vimeo,RSS',
    1 => 'select',
  ),
  'udt_ego_sns_url_1' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_ego_sns_network_2' => 
  array (
    0 => 'Set Social Network 2',
    1 => 'group',
  ),
  'udt_ego_sns_type_2' => 
  array (
    0 => 'Select Network,Dribbble,Facebook,Flickr,Forrst,Google+,LinkedIn,Myspace,Skype,Twitter,Vimeo,RSS',
    1 => 'select',
  ),
  'udt_ego_sns_url_2' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_ego_sns_network_3' => 
  array (
    0 => 'Set Social Network 3',
    1 => 'group',
  ),
  'udt_ego_sns_type_3' => 
  array (
    0 => 'Select Network,Dribbble,Facebook,Flickr,Forrst,Google+,LinkedIn,Myspace,Skype,Twitter,Vimeo,RSS',
    1 => 'select',
  ),
  'udt_ego_sns_url_3' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_ego_sns_network_4' => 
  array (
    0 => 'Set Social Network 4',
    1 => 'group',
  ),
  'udt_ego_sns_type_4' => 
  array (
    0 => 'Select Network,Dribbble,Facebook,Flickr,Forrst,Google+,LinkedIn,Myspace,Skype,Twitter,Vimeo,RSS',
    1 => 'select',
  ),
  'udt_ego_sns_url_4' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_ego_sns_network_5' => 
  array (
    0 => 'Set Social Network 5',
    1 => 'group',
  ),
  'udt_ego_sns_type_5' => 
  array (
    0 => 'Select Network,Dribbble,Facebook,Flickr,Forrst,Google+,LinkedIn,Myspace,Skype,Twitter,Vimeo,RSS',
    1 => 'select',
  ),
  'udt_ego_sns_url_5' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_ego_sns_network_6' => 
  array (
    0 => 'Set Social Network 6',
    1 => 'group',
  ),
  'udt_ego_sns_type_6' => 
  array (
    0 => 'Select Network,Dribbble,Facebook,Flickr,Forrst,Google+,LinkedIn,Myspace,Skype,Twitter,Vimeo,RSS',
    1 => 'select',
  ),
  'udt_ego_sns_url_6' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_ego_footer_copyright' => 
  array (
    0 => '&amp;copy;&lt;a href=&quot;http://udthemes.com&quot; title=&quot;Premium WordPress Themes - UDTHEMES&quot;&gt;UDTHEMES&lt;/a&gt;. All Rights Reserved.',
    1 => 'input_text',
  ),
  'udt_ego_google_tracking_id' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_ego_site_logo' => 
  array (
    0 => 'logo.png',
    1 => 'input_upload',
  ),
  'udt_ego_epic_slider_logo' => 
  array (
    0 => 'epic_slider_logo.png',
    1 => 'input_upload',
  ),
  'udt_ego_footer_logo' => 
  array (
    0 => 'footer_logo.png',
    1 => 'input_upload',
  ),
  'udt_ego_lightbox_logo' => 
  array (
    0 => 'lightbox_logo.png',
    1 => 'input_upload',
  ),
  'udt_ego_favicon' => 
  array (
    0 => 'favicon.png',
    1 => 'input_upload',
  ),
  'udt_ego_header_background_color' => 
  array (
    0 => '000000',
    1 => 'colorpicker',
  ),
  'udt_ego_header_background_opacity' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0.1&quot;, &quot;label&quot;:&quot;10%&quot; }, { &quot;value&quot;:&quot;0.2&quot;, &quot;label&quot;:&quot;20%&quot; }, { &quot;value&quot;:&quot;0.3&quot;, &quot;label&quot;:&quot;30%&quot; }, { &quot;value&quot;:&quot;0.4&quot;, &quot;label&quot;:&quot;40%&quot; }, { &quot;value&quot;:&quot;0.5&quot;, &quot;label&quot;:&quot;50%&quot; }, { &quot;value&quot;:&quot;0.6&quot;, &quot;label&quot;:&quot;60%&quot; }, { &quot;value&quot;:&quot;0.7&quot;, &quot;label&quot;:&quot;70%&quot; }, { &quot;value&quot;:&quot;0.8&quot;, &quot;label&quot;:&quot;80%&quot; }, { &quot;value&quot;:&quot;0.9&quot;, &quot;label&quot;:&quot;90%&quot; }, { &quot;value&quot;:&quot;1&quot;, &quot;label&quot;:&quot;100%&quot; } ], &quot;default&quot;:&quot;0.5&quot; }',
    1 => 'select_json',
  ),
  'udt_ego_menu_link_color' => 
  array (
    0 => 'cccccc',
    1 => 'colorpicker',
  ),
  'udt_ego_menu_link_hover_color' => 
  array (
    0 => 'ff2778',
    1 => 'colorpicker',
  ),
  'udt_ego_active_menu_background_color' => 
  array (
    0 => '333333',
    1 => 'colorpicker',
  ),
  'udt_ego_active_menu_link_color' => 
  array (
    0 => 'eeeeee',
    1 => 'colorpicker',
  ),
  'udt_ego_thumb_rollover_color' => 
  array (
    0 => 'ff005a',
    1 => 'colorpicker',
  ),
  'udt_ego_vimeo_controls_color' => 
  array (
    0 => 'ff005a',
    1 => 'colorpicker',
  ),
  'udt_ego_default_button_background_color' => 
  array (
    0 => 'ff005a',
    1 => 'colorpicker',
  ),
  'udt_ego_default_button_text_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_ego_footer_background_color' => 
  array (
    0 => '353535',
    1 => 'colorpicker',
  ),
  'udt_ego_footer_background_pattern' => 
  array (
    0 => 'footer_pattern.png',
    1 => 'input_upload',
  ),
  'udt_ego_footer_text_color' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_ego_footer_link_color' => 
  array (
    0 => 'ff005a',
    1 => 'colorpicker',
  ),
  'udt_ego_footer_link_hover_color' => 
  array (
    0 => 'ff005a',
    1 => 'colorpicker',
  ),
  'udt_ego_odd_colors_note' => 
  array (
    0 => '&lt;p&gt;The color settings below apply to odd sections of the onepage and all inner pages.&lt;/p&gt;&lt;p&gt;Colors for even sections of the onepage are set under the &quot;Even&quot; tab.&lt;/p&gt;',
    1 => 'html',
  ),
  'udt_ego_section_background_color_odd' => 
  array (
    0 => 'f4f4f5',
    1 => 'colorpicker',
  ),
  'udt_ego_use_section_background_patter_odd' => 
  array (
    0 => '1',
    1 => 'toggle_switch',
  ),
  'udt_ego_section_background_pattern_odd' => 
  array (
    0 => 'section_background_pattern_odd.png',
    1 => 'input_upload',
  ),
  'udt_ego_divider_color_odd' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_ego_title_color_odd' => 
  array (
    0 => '333333',
    1 => 'colorpicker',
  ),
  'udt_ego_title_color_variation_odd' => 
  array (
    0 => '666666',
    1 => 'colorpicker',
  ),
  'udt_ego_text_color_odd' => 
  array (
    0 => '888888',
    1 => 'colorpicker',
  ),
  'udt_ego_link_color_odd' => 
  array (
    0 => 'ff005a',
    1 => 'colorpicker',
  ),
  'udt_ego_link_hover_color_odd' => 
  array (
    0 => 'ff005a',
    1 => 'colorpicker',
  ),
  'udt_ego_default_blockquote_border_color_odd' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_ego_quote_blockquote_graphic_odd' => 
  array (
    0 => 'quote_blockquote_odd.png',
    1 => 'input_upload',
  ),
  'udt_ego_form_input_background_color_odd' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_border_color_odd' => 
  array (
    0 => 'e6e6e6',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_text_color_odd' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_background_hover_color_odd' => 
  array (
    0 => 'f9f9f9',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_border_hover_color_odd' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_text_hover_color_odd' => 
  array (
    0 => '888888',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_background_active_color_odd' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_border_active_color_odd' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_text_active_color_odd' => 
  array (
    0 => '888888',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_required_field_graphic_odd' => 
  array (
    0 => 'required_field_graphic_odd.png',
    1 => 'input_upload',
  ),
  'udt_ego_accordions_tabs_label_background_color_odd' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_ego_accordions_tabs_label_text_color_odd' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_ego_accordions_tabs_active_label_background_color_odd' => 
  array (
    0 => '666666',
    1 => 'colorpicker',
  ),
  'udt_ego_accordions_tabs_active_label_font_color_odd' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_ego_accordions_tabs_background_color_odd' => 
  array (
    0 => 'f9f9f9',
    1 => 'colorpicker',
  ),
  'udt_ego_pricing_tables_border_color_odd' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_ego_pricing_tables_header_background_color_odd' => 
  array (
    0 => '666666',
    1 => 'colorpicker',
  ),
  'udt_ego_pricing_tables_header_text_color_odd' => 
  array (
    0 => 'eeeeee',
    1 => 'colorpicker',
  ),
  'udt_ego_pricing_tables_price_background_color_odd' => 
  array (
    0 => 'f4f4f4',
    1 => 'colorpicker',
  ),
  'udt_ego_pricing_tables_price_text_color_odd' => 
  array (
    0 => '666666',
    1 => 'colorpicker',
  ),
  'udt_ego_pricing_tables_background_color_odd' => 
  array (
    0 => 'f9f9f9',
    1 => 'colorpicker',
  ),
  'udt_ego_pricing_tables_text_color_odd' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_ego_even_colors_note' => 
  array (
    0 => '&lt;p&gt;If enabled, the color settings below will apply to even sections of the onepage.&lt;/p&gt;&lt;p&gt;Colors for odd sections of the onepage - and all inner pages - are set under the &quot;Odd&quot; tab.&lt;/p&gt;',
    1 => 'html',
  ),
  'udt_ego_enable_even_sections' => 
  array (
    0 => '0',
    1 => 'toggle_switch',
  ),
  'udt_ego_section_background_color_even' => 
  array (
    0 => 'f4f4f5',
    1 => 'colorpicker',
  ),
  'udt_ego_use_section_background_patter_even' => 
  array (
    0 => '1',
    1 => 'toggle_switch',
  ),
  'udt_ego_section_background_pattern_even' => 
  array (
    0 => 'section_background_pattern_even.png',
    1 => 'input_upload',
  ),
  'udt_ego_divider_color_even' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_ego_title_color_even' => 
  array (
    0 => '333333',
    1 => 'colorpicker',
  ),
  'udt_ego_title_color_variation_even' => 
  array (
    0 => '666666',
    1 => 'colorpicker',
  ),
  'udt_ego_text_color_even' => 
  array (
    0 => '888888',
    1 => 'colorpicker',
  ),
  'udt_ego_link_color_even' => 
  array (
    0 => 'ff005a',
    1 => 'colorpicker',
  ),
  'udt_ego_link_hover_color_even' => 
  array (
    0 => 'ff005a',
    1 => 'colorpicker',
  ),
  'udt_ego_default_blockquote_border_color_even' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_ego_quote_blockquote_graphic_even' => 
  array (
    0 => 'quote_blockquote_even.png',
    1 => 'input_upload',
  ),
  'udt_ego_form_input_background_color_even' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_border_color_even' => 
  array (
    0 => 'e6e6e6',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_text_color_even' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_background_hover_color_even' => 
  array (
    0 => 'f9f9f9',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_border_hover_color_even' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_text_hover_color_even' => 
  array (
    0 => '888888',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_background_active_color_even' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_border_active_color_even' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_text_active_color_even' => 
  array (
    0 => '888888',
    1 => 'colorpicker',
  ),
  'udt_ego_form_input_required_field_graphic_even' => 
  array (
    0 => 'required_field_graphic_even.png',
    1 => 'input_upload',
  ),
  'udt_ego_accordions_tabs_label_background_color_even' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_ego_accordions_tabs_label_text_color_even' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_ego_accordions_tabs_active_label_background_color_even' => 
  array (
    0 => '666666',
    1 => 'colorpicker',
  ),
  'udt_ego_accordions_tabs_active_label_font_color_even' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_ego_accordions_tabs_background_color_even' => 
  array (
    0 => 'f9f9f9',
    1 => 'colorpicker',
  ),
  'udt_ego_pricing_tables_border_color_even' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_ego_pricing_tables_header_background_color_even' => 
  array (
    0 => '666666',
    1 => 'colorpicker',
  ),
  'udt_ego_pricing_tables_header_text_color_even' => 
  array (
    0 => 'eeeeee',
    1 => 'colorpicker',
  ),
  'udt_ego_pricing_tables_price_background_color_even' => 
  array (
    0 => 'f4f4f4',
    1 => 'colorpicker',
  ),
  'udt_ego_pricing_tables_price_text_color_even' => 
  array (
    0 => '666666',
    1 => 'colorpicker',
  ),
  'udt_ego_pricing_tables_background_color_even' => 
  array (
    0 => 'f9f9f9',
    1 => 'colorpicker',
  ),
  'udt_ego_pricing_tables_text_color_even' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_ego_slider_logo_background_color' => 
  array (
    0 => 'ff2778',
    1 => 'colorpicker',
  ),
  'udt_ego_slider_theme_color' => 
  array (
    0 => 'ff005a',
    1 => 'colorpicker',
  ),
  'udt_ego_slider_overlay_pattern' => 
  array (
    0 => 'slider_overlay_pattern.png',
    1 => 'input_upload',
  ),
  'udt_ego_portfolio_controls_color' => 
  array (
    0 => '000000',
    1 => 'colorpicker',
  ),
  'udt_ego_portfolio_controls_hover_color' => 
  array (
    0 => 'ff005a',
    1 => 'colorpicker',
  ),
  'udt_ego_portfolio_disabled_controls_color' => 
  array (
    0 => '333333',
    1 => 'colorpicker',
  ),
  'udt_ego_portfolio_loading_gif' => 
  array (
    0 => 'portfolio_loading_gif.gif',
    1 => 'input_upload',
  ),
  'udt_ego_title_font' => 
  array (
    0 => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
    1 => 'select',
  ),
  'udt_ego_title_font_variation' => 
  array (
    0 => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
    1 => 'select',
  ),
  'udt_ego_h1_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;40px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h1_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;40px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h1_variation_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;40px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h1_variation_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;40px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h2_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;38px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h2_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;38px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h2_variation_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;38px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h2_variation_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;38px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h3_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;35px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h3_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;35px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h3_variation_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;35px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h3_variation_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;35px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h4_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;32px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h4_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;32px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h4_variation_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;32px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h4_variation_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;32px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h5_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;28px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h5_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;28px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h5_variation_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;28px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h5_variation_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;28px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h6_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;24px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h6_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;24px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h6_variation_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;24px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_h6_variation_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;24px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_display_title_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        },
        {
                &quot;value&quot;: &quot;51px&quot;,
                &quot;label&quot;: &quot;51px&quot;
        },
        {
                &quot;value&quot;: &quot;52px&quot;,
                &quot;label&quot;: &quot;52px&quot;
        },
        {
                &quot;value&quot;: &quot;53px&quot;,
                &quot;label&quot;: &quot;53px&quot;
        },
        {
                &quot;value&quot;: &quot;54px&quot;,
                &quot;label&quot;: &quot;54px&quot;
        },
        {
                &quot;value&quot;: &quot;55px&quot;,
                &quot;label&quot;: &quot;55px&quot;
        },
        {
                &quot;value&quot;: &quot;56px&quot;,
                &quot;label&quot;: &quot;56px&quot;
        },
        {
                &quot;value&quot;: &quot;57px&quot;,
                &quot;label&quot;: &quot;57px&quot;
        },
        {
                &quot;value&quot;: &quot;58px&quot;,
                &quot;label&quot;: &quot;58px&quot;
        },
        {
                &quot;value&quot;: &quot;59px&quot;,
                &quot;label&quot;: &quot;59px&quot;
        },
        {
                &quot;value&quot;: &quot;60px&quot;,
                &quot;label&quot;: &quot;60px&quot;
        },
        {
                &quot;value&quot;: &quot;61px&quot;,
                &quot;label&quot;: &quot;61px&quot;
        },
        {
                &quot;value&quot;: &quot;62px&quot;,
                &quot;label&quot;: &quot;62px&quot;
        },
        {
                &quot;value&quot;: &quot;63px&quot;,
                &quot;label&quot;: &quot;63px&quot;
        },
        {
                &quot;value&quot;: &quot;64px&quot;,
                &quot;label&quot;: &quot;64px&quot;
        },
        {
                &quot;value&quot;: &quot;65px&quot;,
                &quot;label&quot;: &quot;65px&quot;
        },
        {
                &quot;value&quot;: &quot;66px&quot;,
                &quot;label&quot;: &quot;66px&quot;
        },
        {
                &quot;value&quot;: &quot;67px&quot;,
                &quot;label&quot;: &quot;67px&quot;
        },
        {
                &quot;value&quot;: &quot;68px&quot;,
                &quot;label&quot;: &quot;68px&quot;
        },
        {
                &quot;value&quot;: &quot;69px&quot;,
                &quot;label&quot;: &quot;69px&quot;
        },
        {
                &quot;value&quot;: &quot;70px&quot;,
                &quot;label&quot;: &quot;70px&quot;
        },
        {
                &quot;value&quot;: &quot;71px&quot;,
                &quot;label&quot;: &quot;71px&quot;
        },
        {
                &quot;value&quot;: &quot;72px&quot;,
                &quot;label&quot;: &quot;72px&quot;
        },
        {
                &quot;value&quot;: &quot;73px&quot;,
                &quot;label&quot;: &quot;73px&quot;
        },
        {
                &quot;value&quot;: &quot;74px&quot;,
                &quot;label&quot;: &quot;74px&quot;
        },
        {
                &quot;value&quot;: &quot;75px&quot;,
                &quot;label&quot;: &quot;75px&quot;
        },
        {
                &quot;value&quot;: &quot;76px&quot;,
                &quot;label&quot;: &quot;76px&quot;
        },
        {
                &quot;value&quot;: &quot;77px&quot;,
                &quot;label&quot;: &quot;77px&quot;
        },
        {
                &quot;value&quot;: &quot;78px&quot;,
                &quot;label&quot;: &quot;78px&quot;
        },
        {
                &quot;value&quot;: &quot;79px&quot;,
                &quot;label&quot;: &quot;79px&quot;
        },
        {
                &quot;value&quot;: &quot;80px&quot;,
                &quot;label&quot;: &quot;80px&quot;
        },
                {
                &quot;value&quot;: &quot;81px&quot;,
                &quot;label&quot;: &quot;81px&quot;
        },
                {
                &quot;value&quot;: &quot;82px&quot;,
                &quot;label&quot;: &quot;82px&quot;
        },
                {
                &quot;value&quot;: &quot;83px&quot;,
                &quot;label&quot;: &quot;83px&quot;
        },
                {
                &quot;value&quot;: &quot;84px&quot;,
                &quot;label&quot;: &quot;84px&quot;
        },
                {
                &quot;value&quot;: &quot;85px&quot;,
                &quot;label&quot;: &quot;85px&quot;
        },
                {
                &quot;value&quot;: &quot;86px&quot;,
                &quot;label&quot;: &quot;86px&quot;
        },
                {
                &quot;value&quot;: &quot;87px&quot;,
                &quot;label&quot;: &quot;87px&quot;
        },
                {
                &quot;value&quot;: &quot;88px&quot;,
                &quot;label&quot;: &quot;88px&quot;
        },
                {
                &quot;value&quot;: &quot;89px&quot;,
                &quot;label&quot;: &quot;89px&quot;
        },
                {
                &quot;value&quot;: &quot;90px&quot;,
                &quot;label&quot;: &quot;90px&quot;
        },
        {
                &quot;value&quot;: &quot;91px&quot;,
                &quot;label&quot;: &quot;91px&quot;
        },
        {
                &quot;value&quot;: &quot;92px&quot;,
                &quot;label&quot;: &quot;92px&quot;
        },
        {
                &quot;value&quot;: &quot;93px&quot;,
                &quot;label&quot;: &quot;93px&quot;
        },
        {
                &quot;value&quot;: &quot;94px&quot;,
                &quot;label&quot;: &quot;94px&quot;
        },
        {
                &quot;value&quot;: &quot;95px&quot;,
                &quot;label&quot;: &quot;95px&quot;
        },
        {
                &quot;value&quot;: &quot;96px&quot;,
                &quot;label&quot;: &quot;96px&quot;
        },
        {
                &quot;value&quot;: &quot;97px&quot;,
                &quot;label&quot;: &quot;97px&quot;
        },
        {
                &quot;value&quot;: &quot;98px&quot;,
                &quot;label&quot;: &quot;98px&quot;
        },
        {
                &quot;value&quot;: &quot;99px&quot;,
                &quot;label&quot;: &quot;99px&quot;
        },
        {
                &quot;value&quot;: &quot;100px&quot;,
                &quot;label&quot;: &quot;100px&quot;
        }
],
&quot;default&quot;: &quot;85px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_display_title_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        },
        {
                &quot;value&quot;: &quot;51px&quot;,
                &quot;label&quot;: &quot;51px&quot;
        },
        {
                &quot;value&quot;: &quot;52px&quot;,
                &quot;label&quot;: &quot;52px&quot;
        },
        {
                &quot;value&quot;: &quot;53px&quot;,
                &quot;label&quot;: &quot;53px&quot;
        },
        {
                &quot;value&quot;: &quot;54px&quot;,
                &quot;label&quot;: &quot;54px&quot;
        },
        {
                &quot;value&quot;: &quot;55px&quot;,
                &quot;label&quot;: &quot;55px&quot;
        },
        {
                &quot;value&quot;: &quot;56px&quot;,
                &quot;label&quot;: &quot;56px&quot;
        },
        {
                &quot;value&quot;: &quot;57px&quot;,
                &quot;label&quot;: &quot;57px&quot;
        },
        {
                &quot;value&quot;: &quot;58px&quot;,
                &quot;label&quot;: &quot;58px&quot;
        },
        {
                &quot;value&quot;: &quot;59px&quot;,
                &quot;label&quot;: &quot;59px&quot;
        },
        {
                &quot;value&quot;: &quot;60px&quot;,
                &quot;label&quot;: &quot;60px&quot;
        },
        {
                &quot;value&quot;: &quot;61px&quot;,
                &quot;label&quot;: &quot;61px&quot;
        },
        {
                &quot;value&quot;: &quot;62px&quot;,
                &quot;label&quot;: &quot;62px&quot;
        },
        {
                &quot;value&quot;: &quot;63px&quot;,
                &quot;label&quot;: &quot;63px&quot;
        },
        {
                &quot;value&quot;: &quot;64px&quot;,
                &quot;label&quot;: &quot;64px&quot;
        },
        {
                &quot;value&quot;: &quot;65px&quot;,
                &quot;label&quot;: &quot;65px&quot;
        },
        {
                &quot;value&quot;: &quot;66px&quot;,
                &quot;label&quot;: &quot;66px&quot;
        },
        {
                &quot;value&quot;: &quot;67px&quot;,
                &quot;label&quot;: &quot;67px&quot;
        },
        {
                &quot;value&quot;: &quot;68px&quot;,
                &quot;label&quot;: &quot;68px&quot;
        },
        {
                &quot;value&quot;: &quot;69px&quot;,
                &quot;label&quot;: &quot;69px&quot;
        },
        {
                &quot;value&quot;: &quot;70px&quot;,
                &quot;label&quot;: &quot;70px&quot;
        },
        {
                &quot;value&quot;: &quot;71px&quot;,
                &quot;label&quot;: &quot;71px&quot;
        },
        {
                &quot;value&quot;: &quot;72px&quot;,
                &quot;label&quot;: &quot;72px&quot;
        },
        {
                &quot;value&quot;: &quot;73px&quot;,
                &quot;label&quot;: &quot;73px&quot;
        },
        {
                &quot;value&quot;: &quot;74px&quot;,
                &quot;label&quot;: &quot;74px&quot;
        },
        {
                &quot;value&quot;: &quot;75px&quot;,
                &quot;label&quot;: &quot;75px&quot;
        },
        {
                &quot;value&quot;: &quot;76px&quot;,
                &quot;label&quot;: &quot;76px&quot;
        },
        {
                &quot;value&quot;: &quot;77px&quot;,
                &quot;label&quot;: &quot;77px&quot;
        },
        {
                &quot;value&quot;: &quot;78px&quot;,
                &quot;label&quot;: &quot;78px&quot;
        },
        {
                &quot;value&quot;: &quot;79px&quot;,
                &quot;label&quot;: &quot;79px&quot;
        },
        {
                &quot;value&quot;: &quot;80px&quot;,
                &quot;label&quot;: &quot;80px&quot;
        },
                {
                &quot;value&quot;: &quot;81px&quot;,
                &quot;label&quot;: &quot;81px&quot;
        },
                {
                &quot;value&quot;: &quot;82px&quot;,
                &quot;label&quot;: &quot;82px&quot;
        },
                {
                &quot;value&quot;: &quot;83px&quot;,
                &quot;label&quot;: &quot;83px&quot;
        },
                {
                &quot;value&quot;: &quot;84px&quot;,
                &quot;label&quot;: &quot;84px&quot;
        },
                {
                &quot;value&quot;: &quot;85px&quot;,
                &quot;label&quot;: &quot;85px&quot;
        },
                {
                &quot;value&quot;: &quot;86px&quot;,
                &quot;label&quot;: &quot;86px&quot;
        },
                {
                &quot;value&quot;: &quot;87px&quot;,
                &quot;label&quot;: &quot;87px&quot;
        },
                {
                &quot;value&quot;: &quot;88px&quot;,
                &quot;label&quot;: &quot;88px&quot;
        },
                {
                &quot;value&quot;: &quot;89px&quot;,
                &quot;label&quot;: &quot;89px&quot;
        },
                {
                &quot;value&quot;: &quot;90px&quot;,
                &quot;label&quot;: &quot;90px&quot;
        },
        {
                &quot;value&quot;: &quot;91px&quot;,
                &quot;label&quot;: &quot;91px&quot;
        },
        {
                &quot;value&quot;: &quot;92px&quot;,
                &quot;label&quot;: &quot;92px&quot;
        },
        {
                &quot;value&quot;: &quot;93px&quot;,
                &quot;label&quot;: &quot;93px&quot;
        },
        {
                &quot;value&quot;: &quot;94px&quot;,
                &quot;label&quot;: &quot;94px&quot;
        },
        {
                &quot;value&quot;: &quot;95px&quot;,
                &quot;label&quot;: &quot;95px&quot;
        },
        {
                &quot;value&quot;: &quot;96px&quot;,
                &quot;label&quot;: &quot;96px&quot;
        },
        {
                &quot;value&quot;: &quot;97px&quot;,
                &quot;label&quot;: &quot;97px&quot;
        },
        {
                &quot;value&quot;: &quot;98px&quot;,
                &quot;label&quot;: &quot;98px&quot;
        },
        {
                &quot;value&quot;: &quot;99px&quot;,
                &quot;label&quot;: &quot;99px&quot;
        },
        {
                &quot;value&quot;: &quot;100px&quot;,
                &quot;label&quot;: &quot;100px&quot;
        }
],
&quot;default&quot;: &quot;70px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_display_title_variation_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        },
        {
                &quot;value&quot;: &quot;51px&quot;,
                &quot;label&quot;: &quot;51px&quot;
        },
        {
                &quot;value&quot;: &quot;52px&quot;,
                &quot;label&quot;: &quot;52px&quot;
        },
        {
                &quot;value&quot;: &quot;53px&quot;,
                &quot;label&quot;: &quot;53px&quot;
        },
        {
                &quot;value&quot;: &quot;54px&quot;,
                &quot;label&quot;: &quot;54px&quot;
        },
        {
                &quot;value&quot;: &quot;55px&quot;,
                &quot;label&quot;: &quot;55px&quot;
        },
        {
                &quot;value&quot;: &quot;56px&quot;,
                &quot;label&quot;: &quot;56px&quot;
        },
        {
                &quot;value&quot;: &quot;57px&quot;,
                &quot;label&quot;: &quot;57px&quot;
        },
        {
                &quot;value&quot;: &quot;58px&quot;,
                &quot;label&quot;: &quot;58px&quot;
        },
        {
                &quot;value&quot;: &quot;59px&quot;,
                &quot;label&quot;: &quot;59px&quot;
        },
        {
                &quot;value&quot;: &quot;60px&quot;,
                &quot;label&quot;: &quot;60px&quot;
        },
        {
                &quot;value&quot;: &quot;61px&quot;,
                &quot;label&quot;: &quot;61px&quot;
        },
        {
                &quot;value&quot;: &quot;62px&quot;,
                &quot;label&quot;: &quot;62px&quot;
        },
        {
                &quot;value&quot;: &quot;63px&quot;,
                &quot;label&quot;: &quot;63px&quot;
        },
        {
                &quot;value&quot;: &quot;64px&quot;,
                &quot;label&quot;: &quot;64px&quot;
        },
        {
                &quot;value&quot;: &quot;65px&quot;,
                &quot;label&quot;: &quot;65px&quot;
        },
        {
                &quot;value&quot;: &quot;66px&quot;,
                &quot;label&quot;: &quot;66px&quot;
        },
        {
                &quot;value&quot;: &quot;67px&quot;,
                &quot;label&quot;: &quot;67px&quot;
        },
        {
                &quot;value&quot;: &quot;68px&quot;,
                &quot;label&quot;: &quot;68px&quot;
        },
        {
                &quot;value&quot;: &quot;69px&quot;,
                &quot;label&quot;: &quot;69px&quot;
        },
        {
                &quot;value&quot;: &quot;70px&quot;,
                &quot;label&quot;: &quot;70px&quot;
        },
        {
                &quot;value&quot;: &quot;71px&quot;,
                &quot;label&quot;: &quot;71px&quot;
        },
        {
                &quot;value&quot;: &quot;72px&quot;,
                &quot;label&quot;: &quot;72px&quot;
        },
        {
                &quot;value&quot;: &quot;73px&quot;,
                &quot;label&quot;: &quot;73px&quot;
        },
        {
                &quot;value&quot;: &quot;74px&quot;,
                &quot;label&quot;: &quot;74px&quot;
        },
        {
                &quot;value&quot;: &quot;75px&quot;,
                &quot;label&quot;: &quot;75px&quot;
        },
        {
                &quot;value&quot;: &quot;76px&quot;,
                &quot;label&quot;: &quot;76px&quot;
        },
        {
                &quot;value&quot;: &quot;77px&quot;,
                &quot;label&quot;: &quot;77px&quot;
        },
        {
                &quot;value&quot;: &quot;78px&quot;,
                &quot;label&quot;: &quot;78px&quot;
        },
        {
                &quot;value&quot;: &quot;79px&quot;,
                &quot;label&quot;: &quot;79px&quot;
        },
        {
                &quot;value&quot;: &quot;80px&quot;,
                &quot;label&quot;: &quot;80px&quot;
        },
                {
                &quot;value&quot;: &quot;81px&quot;,
                &quot;label&quot;: &quot;81px&quot;
        },
                {
                &quot;value&quot;: &quot;82px&quot;,
                &quot;label&quot;: &quot;82px&quot;
        },
                {
                &quot;value&quot;: &quot;83px&quot;,
                &quot;label&quot;: &quot;83px&quot;
        },
                {
                &quot;value&quot;: &quot;84px&quot;,
                &quot;label&quot;: &quot;84px&quot;
        },
                {
                &quot;value&quot;: &quot;85px&quot;,
                &quot;label&quot;: &quot;85px&quot;
        },
                {
                &quot;value&quot;: &quot;86px&quot;,
                &quot;label&quot;: &quot;86px&quot;
        },
                {
                &quot;value&quot;: &quot;87px&quot;,
                &quot;label&quot;: &quot;87px&quot;
        },
                {
                &quot;value&quot;: &quot;88px&quot;,
                &quot;label&quot;: &quot;88px&quot;
        },
                {
                &quot;value&quot;: &quot;89px&quot;,
                &quot;label&quot;: &quot;89px&quot;
        },
                {
                &quot;value&quot;: &quot;90px&quot;,
                &quot;label&quot;: &quot;90px&quot;
        },
        {
                &quot;value&quot;: &quot;91px&quot;,
                &quot;label&quot;: &quot;91px&quot;
        },
        {
                &quot;value&quot;: &quot;92px&quot;,
                &quot;label&quot;: &quot;92px&quot;
        },
        {
                &quot;value&quot;: &quot;93px&quot;,
                &quot;label&quot;: &quot;93px&quot;
        },
        {
                &quot;value&quot;: &quot;94px&quot;,
                &quot;label&quot;: &quot;94px&quot;
        },
        {
                &quot;value&quot;: &quot;95px&quot;,
                &quot;label&quot;: &quot;95px&quot;
        },
        {
                &quot;value&quot;: &quot;96px&quot;,
                &quot;label&quot;: &quot;96px&quot;
        },
        {
                &quot;value&quot;: &quot;97px&quot;,
                &quot;label&quot;: &quot;97px&quot;
        },
        {
                &quot;value&quot;: &quot;98px&quot;,
                &quot;label&quot;: &quot;98px&quot;
        },
        {
                &quot;value&quot;: &quot;99px&quot;,
                &quot;label&quot;: &quot;99px&quot;
        },
        {
                &quot;value&quot;: &quot;100px&quot;,
                &quot;label&quot;: &quot;100px&quot;
        }
],
&quot;default&quot;: &quot;85px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_display_title_variation_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        },
        {
                &quot;value&quot;: &quot;51px&quot;,
                &quot;label&quot;: &quot;51px&quot;
        },
        {
                &quot;value&quot;: &quot;52px&quot;,
                &quot;label&quot;: &quot;52px&quot;
        },
        {
                &quot;value&quot;: &quot;53px&quot;,
                &quot;label&quot;: &quot;53px&quot;
        },
        {
                &quot;value&quot;: &quot;54px&quot;,
                &quot;label&quot;: &quot;54px&quot;
        },
        {
                &quot;value&quot;: &quot;55px&quot;,
                &quot;label&quot;: &quot;55px&quot;
        },
        {
                &quot;value&quot;: &quot;56px&quot;,
                &quot;label&quot;: &quot;56px&quot;
        },
        {
                &quot;value&quot;: &quot;57px&quot;,
                &quot;label&quot;: &quot;57px&quot;
        },
        {
                &quot;value&quot;: &quot;58px&quot;,
                &quot;label&quot;: &quot;58px&quot;
        },
        {
                &quot;value&quot;: &quot;59px&quot;,
                &quot;label&quot;: &quot;59px&quot;
        },
        {
                &quot;value&quot;: &quot;60px&quot;,
                &quot;label&quot;: &quot;60px&quot;
        },
        {
                &quot;value&quot;: &quot;61px&quot;,
                &quot;label&quot;: &quot;61px&quot;
        },
        {
                &quot;value&quot;: &quot;62px&quot;,
                &quot;label&quot;: &quot;62px&quot;
        },
        {
                &quot;value&quot;: &quot;63px&quot;,
                &quot;label&quot;: &quot;63px&quot;
        },
        {
                &quot;value&quot;: &quot;64px&quot;,
                &quot;label&quot;: &quot;64px&quot;
        },
        {
                &quot;value&quot;: &quot;65px&quot;,
                &quot;label&quot;: &quot;65px&quot;
        },
        {
                &quot;value&quot;: &quot;66px&quot;,
                &quot;label&quot;: &quot;66px&quot;
        },
        {
                &quot;value&quot;: &quot;67px&quot;,
                &quot;label&quot;: &quot;67px&quot;
        },
        {
                &quot;value&quot;: &quot;68px&quot;,
                &quot;label&quot;: &quot;68px&quot;
        },
        {
                &quot;value&quot;: &quot;69px&quot;,
                &quot;label&quot;: &quot;69px&quot;
        },
        {
                &quot;value&quot;: &quot;70px&quot;,
                &quot;label&quot;: &quot;70px&quot;
        },
        {
                &quot;value&quot;: &quot;71px&quot;,
                &quot;label&quot;: &quot;71px&quot;
        },
        {
                &quot;value&quot;: &quot;72px&quot;,
                &quot;label&quot;: &quot;72px&quot;
        },
        {
                &quot;value&quot;: &quot;73px&quot;,
                &quot;label&quot;: &quot;73px&quot;
        },
        {
                &quot;value&quot;: &quot;74px&quot;,
                &quot;label&quot;: &quot;74px&quot;
        },
        {
                &quot;value&quot;: &quot;75px&quot;,
                &quot;label&quot;: &quot;75px&quot;
        },
        {
                &quot;value&quot;: &quot;76px&quot;,
                &quot;label&quot;: &quot;76px&quot;
        },
        {
                &quot;value&quot;: &quot;77px&quot;,
                &quot;label&quot;: &quot;77px&quot;
        },
        {
                &quot;value&quot;: &quot;78px&quot;,
                &quot;label&quot;: &quot;78px&quot;
        },
        {
                &quot;value&quot;: &quot;79px&quot;,
                &quot;label&quot;: &quot;79px&quot;
        },
        {
                &quot;value&quot;: &quot;80px&quot;,
                &quot;label&quot;: &quot;80px&quot;
        },
                {
                &quot;value&quot;: &quot;81px&quot;,
                &quot;label&quot;: &quot;81px&quot;
        },
                {
                &quot;value&quot;: &quot;82px&quot;,
                &quot;label&quot;: &quot;82px&quot;
        },
                {
                &quot;value&quot;: &quot;83px&quot;,
                &quot;label&quot;: &quot;83px&quot;
        },
                {
                &quot;value&quot;: &quot;84px&quot;,
                &quot;label&quot;: &quot;84px&quot;
        },
                {
                &quot;value&quot;: &quot;85px&quot;,
                &quot;label&quot;: &quot;85px&quot;
        },
                {
                &quot;value&quot;: &quot;86px&quot;,
                &quot;label&quot;: &quot;86px&quot;
        },
                {
                &quot;value&quot;: &quot;87px&quot;,
                &quot;label&quot;: &quot;87px&quot;
        },
                {
                &quot;value&quot;: &quot;88px&quot;,
                &quot;label&quot;: &quot;88px&quot;
        },
                {
                &quot;value&quot;: &quot;89px&quot;,
                &quot;label&quot;: &quot;89px&quot;
        },
                {
                &quot;value&quot;: &quot;90px&quot;,
                &quot;label&quot;: &quot;90px&quot;
        },
        {
                &quot;value&quot;: &quot;91px&quot;,
                &quot;label&quot;: &quot;91px&quot;
        },
        {
                &quot;value&quot;: &quot;92px&quot;,
                &quot;label&quot;: &quot;92px&quot;
        },
        {
                &quot;value&quot;: &quot;93px&quot;,
                &quot;label&quot;: &quot;93px&quot;
        },
        {
                &quot;value&quot;: &quot;94px&quot;,
                &quot;label&quot;: &quot;94px&quot;
        },
        {
                &quot;value&quot;: &quot;95px&quot;,
                &quot;label&quot;: &quot;95px&quot;
        },
        {
                &quot;value&quot;: &quot;96px&quot;,
                &quot;label&quot;: &quot;96px&quot;
        },
        {
                &quot;value&quot;: &quot;97px&quot;,
                &quot;label&quot;: &quot;97px&quot;
        },
        {
                &quot;value&quot;: &quot;98px&quot;,
                &quot;label&quot;: &quot;98px&quot;
        },
        {
                &quot;value&quot;: &quot;99px&quot;,
                &quot;label&quot;: &quot;99px&quot;
        },
        {
                &quot;value&quot;: &quot;100px&quot;,
                &quot;label&quot;: &quot;100px&quot;
        }
],
&quot;default&quot;: &quot;70px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_display_title_small_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;50px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_display_title_small_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;35px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_display_title_small_variation_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;50px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_display_title_small_variation_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
        {
                &quot;value&quot;: &quot;10px&quot;,
                &quot;label&quot;: &quot;10px&quot;
        },
        {
                &quot;value&quot;: &quot;11px&quot;,
                &quot;label&quot;: &quot;11px&quot;
        },
        {
                &quot;value&quot;: &quot;12px&quot;,
                &quot;label&quot;: &quot;12px&quot;
        },
        {
                &quot;value&quot;: &quot;13px&quot;,
                &quot;label&quot;: &quot;13px&quot;
        },
        {
                &quot;value&quot;: &quot;14px&quot;,
                &quot;label&quot;: &quot;14px&quot;
        },
        {
                &quot;value&quot;: &quot;15px&quot;,
                &quot;label&quot;: &quot;15px&quot;
        },
        {
                &quot;value&quot;: &quot;16px&quot;,
                &quot;label&quot;: &quot;16px&quot;
        },
        {
                &quot;value&quot;: &quot;17px&quot;,
                &quot;label&quot;: &quot;17px&quot;
        },
        {
                &quot;value&quot;: &quot;18px&quot;,
                &quot;label&quot;: &quot;18px&quot;
        },
        {
                &quot;value&quot;: &quot;19px&quot;,
                &quot;label&quot;: &quot;19px&quot;
        },
        {
                &quot;value&quot;: &quot;20px&quot;,
                &quot;label&quot;: &quot;20px&quot;
        },
        {
                &quot;value&quot;: &quot;21px&quot;,
                &quot;label&quot;: &quot;21px&quot;
        },
        {
                &quot;value&quot;: &quot;22px&quot;,
                &quot;label&quot;: &quot;22px&quot;
        },
        {
                &quot;value&quot;: &quot;23px&quot;,
                &quot;label&quot;: &quot;23px&quot;
        },
        {
                &quot;value&quot;: &quot;24px&quot;,
                &quot;label&quot;: &quot;24px&quot;
        },
        {
                &quot;value&quot;: &quot;25px&quot;,
                &quot;label&quot;: &quot;25px&quot;
        },
        {
                &quot;value&quot;: &quot;26px&quot;,
                &quot;label&quot;: &quot;26px&quot;
        },
        {
                &quot;value&quot;: &quot;27px&quot;,
                &quot;label&quot;: &quot;27px&quot;
        },
        {
                &quot;value&quot;: &quot;28px&quot;,
                &quot;label&quot;: &quot;28px&quot;
        },
        {
                &quot;value&quot;: &quot;29px&quot;,
                &quot;label&quot;: &quot;29px&quot;
        },
        {
                &quot;value&quot;: &quot;30px&quot;,
                &quot;label&quot;: &quot;30px&quot;
        },
        {
                &quot;value&quot;: &quot;31px&quot;,
                &quot;label&quot;: &quot;31px&quot;
        },
        {
                &quot;value&quot;: &quot;32px&quot;,
                &quot;label&quot;: &quot;32px&quot;
        },
        {
                &quot;value&quot;: &quot;33px&quot;,
                &quot;label&quot;: &quot;33px&quot;
        },
        {
                &quot;value&quot;: &quot;34px&quot;,
                &quot;label&quot;: &quot;34px&quot;
        },
        {
                &quot;value&quot;: &quot;35px&quot;,
                &quot;label&quot;: &quot;35px&quot;
        },
        {
                &quot;value&quot;: &quot;36px&quot;,
                &quot;label&quot;: &quot;36px&quot;
        },
        {
                &quot;value&quot;: &quot;37px&quot;,
                &quot;label&quot;: &quot;37px&quot;
        },
        {
                &quot;value&quot;: &quot;38px&quot;,
                &quot;label&quot;: &quot;38px&quot;
        },
        {
                &quot;value&quot;: &quot;39px&quot;,
                &quot;label&quot;: &quot;39px&quot;
        },
        {
                &quot;value&quot;: &quot;40px&quot;,
                &quot;label&quot;: &quot;40px&quot;
        },
        {
                &quot;value&quot;: &quot;41px&quot;,
                &quot;label&quot;: &quot;41px&quot;
        },
        {
                &quot;value&quot;: &quot;42px&quot;,
                &quot;label&quot;: &quot;42px&quot;
        },
        {
                &quot;value&quot;: &quot;43px&quot;,
                &quot;label&quot;: &quot;43px&quot;
        },
        {
                &quot;value&quot;: &quot;44px&quot;,
                &quot;label&quot;: &quot;44px&quot;
        },
        {
                &quot;value&quot;: &quot;45px&quot;,
                &quot;label&quot;: &quot;45px&quot;
        },
        {
                &quot;value&quot;: &quot;46px&quot;,
                &quot;label&quot;: &quot;46px&quot;
        },
        {
                &quot;value&quot;: &quot;47px&quot;,
                &quot;label&quot;: &quot;47px&quot;
        },
        {
                &quot;value&quot;: &quot;48px&quot;,
                &quot;label&quot;: &quot;48px&quot;
        },
        {
                &quot;value&quot;: &quot;49px&quot;,
                &quot;label&quot;: &quot;49px&quot;
        },
        {
                &quot;value&quot;: &quot;50px&quot;,
                &quot;label&quot;: &quot;50px&quot;
        }
],
&quot;default&quot;: &quot;35px&quot;
}',
    1 => 'select_json',
  ),
  'udt_ego_impact_caption_font' => 
  array (
    0 => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
    1 => 'select',
  ),
  'udt_ego_impact_caption_font_variation' => 
  array (
    0 => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
    1 => 'select',
  ),
  'udt_ego_striped_caption_font' => 
  array (
    0 => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
    1 => 'select',
  ),
  'udt_ego_striped_caption_font_variation' => 
  array (
    0 => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
    1 => 'select',
  ),
  'udt_ego_boxed_caption_title_font' => 
  array (
    0 => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
    1 => 'select',
  ),
  'udt_ego_boxed_caption_title_font_variation' => 
  array (
    0 => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
    1 => 'select',
  ),
  'udt_ego_elegant_caption_title_font' => 
  array (
    0 => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
    1 => 'select',
  ),
  'udt_ego_elegant_caption_title_font_variation' => 
  array (
    0 => 'Abril Fatface,Alfa Slab One,Allerta,Anton,Armata,Brawler,Cabin Condensed,Candal,Cantata One,Changa One,Coda,Coda Caption,Comfortaa,Contrail One,Coustard,Days One,Diplomata,Enriqueta,Francois One,Glegoo,Hammersmith One,IM Fell French Canon SC,Istok Web,Karla,Lobster,Mate SC,Maven Pro,Molengo,Montserrat,Noticia Text,Oleo Script,Open Sans,Passion One,Pontano Sans,Prata,PT Mono,Questrial,Quicksand,Racing Sans One,Source Sans Pro,Telex,Viga',
    1 => 'select',
  ),
  'udt_ego_epic_slideshow' => 
  array (
    0 => '0',
    1 => 'toggle_switch',
  ),
  'udt_ego_epic_autoplay' => 
  array (
    0 => '1',
    1 => 'toggle_switch',
  ),
  'udt_ego_epic_slide_timer' => 
  array (
    0 => '3000',
    1 => 'input_text',
  ),
  'udt_ego_epic_slide_animation_speed' => 
  array (
    0 => '600',
    1 => 'input_text',
  ),
  'udt_ego_epic_slide_animation' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;none&quot;, &quot;label&quot;:&quot;None&quot; }, { &quot;value&quot;:&quot;fade&quot;, &quot;label&quot;:&quot;Fade&quot; }, { &quot;value&quot;:&quot;leftToRight&quot;, &quot;label&quot;:&quot;Left to Right&quot; }, { &quot;value&quot;:&quot;topToBottom&quot;, &quot;label&quot;:&quot;Top to Bottom&quot; } ], &quot;default&quot;:&quot;leftToRight&quot; }',
    1 => 'select_json',
  ),
  'udt_ego_epic_mobile_slide_animation' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;none&quot;, &quot;label&quot;:&quot;None&quot; }, { &quot;value&quot;:&quot;fade&quot;, &quot;label&quot;:&quot;Fade&quot; }, { &quot;value&quot;:&quot;leftToRight&quot;, &quot;label&quot;:&quot;Left to Right&quot; }, { &quot;value&quot;:&quot;topToBottom&quot;, &quot;label&quot;:&quot;Top to Bottom&quot; } ], &quot;default&quot;:&quot;leftToRight&quot; }',
    1 => 'select_json',
  ),
  'udt_ego_epic_easing' => 
  array (
    0 => 'easeInQuad,easeInQuad,easeInOutQuad,easeInCubic,easeOutCubic,easeInOutCubic,easeInQuart,easeOutQuart,easeInOutQuart,easeInQuint,easeOutQuint,easeInOutQuint,easeInSine,easeOutSine,easeInOutSine,easeInExpo,easeOutExpo,easeInOutExpo,easeInCirc,easeOutCirc,easeInOutCirc',
    1 => 'select',
  ),
  'udt_ego_flexslider_autoplay' => 
  array (
    0 => '1',
    1 => 'toggle_switch',
  ),
  'udt_ego_flexslider_slide_timer' => 
  array (
    0 => '3000',
    1 => 'input_text',
  ),
  'udt_ego_flexslider_slide_animation_speed' => 
  array (
    0 => '600',
    1 => 'input_text',
  ),
  'udt_ego_chart_bar_color_odd' => 
  array (
    0 => 'ff005a',
    1 => 'colorpicker',
  ),
  'udt_ego_chart_border_color_odd' => 
  array (
    0 => 'f4f4f5',
    1 => 'colorpicker',
  ),
  'udt_ego_chart_bar_color_even' => 
  array (
    0 => 'ff005a',
    1 => 'colorpicker',
  ),
  'udt_ego_chart_border_color_even' => 
  array (
    0 => 'f4f4f5',
    1 => 'colorpicker',
  ),
  'udt_ego_map_controls' => 
  array (
    0 => '1',
    1 => 'toggle_switch',
  ),
  'udt_ego_map_marker' => 
  array (
    0 => 'map_marker.png',
    1 => 'input_upload',
  ),
  'udt_ego_css_editor' => 
  array (
    0 => '',
    1 => 'textarea',
  ),
);
?>