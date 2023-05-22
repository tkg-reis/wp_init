<?php 

function create_post_type_news(){
    register_post_type( 
        'blog',
        array(
            'labels' => array(
        'name' => 'ブログ'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title','editor','thumbnail','author'),
        'show_in_rest' => true,
        )
    );
}
add_action( 'init', 'create_post_type_news' );

?>