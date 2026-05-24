<?php
/**
 * Template Name: Jakosc wody  
 * Template Post Type: page
 *
 */


get_header('bip');
?>

<div class="breadcrumb"><?php get_breadcrumb(); ?></div>


<main id="site-content" class="content bip-content">
    <div class="additional-flex-wrapper">
    <?php  get_template_part( 'template-parts/right-menu-jakosc-wody');?>
    <?php 
	if ( have_posts() ) {
		while ( have_posts() ) {                   
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
		}
	}
	?>
</div>
</main><!-- #site-content -->
 

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>

