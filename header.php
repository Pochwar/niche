<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <!-- Get bootstrap css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css" media="screen" />
    <?php wp_head(); ?>
</head>
<body>
    <div id="wrapper">

        <div id="header">

            <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php bloginfo('description'); ?>

            <?php get_template_part( 'template-parts/header/header', 'image' ); ?>
            <div id="menu">
                <?php wp_nav_menu(); ?>
            </div>
        </div>
