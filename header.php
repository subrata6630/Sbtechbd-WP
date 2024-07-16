<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage sbtechbd
 * @since sbtechbd 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- Start Main Wrapper Here -->
    <a class="skip-link" href="#main-content"><?php esc_html_e('Skip to content', 'sbtechbd'); ?></a>
    <header id="main-header" class="row fix">
        <div class="wrapper container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="sitename">
                        <?php if (has_custom_logo()) : ?>
                        <div class="site-logo">
                            <?php the_custom_logo(); ?>
                        </div>
                        <?php else : ?>
                        <h1><a class="site-title" href="<?php echo esc_url(home_url('/')); ?>"
                                rel="home"><?php bloginfo('name'); ?></a></h1>
                        <p class="site-desc"><?php bloginfo('description'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false"
                            aria-label="<?php esc_attr_e('Toggle navigation', 'sbtechbd'); ?>">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <?php
                            if (has_nav_menu('top-menu')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'top-menu',
                                    'menu_class' => 'navbar-nav ml-auto',
                                    'container' => false,
                                    'walker' => new WP_Bootstrap_Navwalker(), // Custom walker class for Bootstrap
                                ));
                            }
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div> <!-- End wrapper -->
    </header> <!-- Header -->

    <?php if (get_header_image() != '') { ?>
    <div class="banner-img">
        <img class="img-responsive wrapper" src="<?php header_image(); ?>"
            height="<?php echo esc_attr(get_custom_header()->height); ?>"
            width="<?php echo esc_attr(get_custom_header()->width); ?>"
            alt="<?php esc_attr_e('banner', 'sbtechbd'); ?>" />
    </div> <!-- Banner End -->
    <?php } ?>