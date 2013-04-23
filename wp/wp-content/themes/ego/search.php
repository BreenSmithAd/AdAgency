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
			<div class="section-title">
				<h1><?php printf( __( 'Search Results %s', 'ego' ), '<small>' . get_search_query() . '</small>' ); ?></h1>
			</div>
			<!--end section title-->
			
			<?php 	
			if ( have_posts() ) {
				get_template_part( 'loop', 'index' );
			} else {
				echo '<div class="blog-inner-left">';
				echo '<h2>'. _( 'Nothing Found', 'ego' ) .'</h2>';
				echo '<p>'. _( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'ego' ) .'</p>';
				
				// Uncomment the line below to display the search form on the page when no results are found.
				//get_search_form();
				
				echo '</div>';
				get_sidebar();
			}
			?>
		
		</div>
		<!--end content-->
	</div>
	<!--end page-->
		
<?php get_footer(); ?>