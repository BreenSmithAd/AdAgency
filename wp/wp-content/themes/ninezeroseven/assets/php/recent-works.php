<?php
/************************************************************************
* Recent works template
*************************************************************************/

global $post,$data;
$old = $post;
$portfolio_query = new WP_Query( array( 'post_type' => 'recent_works', 'posts_per_page' => -1, 'order' => 'ASC' ) ); 

		if(isset($data['nzs_works_cols']) && !empty($data['nzs_works_cols'])){

			$works_cols = ("4" == $data['nzs_works_cols']) ? 'four columns' : 'one-third column';

		}else{

			$works_cols = 'four columns';
		}
		
		if($portfolio_query->have_posts()): while($portfolio_query->have_posts()) : $portfolio_query->the_post();


					 
?>

		<!-- PROJECT -->

		<div class="<?php echo $works_cols;?> project">
			<div class="gallery-padding">
				<div class="img-frame">
					<div class="image-wrapper">
					<?php 

						if(has_post_thumbnail()){

							$icon_link = '';

							$project_type = get_post_meta( get_the_ID(), 'nzs_portfolio_type', true);

							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'recent_works-thumbnail');

							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');

							$gallery_title = $post->post_name.'-'.$post->ID;


							// image gallery
							if('image' == $project_type){

								printf('<a href="%1s" title="%2$s" class="img-preview"><img src="%3$s" alt="%2$s" class="scale-with-grid" /></a>',
								get_permalink(),
								esc_attr(the_title_attribute('echo=0')),
								$thumb[0]);

								$icon_link = ' href="'.$large_image_url[0].'" title="'.esc_attr(the_title_attribute('echo=0')).'" rel="prettyPhoto['.$gallery_title.']" ';


								$meta = get_post_meta(get_the_ID(), 'nzs_image_fields', true);

								if(is_array($meta)){
			                   
				                    foreach ($meta as $key => $option) {
										
										$image_attributes = wp_get_attachment_image_src( $option ,'large');

				                        if($image_attributes[0]){

				                        	printf('<a href="%1s" title="%2s" rel="prettyPhoto[%3s]" class="img-preview"></a>',
				                        		esc_attr($image_attributes[0]),
				                        		esc_attr(get_the_title($option)),
				                        		$gallery_title);
				                        }

				                    } //end foreach
			               		}


			               	//  video		
			               	}elseif('video' == $project_type){

			               		$video_link = get_post_meta(get_the_ID(), 'nzs_video_link', true);

			               		$video_link = $video_link ? $video_link.'?iframe=true&width=75%&height=75%' : '';

			               		$icon_link = ' href="'.$video_link.'" title="'.esc_attr(the_title_attribute('echo=0')).'" rel="prettyPhoto['.$gallery_title.']" ';


			               		if($video_link){
				               		printf('<a href="%1s" title="%2$s" class="video-preview"><img src="%3$s" alt="%2$s" class="scale-with-grid" /></a>',
				               			get_permalink(),
				               			esc_attr(the_title_attribute('echo=0')),
				               			esc_attr($thumb[0]));
			               		}
								
			               	// single image
			               	}else{


			               		printf('<a href="%1s" title="%2$s" class="img-preview"><img src="%3$s" alt="%2$s" class="scale-with-grid" /></a>',
									get_permalink(),
									esc_attr(the_title_attribute('echo=0')),
									esc_attr($thumb[0]));

			               		$icon_link = ' href="'.$large_image_url[0].'" title="'.esc_attr(the_title_attribute('echo=0')).'" rel="prettyPhoto['.$gallery_title.']" ';


			               	}

						} //ENDS has_post_thumbnail

					?>
					<div class="mouse-effect"></div>

						<span class="extra-links">
							<a <?php echo $icon_link; ?> class="photo-up hide-text">View Images</a>

							<?php
								$external_url = get_post_meta( get_the_ID(), 'nzs_external_link', true);

								if(isset($external_url) && !empty($external_url)){

									echo '<a href="'.esc_attr($external_url).'" target="_blank" class="web-link hide-text">Visit Site</a>';

								}
								
							?>

							<?php if(isset($data['nzs_hide_works_link']) && 0 == $data['nzs_hide_works_link']): ?>
								<a href="<?php the_permalink(); ?>" class="go-link hide-text">View Details</a>
							<?php endif; ?>
							
						</span>

					</div>

					<h5><?php the_title();?></h5>
					<?php the_excerpt();?>
				</div>
			</div>
		</div>

		<!-- END PROJECT -->

				
<?php
			 		
		endwhile;
		endif;

$post = $old;
 
?>

