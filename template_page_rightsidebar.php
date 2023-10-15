<?php /* Template Name: Page Right Sidebar */ ?>
<?php get_header(); ?>
	<section class="Kb_banner page_header">
		<div class="Kb_container">
			<div class="kb_row">
				<div class="banner_box"> 
					<p><?php the_field('page_description'); ?></p>
					 <?php if(get_field('page_cta')!=""): ?>
						<a href="<?php echo get_field('page_cta'); ?>">Book a Consultation</a>
					 <?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="services section-space blog_list">
		<div class="Kb_container">
			
			<div class="kb_row justify-content-center" style="align-items: flex-start;">
				<div class="left"> 
					<main id="primary" class="site-main"> 
						<?php
						the_title();
						the_content();
						while ( have_posts() ) :
							the_post(); 
							get_template_part( 'template-parts/content', 'page' );
				
						endwhile; // End of the loop.
						?> 
					</main><!-- #main -->
				</div>
				<div class="right">
					  <!-- <div id="secondary" class="widget-area" role="complementary"> -->
						<?php  
						// $sidebar = get_post_meta(get_the_ID(), 'kbaglobal_custom_sidebar', true);
						// if($sidebar){
						// 	 dynamic_sidebar($sidebar);
						// }else{
						// 	if ( is_active_sidebar( 'page-sidebar' ) ) :  
						// 			 dynamic_sidebar( 'page-sidebar' ); 
						// 	endif;
						// } 
						?>
					<!-- </div> -->
				</div>
			</div>
			</div>
		
	</section>
<style>

.blog_list .left {
    width: 64%;padding:0px 20px;
}
.blog_list .right {
    width: 33%;
	padding:0px 20px;
	}
.page-template-template_blog .kb_serviceBox {
      width: 100%;
   background: #f0f0f1;
    margin: 20px;
    text-align: center;
    border: 0;
   border-radius: 10px;
    padding: 0;
    text-align: left;
    margin: 0px 0px;
	margin-bottom: 20px;padding:10px;
}
.page-template-template_blog	.kb_services_col {
   
    margin-top: 0;
}
.blog_meta {  
    padding: 20px 10px;
}
	
	.page-template-template_blog .kb_serviceBox p {
  
    color: #000000;
		text-align:left
}
	
	.page-template-template_blog .blog_list .kb_row {
    display: flex;
    width: 100%;
    align-items: flex-start;
}
	.widget ul {
    list-style: none;
    margin: 0;
}
	.wp-block-categories-list li a {
    color: inherit;
}
.wp-block-categories-list li {
    padding: 10px 0px;
    border-bottom: 1px solid #f0f0f1;
    list-style: disc;
    margin-left: 20px;
}
	.widget_search input {
    width: 200px;
    flex-grow: 0;
}
	.widget_search .wp-block-search__label{
		display:none;
	}
	.widget_search  .wp-block-search__button {
    margin-left: 0.625em;
    word-break: normal;
    background: var(--color-primary);
    color: #fff;
    padding: 10px 10px;
    border-radius: 5px;
    /* font-weight: bold; */
    text-decoration: none;
		border:0;
}
</style>
<?php get_footer(); ?>