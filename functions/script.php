<?php 
function add_scripts() {
    // デフォルトのjQueryを削除
    wp_deregister_script('jquery');
    // ライブラリは随時更新と廃止と追加
    wp_register_script(
        'swiper_script',
        'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js',
        array(),
        '1.0'
    );
    
    wp_register_script(
        'gsap_script',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js',
        array(),
        '1.0'
    );

    wp_register_script(
        'gsap-scroll-trigger_script',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js',
        array(),
        '1.0'
    );
    // 最後にメインjsを追加
    wp_enqueue_script(
        'main_js',
        get_template_directory_uri() . '/js/main.js',
        array('swiper_script','gsap_script','gsap-scroll-trigger_script'),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'add_scripts');

?>