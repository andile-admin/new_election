<?php
/*
Template Name: The Youtube
*/
    global $wpdb; 
    get_header(); 
?>
<div id="main" class="wrapper-home">
<style type="text/css">
    #menu-item-18.menu-item.menu-item-type-post_type.menu-item-object-page.menu-item-18 a{
        text-decoration: underline;
    }

</style>

 <div class="title-section">
    <p>Our Voice</p>
</div> 

<div class="margin-10"></div>

<div class="video-container-all">

    <div class="follow-text">
    <!--    <p>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
        </p>-->
    </div>

    <?php $id = $_GET["post_id"];

    ?>


    

    <!--<?php //echo $vdeo; ?>-->

    <div id = "containter-all">
        <div id ="big-video"> 
        <div id="dj-name">
                <?php 
                    $rst_name = $wpdb->get_var($wpdb->prepare("SELECT meta_value FROM  `wp_postmeta` WHERE  `post_id` =$id AND meta_key = 'custom_text_video_name'", $id)); 
                    echo $rst_name;
                ?>
            </div>
                <?php 
                    
                    $rst_video = $wpdb->get_var($wpdb->prepare("SELECT meta_value FROM  `wp_postmeta` WHERE  `post_id` =$id AND meta_key = 'custom_video_id'", $id)); 
                       //echo "<pre>";
                         echo '<iframe width="640" height="360" frameBorder="0" src="http://www.youtube.com/embed/'.$rst_video.'?autoplay=0&controls=2&showinfo=0&theme=dark"></iframe>';   
                ?>
            

            <div id="dj-question">
                <?php
                    $rst_descr = $wpdb->get_var($wpdb->prepare("SELECT meta_value FROM  `wp_postmeta` WHERE  `post_id` =$id AND meta_key = 'custom_textarea_video_description'", $id)); 
                    echo $rst_descr;
                ?>
            </div>

            <div id = "commenting-form">
                <?php comments_template(); ?>
            </div>

        </div>           

        <div id ="video-thumbs">
            <?php $loop = new WP_Query( array( 'post_type' => 'the_youtube_post', 'posts_per_page' => 6 ) ); $i=0; ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="each_video-list"> 
                        <?php $i++; ?>
                        <a href="<?php bloginfo('url');?>/you-tube/?post_id=<?php the_ID(); ?>"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/video-image_03.png"/></a>
                    </div>
                    <div class="thumb-text"><?php echo get_post_meta($post->ID, 'custom_text_video_name', true); ?></div>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>
        </div>
    </div>


    
</div>
<?php get_footer();?>