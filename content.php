

<div class="">
    <h4 class=""> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <p class=""> <?php the_date(); ?> by <a href="#"> <?php the_author() ?> </a></p>

    <?php if (is_page()) :
            the_content();
        else:
            the_excerpt(); 
        endif;
        ?>

</div><!-- /.blog-post -->