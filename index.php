<?php   get_header(); ?>

<div class="container my-3">

    <div class="row justify-content-center my-5">
        <div class="col">
            <h4 class="text-center">Kieler Turnerbund Brunswik von 1899 e.V.</h4>
        </div>
    </div>

    <div class="row my-5 justify-content-around">
        <?php dynamic_sidebar( 'termine' ); ?>
        <div class="col-sm-4 col-md-4 my-3">

            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php if(get_theme_mod('ktb-slider-image0') != null): ?>
                    <div class="carousel-item active">
                        <img class="d-block w-100"
                            src="<?php echo wp_get_attachment_url(get_theme_mod('ktb-slider-image0')); ?>" alt="Bild 1">
                    </div>
                    <?php endif; ?>
                    <?php if(get_theme_mod('ktb-slider-image1') != null): ?>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="<?php echo wp_get_attachment_url(get_theme_mod('ktb-slider-image1')); ?>" alt="Bild 2">
                    </div>
                    <?php endif; ?>
                    <?php if(get_theme_mod('ktb-slider-image2') != null): ?>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="<?php echo wp_get_attachment_url(get_theme_mod('ktb-slider-image2')); ?>" alt="Bild 3">
                    </div>
                    <?php endif; ?>
                    <?php if(get_theme_mod('ktb-slider-image3') != null): ?>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="<?php echo wp_get_attachment_url(get_theme_mod('ktb-slider-image3')); ?>" alt="Bild 4">
                    </div>
                    <?php endif; ?>
                    <?php if(get_theme_mod('ktb-slider-image4') != null): ?>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="<?php echo wp_get_attachment_url(get_theme_mod('ktb-slider-image4')); ?>" alt="Bild 5">
                    </div>
                    <?php endif; ?>

                </div>
            </div>


        </div>
        <?php dynamic_sidebar( 'trainingsasusfealle' ); ?>

    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center mb-3">
        <div class="col-10 text-center">
            <span>Neuigkeiten</span>
            <hr>
        </div>
    </div>


    <div class="row justify-content-center">

        <?php
            if (have_posts()) : while ( have_posts(  )) : the_post();
                get_template_part( 'content-card-horizontal', get_post_format() );
            endwhile; ?>
        <?php endif; ?>



    </div>

</div>



<?php get_footer(); ?>