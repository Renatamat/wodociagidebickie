<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
$cat = get_the_category();


?>

<main id="site-content" >
<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
	
  
       <div class="additional-flex-wrapper">
           
           <?php
           if ($cat[0]->term_id == 12) {
               get_template_part('template-parts/right-menu');
           } elseif ($cat[0]->term_id == 13) { 
               get_template_part('template-parts/right-menu-strefa');
           }
           if ($cat[0]->term_id !== 12 && $cat[0]->term_id !== 13) {
               ?> 
               <aside class="bip-menu aside-menu menu-right">   
               <?php get_template_part('template-parts/right-widgety'); ?>
               </aside> 
               <?php
               }
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

