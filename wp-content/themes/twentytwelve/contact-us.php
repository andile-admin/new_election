<?php
/*
Template Name: Contact Us Page
*/
?>
<?php get_header(); ?>

<div class="title-section">
    <p><?php wp_title();?></p>
</div>
<!--<div class="follow-text">
    <p>
        You can view each party's manifesto from the list below.
    </p>
</div>-->
<div id="container-contact">

    <section id="leftcol" style="width: 520px;">

        <span class="leave-message">Leave us a message</span>

        <?php echo do_shortcode('[contact-form-7 id="245" title="contact us"]');?>
    </section>
    
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <aside id="rightcol" style="">

                <span class="contact-us">Contact Us</span>
                
                    <?php the_post_thumbnail(); ?>

                    <?php the_content(); ?>

            </aside>

    <!-- end rightcol -->

    <?php endwhile; endif; ?>

    <div class="clear"></div>

</div>

<?php get_footer();?>
