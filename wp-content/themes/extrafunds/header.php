<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    
    <?php wp_head(); ?>
</head>
<body>
<section>
    <nav class="navbar" id="main-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo-a" href="#">
                    <img src="<?php bloginfo( 'template_url' ) ?>/images/logo.png" class="img-responsive" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <?php
                wp_nav_menu( array(
                    'menu'              => 'header-menu',
                    'theme_location'    => 'header-menu',
                    'depth'             => 2,
                    'container'         => '',
                    'menu_class'        => 'nav navbar-nav main-nav-ul',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
                ?>
                <ul class="nav navbar-nav navbar-right" id="nav-right">
                    <li>
                        <a href="#">SIGN IN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>