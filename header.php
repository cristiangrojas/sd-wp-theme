<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>

	</head>

	<body <?php body_class(); ?>>

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
                                <img itemprop="logo" src="/static/img/logo-sd.png" />
                            </a>
                        </div>
                        <!-- <a class="brand" href="/"><img src="/static/img/logo-sd.png"></a> -->
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li><a href="/">Inicio</a></li>
                                <li><a href="/seguros-para-vehiculos/">Seguros para vehículos</a></li>
                                <li><a href="/ayuda/">Ayuda</a></li>

                                <li class="fb-like">
                                    <a href="https://www.facebook.com/SegurosDigitales" class="socialite facebook-like" data-href="https://www.facebook.com/SegurosDigitales" data-send="false" data-layout="button_count" data-width="60" data-show-faces="false" rel="nofollow" target="_blank"><span class="vhidden"><img src="/static/img/img-fb.png"></span></a>
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
    		<div id="container" class="container">
