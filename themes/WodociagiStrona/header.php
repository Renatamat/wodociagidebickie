<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();              
		?>
            <div class="skip-link">
                <ul>
                    <li>
                        <a href="#pojo-a11y-toolbar" class="js-skip-link skip-main-content">
                            Przejdź do dostosowania dostępności 
                        </a>
                    </li>
                    <li>
                        <a href="#site-content" class="js-skip-link skip-main-content">
                            Przejdź do głównej treści
                        </a>
                    </li>
                    <li>
                        <a href="#primary-menu" class="js-skip-link skip-menu">
                            Przejdź do menu głównego
                        </a>
                    </li>
                    <li>
                        <a href="#search" class="js-skip-link skip-search">
                            Przejdź do wyszukiwarki
                        </a>
                    </li>
                    <?php if (is_page_template('templates/template-strefaklienta.php')) : ?>
                        <li class="skip-menu-podstrona">
                            <a href="#menu-strefa-klienta-menu" class="js-skip-link skip-menu-aside-strefa-klienta">
                                Przejdź do menu Strefa klienta
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (is_page_template('templates/template-ofirmie.php')) : ?>
                        <li class=" skip-menu-sprawy-zdm skip-menu-podstrona">
                            <a href="#menu-o-firmie" class="js-skip-link skip-menu-aside-ofirmie">
                                Przejdź do menu O firmie
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (is_page_template('templates/template-jakosc-wody.php')) : ?>
                        <li class=" skip-menu-sprawy-zdm skip-menu-podstrona">
                            <a href="#menu-jakosc-wody" class="js-skip-link skip-menu-aside-jakoscwody">
                                Przejdź do menu Jakość naszej wody
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (is_page_template('templates/template-badanie-wody.php')) : ?>
                        <li class=" skip-menu-sprawy-zdm skip-menu-podstrona">
                            <a href="#menu-badanie-wody-menu-boczne" class="js-skip-link skip-menu-aside-ofirmie">
                                Przejdź do menu Badanie wody
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (is_page_template('templates/template-projekty.php')) : ?>
                        <li class=" skip-menu-sprawy-zdm skip-menu-podstrona">
                            <a href="#menu-projekty-unijne" class="js-skip-link skip-menu-aside-projektyunijne">
                                Przejdź do menu Projekty unijne
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (is_page_template('templates/template-bip.php')) : ?>
                        <li class=" skip-menu-sprawy-zdm skip-menu-podstrona">
                            <a href="#menu-projekty-unijne" class="js-skip-link skip-menu-aside-projektyunijne">
                                Przejdź do menu bocznego Biuletynu Informacji Publicznej
                            </a>
                        </li>
                    <?php endif; ?>
                </ul> 
            </div>            
		<header id="site-header" class="header-footer-group">
                        <div class='header-content-top-top-mobile '>
                                               <a href="tel:146706814" class="box-phone-contact biuro-obslugi">Biuro Obsługi Klienta  <span><i class="icon-phone icons"></i>  14 670 68 14 </span></a>
                                               <a href="tel:146702696" class="box-phone-contact zglos-awarie">Zgłoś awarię <span><i class="icon-phone icons"></i>  14 670 26 96</span> </a>
                        </div>
			<div class="header-inner section-inner">

				<div class="header-titles-wrapper col-md-4 col-xs-12">

					<?php

					// Check whether the header search is activated in the customizer.
					$enable_header_search = get_theme_mod( 'enable_header_search', true );

					if ( true === $enable_header_search ) {

						?>

						<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
							<span class="toggle-inner">
								<span class="toggle-icon">
									<?php twentytwenty_the_theme_svg( 'search' ); ?>
								</span>
								<span class="toggle-text"><?php _e( 'Search', 'twentytwenty' ); ?></span>
							</span>
						</button><!-- .search-toggle -->

					<?php } ?>   
 

					<div class="header-titles">

						<?php
							// Site title or logo.
							twentytwenty_site_logo();
						?>

					</div><!-- .header-titles -->

					<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
							</span>
							<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
						</span>
					</button><!-- .nav-toggle -->

				</div><!-- .header-titles-wrapper -->

				<div class="header-navigation-wrapper ">
                                     
                                    <div class="col-md-12 header-content">
                                        <div class="header-content-top">
                                            <div class='header-content-top-top'>
                                               <a href="tel:146706814" class="box-phone-contact biuro-obslugi">Biuro Obsługi Klienta  <i class="icon-phone icons"></i>  14 670 68 14 </a>
                                               <a href="tel:146702696" class="box-phone-contact zglos-awarie">Zgłoś awarię <i class="icon-phone icons"></i>  14 670 26 96 </a>
                                            </div>
                                            <div class="header-content-top-bottom">
                                                
                                                <?php
                                       $has_menu_pomocnicze = is_active_sidebar( 'menu_pomocnicze' );
                                       if ( $has_menu_pomocnicze ) {?>
                                                            <div class="menu-pomocnicze">
								<?php dynamic_sidebar( 'menu_pomocnicze' ); ?>
							</div>
						<?php } 
                                  
						 get_template_part('searchform'); 	
                                                 
                                  
                                   
                                    ?>
                                             <ul class="font-size">
						<li class="pojo-a11y-toolbar-item">
								<a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-resize-font pojo-a11y-btn-resize-minus" title="Zmniejsz czcionkę">
									A
                                                                        <span class="visuallyhidden">Czcionka mała</span>
								</a>
							</li>
							<li class="pojo-a11y-toolbar-item">
								<a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-resize-font pojo-a11y-btn-resize-regular" title="Czcionka normalna">
									A
                                                                        <span class="visuallyhidden">Czcionka średnia</span>
								</a>
							</li>
							<li class="pojo-a11y-toolbar-item">
								<a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-resize-font pojo-a11y-btn-resize-plus" title="Zwiększ czcionkę">
									A
                                                                        <span class="visuallyhidden">Czcionka duża</span>
								</a>
							</li>
                                                       
								
							
                                        </ul>
                                                <a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-background-group pojo-a11y-btn-high-contrast" title="Włącz wersję kontrastową">
									<i class="far fa-eye"></i><span class="visuallyhidden">Wersja kontrastowa</span>
								</a>
                                                <a href="https://www.facebook.com/WodociagiDebickie" target="_blank"><i class="fab fa-facebook-f"></i>
                                                <span class="visuallyhidden">Facebook </span></a>
                                            </div>
                                        </div>
                                        <div class="bip-link">
                                            <a href="/bip">
                                                 <img src="<?= get_stylesheet_directory_uri();?>/img/bip.jpg" alt="BIP" class="bip-img"> 
                                            </a>
                                            
                                        </div>
                                        <div class="bip-link">
                                            <a href="/projekty-unijne">
                                                 <img src="<?= get_stylesheet_directory_uri();?>/img/ue_flaga_naglowek_PFE.png" alt="Flaga Unii Europejskiej" class="bip-img"> 
                                            </a>                                            
                                        </div>
                                    </div>

					<?php
					if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
						?>

							<nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>">
                                                            <span class="before"></span>
								<ul id="primary-menu" class="primary-menu reset-list-style">

								<?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} elseif ( ! has_nav_menu( 'expanded' ) ) {

									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
											'walker'   => new TwentyTwenty_Walker_Page(),
										)
									);

								}
								?>

								</ul>

							</nav><!-- .primary-menu-wrapper -->

						<?php
					}

					if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
						?>

						<div class="header-toggles hide-no-js">

						<?php
						if ( has_nav_menu( 'expanded' ) ) {
							?>

							<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

								<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
										<span class="toggle-icon">
											<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
										</span>
									</span>
								</button><!-- .nav-toggle -->

							</div><!-- .nav-toggle-wrapper -->

							<?php
						}

	
						?>

						</div><!-- .header-toggles -->
						<?php
					}
					?>

				</div><!-- .header-navigation-wrapper -->

			</div><!-- .header-inner -->

			<?php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				get_template_part( 'template-parts/modal-search' );
			}
			?>
                        <hr>
		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
