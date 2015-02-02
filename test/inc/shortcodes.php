<?php
/* this shortcode create button to redirect to selected page.
 * This shortcode is preapared to be used on the homepage (home.php) 
 * in homepage-items section (so directly it is used on the page post text which is
 * diplayed in this section). 
 */
add_shortcode('link-button', function( $atts, $content = null){

    $atts = shortcode_atts(
            array(
                'link'=>'#'
            ), $atts);
    
    return "<div class='yellow-button-border'><a href='{$atts['link']}' class='yellow-button f-cambria f-bold f-14 f-black yellow-button' >{$content}</a></div>";
    
});

add_shortcode('about-image', function( $atts, $content = null){

    $atts = shortcode_atts(
            array(
                'src'=>'#'
            ), $atts);
    
    return "<div class='about-image'><img src='{$atts['src']}' alt='founders' class='alignnone size-full' /><p>{$content}</p></div>";
    
});

add_shortcode('posts-list', function( $atts){

    $atts = shortcode_atts(
            array(
                'amount'=>'4'
            ), $atts);
    
        $args = array( 
            'post_type'         => 'post', 
            'post_status'       => 'publish',
            'ignore_sticky_posts' => 1
            );
        
    $wp_query = new WP_Query($args);
    query_posts('showposts='.$atts['amount']);
    
    $result_html = "<div  class='category-links'>
                            <ul>";
    
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
            $result_html .= '    
            <li>
                <a href="'. get_permalink().'" class="f-white f-17">
                    '.get_the_title().' 
                </a>
            </li>';
        }
    }

    $result_html .= '</ul></div>';
    
    wp_reset_query();
    return $result_html;
    
});