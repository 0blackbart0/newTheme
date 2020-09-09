<form class="mx-3" id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-group">
        <input type="text" class="form-control w-100" name="s" placeholder="Geimeinsam bewegen"
            value="<?php echo get_search_query(); ?>">
        <div class="text-center my-2">
            <input type="submit" class="btn btn-primary" value="Suchen">
        </div>

    </div>

</form>