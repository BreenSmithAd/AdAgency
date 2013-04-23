<?php
include_once('g-fonts.php');
echo '
#fancybox-outer,#fancybox-content iframe {
	background-image:url('.returnUploadedImageByID('lightbox_logo').');
}

.header {
	background:#'.returnOptionValue('header_background_color').';
	background:rgba('.implode(',',hex2rgb(returnOptionValue('header_background_color'))).','.returnOptionValue('header_background_opacity').');
}

.header .inner .menu ul li a {
	color:#'.returnOptionValue('menu_link_color').';
}

.header .inner .menu ul li a:hover {
	color:#'.returnOptionValue('menu_link_hover_color').';
}

.header .inner .menu ul li.current_page_item a, .header .inner .menu ul li.current-menu-item a {
	background:#'.returnOptionValue('active_menu_background_color').';
	color:#'.returnOptionValue('active_menu_link_color').';
}

.folio-thumb a .folio-thumb-rollover, .round-thumb a .thumb-rollover, .thumb a .thumb-rollover {
	background:#'.returnOptionValue('thumb_rollover_color').';
	background:rgba('.implode(',',hex2rgb(returnOptionValue('thumb_rollover_color'))).',0.9);
}

.folio-thumb.active {
	-webkit-box-shadow:inset 0px 0px 0px 10px rgba('.implode(',',hex2rgb(returnOptionValue('thumb_rollover_color'))).',0.9) !important;
	-moz-box-shadow:inset 0px 0px 0px 10px rgba('.implode(',',hex2rgb(returnOptionValue('thumb_rollover_color'))).',0.9) !important;
	box-shadow:inset 0px 0px 0px 10px rgba('.implode(',',hex2rgb(returnOptionValue('thumb_rollover_color'))).',0.9) !important;
}

.section.odd .chart-container ul li div {
	background-color:#'.returnOptionValue('chart_bar_color_odd').';
	-webkit-box-shadow:inset 1px 0 0 #'.returnOptionValue('chart_border_color_odd').';
	-moz-box-shadow:inset 1px 0 0 #'.returnOptionValue('chart_border_color_odd').';
	box-shadow:inset 1px 0 0 #'.returnOptionValue('chart_border_color_odd').';
}

.section.even .chart-container ul li div {
	background-color:#'.returnOptionValue('chart_bar_color_even').';
	-webkit-box-shadow:inset 1px 0 0 #'.returnOptionValue('chart_border_color_even').';
	-moz-box-shadow:inset 1px 0 0 #'.returnOptionValue('chart_border_color_even').';
	box-shadow:inset 1px 0 0 #'.returnOptionValue('chart_border_color_even').';
}

.submitTheme, #commentform #submit {
	background:#'.returnOptionValue('default_button_background_color').' !important;
	color:#'.returnOptionValue('default_button_text_color').' !important;
}

#footer {
	background:#'.returnOptionValue('footer_background_color').' url('.returnUploadedImageByID('footer_background_pattern').');
	color:#'.returnOptionValue('footer_text_color').';
}

#footer a {
	color:#'.returnOptionValue('footer_link_color').';
}

#footer a:hover {
	color:#'.returnOptionValue('footer_link_hover_color').';
}
';

if(returnOptionValue('use_section_background_patter_odd')=='0') {
echo '
.section.odd {
	background:#'.returnOptionValue('section_background_color_odd').';
}
';
} else {
echo '
.section.odd {
	background:#'.returnOptionValue('section_background_color_odd').' url('.returnUploadedImageByID('section_background_pattern_odd').');
}
';
}

if(returnOptionValue('use_section_background_patter_even')=='0') {
echo '
.section.even {
	background:#'.returnOptionValue('section_background_color_even').';
}
';
} else {
echo '
.section.even {
	background:#'.returnOptionValue('section_background_color_even').' url('.returnUploadedImageByID('section_background_pattern_even').');
}
';
}

echo '
.section.odd .divider {
	border-color:#'.returnOptionValue('divider_color_odd').';
}
.section.odd .section-title, .section.odd .blog-post, .section.odd .blog-post.sticky, .section.odd #sidebar ul li, .section.odd .blog-post-comments, .section.odd .comment_list li {
	border-color:#'.returnOptionValue('divider_color_odd').';
}

.section.even .divider {
	border-color:#'.returnOptionValue('divider_color_even').';
}
.section.even .section-title, .section.even .blog-post, .section.even .blog-post.sticky, .section.even #sidebar ul li, .section.even .blog-post-comments, .section.even .comment_list li {
	border-color:#'.returnOptionValue('divider_color_even').';
}

.section.odd h1, .section.odd h2, .section.odd h3, .section.odd h4, .section.odd h5, .section.odd h6,
.section.odd .section-title, 
.section.odd .section-title h1, .section.odd .section-title h2, .section.odd .section-title h3, 
.section.odd .section-title h4, .section.odd .section-title h5, .section.odd .section-title h6,
.section.odd .section-title h1 a, .section.odd .section-title h2 a, .section.odd .section-title h3 a, 
.section.odd .section-title h4 a, .section.odd .section-title h5 a, .section.odd .section-title h6 a,
.section.odd .blog-post-content h3 a {
	color:#'.returnOptionValue('title_color_odd').';
}

.section.odd h1 span, .section.odd h2 span, .section.odd h3 span, .section.odd h4 span, .section.odd h5 span, .section.odd h6 span,
.section.odd .section-title span, 
.section.odd .section-title h1 span, .section.odd .section-title h2 span, .section.odd .section-title h3 span, 
.section.odd .section-title h4 span, .section.odd .section-title h5 span, .section.odd .section-title h6 span, 
.section.odd .section-title h1 span a, .section.odd .section-title h2 span a, .section.odd .section-title h3 span a, 
.section.odd .section-title h4 span a, .section.odd .section-title h5 span a, .section.odd .section-title h6 span a,
.section.odd .blog-post-info {
	color:#'.returnOptionValue('title_color_variation_odd').';
}

.section.even h1, .section.even h2, .section.even h3, .section.even h4, .section.even h5, .section.even h6,
.section.even .section-title, 
.section.even .section-title h1, .section.even .section-title h2, .section.even .section-title h3, 
.section.even .section-title h4, .section.even .section-title h5, .section.even .section-title h6,
.section.even .section-title h1 a, .section.even .section-title h2 a, .section.even .section-title h3 a, 
.section.even .section-title h4 a, .section.even .section-title h5 a, .section.even .section-title h6 a,
.section.even .blog-post-content h3 a {
	color:#'.returnOptionValue('title_color_even').';
}

.section.even h1 span, .section.even h2 span, .section.even h3 span, .section.even h4 span, .section.even h5 span, .section.even h6 span,
.section.even .section-title span, 
.section.even .section-title h1 span, .section.even .section-title h2 span, .section.even .section-title h3 span, 
.section.even .section-title h4 span, .section.even .section-title h5 span, .section.even .section-title h6 span, 
.section.even .section-title h1 span a, .section.even .section-title h2 span a, .section.even .section-title h3 span a, 
.section.even .section-title h4 span a, .section.even .section-title h5 span a, .section.even .section-title h6 span a,
.section.even .blog-post-info {
	color:#'.returnOptionValue('title_color_variation_even').';
}

.section.odd, .section.odd blockquote, .section.odd #sidebar ul li ul li a {
	color:#'.returnOptionValue('text_color_odd').';
}

.section.even, .section.even blockquote, .section.even #sidebar ul li ul li a {
	color:#'.returnOptionValue('text_color_even').';
}

.section.odd a, .section.odd #comments a.comment-reply-link, .section.odd .blog-post.sticky h3.post-title a {
	color:#'.returnOptionValue('link_color_odd').';
}

.section.odd a:hover, .section.odd #comments a.comment-reply-link:hover, .section.odd #sidebar ul li ul li a:hover {
	color:#'.returnOptionValue('link_hover_color_odd').';
}

.section.even a, .section.even #comments a.comment-reply-link, .section.even .blog-post.sticky h3.post-title a {
	color:#'.returnOptionValue('link_color_even').';
}

.section.even a:hover, .section.even #comments a.comment-reply-link:hover, .section.even #sidebar ul li ul li a:hover {
	color:#'.returnOptionValue('link_hover_color_even').';
}

.section.odd blockquote {
	border-color:#'.returnOptionValue('default_blockquote_border_color_odd').';
}

.section.even blockquote {
	border-color:#'.returnOptionValue('default_blockquote_border_color_even').';
}

.section.odd blockquote.quote {
	background-image:url('.returnUploadedImageByID('quote_blockquote_graphic_odd').');
}

.section.even blockquote.quote {
	background-image:url('.returnUploadedImageByID('quote_blockquote_graphic_even').');
}

.section.odd input[type=text], .section.odd textarea,
.section.odd input[type=text].required, .section.odd textarea.required,
.section.odd #sidebar ul li .txtFld {
	background-color:#'.returnOptionValue('form_input_background_color_odd').';
	border-color:#'.returnOptionValue('form_input_border_color_odd').';
	color:#'.returnOptionValue('form_input_text_color_odd').';
}

.section.even input[type=text], .section.even textarea,
.section.even input[type=text].required, .section.even textarea.required,
.section.even #sidebar ul li .txtFld {
	background-color:#'.returnOptionValue('form_input_background_color_even').';
	border-color:#'.returnOptionValue('form_input_border_color_even').';
	color:#'.returnOptionValue('form_input_text_color_even').';
}

.section.odd input[type=text].required, .section.odd textarea.required {
	background-image:url('.returnUploadedImageByID('form_input_required_field_graphic_odd').');
}

.section.even input[type=text].required, .section.even textarea.required {
	background-image:url('.returnUploadedImageByID('form_input_required_field_graphic_even').');
}

.section.odd input[type=text]:hover, .section.odd textarea:hover, .section.odd #sidebar ul li .txtFld:hover {
	background-color:#'.returnOptionValue('form_input_background_hover_color_odd').';
	border-color:#'.returnOptionValue('form_input_border_hover_color_odd').';
	color:#'.returnOptionValue('form_input_text_hover_color_odd').';
}

.section.even input[type=text]:hover, .section.even textarea:hover, .section.even #sidebar ul li .txtFld:hover {
	background-color:#'.returnOptionValue('form_input_background_hover_color_even').';
	border-color:#'.returnOptionValue('form_input_border_hover_color_even').';
	color:#'.returnOptionValue('form_input_text_hover_color_even').';
}

.section.odd input[type=text]:focus, .section.odd textarea:focus, .section.odd #sidebar ul li .txtFld:focus {
	background-color:#'.returnOptionValue('form_input_background_active_color_odd').';
	border-color:#'.returnOptionValue('form_input_border_active_color_odd').';
	color:#'.returnOptionValue('form_input_text_active_color_odd').';
}

.section.even input[type=text]:focus, .section.even textarea:focus, .section.even #sidebar ul li .txtFld:focus {
	background-color:#'.returnOptionValue('form_input_background_active_color_even').';
	border-color:#'.returnOptionValue('form_input_border_active_color_even').';
	color:#'.returnOptionValue('form_input_text_active_color_even').';
}

.section.odd .loading-animation {
	background-image:url('.returnUploadedImageByID('contact_loading_gif_odd').');
}

.section.even .loading-animation {
	background-image:url('.returnUploadedImageByID('contact_loading_gif_even').');
}

.section.odd .accordion dt, .section.odd .tabs .tabs_nav li {
	background-color:#'.returnOptionValue('accordions_tabs_label_background_color_odd').';
}
.section.odd .accordion dt, .section.odd .accordion dd, .section.odd .tabs .tabs_nav li, .section.odd .tabs .tabs_content {
	border-color:#'.returnOptionValue('accordions_tabs_label_background_color_odd').';
}
.section.odd .accordion dt.active, .section.odd .tabs .tabs_nav li.active {
	background-color:#'.returnOptionValue('accordions_tabs_active_label_background_color_odd').';
}
.section.odd .accordion dt a, .section.odd .tabs .tabs_nav li a, .section.odd .accordion dt a:hover, .section.odd .tabs .tabs_nav li a:hover {
	color:#'.returnOptionValue('accordions_tabs_label_text_color_odd').';
}
.section.odd .accordion dt.active a, .section.odd .tabs .tabs_nav li.active a, .section.odd .accordion dt.active a:hover, .section.odd .tabs .tabs_nav li.active a:hover {
	color:#'.returnOptionValue('accordions_tabs_active_label_font_color_odd').';
}
.section.odd .accordion dd, .section.odd .tabs .tabs_content {
	background-color:#'.returnOptionValue('accordions_tabs_background_color_odd').';
}

.section.even .accordion dt, .section.even .tabs .tabs_nav li {
	background-color:#'.returnOptionValue('accordions_tabs_label_background_color_even').';
}
.section.even .accordion dt, .section.even .accordion dd, .section.even .tabs .tabs_nav li, .section.even .tabs .tabs_content {
	border-color:#'.returnOptionValue('accordions_tabs_label_background_color_even').';
}
.section.even .accordion dt.active, .section.even .tabs .tabs_nav li.active {
	background-color:#'.returnOptionValue('accordions_tabs_active_label_background_color_even').';
}
.section.even .accordion dt a, .section.even .tabs .tabs_nav li a, .section.even .accordion dt a:hover, .section.even .tabs .tabs_nav li a:hover {
	color:#'.returnOptionValue('accordions_tabs_label_text_color_even').';
}
.section.even .accordion dt.active a, .section.even .tabs .tabs_nav li.active a, .section.even .accordion dt.active a:hover, .section.even .tabs .tabs_nav li.active a:hover {
	color:#'.returnOptionValue('accordions_tabs_active_label_font_color_even').';
}
.section.even .accordion dd, .section.even .tabs .tabs_content {
	background-color:#'.returnOptionValue('accordions_tabs_background_color_even').';
}

.section.odd .pricing_table .pricing_table_col, .section.odd .pricing_table .pricing_table_col > ul > li {
	border-color:#'.returnOptionValue('pricing_tables_border_color_odd').';
}
.section.odd .pricing_table .pricing_table_col > ul > li:first-child {
	background-color:#'.returnOptionValue('pricing_tables_header_background_color_odd').';
	color:#'.returnOptionValue('pricing_tables_header_text_color_odd').';
}
.section.odd .pricing_table .pricing_table_col > ul > li.pricing_table_bg {
	background-color:#'.returnOptionValue('pricing_tables_price_background_color_odd').';
	color:#'.returnOptionValue('pricing_tables_price_text_color_odd').';
}
.section.odd .pricing_table .pricing_table_col > ul > li span.price, .section.odd .pricing_table .pricing_table_col > ul > li span.price_affix {
	color:#'.returnOptionValue('pricing_tables_price_text_color_odd').';
}
.section.odd .pricing_table .pricing_table_col > ul > li.pricing_table_bg {
	background:#'.returnOptionValue('pricing_tables_price_background_color_odd').';
}
.section.odd .pricing_table .pricing_table_col {
	background:#'.returnOptionValue('pricing_tables_background_color_odd').';
}
.section.odd .pricing_table .pricing_table_col > ul > li {
	color:#'.returnOptionValue('pricing_tables_text_color_odd').';
}

.section.even .pricing_table .pricing_table_col, .section.even .pricing_table .pricing_table_col > ul > li {
	border-color:#'.returnOptionValue('pricing_tables_border_color_even').';
}
.section.even .pricing_table .pricing_table_col > ul > li:first-child {
	background-color:#'.returnOptionValue('pricing_tables_header_background_color_even').';
	color:#'.returnOptionValue('pricing_tables_header_text_color_even').';
}
.section.even .pricing_table .pricing_table_col > ul > li.pricing_table_bg {
	background-color:#'.returnOptionValue('pricing_tables_price_background_color_even').';
	color:#'.returnOptionValue('pricing_tables_price_text_color_even').';
}
.section.even .pricing_table .pricing_table_col > ul > li span.price, .section.even .pricing_table .pricing_table_col > ul > li span.price_affix {
	color:#'.returnOptionValue('pricing_tables_price_text_color_even').';
}
.section.even .pricing_table .pricing_table_col > ul > li.pricing_table_bg {
	background:#'.returnOptionValue('pricing_tables_price_background_color_even').';
}
.section.even .pricing_table .pricing_table_col {
	background:#'.returnOptionValue('pricing_tables_background_color_even').';
}
.section.even .pricing_table .pricing_table_col > ul > li {
	color:#'.returnOptionValue('pricing_tables_text_color_even').';
}

.epicSlider .epic-logo {
	background:#'.returnOptionValue('slider_logo_background_color').' url('.returnUploadedImageByID('epic_slider_logo').') no-repeat center center;
}
.epicSlider.theme-default #epic-navigation .nav-button #next:hover, 
.epicSlider.theme-default #epic-navigation .nav-button #prev:hover,
.epicSlider.theme-default #epic-navigation .nav-button #progress,
.epic-caption-striped a:hover span {
	background-color:#'.returnOptionValue('slider_theme_color').';
}
.epic-caption-impact a:hover, .epic-caption-impact a span:hover, .epic-caption-boxed a, .epic-caption-elegant a {
	color:#'.returnOptionValue('slider_theme_color').';
}
.epicSlider.theme-default #epic-overlay, .teaser .info-container {
	background-image:url('.returnUploadedImageByID('slider_overlay_pattern').');
}

.section.odd #ajaxwrapper #loader, .section.even #ajaxwrapper #loader {
	background:url('.returnUploadedImageByID('portfolio_loading_gif').') center -40px no-repeat;
}
#folio-navigation ul li#prevProject a {
	background: rgba('.implode(',',hex2rgb(returnOptionValue('portfolio_controls_color'))).',0.5) url('.get_template_directory_uri().'/images/project-nav.png) 0 0 no-repeat;
}
#folio-navigation ul li#nextProject a {
	background: rgba('.implode(',',hex2rgb(returnOptionValue('portfolio_controls_color'))).',0.5) url('.get_template_directory_uri().'/images/project-nav.png) 0 -39px no-repeat;
}
#folio-navigation ul li#closeProjectMobile a {
	background: rgba('.implode(',',hex2rgb(returnOptionValue('portfolio_controls_color'))).',0.3) url('.get_template_directory_uri().'/images/project-close.png) center center no-repeat;
}
#closeProject a {
	background: rgba('.implode(',',hex2rgb(returnOptionValue('portfolio_controls_color'))).',0.5) url('.get_template_directory_uri().'/images/project-close.png) center -9.5px no-repeat;
}
#closeProject a:hover{
	background: rgba('.implode(',',hex2rgb(returnOptionValue('portfolio_controls_hover_color'))).',1) url('.get_template_directory_uri().'/images/project-close.png) center -9.5px no-repeat !important;
}
#folio-navigation ul li#prevProject a:hover {
	background: rgba('.implode(',',hex2rgb(returnOptionValue('portfolio_controls_hover_color'))).',1) url('.get_template_directory_uri().'/images/project-nav.png)0 0;
}
#folio-navigation ul li#nextProject a:hover {
	background: rgba('.implode(',',hex2rgb(returnOptionValue('portfolio_controls_hover_color'))).',1) url('.get_template_directory_uri().'/images/project-nav.png)0 -39px;
}
#folio-navigation ul li#closeProjectMobile a:hover {
	background: rgba('.implode(',',hex2rgb(returnOptionValue('portfolio_controls_hover_color'))).',1) url('.get_template_directory_uri().'/images/project-close.png) center 0 no-repeat;
}
#folio-navigation ul li#prevProject a.disabled {
	background: rgba('.implode(',',hex2rgb(returnOptionValue('portfolio_disabled_controls_color'))).',0.3) url('.get_template_directory_uri().'/images/project-nav.png)0 -80px !important;
}
#folio-navigation ul li#nextProject a.disabled {
	background: rgba('.implode(',',hex2rgb(returnOptionValue('portfolio_disabled_controls_color'))).',0.3) url('.get_template_directory_uri().'/images/project-nav.png)0 -120px !important;
}

h1, h2, h3, h4, h5, h6,
h1 small, h2 small, h3 small, h4 small, h5 small, h6 small,
.section-title {
	font-family:'.$g_fonts[returnOptionValue('title_font')][1].';
}

h1 span, h2 span, h3 span, h4 span, h5 span, h6 span,
h1 small span, h2 small span, h3 small span, h4 small span, h5 small span, h6 small span,
.section-title span {
	font-family:'.$g_fonts[returnOptionValue('title_font_variation')][1].';
}

h1 { font-size:'.returnOptionValue('h1_font_size').'; line-height:'.returnOptionValue('h1_line_height').'; }
h1 span { font-size:'.returnOptionValue('h1_variation_font_size').'; line-height:'.returnOptionValue('h1_variation_line_height').'; }
h2 { font-size:'.returnOptionValue('h2_font_size').'; line-height:'.returnOptionValue('h2_line_height').'; }
h2 span { font-size:'.returnOptionValue('h2_variation_font_size').'; line-height:'.returnOptionValue('h2_variation_line_height').'; }
h3 { font-size:'.returnOptionValue('h3_font_size').'; line-height:'.returnOptionValue('h3_line_height').'; }
h3 span { font-size:'.returnOptionValue('h3_variation_font_size').'; line-height:'.returnOptionValue('h3_variation_line_height').'; }
h4 { font-size:'.returnOptionValue('h4_font_size').'; line-height:'.returnOptionValue('h4_line_height').'; }
h4 span { font-size:'.returnOptionValue('h4_variation_font_size').'; line-height:'.returnOptionValue('h4_variation_line_height').'; }
h5 { font-size:'.returnOptionValue('h5_font_size').'; line-height:'.returnOptionValue('h5_line_height').'; }
h5 span { font-size:'.returnOptionValue('h5_variation_font_size').'; line-height:'.returnOptionValue('h5_variation_line_height').'; }
h6 { font-size:'.returnOptionValue('h6_font_size').'; line-height:'.returnOptionValue('h6_line_height').'; }
h6 span { font-size:'.returnOptionValue('h6_variation_font_size').'; line-height:'.returnOptionValue('h6_variation_line_height').'; }

.teaser h1 { font-size:'.returnOptionValue('h1_font_size').'; line-height:'.returnOptionValue('h1_line_height').'; }
.teaser h1 span { font-size:'.returnOptionValue('h1_variation_font_size').'; line-height:'.returnOptionValue('h1_variation_line_height').'; }
.teaser h2 { font-size:'.returnOptionValue('h2_font_size').'; line-height:'.returnOptionValue('h2_line_height').'; }
.teaser h2 span { font-size:'.returnOptionValue('h2_variation_font_size').'; line-height:'.returnOptionValue('h2_variation_line_height').'; }
.teaser h3 { font-size:'.returnOptionValue('h3_font_size').'; line-height:'.returnOptionValue('h3_line_height').'; }
.teaser h3 span { font-size:'.returnOptionValue('h3_variation_font_size').'; line-height:'.returnOptionValue('h3_variation_line_height').'; }
.teaser h4 { font-size:'.returnOptionValue('h4_font_size').'; line-height:'.returnOptionValue('h4_line_height').'; }
.teaser h4 span { font-size:'.returnOptionValue('h4_variation_font_size').'; line-height:'.returnOptionValue('h4_variation_line_height').'; }
.teaser h5 { font-size:'.returnOptionValue('h5_font_size').'; line-height:'.returnOptionValue('h5_line_height').'; }
.teaser h5 span { font-size:'.returnOptionValue('h5_variation_font_size').'; line-height:'.returnOptionValue('h5_variation_line_height').'; }
.teaser h6 { font-size:'.returnOptionValue('h6_font_size').'; line-height:'.returnOptionValue('h6_line_height').'; }
.teaser h6 span { font-size:'.returnOptionValue('h6_variation_font_size').'; line-height:'.returnOptionValue('h6_variation_line_height').'; }

.section-title h1, .section .section-title h1, .section .section-title h2 {
	font-size:'.returnOptionValue('display_title_font_size').'; line-height:'.returnOptionValue('display_title_line_height').';
}
.section-title h1 span, .section .section-title h1 span, .section .section-title h2 span {
	font-size:'.returnOptionValue('display_title_variation_font_size').'; line-height:'.returnOptionValue('display_title_variation_line_height').';
}
.section-title h1 small, .section .section-title h1 small, .section .section-title h2 small {
	font-size:'.returnOptionValue('display_title_small_size').'; line-height:'.returnOptionValue('display_title_small_line_height').';
}
.section-title h1 small span, .section .section-title h1 small span, .section .section-title h2 small span {
	font-size:'.returnOptionValue('display_title_small_variation_size').'; line-height:'.returnOptionValue('display_title_small_variation_line_height').';
}

.epic-caption-impact {
	font-family:'.$g_fonts[returnOptionValue('impact_caption_font')][1].';
}
.epic-caption-impact span.font_variation {
	font-family:'.$g_fonts[returnOptionValue('impact_caption_font_variation')][1].';
}
.epic-caption-striped {
	font-family:'.$g_fonts[returnOptionValue('striped_caption_font')][1].';
}
.epic-caption-striped span.font_variation {
	font-family:'.$g_fonts[returnOptionValue('striped_caption_font_variation')][1].';
}
.epic-caption-boxed h1, .epic-caption-boxed h2, .epic-caption-boxed h3, .epic-caption-boxed h4, .epic-caption-boxed h5, .epic-caption-boxed h6 {
	font-family:'.$g_fonts[returnOptionValue('boxed_caption_title_font')][1].';
}
.epic-caption-boxed h1 span, .epic-caption-boxed h2 span, .epic-caption-boxed h3 span, .epic-caption-boxed h4 span, .epic-caption-boxed h5 span, .epic-caption-boxed h6 span {
	font-family:'.$g_fonts[returnOptionValue('boxed_caption_title_font_variation')][1].';
}
.epic-caption-elegant h1, .epic-caption-elegant h2, .epic-caption-elegant h3, .epic-caption-elegant h4, .epic-caption-elegant h5, .epic-caption-elegant h6 {
	font-family:'.$g_fonts[returnOptionValue('elegant_caption_title_font')][1].';
}
.epic-caption-elegant h1 span, .epic-caption-elegant h2 span, .epic-caption-elegant h3 span, .epic-caption-elegant h4 span, .epic-caption-elegant h5 span, .epic-caption-elegant h6 span {
	font-family:'.$g_fonts[returnOptionValue('elegant_caption_title_font_variation')][1].';
}

';
?>