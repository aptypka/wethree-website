<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name'); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="initialscale=1.0, width=device-width" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
	</head>
	<?php wp_head(); ?>
	<body>
<nav id="mainNav" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt=""></a>
        </div>
            <?php
                $defaults = array(
                    'menu'              => '',
                    'theme_location'    => '',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => '',
                    'menu_class'        => 'nav navbar-nav navbar-right',
                    'walker'            => new wp_bootstrap_navwalker()
                );
                wp_nav_menu( $defaults );
            ?>
    </div>
</nav>