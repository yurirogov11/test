<?php
/**
 *  Custom Post types for Feature project on home page 
 */
add_action('init', 'create_feature');

function create_feature()
{
    $feature_args = array(
        'labels' => array(
            'name' => __('Slider items'),
            'singular_name' => __('Slider'),
            'add_new' => __('Add item'),
            'add_new_item' => __('Add item'),
            'edit_item' => __('Edit slider'),
            'new_item' => __('Add slider'),
            'view_item' => __('View slider'),
            'search_items' => __('Find slider'),
            'not_found' => __('No slider found '),
            'not_found_in_trash' => __('No slider found ')
        ),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'menu_position' => 20,
        'supports' => array('title', 'thumbnail', 'editor')
    );
    register_post_type('feature', $feature_args);
}

add_filter('manage_posts_columns', 'feature_edit_columns');

function feature_edit_columns($feature_columns)
{
    $feature_columns = array(
        "cb" => "<input type=\"checkbox\" />",
        "img" => "",
        "title" => "Title",
    );
    return $feature_columns;
}

add_filter('manage_posts_custom_column', 'manage_img_column', 10, 2);

function manage_img_column($column_name, $post_id) {
   
    if( $column_name == 'img' ) {
        echo get_the_post_thumbnail($post_id, 'thumbnail');
    }
}

//Add Meta Boxes
//http://wp.tutsplus.com/tutorials/plugins/how-to-create-custom-wordpress-writemeta-boxes/

add_action('add_meta_boxes', 'cd_meta_box_add');

function cd_meta_box_add()
{
    add_meta_box('my-meta-box-id', 'Link to Project', 'cd_meta_box_cb', 'feature', 'normal', 'high');
}

function cd_meta_box_cb($post)
{
    $url = get_post_meta($post->ID, 'url', true);
    wp_nonce_field('my_meta_box_nonce', 'meta_box_nonce');
    ?>

    <p>
        <label for="url">Project url</label>
        <input type="text" name="url" id="url" value="<?php echo $url; ?>" style="width:350px" />
    </p>

    <?php
}

add_action('save_post', 'cd_meta_box_save');

function cd_meta_box_save($post_id)
{
    // Bail if we're doing an auto save
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    // if our nonce isn't there, or we can't verify it, bail
    if (!isset($_POST['meta_box_nonce']) || !wp_verify_nonce($_POST['meta_box_nonce'], 'my_meta_box_nonce'))
        return;

    // if our current user can't edit this post, bail
    if (!current_user_can('edit_post'))
        return;

    // now we can actually save the data
    $allowed = array(
        'a' => array(// on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );

    // Probably a good idea to make sure your data is set
    if (isset($_POST['url']))
        update_post_meta($post_id, 'url', wp_kses($_POST['url'], $allowed));
}