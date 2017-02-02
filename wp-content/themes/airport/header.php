<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package airport
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();  ?>/img/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();  ?>/img/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();  ?>/img/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_template_directory_uri();  ?>/img/favicons/manifest.json">
<link rel="mask-icon" href="<?php echo get_template_directory_uri();  ?>/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="top">
    <div class="inner">
         <div class="top__social">
            <a href="#" class="top__social__link"><i class="icon-facebook"></i></a>
            <a href="#" class="top__social__link"><i class="icon-twitter"></i></a>
            <a href="#" class="top__social__link"><i class="icon-google-plus"></i></a>
        </div>
        <div class="top__info">
            Contact Us: Liberia +(506) 2667-03-39, US: +1(786) 600-1246
        </div>
    </div>
   
</div>
<header class="header">
    <div class="inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Airport Transportation" class="header__logo__img" /></a>
        <?php wp_nav_menu( array(
                     'theme_location' => 'primary',
                     'menu_id' => 'primary-menu',
                     'container'       => 'nav',
	                'container_class' => 'header__menu',
	                'container_id'    => '',
	                'menu_class'      => 'header__menu__ul',
                      ) 
                  ); 
                  ?>
        <button id="btn-menu" class="header__btn-menu"><i class="icon-menu"></i></button>
    </div>
    
</header>
