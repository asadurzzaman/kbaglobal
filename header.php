<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kbaglobal
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="Kb_header fixed-top" id="header"> 
		<div class="Kb_container">
			<div class="kb_row"> 
				<div class="kb_col-logo">
					<div class="site-branding">
						<?php the_custom_logo(); ?>
					</div><!-- .site-branding -->
					
				</div> 
				<div class="kb_navbar">
					<nav id="site-navigation" class="site-main-navigation desktop_menu"> 
						
						<?php  
						wp_nav_menu( 
							array( 
							'menu' => 'menu-1', 
							'container'       => 'ul',
							'container_class' => 'responsive-menu', 
							'container_id' => '',  
							'menu_class' => 'responsive-menu',
							'menu_id'=>'',
							'depth' => 3
						) ); 
						
						?>
						<ul class="responsive-menu"> 
							<li class="btn"><a href="/book-an-appointment/">Book a Consultation</a></li>
						</ul>

					</nav>
					<nav id="site-navigation" class="site-main-navigation mobile_menu">
						<span class="mobile-toggle"><i class="fa fa-bars" aria-hidden="true"></i></span>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'Mobile-menu',
								'container'       => 'ul',
								'container_class' => 'responsive-menu', 
								'container_id' => '',  
								'menu_class' => 'responsive-menu',
								'menu_id'=>'',
								'depth' => 3
							) );
						?> 
					</nav>
				</div> 
			</div>
		</div>  
		<?php 
		// wp_nav_menu( array( 
		// 	'menu' => 'menu-2',
			
		// 	'container'       => 'ul',
		// 	'container_class' => 'sub_header', 
		// 	'container_id' => '',  
		// 	'menu_class' => 'sub_header',
		// 	'menu_id'=>'',
		// 	'depth' => 3
		// ) ); 
		
		?> 
</header>
<div id="page" class="site">

