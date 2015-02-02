<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-ie" lang="en"> <!--<![endif]-->
    <!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
    <head>


        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title itemprop="name">
            <?php
            if (defined('WPSEO_VERSION')) {
                wp_title('');
            } else {
                bloginfo('name');
                ?> <?php
                wp_title(' - ', true);
            }
            ?>
        </title>

        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="<?php bloginfo('charset'); ?>" />

        <!-- Mobile Specific Metas
    ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bjqs.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/screen.css" media="screen, projection" type="text/css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/print.css" media="print" type="text/css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

        <!--[if IE]>
                  <link rel="stylesheet" href="css/ie.css" media="screen, projection" type="text/css">
              <![endif]-->
        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900,900italic,100italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/plugins/bxslider/jquery.bxslider.css"/>



        <?php wp_head(); ?>



    </head>

    <body class="container" id="home"><--container-->
        <div class="row"><!--row-->

            <header id="header">

                <div class="top">
                    <h1><a href="/">Evolve Home Solar</a></h1>
                    <p>Call Now: <strong>1-855-GO-4-EVOLVE</strong></p>
                </div>

                <nav class="navbar navbar-default" role="navigation">
                    <!--div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div-->
                    <?php get_template_part('nav-top'); ?>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <!-- <li class="active"><a href="#">Link</a></li> -->
                            <!-- <li><a href="#">Link</a></li> -->
                            <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                              </ul>
                            </li> -->
                        </ul>
                    </div>
                </nav>

            </header>

