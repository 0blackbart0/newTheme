        </div>
        <div class="footer">
            <?php if(is_active_sidebar('footer-partner' )): ?>
            <div class="container mt-4">
                <hr>
                <div class="row justify-content-center h-25">
                    <?php dynamic_sidebar( 'footer-partner' ); ?>
                </div>
                <hr>
            </div>
            <?php endif; ?>

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