<?php
    /*
    Template Name: Sidebar
    */
?>
<aside class="col-12 col-md-4 order-1">
    <div class="row sidebar sticky-top">
        <?php if ( ! dynamic_sidebar( 'widget-bar' ) ): ?>
            <h3>Widget Setup</h3>
            <p>Please add widgets to the page widget to have them display here</p>
        <?php endif; ?>
    </div>
</aside>