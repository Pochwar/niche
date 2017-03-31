<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <?php wp_head(); ?>
</head>
<body>
    <div id="wrapper">

        <div id="header">

            <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <p><?php bloginfo('description'); ?></p>

            <?php get_template_part( 'template-parts/header/header', 'image' ); ?>
            <?php if ( has_nav_menu( 'header-menu' ) ) : ?>
                <div id="menu" class="navbar navbar-toggleable-md">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </div>
            <?php endif; ?>
        </div>
