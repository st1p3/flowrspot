<?php
add_theme_support('post-thumbnails');
add_filter('allowed_block_types', 'gute_whitelist_blocks');
function gute_whitelist_blocks()
{
    return array(
        'core/gallery',
    );
}
