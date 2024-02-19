<?php
/**
 * Header Navbar (bootstrap4)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<nav id="main-nav" class="navbar navbar-expand-md network-nav" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e('Main Navigation', 'understrap'); ?>
	</h2>


	<?php if ('container' === $container): ?>
		<div class="container-fluid">
		<?php endif; ?>

		<?php get_template_part('global-templates/navbar-branding'); ?>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
			aria-controls="navbarNavDropdown" aria-expanded="false"
			aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id' => 'navbarNavDropdown',
				'menu_class' => 'navbar-nav mr-auto',
				'fallback_cb' => '',
				'menu_id' => 'main-menu',
				'depth' => 2,
				'walker' => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>

		<div class="d-flex justify-content-end order-3">
			<span class="d-flex flex-nowrap align-items-center">
				<a href="contact-us">
					<i class="fa fa-envelope font-xx-lg" title ="Contact Us"></i>
				</a>
			</span>
		</div>

		<?php if ('container' === $container): ?>
		</div><!-- .container -->
	<?php endif; ?>

</nav><!-- #main-nav -->