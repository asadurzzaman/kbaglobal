<?php get_header(); ?> 
	<section class="Kb_banner page_header">
		<div class="Kb_container">
			<div class="kb_row">
				<div class="banner_box"> 
					<?php single_cat_title(' <h1 class="page-title">', '</h1>');  
					?>
					<?php
					// Display optional category description
					if ( category_description() ) : 
					the_archive_description( '<div class="archive-description">', '</div>' );
					?> 
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="services section-space blog_list">
		<div class="Kb_container"> 
			<div class="kb_row justify-content-center"> 
					<div class="kb_services_col office-taxonomy">
					<?php 
						if (have_posts()) {
							while (have_posts()) {
								the_post();?>
						<div class="kb_serviceBox">
							<div class="serviceBoxImg">
								<?php the_post_thumbnail(); ?> 
							</div> 
							<div class="serviceBoxinfo"> 
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
							<?php the_content(); ?>
							</div> 
						</div>  
						<?php   	 
							}
						} 
					?> 
					</div>
			</div>
			</div>
		
	</section>
<?php get_footer(); ?>