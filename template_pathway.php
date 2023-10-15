<?php /* Template Name: Pathway */ ?>
<?php get_header();
$bg_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
$style='';
if($bg_url)	{
	$style='style="background:url('.$bg_url.');background-size: cover; background-repeat: no-repeat;"';
}
?>
<section class="Kb_banner page_header" <?php echo $style;  ?>>
	<div class="Kb_container">
		<div class="kb_row">
			<div class="banner_box">
				<h1><?php echo the_title(); ?></h1>
				<p>For any migration or education needs, please contact us. Choose an office and send an inquiry. We are standing by to help you.</p>
					<?php if(get_field('page_cta')!=""): ?>
						<a href="<?php echo get_field('page_cta'); ?>">Book a Consultation</a>
	
					<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<section class="Kb_about kb_vision kb_study_australia section-space">
	<div class="Kb_container">
		<div class="kb_row">
			<div class="title_section why_aus">
				<h2> <?php echo get_field('top_heading'); ?> </h2> 
				<?php echo get_field('first_content'); ?>
			</div>	
		</div>
	</div>	
	<div class="Kb_container sta_aus"> 
		<div class="kb_row"> 
			<div class="Kb_about_content" >
				<div class="Kb_about_inner_content">  
					<h3><?php echo get_field('learn_more_title'); ?></h3>
					<?php echo get_field('checklist'); ?> 
				</div>
			</div>
			<div class="Kb_about_video about_image">
				<?php $image = get_field('first_image'); ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
		</div> 
	</div>
</section>
<section class="Kb_about  land_down">
	<div class="Kb_container">
		<div class="kb_row justify-content-center">
			<div class="title_section text-center why_aus">
				<h2><?php echo get_field('second_heading'); ?></h2>
			</div>	
		</div> 
		<div class="kb_row">
			<div class="Kb_about_video about_image">
				<?php $image = get_field('second_image'); ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
			<div class="Kb_about_content">
				<div class="Kb_about_inner_content">
					<?php echo get_field('second_content'); ?>
				</div>
			</div>
		</div>
	</div>	
</section>
<section class="faq section-space">
	<div class="Kb_container">
		<div class="kb_row justify-content-center">
			<div class="title_section text-center">
				<h2><?php echo get_field('faq_title'); ?></h2>
			</div>
		</div>
		<div class="kb_row">
				<div class="accordion">
					<?php 
					$i = 1;
					$id='';		
					while ( have_rows('faqs' ) ) : the_row();
					if($i==1){
						$id = 'id="defaultOpen"';
					}
					else{
						$id = 'id=""';
					} ?>
					<div class="accordion-item">
						<button aria-expanded="false"><span class="accordion-title"><?php echo get_sub_field( "faq_title" ) ?></span><span class="icon" aria-hidden="true"></span></button>
						<div class="accordion-content">
							<?php echo get_sub_field("faq_content"); ?>
						</div>
					</div>
					<?php   
					$i++;
					endwhile;
					?>
				</div>
		</div>
	</div>
</section>
<section class="cta">
	<div class="Kb_container">
		<div class="kb_row justify-content-center">
			<div class="cta_wrap">
				<div class="left_col">
					<p>Start your business with us.</p>
					<h2>Book a free consultation </h2>
				</div>
				<div class="right_cta">
					<a href="/book-an-appointment">Book Now</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="kb_blog section-space">
		<div class="Kb_container">
			<div class="kb_row justify-content-center">
				<div class="title_section text-center"> 
					<h2>Our Recent Blogs</h2>
					<p>Our latest migration and educational articles</p>
				</div>
			</div>
			<div class="kb_row">
				<div class="blog-section">
					 <?php echo do_shortcode("[blogs_grid]"); ?> 
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>	 
