<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SeniorShow
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
	<link rel="profile" href="https://gmpg.org/xfn/11">
        <style>
            @import url("https://use.typekit.net/cac1eef.css");
        </style>
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'seniorshow' ); ?></a>

<header>
      
    <a class="toggle-nav" href="#">&#9776;</a> 
     
    <nav class="menu">
        <?php
            wp_nav_menu( array( 
            'theme_location' => 'my-custom-menu', 
            'container_class' => 'navbar__navigation' ) ); 
        ?>
    </nav>
    
    <script src="js/burger-menu.js"></script>
<!--
    <div class="menu">
       <input type="checkbox" class="navbar__toggle-menu">
       <div class="navbar__hamburger"></div>
        <ul class="navbar__menu">
            <li><a href=""> About </a></li>
            <li><a href="">Social Issues</a></li>
            <li><a href="">Donors</a></li>
        </ul>
    </div>
-->

</header>
