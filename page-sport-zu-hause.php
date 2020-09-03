<?php   get_header(); ?>
<div class="container-fluid">
    
   


            <?php 
        
            $formatted = '';
            $last_was_video = false;

            if (have_posts()) : while ( have_posts(  )) : the_post();
                preg_match_all("|<[^>]+>(.*)</[^>]+>|U",get_the_content(), $content, PREG_SET_ORDER);
                //go through every delivered HTML Tag
                foreach($content as $piece){
                    //If its an Youtubelink
                    if(strpos($piece[1], 'https://www.youtube') !== false){
                        if($last_was_video){
                           $formatted .= '<div class="col-8 col-sm-6 col-md-4 col-lg-3">' . wp_oembed_get( $piece[1] ) . '</div>';
                        }else {
                            $formatted .= '<div class="row"> <div class="col-8 col-sm-6 col-md-4 col-lg-3">' . wp_oembed_get( $piece[1] ) . '</div>';
                        }
                        $last_was_video = true;
                    //If its something else like a Header or Paragraph
                    }else{
                        if($last_was_video){
                            $formatted .= '</div><div class="row">' . $piece[0] . '</div>';
                        }else{
                            $formatted .= '<div class="row">' . $piece[0] . '</div>';
                        }
                        $last_was_video = false;
                    }
                    
                }

            ?>
            <div class="row justify-content-center my-3">
                <div class="col text-center">
                    <h3><?php the_title() ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <?php 

                    echo $formatted;
                endwhile; endif;?>
                </div>
            </div>


        
    
</div>


<?php get_footer(); ?>