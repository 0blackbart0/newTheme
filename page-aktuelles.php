<?php   get_header(); ?>

<div class="container my-5">
    <div class="row justify-content-center my-5">
        <div class="col-10">
            <h4 class="text-center">Aktuelles</h4>
            <hr>
        </div>
    </div>
    <div class="row justify-content-center my-5">


        <?php 
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

        <?php if ( $wpb_all_query->have_posts() ) : ?>

        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
                get_template_part( 'content', get_post_format() );
                endwhile; ?>

        <?php wp_reset_postdata(); ?>
        <?php endif; ?>


    </div>
</div>



<?php get_footer(); ?>