<?php 
    get_header();
    /*
    Template Name: Date
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
            <div class="col-12 col-md-8 order-2 order-md-1">
                <?php if ( have_posts() ) : ?>
                
                <!--- Start main loop --->
                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="card">
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            
                            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

                            <hr>

                            <?php the_excerpt(); ?>

                            <hr>

                            <div class="row text-center">
                                <div class="col-4">
                                    By <?php the_author_posts_link(); ?>
                                    <span><?php echo get_avatar( get_the_author_meta( 'ID' ), 25 ); ?> </span>
                                </div>
                                <div class="col-4">
                                    On <?php the_time('F j, Y'); ?>
                                </div>
                                <div class="col-4">
                                    In <?php the_category(', '); ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                <?php endwhile; ?>
                
                    <!--- Pagination Navigation --->
                    <div class="row page-nav">
                        <?php the_posts_pagination( array(
                            'mid_size' => 2,
                            'prev_text' => __( '<<', 'textdomain' ),
                            'next_text' => __( '>>', 'textdomain' ),
                        ) ); ?>
                    </div>
                
                    <?php wp_reset_postdata(); ?>
                
                <?php else: ?>

                    <h1>Oh no!</h1>
                    <p>We could not find this page</p>

                <?php endif; ?>
            </div>

         <?php get_sidebar('sidebar'); ?>
            
        </div>

<?php get_footer(); ?>