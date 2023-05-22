<?php 
/* main.js にdefer属性を付与 */
function add_defer($tag, $handle) {
    // 識別名がmain_js以外はそのまま返却
    if ($handle !== 'main_js') {
        return $tag;
    }
    
    // deferを追加して返却する
    return str_replace(' src=', ' defer src=', $tag);
}

add_filter('script_loader_tag', 'add_defer', 10, 2); 

?>