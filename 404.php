<?php 
    get_header(); 
    /*
    Template Name: 404
    */
?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" id="post-tile">
                <div id="post-title">
                    <h1>404</h1>
                </div>
            </div>
            <div class="col-12 text-center">
                <p>404 means this page does not exist, so here are some recent posts that may interest you.</p>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-12">

            <!--- Set up args for query --->
            <?php $args = array(
                        'year' => date('Y'),
                        'posts_per_page' => 5
                    );
            ?>
            <!--- Create the query --->
            <?php $the_query = new WP_Query( $args ); ?>

            <!-- if posts from query, loop through posts -->
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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

                <?php wp_reset_postdata(); ?>
            <?php endwhile; endif; ?>

        </div>

<?php get_footer(); ?>