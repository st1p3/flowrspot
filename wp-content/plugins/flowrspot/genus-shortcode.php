<?php
function flower_genus_posts_shortcode($atts)
{
    $atts = shortcode_atts(array(
        'category' => '',
    ), $atts);

    $args = array(
        'post_type' => 'flowers',
        'tax_query' => array(
            array(
                'taxonomy' => 'flower_genus',
                'field'    => 'slug',
                'terms'    => $atts['category'],
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $output = '<h5>Flower genus (list) from shortcode</h5>
                   <p>Currently showing: ' . $atts['category'] . '</p>
                 <ul>';
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        $output .= '</ul>';

        wp_reset_postdata();

        return $output;
    } else {
        return 'No posts found';
    }
}
add_shortcode('flower_genus_posts', 'flower_genus_posts_shortcode');
