<?php 
/* 
 *   Template Name: Sportart Unterseite
 * */ ?>

<?php   get_header(); ?>
<div class="container-fluid my-3">
    <div class="row justify-content-end mr-3">
    
        <?php
        $args = array(
            'title_li' => '',
            'child_of' => $post->post_parent,
            'echo' => 0,
            'walker' => new Subpage_Walker(),
        );
            $children = wp_list_pages( $args );
            if ( $children) : ?>
            
                <div class="col-md-auto text-center">
                    <a class="subpage-link" href="<?php echo get_permalink($post->post_parent);?>"> <?php echo get_the_title($post->post_parent); ?></a>
                </div>
                <?php echo $children; ?>
            
            <?php endif; ?>

      
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-sm-10">
        <?php
        if (have_posts()) : while ( have_posts(  )) : the_post();
            get_template_part( 'content-single', get_post_format() );
        endwhile; endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>