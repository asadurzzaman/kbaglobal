<?php /* Template Name: Team Page */ ?>
<?php get_header(); ?>
	<section class="Kb_banner page_header">
		<div class="Kb_container">
			<div class="kb_row">
				<div class="banner_box">
					<h1>Learn more about our friendly staff</h1>
					<p>We have a team of skilled, experienced, registered migration agents and education consultants from a variety of professional backgrounds. From initial assessments to the processing and lodgement of applications, our staff will ensure a smooth process and desirable outcome.</p>
					<a href="#">Talk to our experts</a> 
				</div> 
			</div>
		</div>
	</section>
	<section class="services section-space team_list">
		<div class="Kb_container">
			<div class="kb_row justify-content-center">
				<div class="kb_services_col">
					 <?php
					  $args = array(
						'posts_per_page' => -1, /* how many post you need to display */
						'offset' => 0,
						'orderby' => 'post_date',
						'order' => 'ASC',
						'post_type' => 'team_members', /* your post type name */
						'post_status' => 'publish'
					  );
					  $query = new WP_Query($args);
					  if ($query->have_posts()) :
						while ($query->have_posts()) : $query->the_post(); ?>
					<div class="kb_serviceBox">
						<?php if (has_post_thumbnail( get_the_ID() ) ): ?>
                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
                  <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="<?php echo get_the_title(); ?>">
                <?php endif; ?>
						<div class="member-info"> 
						<h2><?php echo get_the_title(); ?></h2>
						<p><?php echo get_field("designation"); ?></p>
						</div>
					</div>
					 <?php
            endwhile;
          endif;
          ?>
					
				</div>
			</div>
			</div>
		
	</section>
<?php get_footer(); ?>