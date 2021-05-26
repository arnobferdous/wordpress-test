<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress_Test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="container wp-test-theme">
    <div class="wp-test-header">
        <span class="overlay"></span>
        <div class="row justify-content-end">
            <div class="vertical-nav">
                <span><a href="#">Instagram</a></span>
                <span><a href="#">Facebook</a></span>
                <span><a href="#">LinkedIn</a></span>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark wp-test-nav">
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri() . '/img/logo.svg' ?>">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <span class="me-auto"></span>
                <?php
                wp_nav_menu(
	                array(
		                'menu' => 'top-menu',
		                'container_class' => 'navbar-text',
                        'menu_class' => 'navbar-nav mb-2 mb-lg-0'
	                )
                );
                ?>
                <li class="nav-item me-5">
                    <a class="nav-contact contact-btn" href="#">Button</a>
                </li>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-12 col-sm-12 hero-text">
                <p class="title animate__animated animate__bounce">Duurzame tiny huisjes</p>
                <p class="description">
                    Een ecologisch tiny huisje is zoveel mogelijk opgebouwd uit duurzame natuurlijke materialen
                </p>
            </div>
            <div class="col-12">
                <span class="btn-play">
                    <img class="animate__animated animate__flash" src="<?php echo get_template_directory_uri() . '/img/play.png' ?>">Bekjik de film
                </span>
            </div>
        </div>
    </div>