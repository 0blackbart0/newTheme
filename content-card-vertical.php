<div class="card col-md-6   mx-md-1 mb-5 my-card" >
    <div class="row card-header">
        <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </div>

    <div class="card-body" >

        <h6 class="card-subtitle mb-2 text-muted"><?php the_date(); ?> <?php the_author() ?></h6>

        <p class="card-text" id="card"><?php the_excerpt(); ?></p>
    </div>

    <div class="row mt-auto social-links card-footer my-card-footer">
        <div class="col">

            <a href="https://api.whatsapp.com/send?text=<?php the_permalink() ?>  <?php the_title() ?>"><i
                    class="fab fa-whatsapp fa-lg"></i></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><i
                    class="fab fa-facebook fa-lg"></i></a>
            <a
                href="https://telegram.me/share/url?url=<?php the_permalink() ?>&text=Kieler Turnerbund:  <?php the_title() ?>"><i
                    class="fab fa-telegram fa-lg"></i></a>
            <a href="https://twitter.com/intent/tweet?text=<?php the_permalink() ?>"><i
                    class="fab fa-twitter fa-lg"></i></a>
            <a
                href="mailto:?subject=<?php the_title(); ?>&body=Das könnte dich interessieren:%0D%0A<?php the_permalink() ?>"><i
                    class="fas fa-envelope fa-lg"></i></a>
        </div>
    </div>


</div>