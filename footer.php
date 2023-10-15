<section class="kb_office section-space">
		<div class="Kb_container">
			<div class="kb_row justify-content-center">
				<div class="title_section text-center">
					<h2>Offices</h2>
				</div>
			</div>
			<div class="kb_row">
				<div class="address d-flex footer__offices--closed"> 
		   			<?php 
						$args = array(
							'posts_per_page' => -1, /* how many post you need to display */ 
							'post_type' => 'all_offices', /* your post type name */
							'post_status' => 'publish'
						);
						$query = new WP_Query($args);
						if ($query->have_posts()) :
							while ($query->have_posts()) : $query->the_post();

						$address_groups = get_field( 'address_group' ); 
						// Group's field returs array. So can fetch subfields like this.
						$email2 = $address_groups['email'];
						$phone_number2 = $address_groups['phone_number'];
						$address2 = $address_groups['address'];
						$google_map_url2 = $address_groups['google_map_url'];
					?>
				<article class="office_address">
				<h4>
					<?php the_title(); ?>
				</h4>

				<ul class="footer__offices-address">
					<?php 
					if( !empty($email2)){
					?>
					<li class="footer__address--email">
					<i class="fa fa-envelope-o" aria-hidden="true"></i> 
					<a href="mailto:<?php echo $email2; ?>"><?php echo $email2; ?></a>

					</li>
					<?php 
					}
					if( !empty($phone_number2)){
					?>
					<li class="footer__address--phone">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<a href="tel:<?php echo $phone_number2; ?>"><?php echo $phone_number2; ?></a>
					</li>
					<?php } 
					
					if( !empty($address2)){
					?>
					<li class="footer__address--location">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<a target="_blank" href="<?php echo $google_map_url2; ?>"><?php echo $address2; ?></a>
					</li>
					<?php } ?>
				</ul>
				</article> 
  				<?php
					endwhile;
				  endif; ?>
</div>
			</div>
			<div class="all-offices-btn d-flex">
					<a href="javascript:;" id="view_all_offices">View All offices</a>
			</div>
		</div>
	</section>
<footer class="kb_footer section-space">
		<div class="Kb_container">
			<div class="kb_row kb_footer_wrap">
				<div class="col-md-3">
					<div class="logo">
						<a href="<?php echo site_url(); ?>" aria-label="Logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/kba-global-logo.png" alt="KBA Global Logo"></a>
					</div>
					<div class="kb_social_media">
						<ul>
							<li><a href="https://www.facebook.com/Kbaglobal" target="_blank" aria-label="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i>	</a></li>
							<li><a href="https://www.instagram.com/kbaglobalau/" target="_blank" aria-label="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCNHnKBttPwUp5vxlzcaBGZQ" target="_blank" aria-label="Youtube"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
							<li><a href="https://www.linkedin.com/company/kba-global" target="_blank" aria-label="Linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="quick-links menu-design">
						<h5>QUICK LINKS</h5>
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/our-team">Our Team</a></li>
							<li><a href="/track-your-request">Track Your Request</a></li>
							<li><a href="/book-an-appointment">Book Now</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="quick-links menu-design">
						<h5>VISA PATHWAYS</h5>
						<ul>
							<li><a href="/study-in-australia">Study in Australia </a></li>
							<li><a href="#">Education System in Australia</a></li>
							<li><a href="/immigrate-to-australia">Immigrate to Australia</a></li>
							<li><a href="/bring-your-parents-to-australia">Bring your Parents to Australia</a></li>
							<li><a href="/migration-agents-australia">Migration Agents Australia</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="quick-links">
						<h5>RECENT POSTS</h5> 
             <?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="Kb_container">
				<div class="kb_row kb_footer_wrap">
					<div class="text-left">
						© 2023 KBA Global, All rights reserved.
					</div>
					<div class="text-right">
						<ul>
							<li><a href="https://kbaweb.co/web-design-sydney" target="_blank">Sydney Web Design By KBA Web</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer> 

<?php wp_footer(); ?>
<script>
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
//document.getElementById("defaultOpen").click();

const defaultOpenElement = document.getElementById("defaultOpen");
if (defaultOpenElement) {
    defaultOpenElement.click();
}	

</script>
</body>
</html>