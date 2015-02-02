<?php
/*
  Template Name: homePage
 */
?>

<?php get_header(); ?>

<!-- SLIDER ----------------------------->

<!-- /SLIDER ----------------------------->
<div class="jumbotron" style="width: 100%; max-height: 200px">
    <img id="prlx-img" src="<?php bloginfo('template_url'); ?>/img/jombotron-1.jpg"  />


    <section class="wrap">
        <div>
            <header>
                <?php the_field('slogan-header'); ?>
                
                <!--<h2><span class="small-h2">Join the</span> Energy<br/> evolution</h2>-->
            </header>
            <p><?php the_field('slogan-text'); ?></p>
        </div>
          <!-- <p><a class="btn btn-primary btn-lg" role="button">Get a quote</a></p> -->
    </section>
</div>
<div class="jumbotron-bottom-line"></div>
<?php while (have_posts()) : the_post(); ?>

    <div class="content">
        <div class="container">
            <div class="row" id="free-solar">
                <section class="col-lg-12">
                    <h3><a href="#">GET FREE SOLAR</a></h3>
                    <p class="save-money">SAVE MONEY: 1-855-GO-4-EVOLVE</p>
                </section>
            </div>

            <div class="row" id="home-boxes">
                <section class="col-md-4" data-100-bottom="left:0; opacity:1" data-150-bottom="left:-200px; opacity:0">
                    <img src="<?php bloginfo('template_url'); ?>/img/system-monitoring.jpg" alt="">
                    <header>
                        <h3>
                            <?php the_field('home-system-morning-header'); ?>

                        </h3>
                    </header>
                    <p>
                        <?php the_field('home-system-morning'); ?>
                    </p>
                </section>
                <section class="col-md-4" data-50-bottom="left:0; opacity:1" data-100-bottom="left:-200px; opacity:0">
                    <img src="<?php bloginfo('template_url'); ?>/img/reliable.jpg" alt="">
                    <header>
                        <h3><?php the_field('Reliable-header'); ?></h3>
                    </header>
                    <p><?php the_field('reliable'); ?></p>
                </section>
                <section class="col-md-4" data-1-bottom="left:0; opacity:1" data-50-bottom="left:-200px; opacity:0">
                    <img src="<?php bloginfo('template_url'); ?>/img/system-protection.jpg" alt="">
                    <header>
                        <h3><?php the_field('system-protection-header'); ?> </h3>
                    </header>
                    <p><?php the_field('system_protection'); ?></p>
                </section>
            </div>

            <div class="row" id="offset-paragraph">
                <div class="col-md-offset-3 col-md-9">

                    <?php the_content(); ?>
                </div>
            </div>
            
            <div class="row" id="home-slider">
                <div class="col-lg-12">
                  <div id="slider">
                    <a href="#" class="control_prev"></a>
                    <a href="#" class="control_next"></a>
                    <ul>
                      <li> 
                        <h4><?php the_field('slide-1-text-header'); ?></h4>
                        <p><?php the_field('slide-1-text'); ?></p>
                      </li>
                      <li>
                        <h4><?php the_field('slide-2-text-header'); ?></h4>
                        <p><?php the_field('slide-2-text'); ?></p>
                      </li>
                    </ul>
                  </div>
              </div>
            </div>
        </div>
    </div>

<?php endwhile; // end of the loop. ?>




<?php get_footer(); ?>
