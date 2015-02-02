<?php get_header() ?>
<!--<div class="col-xs-12">
    <div class="col-xs-12">by <?php the_author(); ?> <?php the_date(); ?> - <?php  the_time(); ?></div>
    <div class="clearfix"></div>
</div>-->
<div class="col-xs-12 col-sm-8 col-md-offset-2 pull-right" style="min-height: 80%;">
     <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <p>
           <?php the_content(); ?>
        </p>
        <?php endwhile; endif; ?>
        <div class="clearfix"></div>
</div>
<div class="col-xs-12 col-sm-4pull-left">
    <?php //get_sidebar(); ?>
</div>
<div class="clearfix"></div>
<?php get_footer() ?>