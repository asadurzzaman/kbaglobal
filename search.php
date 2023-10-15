<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kbaglobal
 */

get_header();
?> 
		<?php if ( have_posts() ) : ?>
			<section class="Kb_banner page_header search_header">
				<div class="Kb_container">
					<div class="kb_row">
						<div class="banner_box"> 
							<h2 class="search_query_title">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'kbaglobal' ), '<span class="search_query">' . get_search_query() . '</span>' );
								?>
							</h2>
							<div class="search_box">
								<?php
								 get_search_form();
								?>
							</div>
						</div>
					</div>
				</div>
			</section> 
			<section class="services section-space blog_list">
				<div class="Kb_container"> 
					<div class="kb_row justify-content-center">  
						<div class="kb_services_col">
							
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post(); ?> 
								<div class="search_article">    
									<header class="entry-header">  
										<?php  
										the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); 
										?>
									</header><!-- .entry-header --> 
									<div class="entry-summary">
										<p><?php echo wp_trim_words(get_the_content(), 35); ?></p>
									</div><!-- .entry-summary --> 
								</div>
							<?php

							endwhile;

							kba_pagination();

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif;
							?>  
						</div> 
					</div>
				</div>
			</section>

<?php
get_footer();
