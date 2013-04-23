<?php
/**
 * The Sidebar for pages
 *
 * @package WordPress
 * @subpackage Ego
 * @since Ego 1.0
 */
?>
		<div id="sidebar" class="left">
		
			<ul>
			
			<?php
			if ( ! dynamic_sidebar( 'page-sidebar' ) ) : ?>
			
				<li id="search" class="widget-container widget_search">
					<?php get_search_form(); ?>
				</li>
				
				<li id="archives" class="widget-container">
					<h4 class="widget-title"><?php _e( 'Archives', 'ego' ); ?></h4>
					<ul>
						<?php wp_get_archives( 'type=monthly' ); ?>
					</ul>
				</li>
				
				<li id="meta" class="widget-container">
					<h4 class="widget-title"><?php _e( 'Meta', 'ego' ); ?></h4>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</li>
				
			<?php endif; // end widget area ?>
			
			</ul>
			
		</div>