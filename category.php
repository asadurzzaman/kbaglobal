<?php get_header(); ?>
	<section class="Kb_banner page_header">
		<div class="Kb_container">
			<div class="kb_row">
				<div class="banner_box"> 
					<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
					<?php
					// Display optional category description
					if ( category_description() ) : ?>
					<div class="archive-meta"><?php echo category_description(); ?></div>
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
				while ( have_posts() ) :
					the_post(); ?> 
						<div class="kb_serviceBox">
							<?php if (has_post_thumbnail( get_the_ID() ) ): ?>
								<?php the_post_thumbnail( 'full' ); ?>
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

					endwhile; // End of the loop.
					?>
					<?php kba_pagination(); ?>
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