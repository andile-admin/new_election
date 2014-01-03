<?php
/*
Template Name: The Youtube Posts TWO
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

    <?php $vdeo = $_GET["video"];?>

    <div id = "containter-all">
        <div id ="big-video">
            <iframe width="701" height="590" frameborder="0" src="http://www.youtube.com/embed/<?php echo $vdeo; ?>?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"></iframe>
            <?php $loop = new WP_Query( array( 'post_type' => 'the_youtube_post', 'posts_per_page' => 1 ) );  ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <span class="big-title"><?php echo get_post_meta($post->ID, 'custom_text_video_name', true); ?></span>
            <?php endwhile; ?>
            
        </div>           

        <div id ="video-thumbs">
            <?php $loop = new WP_Query( array( 'post_type' => 'the_youtube_post', 'posts_per_page' => 6 ) ); $i=0; ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="each_video-list"> 
                        <?php $i++; ?>
                        <a href="<?php bloginfo('url');?>/the_youtube_post/?video=<?php echo get_post_meta($post->ID, 'custom_video_id', true); ?>"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/video-image_03.png"/></a>
                    </div>
                    <div class="thumb-text"><?php echo get_post_meta($post->ID, 'custom_text_video_name', true); ?></div>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    
</div>

<?php get_footer();?>
