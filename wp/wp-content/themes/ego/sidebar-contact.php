<?php
/**
 * The Sidebar for contact page
 *
 * @package WordPress
 * @subpackage Ego
 * @since Ego 1.0
 */
?>

	<?php if(is_active_sidebar('contact-sidebar')) { ?>

		<div id="sidebar" class="left contact_sidebar">
		
			<ul>
			
			<?php
			if ( ! dynamic_sidebar( 'contact-sidebar' ) ) : ?>
			
				<li class="widget-container"></li>
								
			<?php endif; // end widget area ?>
			
			</ul>
			
		</div>
		
	<?php } ?>