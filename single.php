<?php 
    get_header(); 
    /*
    Template Name: Single
    */
?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" id="post-tile">
                <div id="post-title">
                    <h1><?php wp_title( '' ); ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : ?>

            <!--- Start main loop --->
            <?php while ( have_posts() ) : the_post(); ?>

                <div class="col-12 col-md-8 order-1 order-md-1">
                    <div class="text-center">
                        <p>
                            <?php if ( get_the_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php endif; ?>
                            <?php the_content(); ?>
                        </p>
                     </div>
                    <!--- Pagination Navigation --->
                    <div class="row single-page-nav">
                        <?php wp_link_pages(); ?>
                        <div class="col-6"><?php previous_post_link( '%link', '&larr; %title' ); ?></div>
                        <div class="col-6 text-right"><?php next_post_link( '%link', '%title &rarr;' ); ?></div>
                    </div>

                    <hr />
            
                    <!--- Comments --->
                    <div class="col-12 order-4">
                        <?php comments_template(); ?>
                    </div>
                </div>

                <aside class="col-12 col-md-4 order-2">
                    <div class="row sidebar sticky-top">
                        <div class="widget_text col-12 widget text-center">
                            <p>By <?php the_author_posts_link(); ?></p>
                            <p>
                                <span><?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?> </span>
                            </p><hr>
                        
                            <p>Posted On:<br />
                                <?php the_time('F j, Y'); ?>
                            </p><hr>
                        
                            <div id="side-cat">
                                Categories:<br />
                                <?php the_category(' '); ?>
                            </div><hr>
                                Tags:
                                <?php the_tags('<div class="tagcloud"><div class="tag-cloud-link">', '</div><div class="tag-cloud-link">', '</div></div>'); ?>
                        </div>
                    </div>
                </aside>

            <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php else: ?>

                <h1>Oh no!</h1>
                <p>We could not find this page</p>

            <?php endif; ?>
        </div>

<?php get_footer(); ?>