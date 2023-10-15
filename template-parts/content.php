<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kbaglobal
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">  
		
		<?php
		if ( is_singular() ) :
			?>
			<div class="post_meta_data">
				<p class="post_date">
					<span><i class="fa-solid fa-calendar-days"></i></span> <?php echo get_the_date( 'l, j M Y' ); ?>
				</p> 
				<ul class="meta_data">
					<li><i class="fa-solid fa-tags"></i></li>
				<?php 
				$categories = get_the_category(); 
				foreach( $categories as $category){ 
				?> 
				<li><a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a></li>
				<?php }?>
				</ul>
			</div>

			<?php 
			the_title( '<h1 class="entry-title">', '</h1>' );
?>

<?php
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
?>

<?php
		if ( 'post' === get_post_type() ) :
			?>
			<!--div class="entry-meta">
				<?php
				kbaglobal_posted_on();
				kbaglobal_posted_by();
				?>
			</div--><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php kbaglobal_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'kbaglobal' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kbaglobal' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //kbaglobal_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
