<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="network-footer w-100">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 text-center pb-3">
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'footer',
                        'container_class' => 'footer-links-container',
                        'container_id'    => 'footerLinksContainer',
                        'menu_class'      => 'footer-links',
                        'fallback_cb'     => '',
                        'menu_id'         => 'footer-menu',
                        'depth'           => 2,
                        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                ); ?></div>
            <div class="col-12 col-md-6 col-lg-3 text-center pb-3">
				<div class="row align-items-center text-center">
                    <div class="col">
                        <a href="https://www.facebook.com/networkmedicalservices/" target="_blank"> <img class="img-fluid social-icon" src="<?php echo get_theme_file_uri( '/img/social/fb.png' ) ?>"></a>
                    </div>
                    <div class="col">
                        <a href="https://twitter.com/networkmedical" target="_blank"> <img class="img-fluid social-icon" src="<?php echo get_theme_file_uri( '/img/social/twitter.png' ) ?>"></a>
                    </div>
                    <div class="col">
                        <a href="https://www.linkedin.com/company/2355211" target="_blank"> <img class="img-fluid social-icon" src="<?php echo get_theme_file_uri( '/img/social/linkedin.png' ) ?>"></a>
                    </div>
                </div>
            </div>
			<div class="col-12 col-md-6 col-lg-3 text-center pb-3"><img src="<?php echo get_theme_file_uri( '/img/member-logos.png' ) ?>" class="img-fluid card-logos"></div>
            <div class="col-12 col-md-6 col-lg-3 text-center pb-3"><img src="<?php echo get_theme_file_uri( '/img/card-logos.png' ) ?>" class="img-fluid card-logos"></div>
            <div class="col-12 col-md-4 pb-3">			
            <?php understrap_site_info(); ?>
            <p> Network Medical Occupational Health Ltd Company Number: 12824862<br>
                Registered in England and Wales <br>
            </p>
            </div>
            <div class="col-12 col-md-4 pb-3">
                Registered Office: <br>
                Corby Business Centre, Eismann Way, Corby, NN17 5ZB	<br>
                Tel: + 44 (0) 3333 441335	<br>
                Fax: + 44 (0) 1234 481222	<br>
                <a href ="mailto:info@networkmedical.healthcare">info@networkmedical.healthcare</a>
            </div>
            <div class="col-12 col-md-4 pb-3">
                Dublin Office: <br>
                Suite 10667, 5 Fitzwilliam Square, Dublin 2, DO2 R744
            </div>
        </div>


    </div>

</div><!-- wrapper end -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

