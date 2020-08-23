<div class="footer">
    <div class="container mt-4">
        <hr>
        <div class="row justify-content-center h-25">

            <?php if(get_theme_mod('ktb-footer-callout-image') != null) { ?>
            <div class="col-xs-1 col-sm-4 col-lg-2 ">
                <a href="https://<?php echo get_theme_mod('ktb-footer-callout-link') ?>">
                    <img class="img-footer"
                        src="<?php echo wp_get_attachment_url(get_theme_mod('ktb-footer-callout-image')); ?>" alt=" ">
                </a>
            </div>
            <?php } ?>

            <?php if(get_theme_mod('ktb-footer-callout-image2') != null) { ?>
            <div class="col-xs-1 col-sm-4 col-lg-2 ">
                <a href="https://<?php echo get_theme_mod('ktb-footer-callout-link2') ?>">
                    <img class="img-footer"
                        src="<?php echo wp_get_attachment_url(get_theme_mod('ktb-footer-callout-image2')); ?>" alt=" ">
                </a>
            </div>
            <?php } ?>
            <?php if(get_theme_mod('ktb-footer-callout-image3') != null) { ?>
            <div class="col-xs-1 col-sm-4 col-lg-2 ">
                <a href="https://<?php echo get_theme_mod('ktb-footer-callout-link3') ?>">
                    <img class="img-footer"
                        src="<?php echo wp_get_attachment_url(get_theme_mod('ktb-footer-callout-image3')); ?>" alt=" ">
                </a>
            </div>
            <?php } ?>
            <?php if(get_theme_mod('ktb-footer-callout-image4') != null) { ?>
            <div class="col-xs-1 col-sm-4 col-lg-2 ">
                <a href="https://<?php echo get_theme_mod('ktb-footer-callout-link4') ?>">
                    <img class="img-footer"
                        src="<?php echo wp_get_attachment_url(get_theme_mod('ktb-footer-callout-image4')); ?>" alt=" ">
                </a>
            </div>
            <?php } ?>
            <?php if(get_theme_mod('ktb-footer-callout-image5') != null) { ?>
            <div class="col-xs-1 col-sm-4 col-lg-2 ">
                <a href="https://<?php echo get_theme_mod('ktb-footer-callout-link5') ?>">
                    <img class="img-footer"
                        src="<?php echo wp_get_attachment_url(get_theme_mod('ktb-footer-callout-image5')); ?>" alt=" ">
                </a>
            </div>
            <?php } ?>
            <?php if(get_theme_mod('ktb-footer-callout-image6') != null) { ?>
            <div class="col-xs-1 col-sm-4 col-lg-2 ">
                <a href="https://<?php echo get_theme_mod('ktb-footer-callout-link6') ?>">
                    <img class="img-footer"
                        src="<?php echo wp_get_attachment_url(get_theme_mod('ktb-footer-callout-image6')); ?>" alt=" ">
                </a>
            </div>
            <?php } ?>


        </div>
        <hr>

    </div>

    <div class="container-fluid headerSeperator mt-4">
        <div class="row">
            <div class="col c1"> </div>
            <div class="col c2"> </div>
            <div class="col c3"> </div>
            <div class="col c4"> </div>
            <div class="col c5"> </div>
            <div class="col c6"> </div>
            <div class="col c7"> </div>
            <div class="col c8"> </div>
            <div class="col c9 d-none d-lg-block"> </div>
            <div class="col c10 d-none d-lg-block"> </div>
            <div class="col c11 d-none d-lg-block"> </div>
            <div class="col c12 d-none d-lg-block"> </div>
        </div>
    </div>


    <div class="container-fluid footer-bottom ">
        <div class="row justify-content-center py-3">

            <?php wp_nav_menu( array(
                'theme_location' => 'footer',
                'menu_class'     => 'footer-menu list-group list-group-horizontal-sm',
            ) ); ?>


        </div>
    </div>
</div>


<?php wp_footer(); ?>
</body>

</html>