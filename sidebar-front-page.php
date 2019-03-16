<?php
    if( ! is_active_sidebar( 'front-page-sidebar' ) ) {
        return; // if sidebar is not active, the code stops to run here ...
    }
?>

<aside id="secondary" class="widget-area" role="complementary">
    
    <?php dynamic_sidebar( 'front-page-sidebar' ); ?>

</aside>