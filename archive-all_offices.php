<?php get_header(); ?>

	<section class="Kb_banner page_header">
		<div class="Kb_container">
			<div class="kb_row">
				<div class="banner_box">
					<h2> <?php the_title( '<h1 class="page-title">', '</h1>' ); ?></h2>
					<p><?php the_field('page_description'); ?></p>
					 <?php if(get_field('page_cta')!=""): ?>
						<a href="<?php echo get_field('page_cta'); ?>"><?php echo (get_field('page_cta_txt')!='')?get_field('page_cta_txt'):"Book a Consultation";  ?></a>
					 <?php endif; ?> 
				</div>
			</div>
		</div>
	</section>

	<section class="services section-space offices-list">
		<div class="Kb_container">
			<div class="owl-carousel owl-theme "> 
				<?php  
					$args = array(
						'post_type'      => 'offices',
						'posts_per_page' => -1, 
					);
					$query = new WP_Query( $args );

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();   
					?> 
					<div class="kb_serviceBox">
						<div class="serviceBoxImg">
							<?php the_post_thumbnail(); ?> 
						</div> 
						<div class="serviceBoxinfo"> 
						<h2><a href="<?php   
							$terms = get_the_terms($post->ID, 'office_category' );
							if ($terms && ! is_wp_error($terms)) :
								$tslugs_arr = array();
								foreach ($terms as $term) {
									$tslugs_arr[] = $term->slug;
								}
								$terms_slug_str = join( " ", $tslugs_arr);
							endif;
							echo $terms_slug_str;
						?>"><?php the_title(); ?></a></h2> 
						<?php the_content(); ?>
						</div> 
					</div>  
					<?php
							}
					}
					
					?>
			</div> 
			</div>
		
	</section>
    <?php get_footer(); ?>