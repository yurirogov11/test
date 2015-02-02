<?php get_header(); ?>

<?php get_template_part('slider'); ?>


    <article id="main-content" class="bg-white pad-bot">
        <header class="container main-header">
            <h2 class="col-md-8 col-md-offset-2">About Us</h2>
            <div class="underline">
                <span></span>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <?php
                    $wp_query = new WP_Query(
                            array(
                                'name'      => 'about-us',
                                'post_type' => 'page'
                            ));
                ?>
                <?php if (have_posts()): the_post(); ?>
                         <?php echo HelperController::divideText(); ?>
                <?php endif; ?>
            </div>
        </div>
    </article>

     <?php
        $video_mp4 = '';
        $video_ogv = '';
        $video_webm = '';
        if (!empty($data[TF_THEME_PREFIX.'media_upload_video_webm'])){
            $video_webm = $data[TF_THEME_PREFIX.'media_upload_video_webm'];
        }
        if (!empty($data[TF_THEME_PREFIX.'media_upload_video_ogv'])){
            $video_ogv = $data[TF_THEME_PREFIX.'media_upload_video_ogv'];
        }
        if (!empty($data[TF_THEME_PREFIX.'media_upload_video_mp4'])){
            $video_mp4 = $data[TF_THEME_PREFIX.'media_upload_video_mp4'];
        }
    ?>
    <?php if ($video_mp4 != '' && $video_ogv != '' && $video_webm != ''): ?>
        <div id="home-full-img"></div>
    <?php endif ?>

    <?php if (!empty($data[TF_THEME_PREFIX.'checkbox_adoption_situations']) && ($data[TF_THEME_PREFIX.'checkbox_adoption_situations'] != 0) ) : ?>
        <?php
            // wp_reset_query();
            $approved_cat = get_category_by_slug('approved');
            $applied_cat = get_category_by_slug( 'applied' );

            // $applied_query = new WP_Query(
            //     array(
            //         'post_types'        => 'post',
            //         'posts_per_page'    => 10,
            //         'category'          => $applied_cat->term_id,
            //         'orderby'           => 'post_date',
            //         'order'             => 'DESC'
            //     )
            // );
        ?>
        <div id="about-us-list" class="bg-white">
             <header class="container main-header">
                <h2 class="col-md-8 col-md-offset-2"><?php _e('Adoption Situations', TF_THEME_DOMAIN); ?></h2>
                <div class="underline">
                    <span></span>
                </div>
            </header>

            <div class="container list-home">
                <!-- <div class="col-xs-0 col-sm-1"></div> -->
                <ul class="col-xs-12 col-md-6">

                    <?php
                     $approved_query = new WP_Query(
                        array(
                            'post_types'        => 'post',
                            'posts_per_page'    => 5,
                            'category'          => $approved_cat->term_id,
                            'orderby'           => 'post_date',
                            'order'             => 'DESC'
                        )
                    );
                    ?>
                    <?php while($approved_query->have_posts()): $approved_query->the_post(); ?>

                        <li>
                            <?php $due_date = get_post_meta($post->ID, 'due_date', true); ?>
                            <span style="color: gray;">
                                <?php if(strlen($due_date)>0) :?>
                                    Due <?php
                                        $due_date = str_replace('Matched', '', $due_date);
                                        echo $due_date = str_replace('Twins', '', $due_date);
                                    ?>
                                <?php endif;?>
                            </span>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                    <?php
                        $applied_query = new WP_Query(
                            array(
                                'post_types'        => 'post',
                                'posts_per_page'    => 5,
                                'category'          => $applied_cat->term_id,
                                'orderby'           => 'post_date',
                                'order'             => 'DESC'
                            )
                        );
                    ?>
                </ul>
                <ul class="col-xs-12 col-md-6">
                    <?php while($applied_query->have_posts()): $applied_query->the_post(); ?>
                        <li>
                            <?php $due_date = get_post_meta($post->ID, 'due_date', true); ?>
                            <span style="color: gray;">
                                <?php if(strlen($due_date)>0) :?>
                                    Due
                                    <?php
                                        $due_date = str_replace('Matched', '', $due_date);
                                        echo $due_date = str_replace('Twins', '', $due_date);
                                    ?>
                                <?php endif;?>
                            </span>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                </ul>
            </div>
        </div>

    <?php endif; ?>


    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.videoBG.js"></script>
    <script type="text/javascript">
        ;(function($){
            $(document).ready(function(){
                $('#home-full-img').videoBG({
                    position:"fixed",
                    zIndex:-10,
                    mp4:'<?php echo $video_mp4; ?>',
                    ogv:'<?php echo $video_ogv; ?>',
                    webm:'<?php echo $video_webm; ?>',
                    opacity:1,
                    fullscreen:true,
                });
            });
        })(jQuery);
    </script>
<?php get_footer(); ?>