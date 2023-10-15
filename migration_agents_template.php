<?php 

/* Template Name: Migration Agents Australia*/

get_header(); 

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
					<h2><?php echo get_field("ma_second_heading") ?></h2>
					<p><?php echo get_field("ma_second_content") ?></p>
				</div>
			</div>
			<div class="Kb_about_video_right ">
				<div class="cb-card">
				<?php 
				
				if(  get_field("ma_second_image") && get_field( "ma_second_image") != "" ) {
					echo '<img src="'.get_field("ma_second_image").'" />';
				} else{
					echo '<img src="https://thewildcattribune.com/wp-content/uploads/2020/10/50354206828_c3732f24c3_b-900x675.jpg" />';
				} 
				?>
					 
				</div>
			</div>
		</div>
	</div> 
</section>
<section class="services visa_pages migration_city_list">
		<div class="kb_row justify-content-center">
			<div class="Kb_container">
				<div class="title_section text-center">
					<h2>Migration Agents City</h2>
				</div>
			</div>
		</div> 
	   <div class="Kb_container"> 
	   		<div class="kb_row">
				<div class="owl-carousel owl-theme parent_visa_page_carousel">  
				<?php  while ( have_rows('city_name' ) ) : the_row(); ?> 
					<div class="blog-box">
						<div class="img-left"> 
							<?php  
								if(  get_sub_field("city_image") && get_sub_field( "city_image") != "" ) {
									echo '<img src="'.get_sub_field("city_image").'" />';
								} else{
									echo '<img src="https://thewildcattribune.com/wp-content/uploads/2020/10/50354206828_c3732f24c3_b-900x675.jpg" />';
								} 
							?> 
						</div>
						<div class="right-blog">
							<h2 class="post-title">
								<a href="
								<?php 
								if( get_sub_field("city_url") && get_sub_field( "city_url") != "" ) {
									echo get_sub_field("city_url");
								}
								?> 
								">
								<?php
								if( get_sub_field("name_of_city") && get_sub_field( "name_of_city") != "" ) {
									echo get_sub_field("name_of_city");
								}else{
									echo "Sydney";
								} 
								?> 
								</a> 
							</h2> 
						</div> 
					</div> 
				<?php endwhile; ?>
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
<section class="faq section-space">
	<div class="Kb_container">
		<div class="kb_row justify-content-center">
			<div class="title_section text-center">
				<h2><?php echo get_field('ma_faq_title'); ?></h2>
			</div>
		</div>
		<div class="kb_row">
			<div class="accordion">
				<?php 
				$i = 1;
				$id='';		
				while ( have_rows('ma_faqs' ) ) : the_row();
				if($i==1){
					$id = 'id="defaultOpen"';
				}
				else{
					$id = 'id=""';
				} ?>
				<div class="accordion-item">
					<button aria-expanded="false"><span class="accordion-title"><?php echo get_sub_field( "ma_faq_title" ) ?></span><span class="icon" aria-hidden="true"></span></button>
					<div class="accordion-content">
						<?php echo get_sub_field("ma_faq_content"); ?>
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
<?php get_footer(); ?>


