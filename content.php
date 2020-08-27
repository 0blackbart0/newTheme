<div class="card bg-light col-lg-3 col-md-5 col-sm-11 m-1">
    <div class="card-body">
        <h4 class="card-title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <h6 class="card-subtitle mb-2 text-muted"><?php the_date(); ?> <?php the_author() ?></h6>

        <p class="card-text"><?php the_excerpt(); ?></p>
        <div class="row social-links">
            <div class="col">
                <a
                    href="https://telegram.me/share/url?url=<?php the_permalink() ?>&text=Kieler Turnerbund:  <?php the_title() ?>"><i
                        class="fab fa-telegram fa-lg"></i></a>
                <a href="https://api.whatsapp.com/send?text=<?php the_permalink() ?>  <?php the_title() ?>"><i
                        class="fab fa-whatsapp fa-lg"></i></a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><i
                        class="fab fa-facebook fa-lg"></i></a>
                <a href="https://twitter.com/intent/tweet?text=<?php the_permalink() ?>"><i
                        class="fab fa-twitter fa-lg"></i></a>
                <a
                    href="mailto:?subject=<?php the_title(); ?>&body=Das könnte dich interessieren:%0D%0A<?php the_permalink() ?>"><i
                        class="fas fa-envelope fa-lg"></i></a>
            </div>
        </div>
    </div>

</div>