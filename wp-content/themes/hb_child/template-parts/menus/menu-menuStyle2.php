<?php
/**
 * Template part for Menu style 2
 *
 * @package Airi
 */
?>

<header id="masthead">
	<div class="menu-responsive-modal">
		<nav>
			<i class="fa-solid fa-circle-xmark"></i>
			<ul>
				<a href="<?php echo get_site_url(); ?>"><li>Home</li></a>
				<a href="<?php echo get_site_url(); ?>/blog"><li>Blog</li></a>
				<a href="<?php echo get_site_url(); ?>/contacto"><li>Contact</li></a>
			</ul>
		</nav>
	</div>
	<div class="<?php echo esc_attr( airi_menu_container() ); ?>">
		<div class="row line-menu">
			<div class=" col-md-4 col-sm-6 col-9">
				<a href="<?php echo get_site_url(); ?>">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/02/logo.png" class='logo-img'/>
				</a>
			</div><!-- .site-branding -->

			<div class="header-mobile-menu col-md-8 col-sm-6 col-3 text-right">
				<i class="fa-solid fa-bars mobile-menu-bars"></i>
			</div>
			
			<div class="d-flex justify-content-end col-md-8">
				<nav id="site-navigation" class="main-navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav><!-- #site-navigation -->

				<?php //airi_header_cart_search(); ?>
			</div>

		</div>
	</div>

</header><!-- #masthead -->