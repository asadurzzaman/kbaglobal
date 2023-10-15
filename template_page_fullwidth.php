<?php /* Template Name: Page FullWidth */ ?>
<?php get_header(); ?>
	<section class="Kb_banner page_header">
		<div class="Kb_container">
			<div class="kb_row">
				<div class="banner_box">
					<h2><?php the_title(); ?></h2>
					<p><?php the_field('page_description'); ?></p>
					 <?php if(get_field('page_cta')!=""): ?>
						<a href="<?php echo get_field('page_cta'); ?>"><?php echo (get_field('page_cta_txt')!='')?get_field('page_cta_txt'):"Book a Consultation";  ?></a>
					 <?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="services">
		<div class="Kb_container_fullwidth">
			
			<div class="kb_row" style="align-items: flex-start;">
				
					
				
				
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// // If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div>
				
			</div>
			</div>
		
	</section>
<?php get_footer(); ?>