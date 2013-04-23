<?php
header('HTTP/1.1 200 OK');

/************************************************************************
* Main Front Page
*************************************************************************/

get_header(); 

	$page_sort_sections = sort_sections();

	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'page-sections',
		'post__in'  => (array) $page_sort_sections,
		'orderby' => 'post__in',
		);

	$home_query = new WP_Query($args);  


	if($home_query->have_posts()):  while($home_query->have_posts()) : $home_query->the_post();

		get_template_part('page-sections');

		
		endwhile;


	else:

		get_template_part( 'no-results', 'home' );

	endif;


?> 

<?php
get_footer();
?>











