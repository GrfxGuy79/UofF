<?php get_header();?>

<main class="container">
    <?php

if (have_posts()) {
    while (have_posts()) {
        the_post();?>

    <div class="single-post">
        <div class="featured-image">
            <?php the_post_thumbnail('medium');?>
            <p>
                 <!-- DISPLAY AUTHOR AND DATE -->
<?php post_data();?>
            </p>
        </div><!-- featured image -->

        <div class="text-container">
            <!-- DISPLAY AUTHOR -->
            <h2><?php the_title();?></h2>

<!-- DISPLAY CONTENT -->
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
<?php get_footer();?>