<?php 
/**
 * Template Name: Single All Offices
 * Template Post Type: all_offices
 */

get_header(); 

$address_groups = get_field( 'address_group' );

$email = $address_groups['email'];
$phone_number = $address_groups['phone_number'];
$address = $address_groups['address'];
$office_open_datetime = $address_groups['office_open_datetime'];
$google_map_url = $address_groups['google_map_url'];
?>
<section class="Kb_banner page_header">
	<div class="Kb_container">
		<div class="kb_row">
			<div class="banner_box">
				<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
			</div>
		</div>
	</div>
</section>  
<section class="single_office section-space">
	<div class="Kb_container"> 
		<div class="kb_row subtitle_row">
			<div class="subtitle_box">
				<h2><?php the_field( 'address_title' );  ?></h2>
			</div>
		</div>
		<div class="kb_row">  
			<div class="office_box">
				<div class="icon">
					<i class="fa-solid fa-envelope"></i>
				</div>
				<div class="info">
					<p><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
				</div>
			</div>
			<div class="office_box">
				<div class="icon">
					<i class="fa-solid fa-phone-flip"></i>
				</div>
				<div class="info">
					<p><a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a></p>
				</div>
			</div>
			<div class="office_box">
				<div class="icon">
					<i class="fa-solid fa-location-dot"></i>
				</div>
				<div class="info">
					<p><a target="_blank" href="<?php echo $google_map_url ?>"><?php echo $address ?></a></p>
				</div>
			</div>   
		</div> 
		<div class="kb_row office_time">
			<div class="single_office_date_time">
				<Ul>
					<?php 
						$datetimes = get_field('datetime');
						if( $datetimes ) { 
							foreach( $datetimes as $datetime ) {  	
								
						if( $datetime['office_open_or_close'] == 'Open' ){	
					?>
					<li>
						<span class="day"><?php echo $datetime['day'] ?> : </span> 
						<span class="start_time"><b><?php echo $datetime['start_time'] ?></b></span>
						<span class="end_time"><b><?php echo $datetime['end_time'] ?></b></span> 
					</li>
					<?php
					}else{
						?>
						<li>
						<span class="day"><?php echo $datetime['day'] ?>: </span> 
						<span class="start_time"></span>
						<span class="end_time">Closed</span>
					</li>
						<?php
					}	
						} 
					} 
					?>
					<!-- <li><span class="day">Saturday:</span> <span><b>Closed</b></span></li>
					<li><span class="day">Sunday:</span><span><b>Closed</b></span></li> -->
				</Ul>
			</div>
		</div>
	</div> 
</section>
	<section class="google_map">
		<?php 
			if( get_field('google_map_iframe_for_office_address')){
				the_field('google_map_iframe_for_office_address');
			} 
		 ?>
	</section>
<?php get_footer(); ?>