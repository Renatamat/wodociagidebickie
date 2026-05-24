<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php

//	get_template_part( 'template-parts/entry-header' );


	?>

	<div class=" PRZETARG post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">
	<?php the_title( '<h3 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' ); ?>

		<div class="entry-content-home">
                   
                        
					<div class="post-date meta-wrapper">
						<span class="screen-reader-text"><?php _e( 'Post date', 'twentytwenty' ); ?></span>
						<span class="meta-text">
							<?php the_time( get_option( 'date_format' ) ); ?>
						</span>
					</div>
                  
					<?php
                 
			?>
         <!--get_template_part( 'kafelki_home' );-->
		</div><!-- .entry-content -->
            <a class="wiecej-informacji" href="<?= esc_url( get_permalink() ) ?>">więcej informacji  <i class="fas fa-arrow-right"></i>   </a>
	
	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

		if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

			get_template_part( 'template-parts/entry-author-bio' );

		}
                
		?>
 
	</div><!-- .section-inner -->



</article><!-- .post -->
