<?php get_header(); 
 $bg_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
$style='';
if($bg_url)	{
	$style='style="background:url('.$bg_url.');background-size: cover; background-repeat: no-repeat;"';
}
?>
	<section class="Kb_banner page_header"  <?php echo $style; ?>>
		<div class="Kb_container">
			<div class="kb_row">
				<div class="banner_box">
					<h1><?php the_title(); ?></h1>
					<p><?php the_field('page_description'); ?></p>
					 <?php if(get_field('page_cta')!=""): ?>
						<a href="<?php echo get_field('page_cta'); ?>"><?php echo (get_field('page_cta_txt')!='')?get_field('page_cta_txt'):"Book a Consultation";  ?></a>
					 <?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<div class="Kb_container">
	<div class="kb_row">
		<main id="primary" class="site-main"> 
			<?php
			while ( have_posts() ) :
				the_post();
					the_content();  
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div>
</div>
<?php
//get_sidebar();
get_footer();
