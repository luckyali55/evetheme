<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage evetheme
 * @since evetheme 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <?php
        $theme_opt = get_theme_mods();
        echo '<pre>';
        //print_r($theme_opt);
        echo '</pre>';
        echo '<style type="text/css">';
        if(isset($theme_opt['header_image']))
        {
           ?>

                #banner{
                    background-image: url('<?php echo $theme_opt['header_image']; ?>');
                    background-size: 100%;
                }
        <?php
        }
        if(isset($theme_opt['tcx_link_color'])){
            ?>
            .widget-title{
                color: <?php echo $theme_opt['tcx_link_color']; ?>;
            }
            .entry-meta i{ color: <?php echo $theme_opt['tcx_link_color']; ?>; }
            h1.entry-title{color: <?php echo $theme_opt['tcx_link_color']; ?>;}
        <?php
        }
        echo '</style>';

    ?>
</head>

<body <?php body_class(); ?>>
    <div id="page-wrapper">
        <!-- Header -->
        <header id="header" class="reveal alt">
            <?php

                if(isset($theme_opt['theme_logo']) && $theme_opt['theme_logo']!='')
                {?>
            <h1 id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img src="<?php echo $theme_opt['theme_logo']; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            </a></h1>
                <?php
                }else{
            ?>
            <h1 id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'name') ); ?> <span><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></span></a></h1>
            <?php } ?>
             <nav id="nav">
                 	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
					<?php //get_search_form(); ?>

			</nav><!-- #navbar -->
		</header><!-- #masthead -->
        <!-- Banner -->
        <?php if(is_home() && $theme_opt['evetheme_header_enable']==1) : ?>
        <section id="banner" class="bgiamge">

            <div class="inner">

                <header>
                    <h2><?php echo $theme_opt['evetheme_header_title']; ?></h2>
                </header>
                <p>
                    <?php echo $theme_opt['evetheme_header_description']; ?>
                </p>
                <footer>
                    <ul class="buttons vertical">
                        <li><a href="<?php echo urlSchema($theme_opt['evetheme_header_url']); ?>" class="button fit scrolly"><?php echo $theme_opt['evetheme_header_url_text']; ?></a></li>
                    </ul>
                </footer>

            </div>

        </section>
        <article id="main">
        <?php else:   ?>
        <article id="main">
        <?php endif ;  ?>