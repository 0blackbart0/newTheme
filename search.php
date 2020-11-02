<?php   get_header(); ?>

<div class="container-fluid my-5">
    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-10">
        <h4 class="text-center">Suche für: <?php echo get_search_query(); ?></h4>
            <hr>
            <div class="row justify-content-around my-5">
                <div class="col">
                    <div class="row justify-content-center">
                        <?php
                        if (have_posts()) : 
                            while ( have_posts(  )) : the_post();
                                get_template_part( 'content-card-vertical', get_post_format() );
                            endwhile; 
                        else:    
                        ?>
                         <div class="col">
                            <h4>Keine Beiträge gefunden!</h4>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-md-4 order-first order-md-last">
                    <?php get_search_form(); ?>
                    <div class="col d-none d-md-block text-center">
                        <?php dynamic_sidebar( 'aktuelles-sidebar' ); ?>
                    </div>
                </div>
                <div class="col-12 d-md-none text-center">
                    <?php dynamic_sidebar( 'aktuelles-sidebar' ); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col">
            <nav aria-label="Navigation aller Beiträge">
                <ul class="pagination justify-content-center">

                    <li class="page-item nav-previous alignleft">
                        <?php previous_posts_link( '<i class="fas fa-arrow-left"></i>' ); ?></li>

                    <li class="page-item nav-next alignright">
                        <?php next_posts_link( '<i class="fas fa-arrow-right"></i>' ); ?></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<?php get_footer(); ?>