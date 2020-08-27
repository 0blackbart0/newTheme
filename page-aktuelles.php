<?php   get_header(); ?>

<div class="container-fluid my-5">
    <div class="row justify-content-center my-5">
        <div class="col-10">
            <h4 class="text-center">Aktuelles</h4>
            <hr>
        </div>
    </div>
    <div class="row justify-content-center my-5">


        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query( array(
        'posts_per_page' => 10,
        'paged' => $paged
        ));
        ?>

        <?php if ( $query->have_posts() ) : ?>

        <!-- begin loop -->
        <?php while ( $query->have_posts() ) : $query->the_post(); 

        get_template_part( 'content-card-vertical', get_post_format() );

        endwhile; ?>
        <!-- end loop -->


        <?php wp_reset_postdata(); ?>
        <?php endif; ?>


    </div>
    <div class="row justify-content-center">
        <div class="col">
            <nav aria-label="Navigation aller Beiträge">
                <ul class="pagination justify-content-center">
                    <?php 
                    $pages = paginate_links( array(
                            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                            'total'        => $query->max_num_pages,
                            'current'      => max( 1, get_query_var( 'paged' ) ),
                            'format'       => '?paged=%#%',
                            'show_all'     => false,
                            'type'         => 'array',
                            'end_size'     => 2,
                            'mid_size'     => 1,
                            'prev_next'    => true,
                            'prev_text'    => '<i class="fas fa-arrow-left"></i>',
                            'next_text'    => '<i class="fas fa-arrow-right"></i>',
                            'add_args'     => false,
                            'add_fragment' => '',
                        ) );

                        if(is_array($pages)){
                            foreach($pages as $page){
                                console_log($page);
                                $page = str_replace('class="page-numbers"', 'class="page-link"', $page );
                                $page = str_replace('class="next page-numbers"', 'class="page-link"', $page );
                                $page = str_replace('class="prev page-numbers"', 'class="page-link"', $page );
                                
                                if (strpos($page, 'dots') === false){   
                                    if(strpos($page, 'current') !== false ){
                                       echo '<li class="page-item active"><a class="page-link" href="">' . $page . '</a></li>';
                                    }
                                    else
                                        echo '<li class="page-item">' . $page . '</li>';
                                }
                       
                            }
                        }
                    
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</div>



<?php get_footer(); ?>