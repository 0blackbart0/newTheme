<?php   get_header("landing"); ?>

<div class="container my-5">

    <div class="row justify-content-center my-5">
        <div class="col">
            <h4 class="text-center">Kieler Turnerbund Brunswik von 1899 e.V.</h4>
        </div>
    </div>

    <div class="row my-5 justify-content-around">
        <div class="col-sm-4">
            <p class="text-center">Anstehende termine:</p>
            <hr>
            <div><?php echo the_textarea_value(get_theme_mod('ktb_anstehende_termine_callout_termine')); ?></div>
        </div>
        <div class="col-sm-4 col-md-4">
            <img id="leitsatz" src="<?php echo get_bloginfo('template_directory'); ?>/images/KTB_Leitsatz.png"
                alt="gemeinsam Bewegen" class="img-fluid">
        </div>
        <div class="col-sm-4">
            <p class="text-center">Trainingsausfälle:</p>
            <hr>
            <div><?php echo the_textarea_value(get_theme_mod('ktb_anstehende_termine_callout_trainingsausfaelle')); ?></div>
        </div>
    </div>

    <div class="row justify-content-center">
        <span>Neuigkeiten</span>
    </div>
    
    <hr>
    <div class="row justify-content-around">
        <div class="col-sm-8 ">

            <?php
    if (have_posts()) : while ( have_posts(  )) : the_post();
        get_template_part( 'content', get_post_format() );
    endwhile; ?>

            <?php endif; ?>



        </div>


    </div>
</div>


<?php get_footer(); ?>