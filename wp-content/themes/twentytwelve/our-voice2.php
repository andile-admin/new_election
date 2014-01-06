<?php
/*
Template Name: Our Voice Template
*/
?>
<?php get_header(); ?>
<div id="main" class="wrapper-home">
<div class="title-section">
    <p><?php wp_title();?></p>
</div>

<div class="margin-10"></div>

<div class="ourvoice-container">

    <div class="video-follow-text">
        <p>
           Checkout what our DJ's have to say about the voting...
        </p>
    </div>

    <?php 
        //$name = $_GET['name'];
        //echo $name;
    ?>

    <div id = "containter">

        <!--<?php// $loop = new WP_Query( array( 'post_type' => 'the_youtube_post', 'posts_per_page' => 6 ) ); $i=0; ?>
            <?php //while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="each_video" style=""> 
                    <?php //$i++; ?>-->
                    <!--<iframe width="301" height="190" frameborder="0" src="http://www.youtube.com/embed/<?php //echo get_post_meta($post->ID, 'custom_video_id', true);   ?>?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"></iframe>-->
                    <!--<a href="<?php //bloginfo('url'); ?>/you-tube/?post_id=<?php the_ID(); ?>"><img src="<?php //bloginfo('url');?>/wp-content/uploads/2013/12/video-image_03.png" style="width: 100%;"/></a>
                    <span class="each-video-title"><?php //echo get_post_meta($post->ID, 'custom_text_video_name', true); ?></span>

                </div>
            <?php //endwhile; ?>

            <?php wp_reset_postdata(); ?>-->


            <div class= "each_video">
                    <!--<iframe width="301" height="190" frameborder="0" src="http://www.youtube.com/embed/?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"></iframe>-->
                    <a href="<?php bloginfo('url'); ?>/zama"><img src="<?php bloginfo('url');?>/wp-content/themes/twentytwelve/images/zama-dube.png" style="width: 100%;"/></a>
                    <span class="each-video-title">Zama Dube</span>
            </div>

            <div class= "each_video">
                    <!--<iframe width="301" height="190" frameborder="0" src="http://www.youtube.com/embed/?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"></iframe>-->
                    <a href="<?php bloginfo('url'); ?>/ankletap"><img src="<?php bloginfo('url');?>/wp-content/themes/twentytwelve/images/ankletap_03.png" style="width: 100%;"/></a>
                    <span class="each-video-title">Ankletap</span>
            </div>

            <div class= "each_video">
                    <!--<iframe width="301" height="190" frameborder="0" src="http://www.youtube.com/embed/?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"></iframe>-->
                    <a href="<?php bloginfo('url'); ?>/warras"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/video-image_03.png" style="width: 100%;"/></a>
                    <span class="each-video-title">Warras</span>
            </div>

            <div class= "each_video">
                    <!--<iframe width="301" height="190" frameborder="0" src="http://www.youtube.com/embed/?autoplay=0&amp;controls=2&amp;showinfo=0&amp;theme=dark"></iframe>-->
                    <a href="<?php bloginfo('url'); ?>/mulo"><img src="<?php bloginfo('url');?>/wp-content/themes/twentytwelve/images/mulo.png" style="width: 100%;"/></a>
                    <span class="each-video-title">Mulo</span>
            </div>
    </div>
    
</div>

<?php get_footer();?>
