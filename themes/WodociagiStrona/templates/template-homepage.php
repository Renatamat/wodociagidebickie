<?php
/**
 * Template Name: Homepage 
 * Template Post Type: page
 *
 */

get_header();
?>

<main id="site-content">

	<?php

	if ( have_posts() ) {
        
            echo do_shortcode('[metaslider id="42"]');
 
		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-home', get_post_type() );
		}
                get_template_part( 'kafelki-home' );
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>

