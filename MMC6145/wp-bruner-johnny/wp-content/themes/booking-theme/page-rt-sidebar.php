<?php
/* Template Name: Right Sidebar
Template Post Type: page
 */

get_header();?>

<div class="container">
    <div class="row">


        <main class="col-md-9">
            <?php

if (have_posts()) {
    while (have_posts()) {
        the_post();?>

            <div class="single-page">
                <div class="featured-image">
                    <?php the_post_thumbnail('medium');?>
                </div><!-- featured image -->

                <div class="text-container">
                    <h2><?php the_title();?></h2>
                    <p class="body-content">
                        <?php the_content();?>
                    </p>
                </div><!-- text container -->
            </div><!-- individual post -->
            <?php
}
}
?>
        </main>
        <aside class="col-md-3">
            <?php get_sidebar();?>
        </aside>
    </div>
</div>
<?php get_footer();?>