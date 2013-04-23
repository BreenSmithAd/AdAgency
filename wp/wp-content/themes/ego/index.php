<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Ego
 * @since Ego 1.0
 */

get_header(); ?>
	
	<!--start page-->
	<div class="section odd">
		<!--start content-->
		<div class="content clearfix">
	
			<!--section title-->
			<?php if(!is_home()) : ?> 
			<div class="section-title">
				<h1><?php
				if(single_cat_title("", false)=='' && !is_archive()) {
					$page = get_page_by_title( single_post_title('', false) );
					if($page) {
						single_post_title();
					}
				} else if(is_archive()) {
				
					if ( have_posts() ) {
						the_post();
				
						if(is_day()) {
							echo get_the_date();
						} else if(is_month()) {
							echo get_the_date('F Y');
						} else if(is_year()) {
							echo get_the_date('Y');
						} else if(is_category()) {
							single_cat_title();
						} else {
							_e('Blog Archives','ego');
						}
						
					} else {
						_e('Blog Archives','ego');
					}
					
					rewind_posts();
						
				} else { 
					single_cat_title();
				} ?></h1>
			</div>
			<?php else : ?>
				<div class="section-title">
					<?php echo stripslashes(html_entity_decode(returnOptionValue('blog_title'))); ?>
				</div>
			<?php endif; ?>
			<!--end section title-->
			
			<?php get_template_part( 'loop', 'index' ); ?>
		
		</div>
		<!--end content-->
	</div>
	<!--end page-->
		
<?php get_footer(); ?>