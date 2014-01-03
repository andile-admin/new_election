<?php
/*
Template Name: about page
*/
get_header(); ?>

    <div class="title-section">
        <p>»About</p>
    </div>
    
    <div id="primary-container">
    
        <div id="primary" class="site-content" style="width:100%;">
            <div id="content" role="main">
                <div id="about-page">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'page' ); ?>
                        <?php //comments_template( '', true ); ?>
                    <?php endwhile; // end of the loop. ?>
                </div><!--about-->
            </div><!-- #content -->
        </div><!-- #primary -->

        <?php //get_sidebar(); ?>
    </div>
<?php get_footer(); ?>