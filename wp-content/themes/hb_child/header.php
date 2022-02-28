<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Airi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/8905667eea.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'airi' ); ?></a>

	<?php $menu_layout = airi_menu_layout(); ?>
	<?php get_template_part( 'template-parts/menus/menu', $menu_layout['type'] ); ?>
	<?php if(is_front_page()){ ?>
		<div class='image-header'>
			<div class="row">
				<div class="col-12 col-md-3 col-lg-6 text-center">
				</div>
				<div class="col-12 col-md-9 col-lg-6 text-center header-info">
					<h1>Hubru Technologies</h1>
					<h3>Actualizate y sigue soñando</h3>
					<p>
						Empresa dedicada al desarrollo y auditoría de software con las últimas tecnologías del mercado
					</p>
					<a href="<?php echo get_site_url(); ?>/contacto" class='action-button'>¿Te apetece hablar?</a>
				</div>
			</div>
		</div>
	<?php }elseif( get_post_field( 'post_name', get_post() )==="empresa"){?>
		<div class='image-header-bussines'>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-12 text-center header-info">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/02/logo_white_background-scaled-e1645640684895.jpg"/>
				</div>
			</div>
		</div>
	<?php }
	?>
	<div id="content" class="site-content">

	<?php
		if ( !is_page_template( 'page-templates/template_page-builder.php') ) {
			echo '<div class="wrapp-content">';
			echo 	'<div class="row">';
		}
	?>