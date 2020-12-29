<?php

function add_blocks_categories ($categories, $post){
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'blocks',
                'title' => __( 'Custom blocks' ),
                'icon'  => 'admin-generic',
            ),
        )
    );
}
add_filter( 'block_categories', 'add_blocks_categories', 10, 2 );

function register_acf_block_types() {

    acf_register_block_type(array(
        'name'              => 'banner',
        'title'             => __('Banner'),
        'description'       => __('Theme custom block.'),
        'render_template'   => 'template-parts/blocks/block-banner.php',
        'category'          => 'blocks',
        'icon'              => 'images-alt2',
        'keywords'          => array( 'banner', 'blocks' ),
    ));

    acf_register_block_type(array(
        'name'              => 'text-content',
        'title'             => __('Content'),
        'description'       => __('Theme custom block.'),
        'render_template'   => 'template-parts/blocks/block-content.php',
        'category'          => 'blocks',
        'icon'              => 'text-page',
        'keywords'          => array( 'content', 'text', 'blocks' ),
    ));

}
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}