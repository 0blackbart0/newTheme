<?php   get_header(); ?>
<div class="row justify-content-center my-5">
    <div class="col-sm-10 ">


        <?php if (have_posts()) : while ( have_posts(  )) : the_post();?>
            <div class="row justify-content-center">
                <div class="col text-center">
                    <h3><?php the_title() ?></h3>
                </div>
            </div>
        <div class="row justify-content-center">
            <div class="col">
                <?php echo get_the_content();                
                endwhile; endif;?>
            </div>
        </div>


    </div>
</div>

<?php get_footer(); ?>