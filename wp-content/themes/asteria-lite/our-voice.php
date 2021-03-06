<?php
/*
Template Name: Our Voice
*/
?>
<?php global $asteria;?>
<?php get_header(); ?>

<div class="title-section">
    <p><?php wp_title();?></p>
</div>

<div class="margin-10"></div>

<div class="video-container">

    <div class="follow-text">
        <p>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
        </p>
    </div>

    <div id = "containter">

        <?php $loop = new WP_Query( array( 'post_type' => 'the_youtube_post', 'posts_per_page' => 6 ) ); $i=0; ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="each_video"> 
                    <?php $i++; ?>
                    <!--<iframe width="301" height="190" frameborder="0" src="http://www.youtube.com/embed/<?php //echo get_post_meta($post->ID, 'custom_video_id', true);   ?>?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"></iframe>-->
                <a href="<?php bloginfo('url');?>/you-tube/?video=<?php echo get_post_meta($post->ID, 'custom_video_id', true); ?>"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/video-image_03.png"/></a>
                </div>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>
    </div>
    
</div>

<?php get_footer();?>
