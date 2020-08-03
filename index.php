<?php   get_header(); ?>

<div class="container">
    <div class="row justify-content-around">
        <div class="col-4">
            <img id="leitsatz" src="<?php echo get_bloginfo('template_directory'); ?>/images/KTB_Leitsatz.png"
                alt="gemeinsam Bewegen" class="img-fluid">
        </div>
    </div>
    
    <div class="row">

        <div class="col-sm-8 blog-main">

            <?php
    if (have_posts()) : while ( have_posts(  )) : the_post();
        get_template_part( 'content', get_post_format() );
    endwhile; ?>

            <nav>
                <ul class="pager">
                    <li><?php next_posts_link( 'Previous' ); ?></li>
                    <li><?php previous_posts_link( 'Next' ); ?></li>
                </ul>
            </nav>
            <?php
    endif;
    ?>



        </div>


    </div>
</div>


<?php get_footer(); ?>