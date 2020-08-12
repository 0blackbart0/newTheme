<?php   get_header(); ?>
<div class="row justify-content-center my-5">
    <div class="col-sm-10 ">
        <div class="row justify-content-center">
            <?php
            if (have_posts()) : while ( have_posts(  )) : the_post();
                   the_content();                
            endwhile; endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>