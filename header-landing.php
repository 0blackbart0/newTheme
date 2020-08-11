<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jannek Hornung">
    <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/images/KTB_Logo_klein.png">
    <title>Kieler Turnerbund Brunswik von 1899 e.V. | KTB ist Sport mit Spaß !</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>

<body>


    <div class="container-fluid d-none d-md-block px-0 py-0 mx-0 my-0 video-container ">
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="<?php echo get_bloginfo( 'template_directory' ) ?>/images/imagefilm.mp4" type="video/mp4">
        </video>
        <div class="overlay d-none d-lg-block text-center align-items-center ">
            <a href="#navbar"><img src="<?php echo get_bloginfo( 'template_directory' ) ?>/images/scroll_down.png" alt=""></a>
        </div>
    </div>


    <nav id="navbar" class="navbar navbar-expand-lg navbar-light blog-masthead">

        <a href="<?php echo get_home_url() ?>" class="navbar-brand">
            <img id="KTBlogo" src="<?php echo get_bloginfo('template_directory'); ?> /images/KTB_Logo_Groß.png">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarMenu',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

    </nav>
    <div class="container-fluid headerSeperator">
        <div class="row">
            <div class="col c1"> </div>
            <div class="col c2"> </div>
            <div class="col c3"> </div>
            <div class="col c4"> </div>
            <div class="col c5"> </div>
            <div class="col c6"> </div>
            <div class="col c7"> </div>
            <div class="col c8"> </div>
            <div class="col c9 d-none d-lg-block"> </div>
            <div class="col c10 d-none d-lg-block"> </div>
            <div class="col c11 d-none d-lg-block"> </div>
            <div class="col c12 d-none d-lg-block"> </div>
        </div>
    </div>