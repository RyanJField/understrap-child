<?php
/**
 * Navbar branding
 *
 * @package Understrap
 * @since 1.2.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!has_custom_logo()) { ?>

	<img src="<?php echo get_theme_file_uri('/img/logo.png') ?>" class="img-fluid network-logo">

<?php } else {
	the_custom_logo();
} ?>
<!-- end custom logo -->

<div class="col text-center">
	<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>"
		title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
		<?php echo esc_attr(get_bloginfo('name', 'display')); ?>
	</a>
</div>