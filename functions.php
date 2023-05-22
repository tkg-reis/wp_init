<?php 
    // カスタム投稿
    get_template_part('functions/custom_posts');
    // コンタクトフォーム送信後の画面遷移
    get_template_part('functions/change_thanks_page');
    // コントロール画面のサムネイル選択の追加
    get_template_part('functions/post_thumbnails');
    /* main.js にdefer属性を付与 */
    get_template_part('functions/script_Addhead');
    // css file
    get_template_part('functions/style');
    // javascrit file
    get_template_part('functions/script');
?>