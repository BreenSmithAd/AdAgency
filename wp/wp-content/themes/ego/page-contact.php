<?php
/**
 * Template Name: Contact
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

	<!--start page-->
	<div class="section odd">
		<!--start content-->
		<div class="content clearfix">

			<?php
			if ( have_posts() ) while ( have_posts() ) : the_post();
			
			$my_args_2 = array(
				'post_type' => 'attachment',
				'numberposts' => -1,
				'post_status' => 'inherit',
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'post_parent' => $post->ID
			);
			$attachments = get_posts( $my_args_2 );
			$count_attachments = count($attachments);
			$udt_slider_count = 0;
			
			$udt_page_meta=get_post_meta($post->ID, '_udt_page_meta', true);
			?>
			
			<!--section title-->
			<div class="section-title">
				<h1><?php
				if(isset($udt_page_meta['display_title']) && $udt_page_meta['display_title']!='') {
					echo $udt_page_meta['display_title'];
				} else {
					the_title();
				}
				?></h1>
			</div>
			<!--end section title-->
			
			<?php
			if($count_attachments>1) { // Check if the post has multiple images assigned to it.
				$udt_blog_image = '<div class="blog-post-media">';
				$udt_blog_image .= '<div class="flexslider"><ul class="slides">';
				
				foreach ( $attachments as $attachment ) {
					$slide_display_opt = get_post_meta( $attachment->ID, '_udt_slide_display_opt', true );
					$slide_link_url = get_post_meta( $attachment->ID, '_udt_slide_link_url', true );
					
					if($slide_display_opt=='slider') {
						$udt_blog_image .= '<li>';
						
						if($slide_link_url!='') {
							$udt_blog_image .= '<a href="'.$slide_link_url.'">';
						}
						
						$udt_blog_image .= wp_get_attachment_image($attachment->ID,'udt-full-width-image');
						
						if($slide_link_url!='') {
							$udt_blog_image .= '</a>';
						}
						
						if(wp_get_attachment_metadata($attachment->ID)) {
							if($attachment->post_excerpt !='') {
								$udt_blog_image .= '<p class="flex-caption">'.$attachment->post_excerpt.'</p>';
							} else if($attachment->post_content !='') {
								$udt_blog_image .= '<p class="flex-caption">'.$attachment->post_content.'</p>';
							}
						}
						
						$udt_blog_image .= '</li>'."\n";
						
						$udt_slider_count++;
					}
				}
				
				$udt_blog_image .= '</ul></div>';
				$udt_blog_image .= '</div>';
				
				if($udt_slider_count>1) {
					echo $udt_blog_image;
				} else if($udt_slider_count==1) {
					$udt_blog_image = '<div class="blog-post-media">';
					$udt_blog_image .= 'Please upload multiple images to the slider.';
					$udt_blog_image .= '</div>';
					echo $udt_blog_image;
				} else if ( has_post_thumbnail() ) { // Check if the post has a Post Thumbnail assigned to it.
					$udt_blog_image = '';
					
					$slide_display_opt = get_post_meta( get_post_thumbnail_id(), '_udt_slide_display_opt', true );
					$slide_video_url = get_post_meta( get_post_thumbnail_id(), '_udt_slide_video_url', true );
					
					if($slide_display_opt=='video-youtube' || $slide_display_opt=='video-vimeo') {
						$udt_blog_image = '<div class="blog-post-media">';
						$udt_blog_image .= '<div class="video" style="width:930px;height:524px;margin-bottom:0;">';
						if($slide_display_opt=='video-youtube') {
							$udt_blog_image .= '<iframe src="http://www.youtube.com/embed/'.$slide_video_url.'?autohide=2&amp;disablekb=0&amp;fs=1&amp;hd=0&amp;loop=0&amp;rel=0&amp;showinfo=0&amp;showsearch=0&amp;wmode=transparent" frameborder="0" allowfullscreen></iframe>';
						} else if($slide_display_opt=='video-vimeo') {
							$udt_blog_image .= '<iframe src="http://player.vimeo.com/video/'.$slide_video_url.'?title=0&amp;byline=0&amp;portrait=0&amp;color='.returnOptionValue('vimeo_controls_color').'&amp;autoplay=0&amp;loop=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
						}
						$udt_blog_image .= '</div>';
						$udt_blog_image .= '</div>';
					} else {
						$udt_blog_image = '<div class="blog-post-media">'.get_the_post_thumbnail($post->ID,'udt-full-width-image').'</div>';
					}
					
					echo $udt_blog_image;
				}
				
			} else if ( has_post_thumbnail() ) { // Check if the post has a Post Thumbnail assigned to it.
				$udt_blog_image = '';
					
				$slide_display_opt = get_post_meta( get_post_thumbnail_id(), '_udt_slide_display_opt', true );
				$slide_video_url = get_post_meta( get_post_thumbnail_id(), '_udt_slide_video_url', true );
				
				if($slide_display_opt=='video-youtube' || $slide_display_opt=='video-vimeo') {
					$udt_blog_image = '<div class="blog-post-media">';
					$udt_blog_image .= '<div class="video" style="width:930px;height:524px;margin-bottom:0;">';
					if($slide_display_opt=='video-youtube') {
						$udt_blog_image .= '<iframe src="http://www.youtube.com/embed/'.$slide_video_url.'?autohide=2&amp;disablekb=0&amp;fs=1&amp;hd=0&amp;loop=0&amp;rel=0&amp;showinfo=0&amp;showsearch=0&amp;wmode=transparent" frameborder="0" allowfullscreen></iframe>';
					} else if($slide_display_opt=='video-vimeo') {
						$udt_blog_image .= '<iframe src="http://player.vimeo.com/video/'.$slide_video_url.'?title=0&amp;byline=0&amp;portrait=0&amp;color='.returnOptionValue('vimeo_controls_color').'&amp;autoplay=0&amp;loop=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
					}
					$udt_blog_image .= '</div>';
					$udt_blog_image .= '</div>';
				} else {
					$udt_blog_image = '<div class="blog-post-media">'.get_the_post_thumbnail($post->ID,'udt-full-width-image').'</div>';
				}
				
				echo $udt_blog_image;
			}
			?>
			
			<?php get_sidebar('contact'); ?>
			
			<div class="column_two_thirds last contact_wrapper">
				<?php the_content('',FALSE); ?>
				
				<?php 
				if(returnOptionValue('contact_form_title')!='') {
					echo '<h4>'.html_entity_decode(returnOptionValue('contact_form_title')).'</h4>';
				} 
				
				if(returnOptionValue('contact_form_message')!='') {
					echo wptexturize(wpautop(do_shortcode(returnOptionValue('contact_form_message'))));
				}
				
				?>
				<form action="<?php the_permalink(); ?>" method="post" class="contactForm form" id="contact-form">
					<p><input type="text" name="contactName" class="required" id="contactName" value="<?php _e('Name', 'ego'); ?>" /></p>
					<p><input type="text" name="contactEmail" class="required" id="contactEmail" value="<?php _e('E-mail', 'ego'); ?>" /></p>
					<p><input type="text" name="contactSubject" id="contactSubject" value="<?php _e('Subject', 'ego'); ?>" /></p>
					<textarea  class="required" name="contactMessage" id="contactMessage" rows="" cols=""><?php _e('Message', 'ego'); ?></textarea>
					<input type="hidden" name="submitted" id="submitted" value="true" />
					<input type="submit" value="<?php _e('Send', 'ego'); ?>" class="submit submitTheme" id="submitform" />
					<span id="msg"><?php echo returnOptionValue('contact_form_required_fields_label'); ?></span>
				</form>
			</div>
		
		<?php endwhile; // end of the loop. ?>
		
		</div>
		<!--end content-->
	</div>
	<!--end page-->

<?php get_footer(); ?>