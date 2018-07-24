<!--
    Template Name: Search
-->
<?php get_header(); ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" id="post-tile">
                <div id="post-title">
                    <?php
                        $s = get_search_query();
                        $args = array(
                            's'=>$s,
                            'post_type'=>'post',
                            'posts_per_page'=>-1
                        );
                        
                        $the_query = new WP_Query($args);
                    
                        global $wp_query;
                        $total_results = $the_query->found_posts;
                    ?>
                    <h1><?php printf( __( 'Search Results: %s', 'shape' ), '<span>"' . get_search_query() . '" (' . $total_results . ')</span>' ); ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 order-2 order-md-1">
                <?php if ( $the_query->have_posts() ) : ?>
                
                <!--- Start main loop --->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

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
                
                    <?php wp_reset_postdata(); ?>
                
                <?php else: ?>
                    <div class="col-12 text-center">
                        <h3>Sorry, no results were found for your search</h3>
                    </div>

                <?php endif; ?>
            </div>

         <?php get_sidebar('sidebar'); ?>
            
        </div>

<?php get_footer(); ?>