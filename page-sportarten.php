<?php   get_header(); ?>
<div class="row justify-content-center my-5">
    <div class="col-sm-10 ">
        <div class="row justify-content-center">
            <?php
            $tags = array(
                '<p>',
                '</p>',
            );
            if (have_posts()) : while ( have_posts(  )) : the_post();
                   echo do_shortcode(str_replace($tags, '', get_the_content()));                
            endwhile; endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>