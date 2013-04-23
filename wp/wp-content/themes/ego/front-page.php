<?php
/**
 * The template for the front page.
 *
 * @package WordPress
 * @subpackage Ego
 * @since Ego 1.0
 */

if(isset($_POST['submitted'])) {
	if(trim($_POST['contactName']) == '') {
		$nameError = __('Please enter your name.', 'ego');
		$hasError = true;
	} else {
		$contactName = trim($_POST['contactName']);
	}

	if(trim($_POST['contactEmail']) == '')  {
		$emailError = __('Please enter your email address.', 'ego');
		$hasError = true;
	} else if (!preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,8})$/", trim($_POST['contactEmail']))) {
		$emailError = __('You entered an invalid email address.', 'ego');
		$hasError = true;
	} else {
		$contactEmail = trim($_POST['contactEmail']);
	}

	$contactSubject = trim($_POST['contactSubject']);

	if(trim($_POST['contactMessage']) == '') {
		$messageError = __('Please enter a message.', 'ego');
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$contactMessage = stripslashes(trim($_POST['contactMessage']));
		} else {
			$contactMessage = trim($_POST['contactMessage']);
		}
	}
	
	if(!isset($hasError)) {
		$emailTo = get_option('admin_email');
		$subject = $contactSubject;
		$body = $contactMessage;
		$headers = 'From: '.$contactName.' <'.$contactEmail.'>' . "\r\n" . 'Reply-To: ' . $contactEmail;

		if(wp_mail($emailTo, $subject, $body, $headers)) {
			$emailSent = true;
		}
	}
	
	if(isset($_POST['ajax'])) {
		if(isset($emailSent) && $emailSent == true) {
			die('Mail sent');
		} else if(isset($hasError) && $hasError == true) {
			die('Error');
		}
	}
}

get_header(); ?>

<?php

if(is_home()) { ?>
	<!--start page-->
	<div class="section odd">
		<!--start content-->
		<div class="content clearfix">
		
			<div class="section-title">
				<?php echo stripslashes(html_entity_decode(returnOptionValue('blog_title'))); ?>
			</div>
		
			<?php get_template_part( 'loop', 'index' ); ?>
			
		</div>
		<!--end content-->
	</div>
	<!--end page-->
		
<?php } else {

	$my_args_2 = array(
		'post_type' => 'udt_homepage_slider',
		'numberposts' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	);
	$homepage_slides = get_posts( $my_args_2 );
	$count_homepage_slides = count($homepage_slides);
	$homepage_slides_counter = 0;

	if($count_homepage_slides>1) {
		$homepage_slide_caption='';
		$homepage_slider='<div id="homepage" class="homepage section">'."\n";
		$homepage_slider.='<div id="epicSlider1" class="epicSlider theme-default slider-wrapper">'."\n";
		$homepage_slider.='<div id="slides">'."\n";
		foreach ( $homepage_slides as $homepage_slide ) {
			$post_thumbnail_id = get_post_thumbnail_id( $homepage_slide->ID );
			$image_src=wp_get_attachment_image_src($post_thumbnail_id,'full');
			$homepage_slider.='<img src="'.$image_src[0].'" alt="'.$homepage_slide->post_title.'" title="#homepage-caption-'.$homepage_slides_counter.'" />'."\n";
			
			$homepage_slide_meta=get_post_meta($homepage_slide->ID, '_udt_homepage_slide_meta', true);
			if(isset($homepage_slide_meta['caption_style']) && $homepage_slide_meta['caption_style']!='' && $homepage_slide_meta['caption_style']!='none') {
				if($homepage_slide_meta['caption_style']=='logo') {
					$homepage_slide_caption.='<div class="epic-logo" id="homepage-caption-'.$homepage_slides_counter.'">';
				} else if($homepage_slide_meta['caption_style']=='graphic') {
					$homepage_slide_caption.='<div class="epic-graphic" id="homepage-caption-'.$homepage_slides_counter.'">';
				} else if($homepage_slide_meta['caption_style']=='impact') {
					$homepage_slide_caption.='<div class="epic-caption epic-caption-impact" id="homepage-caption-'.$homepage_slides_counter.'">';
				} else if($homepage_slide_meta['caption_style']=='striped-top-left') {
					$homepage_slide_caption.='<div class="epic-caption epic-caption-striped topLeft" id="homepage-caption-'.$homepage_slides_counter.'">';
				} else if($homepage_slide_meta['caption_style']=='striped-top-right') {
					$homepage_slide_caption.='<div class="epic-caption epic-caption-striped topRight" id="homepage-caption-'.$homepage_slides_counter.'">';
				} else if($homepage_slide_meta['caption_style']=='striped-bottom-left') {
					$homepage_slide_caption.='<div class="epic-caption epic-caption-striped bottomLeft" id="homepage-caption-'.$homepage_slides_counter.'">';
				} else if($homepage_slide_meta['caption_style']=='striped-bottom-right') {
					$homepage_slide_caption.='<div class="epic-caption epic-caption-striped bottomRight" id="homepage-caption-'.$homepage_slides_counter.'">';
				} else if($homepage_slide_meta['caption_style']=='boxed-top-left') {
					$homepage_slide_caption.='<div class="epic-caption epic-caption-boxed topLeft" id="homepage-caption-'.$homepage_slides_counter.'">';
				} else if($homepage_slide_meta['caption_style']=='boxed-top-right') {
					$homepage_slide_caption.='<div class="epic-caption epic-caption-boxed topRight" id="homepage-caption-'.$homepage_slides_counter.'">';
				} else if($homepage_slide_meta['caption_style']=='boxed-bottom-left') {
					$homepage_slide_caption.='<div class="epic-caption epic-caption-boxed bottomLeft" id="homepage-caption-'.$homepage_slides_counter.'">';
				} else if($homepage_slide_meta['caption_style']=='boxed-bottom-right') {
					$homepage_slide_caption.='<div class="epic-caption epic-caption-boxed bottomRight" id="homepage-caption-'.$homepage_slides_counter.'">';
				} else if($homepage_slide_meta['caption_style']=='elegant-top-left') {
					$homepage_slide_caption.='<div class="epic-caption epic-caption-elegant topLeft" id="homepage-caption-'.$homepage_slides_counter.'">';
				} else if($homepage_slide_meta['caption_style']=='elegant-top-right') {
					$homepage_slide_caption.='<div class="epic-caption epic-caption-elegant topRight" id="homepage-caption-'.$homepage_slides_counter.'">';
				} else if($homepage_slide_meta['caption_style']=='elegant-bottom-left') {
					$homepage_slide_caption.='<div class="epic-caption epic-caption-elegant bottomLeft" id="homepage-caption-'.$homepage_slides_counter.'">';
				} else if($homepage_slide_meta['caption_style']=='elegant-bottom-right') {
					$homepage_slide_caption.='<div class="epic-caption epic-caption-elegant bottomRight" id="homepage-caption-'.$homepage_slides_counter.'">';
				}
				
				$homepage_slide_caption.="\n";
				
				if($homepage_slide_meta['caption_style']=='logo') {
					$homepage_slide_caption.=do_shortcode($homepage_slide->post_content)."\n";
				} else if($homepage_slide_meta['caption_style']=='impact' || $homepage_slide_meta['caption_style']=='graphic') {
					$homepage_slide_caption.='<div class="epic-table">'."\n";
					$homepage_slide_caption.='<div class="epic-table-cell">'."\n";
					$homepage_slide_caption.=do_shortcode(wptexturize(wpautop($homepage_slide->post_content)))."\n";
					$homepage_slide_caption.='</div>'."\n";
					$homepage_slide_caption.='</div>'."\n";
				} else {
					$homepage_slide_caption.=do_shortcode(wptexturize(wpautop($homepage_slide->post_content)))."\n";
				}
				
				$homepage_slide_caption.='</div>'."\n";
			}
			
			$homepage_slides_counter++;
		}
		$homepage_slider.='</div>'."\n";
		$homepage_slider.=$homepage_slide_caption."\n";
		$homepage_slider.='</div>'."\n";
		$homepage_slider.='</div>'."\n";
		echo $homepage_slider;
	} else if($count_homepage_slides==1) {
		$homepage_slider='<div id="homepage" class="homepage section">';
		$homepage_slider.='<span style="color:#ff0000;">Please upload multiple images to the slider.</span>';
		$homepage_slider.='</div>';
		echo $homepage_slider;
	}
	
	$my_args_3 = array(
		'post_type' => 'udt_homepage_secs',
		'numberposts' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	);
	$homepage_sections = get_posts( $my_args_3 );
	$homepage_section_odd_even = 'odd';
	$homepage_secs='';
	$contact_secs='';
	
	$enable_even=intval(returnOptionValue('enable_even_sections'));
	
	foreach ( $homepage_sections as $homepage_section ) {
		$homepage_section_meta=get_post_meta($homepage_section->ID, '_udt_homepage_section_meta', true);
		
		if(isset($homepage_section_meta['section_layout']) && $homepage_section_meta['section_layout']!='contact') {
		
			$homepage_secs.='<div id="'.$homepage_section->post_name.'" class="section '.$homepage_section_odd_even.'">'."\n";
			$homepage_secs.='<div class="content clearfix">'."\n";
			
			$homepage_secs.='<div class="section-title"><h2>';
			if(isset($homepage_section_meta['display_title']) && $homepage_section_meta['display_title']!='') {
				$homepage_secs.=$homepage_section_meta['display_title'];
			} else {
				$homepage_secs.=$homepage_section->post_title;
			}
			$homepage_secs.='</h2></div>';
			
			$homepage_secs.=wptexturize(wpautop(do_shortcode(shortcode_unautop($homepage_section->post_content))));
			
			echo $homepage_secs;
			$homepage_secs='';
			
			if(isset($homepage_section_meta['section_layout']) && $homepage_section_meta['section_layout']=='portfolio') {
				$my_args_4 = array(
					'post_type' => 'udt_portfolio',
					'numberposts' => -1,
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);
				$udt_portfolio = get_posts( $my_args_4 );
				$count_udt_portfolio = count($udt_portfolio);
				$udt_portfolio_counter = 0;
				
				if($count_udt_portfolio>0) {
				
					$homepage_secs.='
					<div id="ajaxwrapper">
						<div id="folio-navigation">
							<ul>
								<li id="prevProject"><a href="#"></a></li>
								<li id="closeProjectMobile"><a href="#"></a></li>
								<li id="nextProject"><a href="#"></a></li>
							</ul>
						</div>
						<div id="closeProject"><a href="'.get_permalink().'#'.$homepage_section->post_name.'"></a></div>
						<div id="loader"></div>
						<div id="ajax-content-outer"><div id="ajax-content-inner"></div></div>
					</div>
					<div id="folio-grid">'."\n";
					
					foreach ( $udt_portfolio as $udt_project ) {
						if (has_post_thumbnail($udt_project->ID)) {
							$project_thumbnail_id = get_post_thumbnail_id( $udt_project->ID );
							$image_src=wp_get_attachment_image_src($project_thumbnail_id,'udt-portfolio-thumb');
							$homepage_secs.='<div class="folio-thumb-container"><div class="folio-thumb"><a href="'.get_permalink($udt_project->ID).'" title="'.esc_attr($udt_project->post_title).'" class="folio-link"><img class="lazy" src="'.$image_src[0].'" alt="'.esc_attr($udt_project->post_title).'" /></a></div></div>';
						}
					}
					
					$homepage_secs.='</div>'."\n";
					
				}
				
				echo $homepage_secs;
				$homepage_secs='';
				
			}
				
		} else if(isset($homepage_section_meta['section_layout']) && $homepage_section_meta['section_layout']=='contact') {
			
			$homepage_secs.='<div id="'.$homepage_section->post_name.'" class="section '.$homepage_section_odd_even.'">'."\n";
			$homepage_secs.='<div class="content clearfix">'."\n";
			
			$homepage_secs.='<div class="section-title"><h2>';
			if(isset($homepage_section_meta['display_title']) && $homepage_section_meta['display_title']!='') {
				$homepage_secs.=$homepage_section_meta['display_title'];
			} else {
				$homepage_secs.=$homepage_section->post_title;
			}
			$homepage_secs.='</h2></div>';
			
			echo $homepage_secs;
			$homepage_secs='';
			
			get_sidebar('contact');
			
			$homepage_secs.='<div class="column_two_thirds last contact_wrapper">';
			
			$homepage_secs.=wptexturize(wpautop(do_shortcode(shortcode_unautop($homepage_section->post_content))));
			
			if(returnOptionValue('contact_form_title')!='') {
				$homepage_secs.= '<h4>'.stripslashes(html_entity_decode(returnOptionValue('contact_form_title'),ENT_QUOTES,"UTF-8")).'</h4>';
			} 
			
			if(returnOptionValue('contact_form_message')!='') {
				$homepage_secs.= wptexturize(wpautop(do_shortcode(returnOptionValue('contact_form_message'))));
			}
				
			$homepage_secs.='<form action="'.get_permalink().'" method="post" class="contactForm form" id="contact-form">
					<p><input type="text" name="contactName" class="required" id="contactName" value="'. __('Name', 'ego') .'" /></p>
					<p><input type="text" name="contactEmail" class="required" id="contactEmail" value="'. __('E-mail', 'ego') .'" /></p>
					<p><input type="text" name="contactSubject" id="contactSubject" value="'. __('Subject', 'ego') .'" /></p>
					<textarea  class="required" name="contactMessage" id="contactMessage" rows="" cols="">'. __('Message', 'ego') .'</textarea>
					<input type="hidden" name="submitted" id="submitted" value="true" />
					<input type="submit" value="'. __('Send', 'ego') .'" class="submit submitTheme" id="submitform" />
					<span id="msg">'. returnOptionValue('contact_form_required_fields_label') .'</span>
				</form>
			</div>
			';
			
			echo $homepage_secs;
			$homepage_secs='';
			
		}
		
		$homepage_secs.='</div>'."\n";
		
		if (has_post_thumbnail($homepage_section->ID)) {
			$section_thumbnail_id = get_post_thumbnail_id( $homepage_section->ID );
			$image_src=wp_get_attachment_image_src($section_thumbnail_id,'full');
			$homepage_secs.='<div id="teaser-'.$homepage_section->post_name.'" class="teaser" style="background-image: url('.$image_src[0].');">'."\n";
			$homepage_secs.='<div class="info-container"><div class="info"><div class="info-inner">';
			if(isset($homepage_section_meta['teaser_content']) && $homepage_section_meta['teaser_content']!='') {
				$homepage_secs.=wptexturize(wpautop(do_shortcode(shortcode_unautop($homepage_section_meta['teaser_content']))));
			}
			$homepage_secs.='</div></div></div>'."\n";
			$homepage_secs.='<div class="section-button"><a class="page-up navigateTo" href="#'.$homepage_section->post_name.'"></a></div>'."\n";
			$homepage_secs.='</div>';
		}
		
		$homepage_secs.='</div>'."\n";
		
		if($enable_even) {
			if($homepage_section_odd_even=='odd') {
				$homepage_section_odd_even='even';
			} else {
				$homepage_section_odd_even='odd';
			}
		}
		
		echo $homepage_secs;
		$homepage_secs='';
		
	}
	
} ?>

<?php get_footer(); ?>