<?php   get_header(); ?>
<div class="row justify-content-center my-5">
    <div class="col-sm-10">
        <?php
        if (have_posts()) : while ( have_posts(  )) : the_post();
            get_template_part( 'content-single', get_post_format() );
        endwhile; endif;
        ?>
    </div>
</div>                  

<?php get_footer(); ?>