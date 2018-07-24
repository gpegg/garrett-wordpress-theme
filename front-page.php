<?php 
    get_header(); 
    /*
    Template Name: Front-Page
    */
?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" id="post-tile">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div id="post-title">
                        <h1><?php the_title(); ?></h1>
                    </div>

                <?php endwhile; else: ?>

                    <div class="">
                        <h1>Oh no!</h1>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- <div class="col-12 col-md-8 order-2 order-md-1"> 
                    May not include Sidebar-->
            <div class="col-12"> 
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else: ?>
                
                    <p>We could not find this page</p>

                <?php endif; ?>

            </div>
            
        </div>

<?php get_footer(); ?>