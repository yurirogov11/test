<?php get_header() ?>
<div id='category-title-wrapper' class='f-cambria f-white f-bold f-26'>
    <div id='category-title'><h1><?php the_title(); ?></h1></div>
    <div id='category-title-bottom'></div>
    <div id='category-title-img'></div>
</div>

<div id='single' class='post-content f-cambria f-white'>
<!--    <div id='post-author' class='f-14  f-shadow'>
        <div id='author-name' class='f-bold'>by <?php the_author(); ?></div>
        <div id='post-date'><?php the_date(); ?> - <?php  the_time(); ?></div>
    </div>-->
    
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <p>
           <?php the_content(); ?>
        </p>
        <?php endwhile; endif; ?>
        
        
</div>

<?php get_footer() ?>