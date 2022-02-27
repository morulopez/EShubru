<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Airi
 */

?>

	</div><!-- #content -->

	<?php
		if ( !is_page_template( 'page-templates/template_page-builder.php') ) {
			echo 	'</div>';
			echo '</div>';
		}
	?>

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-md-3 col-12 col-lg-3 footer-image-div">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/02/logo.png" class='logo-img-footer'/>
				</div>
				<div class="col-md-9 col-12 col-lg-6 text-center">
					<div class="row">
						<div class="col-md-12 col-12 col-lg-12 social-media-menu">
							<i class="fa-brands fa-twitter"></i>
							<i class="fa-brands fa-facebook-f"></i>
							<i class="fa-brands fa-linkedin-in"></i><br>
							<a href="<?php echo get_site_url(); ?>/privacy-policy/">Política de Privacidad |</a>
							<a href="<?php echo get_site_url(); ?>/politica-de-cookies/">Política de Cookies |</a><br>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-12 col-lg-3 adress-menu">
					<i class="fa-solid fa-phone"></i> : 659 311 643<br>
					<i class="fa-solid fa-envelope"></i> : bullcodeprogramacion@gmail.com<br>
					<i class="fa-solid fa-location-pin"></i> : Juan Ramón Jimenez 9 Maracena (Granada)<br>
				</div>
				<div class="col-md-12 col-12 col-lg-12 text-center derechos">
					©2022 Web creada por Jesús López Rodríguez. Todos los derechos reservados.
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
