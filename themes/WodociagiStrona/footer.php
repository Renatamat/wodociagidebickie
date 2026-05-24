<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" class="header-footer-group">
				<div class="section-inner">
                                        <a class="to-the-top" href="/#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( '%s', 'WodociagiStrona' ), '<i class="icon-arrow-up icons"></i>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( '%s', 'WodociagiStrona' ), '<i class="icon-arrow-up icons"></i>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->
                                        
					<div class="footer-credits">

						<p class="footer-copyright">Projekt i realizacja:
							<a href="//bigcom.pl">BigCom</a>
						</p><!-- .footer-copyright -->



					</div><!-- .footer-credits -->

					

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
