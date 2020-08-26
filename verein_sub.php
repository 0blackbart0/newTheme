<?php 
/* 
 *   Template Name: Vereins Unterseite
 * */ ?>
<?php   get_header(); ?>
<div class="container-fluid my-3">
    <div class="row justify-content-end mr-3">
    
    <?php wp_nav_menu( array(
                'theme_location' => 'verein',
                'menu_class'     => 'footer-menu list-group list-group-horizontal-sm',
            ) ); ?>

      
    </div>
</div>

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