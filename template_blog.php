<?php /* Template Name: Blog Page */ ?>
<?php get_header(); ?>
	<section class="Kb_banner page_header">
		<div class="Kb_container">
			<div class="kb_row">
				<div class="banner_box">
					<h1>Our latest Australian migration news and educational articles</h1>
					<p>Collection of Australian migration news and education articles on various topics helpful for our clients in Australia, Philippines, and Nepal as well as to readers who are interested in pursuing a career in higher education in Australia or use our migration services.</p>
					 <?php if(get_field('page_cta')!=""): ?>
							<a href="<?php echo get_field('page_cta'); ?>">Book a Consultation</a>
					 <?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="services section-space blog_list">
		<div class="Kb_container">  
			<div class="kb_row justify-content-center">
				<div class="left"> 
				<div class="kb_services_col">
					   <?php 
						  $args = array(
							'posts_per_page' => 10, /* how many post you need to display */
							//'offset' => 0,
							'orderby' => 'post_date',
							'order' => 'DESC',
							'post_type' => 'post', /* your post type name */
							'paged' => $paged, 
							'post_status' => 'publish'
						  );
						  $query = new WP_Query($args);
								  // echo $query->max_num_pages;
						  if ($query->have_posts()) :
							while ($query->have_posts()) : $query->the_post(); ?>
								<div class="kb_serviceBox">
									<?php if (has_post_thumbnail( get_the_ID() ) ): ?>
									  <?php the_post_thumbnail( 'full' ); ?>
									<?php else : ?>
										<img src="https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=" />
									<?php endif; ?> 
									<div class="blog_meta">
										<div class="post_header">
											<ul class="meta_data">
												<li><i class="fa-solid fa-tags"></i></li>
											<?php 
											$categories = get_the_category(); 
											foreach( $categories as $category){  
											?> 
											<li><a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a></li>
											<?php }?>
											</ul>
											<p class="post_date">
												<span><i class="fa-solid fa-calendar-days"></i></span> <?php echo get_the_date( 'l, j M Y' ); ?>
											</p>
										</div>
										
										<h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
										<p><?php echo wp_trim_words(get_the_content(), 35); ?></p> 
										<a href="<?php the_permalink(); ?>" class="btn-read-more">
											<span>Read More</span>
											<i class="fa fa-arrow-right"></i>
										</a> 
									</div>	
								</div>
					 <?php
					endwhile;
				  endif;  
				  ?> 
                <?php 
                    $prev_arrow = is_rtl() ? '<span class="arrow-right"></span><span class="direction-text">Next</span>' : '<span class="arrow-left"></span><span class="direction-text">Prev</span>';
					$next_arrow = is_rtl() ? '<span class="arrow-left"></span><span class="direction-text">Prev</span>' : '<span class="arrow-right"></span><span class="direction-text">Next</span>';  

                  if ( $query->max_num_pages > 1 ) {
					echo '<div class="pagination">';
					echo paginate_links( array(
						'base'      => get_pagenum_link( 1 ) . '%_%',
						'format'    => 'page/%#%',
						'current'   => max( 1, get_query_var( 'paged' ) ),
						'total'     => $query->max_num_pages,
						'prev_text' => $prev_arrow,
						'next_text' => $next_arrow,
					) );
					echo '</div>';
				}
                ?> 
				<?php wp_reset_query(); ?>
				</div>
					</div>
				<div class="right">
						<?php get_sidebar(); ?>	
				</div>
			</div>
			</div>
		
	</section>
<?php get_footer(); ?>