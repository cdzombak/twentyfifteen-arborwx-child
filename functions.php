<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function footer_customizerrr() {
?>
    <a href="https://twitter.com/arborwx">@ArborWX</a> by <a href="https://www.dzombak.com">Chris Dzombak</a>. During severe weather, listen to <a href="http://arborwx.com/washtenaw-county-emergency-broadcasters/">local emergency broadcasters</a> for reliable and accurate updates.
<?php
}
add_filter( 'twentyfifteen_credits', 'footer_customizerrr' );
