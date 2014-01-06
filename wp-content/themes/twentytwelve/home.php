<?php
/*
Template Name: homepage
*/
get_header(); ?>
<div id="main" class="wrapper-home">
<style type="text/css">
    .entry-header .entry-title {
        display: none;
    }
</style>
    <div class="front-slider">
           <!-- Slideshow 4 -->
    <div class="callbacks_container">
      <ul class="rslides" id="slider4">
        <li>
         <a href="" target="_blank"> <img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2013/12/page1_banner2.jpg" alt=""></a>
        </li>
        <li>
         <a href="<?php echo bloginfo('url'); ?>/party-manifestos/" target="_blank"> <img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2013/12/page2_banner2.jpg" alt=""></a>
        </li>
        <li>
         <a href="<?php echo bloginfo('url'); ?>/our-voice/" target="_blank"> <img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2013/12/page3_banner2.jpg" alt=""></a>
        </li>
        <li>
         <a href="<?php echo bloginfo('url'); ?>/vote/" target="_blank"> <img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2013/12/page4_banner1.jpg" alt=""></a>
        </li>
        <li>
         <a href="<?php echo bloginfo('url'); ?>/stats/" target="_blank"> <img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2013/12/page5_banner2.jpg" alt=""></a>
        </li>
      </ul>
    </div>
    </div>
    
    <div id="primary-container1">
    
        <div id="primary" class="site-content">
            <div id="content" role="main">

                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'page' ); ?>
                    <?php //comments_template( '', true ); ?>
                <?php endwhile; // end of the loop. ?>
             <?php get_sidebar(); ?>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div>
<?php get_footer(); ?>