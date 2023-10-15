<?php /* Template Name: Template Offices */ ?>
<?php get_header(); ?>
	<section class="Kb_banner page_header">
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
	<section class="services section-space offices-list">
		<div class="Kb_container">
			<div class="office-carousel owl-carousel owl-theme">  
				<?php
				$args = array(
							'taxonomy' => 'office_category',
							'orderby' => 'name',
							'order'   => 'ASC'
						);
				$cats = get_categories($args); 
				if ( ! empty( $cats ) && is_array( $cats ) ){
				foreach($cats as $cat) {  
					 $termlink = get_term_link( $cat->slug, 'office_category' );
				?>
					<div class="kb_serviceBox"> 
						<div class="serviceBoxImg"> 
						 	<img src="<?php the_field('tax_upload_image', 'office_category_'.$cat->term_id); ?>" />
						</div> 
						<div class="serviceBoxinfo"> 
						<h2><a href="<?php echo $termlink; ?>"><?php echo $cat->name; ?></a></h2> 
						<p><?php echo $cat->description; ?></p>
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