<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>
<section class="new_Kb_banner">
	<div class="Kb_container">
		<div class="kb_row"> 
				<div class="banner_box_left">
					<h1><span>TRUSTED IMMIGRATION & EDUCATION</span> partner for a brighter
						future.</h1>
					<p><span>The Australian Dream is always within your reach. We're here to make it closer.</span><br/>
						With the right Australian immigration agency, you'll have a trusted companion throughout your visa
						journey — whether you're migrating to or studying in Australia.</p>
					<a class="kb_button" href="/book-an-appointment/">Speak to a Consultant</a>
				</div>
				<div class="banner_box_right">
					<img src="https://kbaglobal.com/wp-content/uploads/2023/08/hero-image-low.webp" alt="Hero Image">
				</div> 
		</div>
	</div>
</section> 
	<section class="Kb_about first_about">
		<div class="Kb_container"> 
			<div class="kb_row">
				<div class="Kb_about_content">
					<div class="Kb_about_inner_content"> 
						<h2>Education</h2>
						<p>Study with the best universities and discover a world of opportunities.</p>
						<div class="links">
							<a  href="/study-in-australia">Study in Australia</a>
							<a  href="/student-visa-500">Student Visa</a>
							<a  href="/cost-of-living-australia">Cost of living</a>
						</div> 
					</div>
				</div>
				<div class="Kb_about_video"> 
					<img src="/wp-content/uploads/2023/06/education.webp" alt="Education"/>
				</div>
			</div>
		</div>
	</section>
	<section class="Kb_about second_about">
		<div class="Kb_container">
			<div class="kb_row">
				<div class="Kb_about_video"> 
					<img src="/wp-content/uploads/2023/06/migration.webp" alt="migration"/>
				</div>
				<div class="Kb_about_content">
					<div class="Kb_about_inner_content"> 
						<h2>Migration</h2>
						<p>Begin your migration to Australia and pave the way for a brighter tomorrow.</p>
						<div class="links"> 
							<a  href="/general-skilled-migration">General Skilled Migration</a>
							<a  href="/employer-sponsored-visas">Employer Sponsored</a>
							<a  href="/parent-visas">Parent Visa</a>
							<a  href="/family-visas">Family Visas</a>
							<a  href="/partner-visas">Partner Visas</a>
							<a  href="/visitor-visas">Visitor Visa</a>
							<a  href="/business-visas">Business Visa</a>
							<a  href="/talent-visas">Talent Visa</a>
							<a  href="/other-visas">Other Visa</a>
						</div> 
					</div>
				</div>
				
			</div>
		</div> 
	</section> 
	<section class="Kb_about welcome_message">
		<div class="Kb_container"> 
		<div class="kb_row">
			<div class="Kb_about_content">
				<div class="Kb_about_inner_content"> 
					<h2>Welcome message from our Director</h2>
					<p>"Your future is at the center of our values."</p>

<p>To live or study in Australia can seem impossible to you. However, we believe nothing could be further from the truth.</p>

<p>You have the incredible capacity to achieve your dreams. Sometimes, all you need is the right support, guidance, and a companion to remind you of your potential.</p>

					<p>And that is exactly what we're here for. </p>

<p>With years of experience serving beautiful people from diverse backgrounds, we have had the privilege of witnessing great success in their migration journeys. </p>

<p>And with such success, we're inspired to continue to deliver exceptional value — to guide you through the overwhelming migration process and help you reach your highest potential.</p>

<p>
	
					We're committed to being your trusted education and immigration consultant, and we look forward to accompanying you on this exciting adventure. </p>
					<a href="/about-us" class="talk_to_expert">About us</a> 
				</div>
			</div>
			<div class="Kb_about_video">
				<iframe src="<?php echo get_field('video_link') ?>" title="KBA Global about us" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" style="width:100%;height:350px"></iframe>
			</div>
		</div>
		</div>
	</section>
<section class="services timeline section-space">
	<div class="Kb_container">
			<div class="kb_row justify-content-center">
				<div class="title_section text-center">
					<h2>Our Story So Far</h2>
					<p>Here is the journey</p>
				</div>	
			</div>
			<div class="kb_row justify-content-center">
				<?php echo do_shortcode('[cool-timeline layout="horizontal"  skin="default" designs="design-4" order="ASC"   date-format="Y" based="default" autoplay="false" start-on="0" show-posts=3]'); ?>
			</div>
	</div>	
					
</section>
	<section class="client-testimonials section-space">
		<div class="Kb_container">
			<div class="kb_row justify-content-center">
				<div class="kb_row justify-content-center">
					<div class="title_section text-center">
						<h2>Client Success Stories</h2>
						<p>Don't believe us? Take a look into what some of our amazing clients say about us!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="Kb_testimonials_wrap">
		<div class="Kb_container">
			<div class="home-demo">
				<div class="owl-carousel owl-theme">
					<?php $args = array(
					'posts_per_page' => 10, /* how many post you need to display */
					'offset' => 0,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'testimonials', /* your post type name */
					'post_status' => 'publish'
				  );
				  $query = new WP_Query($args);
				  if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
						?>
					<div class="item">
						<div class="Kb_testimonials">
							<div class="star">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<p><?php echo get_the_content(); ?></p>
							<div class="client-details">
								<span class="image">
									  <?php
									  $image = get_field('client_image'); 
									  $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
									  if( $image ) { ?>
										 <img src="<?php echo $image['url'] ?>" class="testimonial-img" alt="<?php echo get_the_title(); ?>">

									  <?php }else{ ?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/kb-course.jpg" />
									<?php } ?>
								</span>
								<span>
									<strong><?php echo get_the_title(); ?></strong>
								</span>
							</div>
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
	<section class="services section-space counter_section">
		<div class="Kb_container">
			<div class="kb_row justify-content-center">
				<div class="title_section text-center">
					<h2>Australia immigration agency trusted by many</h2> 
				</div>
			</div>
			<div class="kb_row justify-content-center">
				<div class="kb_services_col">
					<div class="kb_serviceBox"> 
						 <p class="counter"><span id='counter_1' >0</span>+</p>
							<h2>Years of Business</h2>
					</div>	
					<div class="kb_serviceBox"> 
						 <p class="counter"><span id='counter_2' >0</span>+</p>
						<h2>Locations</h2>
					</div>	
					<div class="kb_serviceBox"> 
						  <p class="counter"><span id='counter_3' >0</span>K+</p>
							<h2>Satisfied Clients</h2>
					</div>	
					<div class="kb_serviceBox"> 
						  <p class="counter"><span id='counter_4' >0</span>+</p>
							<h2>Team Members</h2>
					</div>	 
				</div>
			</div>
	</div>
</section>
	<section class="cta">
		<div class="Kb_container">
			<div class="kb_row justify-content-center">
				<div class="cta_wrap">
					<div class="left_col">
						<p>Make your dreams a reality. Begin the migration process and enjoy the exceptional quality of life that Australia has to offer.</p>
						<h2>Speak to an Experienced Consultant </h2>
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
					<h2>Australian Immigration FAQs</h2>
				</div>
			</div>
			<div class="kb_row">
				  <div class="accordion">
					<div class="accordion-item">
					  <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Is Australia easy to immigrate?</span><span class="icon" aria-hidden="true"></span></button>
					  <div class="accordion-content">
						<p>Although Australia is known to have an efficient immigration program, immigrating there can still be quite challenging. In general, immigrating to any country is not that easy.

However, there are things you can do to increase your chances of successfully immigrating  to Australia. It all depends on your ability to meet the specific requirements outlined in the visa you plan to apply for (e.g. skilled visa, employer-sponsored visa, family visa, etc.)

For instance, you may need to demonstrate the necessary skills or experience in a particular industry, secure a job offer from an Australian employer, and meet other specific requirements. These are some examples of factors that can determine your eligibility for immigration.</p>
					  </div>
					</div>
					<div class="accordion-item">
					  <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">What are the requirements to immigrate to Australia?</span><span class="icon" aria-hidden="true"></span></button>
					  <div class="accordion-content">
						<p>The requirements to immigrate to Australia depend on the specific visa or visa category you're applying for. Each visa type has its own set of requirements that need to be fulfilled, such as age, English language proficiency, skills assessment, work experience, and health and character standards.

To know more about the different visa categories and their specific requirements, visit our visa pages.</p>
					  </div>
					</div>
					<div class="accordion-item">
					  <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">How can I get work in Australia?</span><span class="icon" aria-hidden="true"></span></button>
					  <div class="accordion-content">
						<p>To get work in Australia, you must aquire a valid visa with work rights. This includes the following visas:

- Work and Holiday visa (subclass 462)
- Work Holiday visa (subclass 417)
- Temporary Graduate visa (subclass 485)
- Skilled Migration visas (subclass 491, 190, 494, etc.)

In addition to the typical work visas above, there are other pathways for getting work in Australia. These include those under Family and Partner visas, and Student visas. However, you will need to look at your circumstance and see if it meets the conditions of these alternatives.</p>
					  </div>
					</div>
					<div class="accordion-item">
					  <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Can I come to Australia to work?</span><span class="icon" aria-hidden="true"></span></button>
					  <div class="accordion-content">
						<p>Yes, you can come to Australia to work as long as (1) your visa permits work in Australia and (2) you meet all requirements specified in the visa you are applying for.

To give you an example, one of the most common pathway for working in Australia is the visa subclass 491. In this case, you will need to demonstrate sufficient skills and experience, satisfy the points test, and have an invitation to work in Australia.

Note that there are other alternatives to be granted permission to work in Australia. It's best to consult with a reliable Australian migration agent to help you explore the best options that suit your needs and circumstances.</p>
					  </div>
					</div>
					<div class="accordion-item">
					  <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">How much does it cost to study in Australia?</span><span class="icon" aria-hidden="true"></span></button>
					  <div class="accordion-content">
						<p>The cost of studying in Australia depends on many factors, including tuition fees and costs for study materials. However, practically speaking, there are still other costs that come along with them, such as the Student visa fee itself, the mandatory health examinations, and other miscellaenous expenses.

To give you an idea, here are some estimated numbers for your reference:

Tuition Fee:  AUD 20,000 - AUD 50,000, annually
Study Materials: at least AUD 500, annually
Living expenses (accommodations, meals, etc.): AUD 30,000, annually
Student visa fee: AUD 650</p>
					  </div>
					</div>
					 <div class="accordion-item">
					  <button id="accordion-button-6" aria-expanded="false"><span class="accordion-title">How long is the process to immigrate to Australia?</span><span class="icon" aria-hidden="true"></span></button>
					  <div class="accordion-content">
						<p>There is no set duration in terms of processing your immigration to Australia. How long you will be processing your immigration depends mainly on the type of visa you are applying for and your individual circumstances. This can take months or even several years.

While there may be available information regarding processing times, it should only serve as a benchmark or estimate, as this information is most likely based on historical data.
</p>
					  </div>
					</div>
					  <div class="accordion-item">
					  <button id="accordion-button-7" aria-expanded="false"><span class="accordion-title">What is the process to migrate to Australia?</span><span class="icon" aria-hidden="true"></span></button>
					  <div class="accordion-content">
						<p>The process to migrate to Australia typically includes the following steps:

1. Determining and selecting the appropriate visa
2. Submitting visa application form, including lodging of documents and other necessary evidences
3. Undergoing health and character checks

Note that these are just general steps. Thus, there may be other things you are required to do or submit, depending mainly on the visa category you are applying for.

We recommend working with a registed immigration agent as they can help you understand more clearly the steps involved in the entire process, and they can give you insights along your migration journey.
</p>
					  </div>
					</div>
					 <div class="accordion-item">
					  <button id="accordion-button-8" aria-expanded="false"><span class="accordion-title">How much money do you need to work in Australia?</span><span class="icon" aria-hidden="true"></span></button>
					  <div class="accordion-content">
						<p>You may need around AUD 5,000 to work in Australia. This already covers the cost of your Work visa, health checks, and some other relevant fees.

Note that for certain visa categories with working rights, you may need to present "sufficient funds" to prove that you can financially support yourself for the entire duration of your stay in Australia. 

For a Working holiday visa, you need about AUD 5000. However, the required amount can vary for a Student visa, as it should cover tuition fees, accommodation, transportation, meals, and other necessary expenses.

For you to get a more accurate estimate of the costs to work in Australia, determine the visa category you are applying for. Better yet, speak with an Australian visa agent as they can provide valuable insights into realistic cost expectations
</p>
					  </div>
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
	<section class="Kb_universities section-space">
		<div class="Kb_container">
			<div class="kb_row justify-content-center">
				<div class="title_section text-center">
					<h2><span class="tow_title">Study with</span> the best universities and colleges in Australia</h2>
					<p>
						We partner with various universities and colleges in Australia that offer wide range of courses. Consult with our certified and experienced education counselors to explore courses, colleges, or universities and commence your study abroad journey with us.
					</p>
				</div>	
			</div>
			<div class=" justify-content-center">
				<ul class="image-grid" data-slide-to-show = "6">
					 <?php $args = array(
						'posts_per_page' => -1, /* how many post you need to display */
						'offset' => 0,
						'orderby' => 'post_date',
						'order' => 'ASC',
						'post_type' => 'universities', /* your post type name */
						'post_status' => 'publish'
					  );
					  $query = new WP_Query($args);
					  if ($query->have_posts()) :
						while ($query->have_posts()) : $query->the_post();
							$university_link = get_field('website_url');

							?> 
					<li>
						 <a target="_blank" href="<?php echo $university_link; ?>" class="image-grid__item" title="<?php echo $university_link; ?>">
					 			<?php the_post_thumbnail( 'full' ); ?>	
						</a> 
						 <?php
					endwhile;
				  endif; ?>
					</li>	
				</ul>
			</div>
		</div>	
	</section> 


<?php get_footer(); ?>