<?php   get_header("landing"); ?>

<div class="container my-5">
    <div class="row justify-content-center mb-3">
        <h4>Kieler Turnerbund Brunswik von 1899 e.V.</h4>
    </div>
    <div class="row mb-5 justify-content-around">
        <div class="col">
            <p class="text-center">some text</p>
        </div>
        <div class="col-4">      
            <img id="leitsatz" src="<?php echo get_bloginfo('template_directory'); ?>/images/KTB_Leitsatz.png"
                alt="gemeinsam Bewegen" class="img-fluid">
        </div>
        <div class="col ">
            <p class="text-center">some other text</p>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <span>Neuigkeiten</span>
    </div>
    <hr class="my-hr">
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