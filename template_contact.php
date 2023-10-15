<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
	<section class="Kb_banner page_header">
		<div class="Kb_container">
			<div class="kb_row">
				<div class="banner_box">
					<h1><?php echo esc_html('Contact us') ?></h1>
					<p><?php echo esc_html('For any migration or education needs, please contact us. Choose an office and send an inquiry. We are standing by to help you.') ?></p>
					 <?php if(get_field('page_cta')!=""): ?>
							<a href="<?php echo get_field('page_cta'); ?>"><?php echo esc_html('Book a Consultation') ?></a>
					 <?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="Kb_about">
		<div class="Kb_container"> 
		<div class="kb_row"> 
			<div class="Kb_about_content">
				<div class="Kb_about_inner_content">
					<h2>What happens when you contact us?</h2> 
					<p>Once you submit an enquiry, an automated email, with the details you provide, is sent to our expert registered migration agents and/or certified education counsellors. Our team will carefully review the information you provide and get back to you within 2 business days.</p>
					<p>
						Please make sure to provide as much detail as possible related to your enquiry and the time that works best for you.
					</p>
					<p>
						This will allow us to understand your situation better and contact you if we need more information to respond to your enquiry.
					</p>
					<p>
						For urgent matters, please call us at <strong>1800 522 456</strong> for assistance. Alternately, you can also contact our offices directly using the office details at the bottom of the page.
					</p>
					<br/>  
					<div class="review_box">
						<p>I could not imagine how difficult it was to complete all the process to apply for the student visa for Australia. I felt so easy because KBA Global guided me in every steps of the process. Thank you KBA Global.</p> 
						<p class="signature"><strong>Biplav Kandel</strong><br/>Student, Charles Darwin University</p> 
					</div>
				</div>
			</div>
			<div class="Kb_about_video">
				<?php echo do_shortcode('[fluentform id="1"]'); ?>
			</div>
		</div>
		</div>
	</section>
	
<?php get_footer(); ?>	 
