<?php


function adaptpro_slider_template() {

    // The Query
    $the_query = new WP_Query(array('post_type' => 'feature', 'posts_per_page' => -1, 'orderby' => 'ASC'));

    // Check if the Query returns any posts
    if ($the_query->have_posts()) {

        // Start the Slider 
        ?>
<div class="jumbotron" style="width: 100%; ">
        <ul id="homepage-slider" >
        <?php while ($the_query->have_posts()) : $the_query->the_post(); // The Loop   ?>
                <li class="slider-item">
                <?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
                <?php $pr_url = get_post_meta(get_the_ID(), "url", true); ?>
                    <a style="color:white" href="<?php echo get_site_url(); ?><?php echo $pr_url; ?>">  
                        <img id="prlx-img" src="<?php echo $img_url[0]; ?>" alt="" /></a>
                    <?php //the_post_thumbnail('full'); 
                    /* do not show this way, because alt will be created 
                     * and displayed over image on mouse hover */
                    ?>

                    <div class="caption">


                        <div class="caption-text  f-cambria f-bold f-white f-25">
            <?php $pr_url = get_post_meta(get_the_ID(), "url", true); ?>
                            <a style="color:white" href="<?php echo get_site_url(); ?><?php echo $pr_url; ?>">    <?php the_title(); ?></a>
                        </div>
                        <div class="slider-text f-cambria f-white f-14">
            <?php $pr_url = get_post_meta(get_the_ID(), "url", true); ?>
                            <a style="color:white" href="<?php echo get_site_url(); ?><?php echo $pr_url; ?>">   <?php the_content(); ?></a>
                        </div>

                        <div class="clearfix"></div>


                    </div>
                </li>
        <?php endwhile; ?>

        </ul><!-- #homepage-slider -->
</div>
        <?php
    }

    // Reset Post Data
    wp_reset_postdata();
}
