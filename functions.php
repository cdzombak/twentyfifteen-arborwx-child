<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function footer_customizerrr() {
?>
    <a href="https://twitter.com/arborwx">@ArborWX</a> by <a href="https://www.dzombak.com">Chris Dzombak</a>. During severe weather, listen to <a href="http://arborwx.com/washtenaw-county-emergency-broadcasters/">local emergency broadcasters</a> for reliable and accurate updates.

<script type="text/javascript">
  var _gauges = _gauges || [];
  (function() {
    var t   = document.createElement('script');
    t.type  = 'text/javascript';
    t.async = true;
    t.id    = 'gauges-tracker';
    t.setAttribute('data-site-id', '561d558592c6ac04c90055de');
    t.setAttribute('data-track-path', 'https://track.gaug.es/track.gif');
    t.src = 'https://track.gaug.es/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>
<?php
}
add_filter( 'twentyfifteen_credits', 'footer_customizerrr' );
