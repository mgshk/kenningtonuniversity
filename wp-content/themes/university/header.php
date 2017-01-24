<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title>University of Kennington</title>
    <link rel="icon" href="<?php bloginfo('template_directory') ?>/favicon.ico" type="<?php bloginfo('template_directory') ?>/image/x-icon">
    <link href="<?php bloginfo("stylesheet_url"); ?>" type="text/css" rel="stylesheet" />
    <script src="<?php bloginfo('template_directory') ?>/js/jquery.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/jquery.bxslider.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/jquery.slicknav.js" type="text/javascript"></script>
    <link href="<?php bloginfo('template_directory') ?>/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="<?php bloginfo('template_directory') ?>/css/jquery.bxslider.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slicknav.css" type="text/css">
    <link href="<?php bloginfo('template_directory') ?>/css/responsive.css" type="text/css" rel="stylesheet" />
    <?php wp_head(); ?>
    <style type="text/css">
        html{margin-top: 0 !important;}
    </style>
    </head>
<body>

<!--header-region-starts-->
<header>
    <div class="container">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 logo">
                <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="logo" /></a>
            </div>
        </div>

        <div class="row">
            <div class="headermenu">
                <nav id="menu">
                    <!-- <ul>
                        <li><a href="">home</a></li>
                        <li><a href="">about us</a></li>
                        <li><a href="">admissions</a></li>
                        <li><a href="">programs</a></li>
                        <li><a href="">verification</a></li>
                        <li><a href="">online learning</a></li>
                    </ul> -->
                    <?php wp_nav_menu(array("menu" => "mainmenu", "menu_id" => "menu")); ?>
                </nav>
            </div>
        </div> 

    </div> 
</header>
<!--header-region-ends-->