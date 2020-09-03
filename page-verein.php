<?php   get_header(); ?>
<div class="container-fluid my-3">
    <div class="row justify-content-end mr-3">

        <?php wp_nav_menu( array(
                'theme_location' => 'verein',
                'menu_class'     => 'footer-menu list-group list-group-horizontal-sm',
            ) ); ?>


    </div>
</div>

<div class="container-fluid my-5">
    <div class="row justify-content-center mx-1">
        <div class="col-sm-8">
            <?php
        if (have_posts()) : while ( have_posts(  )) : the_post();
            get_template_part( 'content-single', get_post_format() );
        endwhile; endif;
        ?>
        </div>
        <div class="col-sm-4 my-5">
            <h5>Adresse:</h5>
            <p>Vereinsheim Kieler TB / Geschäftsstelle Kieler TB</p>
            <p>Breiter Weg 11</p>
            <p>24105 Kiel</p>
            <p>Telefon: 0431 / 56 12 17</p>
        </div>
    </div>
</div>


<?php get_footer(); ?>