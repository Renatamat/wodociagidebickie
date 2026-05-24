<?php
/**
 * Template Name: Przetargi 
 * Template Post Type: page
 *
 */
get_header();

?>

<main id="site-content">
<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
    <div class="additional-flex-wrapper">
    <h1> Biuletyn Informacji Publicznej</br> „Wodociągów Dębickich” sp. z o.o.</h1>
    </div>
<div class="additional-flex-wrapper">
    <?php  get_template_part( 'template-parts/right-menu');?>
    <div class="content">
        <header class="entry-header has-text-align-center header-footer-group">

	<div class="entry-header-inner section-inner medium">

	<h2 class="entry-title ">Przetargi</h2>
	</div><!-- .entry-header-inner -->

</header>
            <?php

$przetargi_args = array(
            'post_type' => 'post',
            'category' => 12,
            'nopaging' => true
        );

        $przetargi = get_posts($przetargi_args);

?>
<?php if ($przetargi) : 
                   foreach ( $przetargi as $post ) :  setup_postdata( $post );

                            get_template_part( 'template-parts/content-przetargi', get_post_type() );
                      endforeach; 
                     wp_reset_postdata();
           
   endif;
            ?>
        </div>
</div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>

