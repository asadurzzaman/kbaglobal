<?php /* Template Name: Visa Parent Page */ ?>
<?php get_header();
//echo get_field('page_cta_txt');die;
 $bg_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
$style='';
if($bg_url)	{
	$style='style="background:url('.$bg_url.');background-size: cover; background-repeat: no-repeat;"';
}
?>
<section class="Kb_banner page_header" <?php echo $style; ?>>
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
<section class="Kb_mission visa_parent_about">
	<div class="Kb_container">
		<div class="kb_row">
			<div class="Kb_about_content">
				<div class="Kb_about_inner_content">
					<h2><?php echo get_field("second_heading") ?></h2>
					<p><?php echo get_field("second_content") ?></p>
				</div>
			</div>
		</div>
	</div> 
</section>

<?php 
	$cat_name2 = array(); 
	$category_names = get_the_terms( $post->ID , 'page-categories' );

	if( $category_names != null ):
		foreach ($category_names as $category_name):  
			array_push($cat_name2, $category_name->slug); 
		endforeach;
	endif;

// I want to hide when the category is "protection-visa"
if ( !in_array('protection-visa', $cat_name2) ) {
?>
<section class="services visa_pages">
	<div class="Kb_container">
   		<div class="kb_row justify-content-center"> 
         	<div class="title_section text-center">
            	<h2>Other visa pages</h2>
         	</div>
      	</div>
   </div> 
	<div class="Kb_container"> 
		<div class="kb_row">
			<div class="owl-carousel owl-theme parent_visa_page_carousel">  
					<?php  
					global $paged;
					$cat_name = array();
					$cat_ids = array();
					$categories = get_the_terms( $post->ID , 'page-categories' );

					if( $categories != null ):
						foreach ($categories as $category):  
							array_push($cat_name, $category->name);
							array_push($cat_ids, $category->term_id);
						endforeach;
					endif;  
					$exclude = $wp_query->post->ID; 
					$query_args = array(    
						'page-categories' => $cat_name[0],
						'post_type'      => 'page', 
						'posts_per_page'  => -1,  
					);
					$related_cats_visas = new WP_Query( $query_args );
					if($related_cats_visas->have_posts()):
						while($related_cats_visas->have_posts()): $related_cats_visas->the_post();  
						if( $exclude != get_the_ID() ){  
						?> 
							<div class="blog-box">
									<div class="img-left"> 
									<a href="<?php the_permalink(); ?>" >
										<?php if ( has_post_thumbnail() ) : ?>	
												<?php the_post_thumbnail( 'large' ); ?>	 
										<?php else : ?>
											<img src="https://www.adotrip.com/public/images/blogs/master_images/606441d47ab0e-Visa_Services.jpg" alt="">
										<?php endif; ?>
									</a>	
										
									</div>
									<div class="right-blog">
										<h2 class="post-title"> <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2> 
									</div> 
							</div>
						<?php }elseif($related_cats_visas->post_count == 1){
							echo "No Related visa pages Found";
						} 
					endwhile; 
						// Restore original Post Data
						wp_reset_postdata();
					endif;
					?>  
			</div>
		</div>
	</div>
</section>
<?php 
} else {
}

?>
<section class="cta">
		<div class="Kb_container">
			<div class="kb_row justify-content-center">
				<div class="cta_wrap">
					<div class="left_col">
						<p>No matter your needs, we've got you covered.</p>
						<h2>Book a free consultation </h2>
					</div>
					<div class="right_cta">
						<a href="/book-an-appointment">Contact us today</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
