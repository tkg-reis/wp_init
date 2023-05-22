<?php 
function add_thanks_page() {
    if( get_the_ID() == '11' ) {
        echo <<< EOD
        <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            location = 'https://example.com/thanks'; 
        }, false );
        </script>
        EOD;
    }
}

add_action( 'wp_footer', 'add_thanks_page' );

?>