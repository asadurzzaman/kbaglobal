<?php get_header(); ?>
	
	<section class="services section-space blog_list">
		<div class="Kb_container">
			
			<div class="kb_row justify-content-space-between">
				<div class="left"> 
				<div class="kb_services_col">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'kbaglobal' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'kbaglobal' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</div>
					</div>
				<div class="right">
						<?php get_sidebar(); ?>	
				</div>
			</div>
			</div>
		
	</section>
<?php get_footer(); ?>