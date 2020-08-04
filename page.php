<?php   get_header(); ?>
<div class="row justify-content-center">
    <div class="col-sm-8">
        <?php
        if (have_posts()) : while ( have_posts(  )) : the_post();
            get_template_part( 'content-single', get_post_format() );
        endwhile; endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>