<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header">
            <div class="container">
                <a class="header-logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home" itemprop="url"><span itemprop="name"><?php echo esc_html(get_bloginfo('name')); ?></span></a>

                <nav class="header-nav">
                    <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
                </nav>
            </div>
        </header>