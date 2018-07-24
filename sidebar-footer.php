<?php
    /*
    Template Name: Sidebar Footer
    */
?>
<div class="row">
    <?php if ( ! dynamic_sidebar( 'footer-widget' ) ): ?>
        <h3>Widget Setup</h3>
        <p>Please add widgets to the page widget to have them display here</p>
	<?php endif; ?>
</div>