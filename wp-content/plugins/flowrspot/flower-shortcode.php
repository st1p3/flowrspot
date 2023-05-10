<?php
function flower_shortcode($atts)
{
    $atts = shortcode_atts(array(
        'post_id' => '',
    ), $atts);
    $post_id = $atts['post_id'];
    $post = get_post($post_id);
    $args = array(
        'post' => $post,
    );

    include(plugin_dir_path(__FILE__) . 'templates/single-flower.php');
}
add_shortcode('flower', 'flower_shortcode');
