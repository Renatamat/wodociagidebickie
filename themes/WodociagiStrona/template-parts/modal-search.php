<?php
/**
 * Displays the search icon and modal
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<div class="search-modal cover-modal header-footer-group hidden" data-modal-target-string=".search-modal">

	<div class="search-modal-inner modal-inner">

		<div class="section-inner">
<form class="search" method="get" action="<?php echo home_url(); ?>">
    <label class="hidden-label" for="search2">Wyszukiwana fraza</label>
    <input class="search-input" id="search2" type="search" name="s" placeholder="<?php _e('szukaj', 'WodociagiStrona'); ?>">
       <input type="hidden" name="search" value="default_search">
       <button class="search-submit" type="submit" name="szukaj" aria-labelledby="foo"><i class="icon-magnifier icons"></i><span id="foo2" class="visuallyhidden">Szukaj</span></button>

</form> 
			<?php
//			get_search_form(
//				array(
//					'label' => __( 'Search for:', 'twentytwenty' ),
//				)
//			);
			?>

			<button class="toggle search-untoggle close-search-toggle fill-children-current-color" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
				<span class="screen-reader-text"><?php _e( 'Close search', 'twentytwenty' ); ?></span>
				<?php twentytwenty_the_theme_svg( 'cross' ); ?>
			</button><!-- .search-toggle -->

		</div><!-- .section-inner -->

	</div><!-- .search-modal-inner -->

</div><!-- .menu-modal -->
