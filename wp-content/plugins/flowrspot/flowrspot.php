<?php
/*
Plugin Name: Flower Spotting Plugin
Plugin URI: https://flowrspot.com/
Description: A plugin that allows editors to add flowers with images and galleries.
Version: 1.0.0
Author: Stipan Marinovic
Author URI: https://flowrspot.com/
*/

include(plugin_dir_path(__FILE__) . 'flower-shortcode.php');
include(plugin_dir_path(__FILE__) . 'genus-shortcode.php');
function flower_plugin_init()
{
    register_post_type('flowers', array(
        'labels' => array(
            'name' => __('Flowers'),
            'singular_name' => __('Flower')
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-awards',
        'taxonomies' => array('flower_genus'),
        'supports' => array('title', 'editor', 'thumbnail'),
    ));

    register_taxonomy(
        'flower_genus',
        'flowers',
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => __('Flower Genuses'),
                'singular_name' => __('Flower Genus'),
                'search_items' => __('Search Flower Genuses'),
                'all_items' => __('All Flower Genuses'),
                'parent_item' => __('Parent Flower Genus'),
                'parent_item_colon' => __('Parent Flower Genus:'),
                'edit_item' => __('Edit Flower Genus'),
                'update_item' => __('Update Flower Genus'),
                'add_new_item' => __('Add New Flower Genus'),
                'new_item_name' => __('New Flower Genus Name'),
                'menu_name' => __('Flower Genuses'),
            ),
            'show_admin_column' => true,
            'show_ui' => true,
            'query_var' => true,
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'flower-genus'),
        )
    );
}
add_action('init', 'flower_plugin_init');

function flower_custom_meta_box()
{
    if (isset($_GET['post']) && $_GET['post'] > 0) {
        add_meta_box(
            'flower-custom-box',
            'This flowers shortcode',
            'flower_meta_box_callback',
            'flowers',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'flower_custom_meta_box');



function flower_meta_box_callback()
{
    echo '<p>[flower post_id="' . $_GET['post'] . '"]</p>';
}
