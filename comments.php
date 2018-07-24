<?php
    /*
    Template Name: comments
    */
    /*
     * If the current post is protected by a password and the visitor has not yet
     * entered the password we will return early without loading the comments.
     */
    if ( post_password_required() ) {
        return;
    }
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>

        <h2>Comments:</h2>
    
        <div class="navigation">
            <?php paginate_comments_links(); ?> 
        </div>

        <ul class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'      => 'ul',
                    'short_ping' => true,
                    'avatar_size'=> 34,
                ) );
            ?>
        </ul><!-- .comment-list -->

        <?php if ( ! comments_open() ) : ?>
           <p><?php _e( 'Comments are closed.', 'twentyfourteen' ); ?></p>
        <?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
