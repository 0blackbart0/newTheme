<?php   get_header(); ?>

<div class="container my-5">

    <div class="row justify-content-center my-5">
        <div class="col">
            <h4 class="text-center">Kieler Turnerbund Brunswik von 1899 e.V.</h4>
        </div>
    </div>

    <div class="row my-5 justify-content-around">
        <div class="col-sm-4 my-3">
            <p class="text-center">Anstehende termine:</p>
            <hr>
            <div><?php echo the_textarea_value(get_theme_mod('ktb_anstehende_termine_callout_termine')); ?></div>
        </div>
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
        <div class="col-sm-4 my-3">
            <p class="text-center">Trainingsausfälle:</p>
            <hr>
            <div><?php echo the_textarea_value(get_theme_mod('ktb_anstehende_termine_callout_trainingsausfaelle')); ?>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <span>Neuigkeiten</span>
    </div>

    <hr>
    <div class="row justify-content-around">
        <!-- <div class="col-sm-8 "> -->
            <?php
            if (have_posts()) : while ( have_posts(  )) : the_post();
                get_template_part( 'content', get_post_format() );
            endwhile; ?>
            <?php endif; ?>
        <!-- </div> -->


    </div>
</div>


<?php get_footer(); ?>