<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- HEADER -->
    <div class="header">

        <a class="header__logo circle" href="<?php echo home_url(); ?>">RZ</a>

        <!-- HEADER MENU -->
        <?php 
            wp_nav_menu(array(
                'theme_location' => 'header',
                'container' => false,
                'items_wrap' => '<ul class="header__menu">%3$s</ul>'
            ));
        ?>

        <div class="header__hamburger">
            <span></span>
            <span></span>
        </div>

    </div>
    </div>