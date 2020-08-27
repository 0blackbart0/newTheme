<?php   get_header(); ?>
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-sm-10">


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
                           // $formatted .= '<div class="col">'. $piece[1] .'</div>';
                           $formatted .= '<div class="embed-responsive embed-responsive-16by9">
                           <object data="'.$piece[1].'"></object>
                         </div>';
                        }else {
                            $formatted .= '<div class="row"> <div class="col"><object data="'.$piece[1].'"></object></div>';
                        }
                        $last_was_video = true;
                    //If its something else like a Header or Paragraph
                    }else{
                        if($last_was_video){
                            $formatted .= '</div>' . $piece[0];
                        }else{
                            $formatted .= $piece[0];
                        }
                        $last_was_video = false;
                    }
                    
                }

            ?>
            <div class="row justify-content-center">
                <div class="col text-center">
                    <h3><?php the_title() ?></h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <?php 
                    console_log($formatted);
                echo $formatted;
                endwhile; endif;?>
                </div>
            </div>


        </div>
    </div>
</div>


<?php get_footer(); ?>