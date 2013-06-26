<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
    <title><?php
        global $page, $paged;
        wp_title('|', true, 'right');
        // Add the blog name.
        bloginfo('name');
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page()))
            echo " | $site_description";
        // Add a page number if necessary:
        if ($paged >= 2 || $page >= 2)
            echo ' | ' . sprintf(__('Page %s', 'skyali'), max($paged, $page));

        ?></title>
    <?php $video_ = 'false';

    //check if post has video

    $featuredc = new WP_Query('showposts=1&meta_key=skyali_sticky&orderby=modified');
    if ($featuredc->have_posts()) :
        $video_ = 'true';
    endif;
    global $video_;

    ?>
    <?php wp_reset_query(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri(); ?>/scripts/css/firstnavigation.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri(); ?>/scripts/css/segurosdigitales.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri(); ?>/scripts/css/secondnavigation.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/scripts/css/carousel.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/scripts/css/tipTip.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/scripts/css/tabs.css"/>
    <?php //checks to see which style of the top header is select so the proper css can be applied ?>
    <?php if (get_option('skypanel_broadcast_top_header_style') == 'Bright') {
        echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/scripts/css/styles/bright/top_header.css" />';
    } //if user choices to show it bright show css. ?>

    <?php //checks to see which style for the categories ?>
    <?php if (get_option('skypanel_broadcast_categories_style') == 'Dark') {
        echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/scripts/css/styles/dark/categories.css" />';
    } ?>

    <?php //styling for the slider ?>
    <?php
    if (get_option('skypanel_broadcast_slider_style') == 'Bright') {
        if (get_option('skypanel_broadcast_featured_style') == 'Featured Long' OR  get_option('skypanel_broadcast_featured_style') == '') {
            echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/scripts/css/styles/bright/featured_long.css" />';
        } elseif (get_option('skypanel_broadcast_featured_style') == 'Featured Short') {
            echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/scripts/css/styles/bright/featured.css" />';
        } elseif (get_option('skypanel_broadcast_featured_style') == 'Featured Post' OR  $video_ == 'true') {
            echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/scripts/css/styles/bright/featured_slider_post.css" />';
        }
    }
    ?>

    <?php //footer styling ?>

    <?php if (get_option('skypanel_broadcast_footer_style') == 'Bright') {
        echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/scripts/css/styles/bright/footer.css" />';
    } ?>

    <?php //checks to see which slider is selected so the proper css can be applied ?>
    <?php if (get_option('skypanel_broadcast_featured_style') != 'Featured Long' AND get_option('skypanel_broadcast_featured_style') != 'Featured Post' AND  $video_ != 'true' AND get_option('skypanel_broadcast_featured_style') != '') {
        $featured_slider_style = 'featured_slider.css';
    } elseif (get_option('skypanel_broadcast_featured_style') == 'Featured Long' AND $video_ != 'true' OR get_option('skypanel_broadcast_featured_style') == '') {
        $featured_slider_style = 'featured_long_slider.css';
    } elseif (get_option('skypanel_broadcast_featured_style') == 'Featured Post' OR $video_ == 'true') {
        $featured_slider_style = 'featured_slider_post.css';
    } ?>

    <link rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri(); ?>/scripts/css/<?php echo $featured_slider_style; ?>"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri(); ?>/scripts/css/prettyPhoto.css"/>

    <!--[if gt IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/scripts/css/ie7.css">
    <![endif]-->

    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/scripts/css/ie.css">
    <![endif]-->
    <?php if (get_option('skypanel_broadcast_headings_color') != '') { ?>
        <style type="text/css">
                /* Custom Css Colors */
            .list_category h2 {
                color: <?php echo get_option('skypanel_broadcast_headings_color'); ?> !important;
            }

            .list_post h2 {
                color: <?php echo get_option('skypanel_broadcast_headings_color'); ?> !important;
            }

            #right h2 {
                color: <?php echo get_option('skypanel_broadcast_headings_color'); ?> !important;
            }

            .rightwidget h2 a {
                color: <?php echo get_option('skypanel_broadcast_headings_color'); ?> !important;
            }

            a.cat_arrow {
                background: <?php echo get_option('skypanel_broadcast_headings_color'); ?> url('<?php echo get_template_directory_uri();?>/images/category_arrow.png') !important;
            }

            a:hover.cat_arrow {
                background: #1f1f1f url('<?php echo get_template_directory_uri();?>/images/category_arrow.png') !important;
            }

            .list_category h2 a {
                color: <?php echo get_option('skypanel_broadcast_headings_color'); ?> !important;
            }

            h1.fontface {
                font: 53px 'ColaborateBoldRegular', Arial, sans-serif;
                color: #222222;
            }

            #footer h5 {
                color: <?php echo get_option('skypanel_broadcast_headings_color'); ?>;
            !important
            }

            #left h1 {
                color: <?php echo get_option('skypanel_broadcast_headings_color'); ?>;
            !important
            }

            a.featured_button {
                background: <?php echo get_option('skypanel_broadcast_headings_color'); ?> !important;
            }

            .list_post div.readm div.button a {
                background: <?php echo get_option('skypanel_broadcast_headings_color'); ?> !important;
            }
        </style>
    <?php } ?>
    <?php wp_head(); ?>

</head>

<body>

<div id="sd-header" class="navbar no-navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div itemscope itemtype="http://schema.org/Organization" class="brand">
                <a itemprop="url" href="/">
                    <img itemprop="logo" src="/static/img/logo-sd.png"/>
                </a>
            </div>
            <!-- <a class="brand" href="/"><img src="/static/img/logo-sd.png"></a> -->
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/seguros-para-vehiculos/">Seguros para vehículos</a></li>
                    <li><a href="/ayuda/">Ayuda</a></li>

                    <li class="fb-like">
                        <a href="https://www.facebook.com/SegurosDigitales" class="socialite facebook-like"
                           data-href="https://www.facebook.com/SegurosDigitales" data-send="false"
                           data-layout="button_count" data-width="60" data-show-faces="false" rel="nofollow"
                           target="_blank"><span class="vhidden"><img src="/static/img/img-fb.png"></span></a>
                    </li>
                </ul>
                <ul class="nav pull-right" id="login-btn-group">
                    <li class="pull-left">
                        <i class="icon-phone"></i> (1)7430045 - 318 6760913
                    </li>

                    <li class="btn pull-left">
                        <a href="/usuarios/login/"><i class="icon-user"></i>Acceder a mi cuenta</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>



<div id="header_container"<?php if (get_option('skypanel_broadcast_heading_pattern') == 'Disabled') {
    echo ' class="white_bg"';
} ?>>

    <div id="header">

        <?php site_logo(); ?>

        <?php display_468x60(); ?>

    </div>
    <!-- #header -->

</div>
<!-- #header_container -->

<div id="categories_container">

    <div id="categories">
        <?php if (has_nav_menu('second-menu')) : ?>
            <?php wp_nav_menu(array('theme_location' => 'second-menu', 'menu_class' => 'secondnav-menu sf-js-enabled sf-menu', 'container' => '')); ?>
        <?php else : ?>
            <ul class="secondnav-menu">

                <?php
                if (is_home()) {

                    $home_cat = ' class="current-cat home_first_line"';

                } else {

                    $home_cat = ' class="home_first_line"';
                }
                ?>
                <li<?php echo $home_cat; ?>><a href="<?php bloginfo('url'); ?>"
                                               class="home_second_line"><?php _e('Home', 'skyali') ?></a></li>
                <?php wp_list_categories('title_li=&order=desc&exclude=' . check_exclude_categories() . ''); ?>
                </li>
            </ul>
        <?php endif; ?>
    </div>
    <!-- #categories -->

</div>
<!-- categories container -->

<div id="center">

    <div id="container">

        <div id="content">

            <?php if (get_option('skypanel_broadcast_spotlight') != 'Disabled') {
                include_once('includes/spotlight.php');
            } ?>

            <?php wp_reset_query(); ?>

            <?php if (get_option('skypanel_broadcast_featured_style') == 'Featured Long' AND $video_ != 'true' OR get_option('skypanel_broadcast_featured_style') == '') {
                if (is_home()) :
                    include_once('includes/featured_long.php');
                endif;
            } ?>

            <div id="content_bg">

                <?php

                if (is_page_template('template-fullwidth.php')) {
                    $full = 'class="full_width"';
                } else {
                    $full = '';
                }

                ?>

                <div id="left" <?php echo $full; ?>>